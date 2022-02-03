<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Http\Controller;

use App\Models\Teacher;

class TeachersController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        return $response->withView(
            'admin/teachers',
            [
                'route'=> 'teachers',
                'teachers' => Teacher::all(),
            ]
        );
    }

    public function create(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'CreateTeacher'))
        {
            return $error;
        }

        Teacher::create($request->all());

        return $response->withSuccess('Teacher added succesfully');
    }

    public function edit(Request $request, Response $response)
    {
        return $response->withView(
            'admin/profiles/teachers/teacher',
            [
                'route'=> 'teachers',
                'teacher' => Teacher::find($request->id),
            ]
        );
    }

    public function update(Request $request, Response $response)
    {
        if ($error = $this->isInvalid($request, 'UpdateTeacher'))
        {
            return $error;
        }

        Teacher::find($request->id)->update($request->all());

        return $response->withSuccess('Teacher updated succesfully');
    }

}
