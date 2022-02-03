<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Levels;

class ClassesController
{
    public function show(Request $request, Response $response)
    {
        return $response->withView(
            'admin/classes',
            [
                'route'=> 'classes',
                'classes' => Levels::all(),
            ]
        );
    }

    public function edit(Request $request, Response $response)
    {
        return $response->withView(
            'admin/profiles/class',
            [
                'route'=> 'classes',
                'class' => Levels::find($request->id),
            ]
        );
    }

    public function update(Request $request, Response $response)
    {
        if (Levels::find($request->id)->update($request->all()))
        {
            return $response->withSuccess('Class updated succssfully');
        }

        return $response->withError('Sorry! an error occured');
    }

}
