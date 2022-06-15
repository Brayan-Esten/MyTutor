<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Tutor extends Model
{
    use HasFactory;
    use Sluggable;

    protected $guarded = ['id'];

    public function transactions(){
        return $this->hasmany(Transaction::class, 'tutor_id');
    }

    public function subject(){
        return $this->belongsTo(Subject::class);
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }


}

