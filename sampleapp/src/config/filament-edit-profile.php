<?php

return [
    'fields' => [
        'nim' => [
            'label' => 'NIM',
            'type' => 'text',
            'rules' => function () {
                $user = \Illuminate\Support\Facades\Auth::user();
                return 'required|string|max:255|unique:students,nim,' . ($user?->student?->id ?? 'null');
            },
            'relationship' => 'student',
        ],
        'name' => [
            'label' => 'Nama',
            'type' => 'text',
            'rules' => 'required|string|max:255',
            'relationship' => 'student',
        ],
        'dob' => [
            'label' => 'Tanggal Lahir',
            'type' => 'date',
            'rules' => 'required|date',
            'relationship' => 'student',
        ],
        'program_study_id' => [
            'label' => 'Program Studi',
            'type' => 'select',
            'options' => fn () => \App\Models\ProgramStudy::all()->pluck('name', 'id')->toArray(),
            'rules' => 'required|exists:program_studies,id',
            'relationship' => 'student',
        ],
        'faculty' => [
            'label' => 'Fakultas',
            'type' => 'text',
            'rules' => 'required|string|max:255',
            'relationship' => 'student',
        ],
        'admission_year' => [
            'label' => 'Tahun Masuk',
            'type' => 'number',
            'rules' => 'required|integer|min:2000|max:' . date('Y'),
            'relationship' => 'student',
        ],
    ],
];
