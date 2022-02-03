<?php

Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

use App\Models\User;

class LoginController extends Controller
{
    use \App\Traits\HasValidation;

    public function authenticate(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'login'))
        {
            return $error;
        }

        $credentials = $request->only('email', 'password');

        if (Auth::attemptWith($credentials))
        {
            if (Auth::user()->isAdmin())
            {
                return $response->withAjaxRedirect('/admin');
            }

            return $response->withAjaxRedirect('/student/profile');
        }

        return $response->withError('wrong email or password');
    }

}
