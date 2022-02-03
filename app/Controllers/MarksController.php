<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Subject as Marks;

use Xcholars\Http\Controller;

class MarksController extends Controller
{
    use \App\Traits\HasValidation;

    public function create(Request $request, Response $response)
    {
        if ($request->query->has('id'))
        {
            return $response->withView(
                'admin/profiles/students/addMarks',
                [
                    'route'=> 'students',
                    'id' => $request->id,
                ]
            );
        }

        if ($error = $this->isInvalid($request, 'marks'))
        {
            return $error;
        }

        Marks::create($request->all());

        return $response->withSuccess('Marks Added Successfully');
    }




}
