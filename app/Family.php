<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Family extends Model
{
    protected $table = 'family';

    protected $fillable = [
        'id',
        'student_id',
        'province',
        'district',
        'sub_district',
        'post_code',
        'total_person',
        'status_live',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}