<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Support\Facades\DB;

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
        return $this->belongsTo(Subject::class);
    }

    public function scopeVacant($query, $start_time, $date)
    {
        return $query->whereDoesntHave('transactions',
            fn ($query) =>
                $query
                ->where('start_time', 'LIKE', $start_time)
                ->where('date', $date)
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
