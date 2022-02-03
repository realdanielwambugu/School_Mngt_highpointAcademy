<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Guardian;

class ParentsController
{
    public function show(Request $request, Response $response)
    {
        return $response->withView(
            'admin/parents',
            [
                'route'=> 'parents',
                'parents' => Guardian::all(),
            ]
        );
    }

}
