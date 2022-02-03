<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Guardian extends Model
{
    protected $table = 'parents';

    protected $fillable = [
        'fullName',
        'email',
        'phone',
    ];


}
