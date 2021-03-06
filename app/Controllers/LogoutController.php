<?php

Namespace App\Controllers;

use Xcholars\Http\Request;

use Xcholars\Http\Response;

use Xcholars\Support\Proxies\Auth;

class LogoutController
{
    public function logout(Request $request, Response $response)
    {
        Auth::logout();

        return $response->withAjaxRedirect('/');
    }

}
