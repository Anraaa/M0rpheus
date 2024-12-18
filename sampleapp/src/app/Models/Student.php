<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $fillable = [
        'nim',
        'name',
        'dob',
        'program_study_id',
        'faculty',
        'admission_year',
    ];

    /**
     * A student belongs to a program study.
     */
    public function programStudy()
    {
        return $this->belongsTo(ProgramStudy::class);
    }


    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
