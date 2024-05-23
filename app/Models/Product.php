<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Product extends Model
{
    use HasFactory;
    protected $fillble = [
        'name',
        'price',
        'user_id'   
    ];

    public function user(): BelongtoUser{
        return $this->belongsTo(User::class);
    }

};


