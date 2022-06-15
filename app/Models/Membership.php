<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Membership extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function users()
    {
        return $this->hasMany(User::class, 'membership_id');
    }

    public function vouchers()
    {
        return $this->hasMany(Voucher::class, 'membership_id');
    }
}
