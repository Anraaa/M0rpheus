<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProgramStudy extends Model
{
    protected $fillable = [
        'study_program_code',
        'study_program_name',
        'faculty_id',
    ];

    /**
     * A program study belongs to a faculty.
     */
    public function faculty()
    {
        return $this->belongsTo(Faculty::class);
    }

    /**
     * A program study has many students.
     */
    public function students()
    {
        return $this->hasMany(Student::class);
    }
}
