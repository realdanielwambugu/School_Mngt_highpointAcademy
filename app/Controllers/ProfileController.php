<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Admission as Student;

use Xcholars\Support\Proxies\Auth;

use Xcholars\Http\Controller;


class ProfileController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        return $response->withView(
            'student/profile',
            ['student' => Student::where('email', Auth::user()->email)->first()]
        );
    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'update'))
        {
            return $error;
        }

       Student::find($request->id)->update($request->all());

       return $response->withSuccess('student updated successfully');
   }

}
