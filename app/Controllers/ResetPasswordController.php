<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use Xcholars\Support\Proxies\Session;

use Xcholars\Support\Proxies\Hash;

use App\Models\User;

class ResetPasswordController extends Controller
{
    use \App\Traits\HasValidation;

    public function verifyResetCode(Request $request, Response $response)
    {
        if (!$user = User::where('code', $request->code)->first())
        {
            return $response->withError('Invalid or expired reset code');
        }

        $request->session->set('passwordResetCode', $request->code);

        return $response->withAjaxRedirect('/resetPassword');
    }

    public function reset(Request $request, Response $response)
    {
        $user = User::where(
               'code',  $request->session->get('passwordResetCode')
            )->first();

        if (!$user)
        {
            return '';
        }

        if ($error = $this->isInvalid($request, 'PasswordReset'))
        {
            return $error;
        }

        $user->password = Hash::make($request->password);

        $user->code = 0;

        $user->save();

        return $response->withSuccess('password Reset succcess');
    }

}
