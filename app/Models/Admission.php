<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Admission extends Model
{
    protected $fillable = [
        'fullName',
        'parent_id',
        'email',
        'phone',
        'gender',
        'class',
        'county',
        'city',
        'previous_school',
        'reason_for_transfer',
        'co_calicular_activity',
        'address',
        'status',
    ];

    public function adm()
    {
        $adm = '/0' . $this->id;

        if ($this->id < 9)
        {
            $adm = '/00' . $this->id;
        }

        return  $adm;
    }

    public function password()
    {
        return $this->id . rand(1000, 9000);
    }

    public function isPending()
    {
        return $this->status === 'pending';
    }

    public function isApproved()
    {
        return $this->status === 'approved';
    }

    public function isRejected()
    {
        return $this->status === 'rejected';
    }

    public function status()
    {
        if ($this->isPending())
        {
             return $this->status;
        }

        return $this->isApproved()
               ? "<span class='color-success'> {$this->status }</span>"
               : "<span class='color-danger'> {$this->status }</span>";
    }


    public function parent()
    {
        return $this->belongsTo(Guardian::class);
    }


    public function marks()
    {
        return $this->hasMany(Subject::class);
    }

}
