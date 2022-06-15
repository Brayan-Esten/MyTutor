<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EduLvl extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function subjects()
    {
        return $this->hasMany(Subject::class, 'level_id');
    }
}
