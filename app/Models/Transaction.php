<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    // hapus klo lag queryny
    protected $with = ['tutor'];

    public function user(){
        return $this->belongsTo(User::class, 'user_id');
    }

    public function tutor(){
        return $this->belongsTo(Tutor::class, 'tutor_id');
    }

    

}
