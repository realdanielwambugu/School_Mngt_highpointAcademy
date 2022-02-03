<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Admission;

use Xcholars\Http\Controller;

class StudentsController extends Controller
{
    use \App\Traits\HasValidation;

    public function show(Request $request, Response $response)
    {
        if ($request->query->has('model'))
        {
            return $response->withView(
                "admin/profiles/students/{$request->model}",
                [
                    'route'=> 'students',
                    'model' => $request->model,
                    'student' => Admission::find($request->id),
                ]
            );
        }

        if ($request->query->has('class'))
        {
            return $response->withView('admin/students',
            [
                'route'=> 'students',
                'students' => Admission::where('class', $request->class)->get(),
            ]);
        }

        return $response->withView(
            'admin/students',
            [
                'route'=> 'students',
                'students' => Admission::where('status', 'approved')->get(),
            ]
        );
    }

    public function update(Request $request, Response $response)
    {
        return $response->withSuccess('student updated successfully');

        if ($error = $this->isInvalid($request, 'update'))
        {
            return $error;
        }

       Admission::find($request->id)->update( $request->all());

       return $response->withSuccess('student updated successfully');

    }

}
