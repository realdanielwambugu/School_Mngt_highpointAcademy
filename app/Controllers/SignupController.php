<?php
Namespace App\Controllers;

use Xcholars\Http\Controller;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Hash;

use App\Models\Admission;

use App\Models\Guardian;

class SignupController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'signup'))
        {
            return $error;
        }

        // $request->post->set('password', Hash::make($request->password));

        $parent = Guardian::create([
            'fullName' => $request->parentFullName,
            'email'    => $request->parentEmail,
            'phone'    => $request->parentPhone,
        ]);

        $request->post->set('parent_id', $parent->id);

        $request->post->set('status', 'pending');

        Admission::create(
            $request->except('parentEmail', 'parentPhone', 'parentFullName')
        );

        return $response->withSuccess('Account created successfully');
    }

}
