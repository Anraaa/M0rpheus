<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Faculty extends Model
{
    protected $fillable = [
        'faculty_code',
        'faculty_name',
    ];

    /**
     * A faculty has many program studies.
     */
    public function programStudies()
    {
        return $this->hasMany(ProgramStudy::class);
    }
}
