<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class User extends Model
{
    protected $fillable = [
        'fullName',
        'email',
        'phone',
        'password',
        'status',
    ];

    public function isAdmin()
    {
        return $this->id === 2;
    }



}
