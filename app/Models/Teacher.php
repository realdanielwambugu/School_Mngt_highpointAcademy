<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Teacher extends Model
{
    protected $fillable = [
        'fullName',
        'email',
        'employed_date',
        'phone',
        'gender',
        'subject',
    ];



}
