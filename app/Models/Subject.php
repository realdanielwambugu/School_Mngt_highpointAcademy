<?php

Namespace App\Models;

use Xcholars\Database\Orm\Model;

class Subject extends Model
{
    protected $table = 'marks';

    protected $fillable = [
        'admission_id',
        'class',
        'term',
        'english',
        'math',
        'kiswahili',
        'physics_or_Biology',
        'history_or_geography',
        'chemistry',
        'CRE_or_islamic',
        'total',
    ];

    public function total()
    {
        $marks =  $this->english + $this->math + $this->kiswahili
               + $this->physics_or_Biology + $this->history_or_geography
               + $this->chemistry + $this->CRE_or_islamic;

        $marks = round($marks  / 7);

        return $marks . ' ' . $this->grade($marks);
    }

    public function english()
    {
        return $this->english .' '. $this->grade($this->english);
    }

    public function math()
    {
        return $this->math .' '. $this->grade($this->math);
    }

    public function kiswahili()
    {
        return $this->kiswahili .' '. $this->grade($this->kiswahili);
    }

    public function physics_or_Biology()
    {
        return $this->physics_or_Biology .' '. $this->grade($this->physics_or_Biology);
    }

    public function history_or_geography()
    {
        return $this->history_or_geography .' '. $this->grade($this->history_or_geography);
    }

    public function chemistry()
    {
        return $this->chemistry .' '. $this->grade($this->chemistry);
    }

    public function CRE_or_islamic()
    {
        return $this->CRE_or_islamic .' '. $this->grade($this->CRE_or_islamic);
    }

    public function grade($marks)
    {
        if ($marks <= 20)
        {
            return 'E';
        }
        elseif ($marks >= 30 && $marks <= 34)
        {
            return 'D';
        }
        elseif ($marks >= 35 && $marks <= 39)
        {
            return 'D-';
        }
        elseif ($marks >= 40 && $marks <= 44)
        {
            return 'D+';
        }
        elseif ($marks >= 45 && $marks <= 49)
        {
            return 'C-';
        }
        elseif ($marks >= 50 && $marks <= 54)
        {
            return 'C';
        }
        elseif ($marks >= 55 && $marks <= 59)
        {
            return 'C+';
        }
        elseif ($marks >= 60 && $marks <= 64)
        {
            return 'B-';
        }
        elseif ($marks >= 65 && $marks <= 69)
        {
            return 'B';
        }
        elseif ($marks >= 70 && $marks <= 74)
        {
            return 'B+';
        }
        elseif ($marks >= 75 && $marks <= 79)
        {
            return 'A';
        }
        elseif($marks >= 80)
        {
            return 'A';
        }
        else
        {
            return 'invalid Marks';
        }

    }

}
