<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Admission as Student;

use App\Models\Teacher;

use App\Models\Guardian;

class OverviewController
{
    public function show(Request $request, Response $response)
    {
        return $response->withView(
           'admin/overview',
           [
               'route'=> 'overview',
               'studentCount' => Student::count(),
               'teachersCount' => Teacher::count(),
               'parentCount' => Guardian::count()
           ]
        );
    }

}
