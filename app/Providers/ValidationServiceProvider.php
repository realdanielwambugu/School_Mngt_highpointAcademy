<?php

Namespace App\providers;

use Xcholars\Validation\ValidationServiceProvider as ServiceProvider;


class ValidationServiceProvider extends ServiceProvider
{
   /**
    * The Validation rules mappings for the application.
    *
    * @var array
    */
    protected $mappings = [
        'signup' => \App\Validation\ForSignup::class,
        'login' => \App\Validation\ForLogin::class,
        'marks' => \App\Validation\ForMarks::class,
        'update' => \App\Validation\ForUpdate::class,
        'UpdateTeacher' => \App\Validation\ForUpdateTeacher::class,
        'CreateTeacher' => \App\Validation\ForCreateTeacher::class,
        'PasswordReset' => \App\Validation\ForPasswordReset::class,
    ];
}
