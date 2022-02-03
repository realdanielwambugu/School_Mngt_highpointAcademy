<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use App\Models\Admission;

use App\Models\User;

use  App\Events\UserRegitered;

use Xcholars\Support\Proxies\Event;

use Xcholars\Support\Proxies\Hash;

class AdmissionController
{
    public function show(Request $request, Response $response)
    {
        return $response->withView(
            'admin/admissions',
            ['route'=> 'admissions', 'admissions' => Admission::all()]
        );
    }

    public function approve(Request $request, Response $response)
    {
        $admission = Admission::find($request->application_id);

        $admission->status = 'approved';

        $admission->save();

        $password = $admission->password();

        $user = User::create([
            'email' => $admission->email,
            'password' => Hash::make($password)
        ]);

        $user->password = $password;

        Event::dispatch(new UserRegitered($user));

        return $response->withSuccess($admission->status);
    }

    public function reject(Request $request, Response $response)
    {
        $admission = Admission::find($request->application_id);

        $admission->status = 'rejected';

        $admission->save();

        $password = $admission->password();

        $user = User::create([
            'email' => $admission->email,
            'password' => Hash::make($password)
        ]);

        $user->password = $password;

        Event::dispatch(new UserRegitered($user));

        return $response->withError($admission->status);
    }


}
