<?php

namespace App\Models;

// use Illuminate\Database\Eloquent\Factories\HasFactory;
// use Illuminate\Database\Eloquent\Model;

class Tutor
{
    private static $tutors = [
        [
            'nama' => 'Altres',
            'slug' => 'first-card',
            'mapel' => 'Matematika',
            'status_akademik' => 'Dosen - UI'
        ],
        [
            'nama' => 'Felicia',
            'slug' => 'second-card',
            'mapel' => 'B. Inggris',
            'status_akademik' => 'Guru - SBM'
        ]
    ];

    public static function all(){

        // jadiin object collection, biar ad method, kek vector di Java
        return collect(self::$tutors);
    }

    public static function find($id){

        $tutors = static::all();

        return $tutors->firstWhere('id', $id);

    }
}
