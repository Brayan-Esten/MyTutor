<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $with = ['field', 'edulvl'];

    public function field()
    {
        return $this->belongsTo(Field::class, 'field_id');
    }

    public function edulvl()
    {
        return $this->belongsTo(EduLvl::class, 'level_id');
    }

}
