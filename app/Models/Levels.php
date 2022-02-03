<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Levels extends Model
{
    protected $table = 'class';

    protected $fillable = [
        'name',
        'teacher',
        'monitor',
    ];

}
