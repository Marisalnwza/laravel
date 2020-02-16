<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    protected $table = 'students';

    protected $fillable = [
        'id',
        'student_id',
        'first_name',
        'last_name',
        'nick_name',
        'year',
        'major',
        'faculty'
            
    ];

    public function family()
    {
        return $this->hasOne(Family::class, 'student_id', 'student_id');
    }
}
