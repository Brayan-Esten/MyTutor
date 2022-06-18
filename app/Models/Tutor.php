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
    protected $with = ['transactions', 'subject'];

    public function transactions()
    {
        return $this->hasmany(Transaction::class, 'tutor_id');
    }

    public function subject()
    {
        return $this->belongsTo(Subject::class, 'subject_id');
    }

    public function scopeVacant($query, $date, $start_time)
    {
        return $query->whereDoesntHave(
            'transactions',
            fn ($query) =>
            $query
                ->where([
                    ['start_time', 'LIKE', $start_time],
                    ['date', $date]
                ])
                ->orWhere([
                    ['half_time', 'LIKE', $start_time],
                    ['date', $date]
                ])
                ->orWhere([
                    ['end_time', 'LIKE', $start_time],
                    ['date', $date]
                ])
                
                
        );
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
