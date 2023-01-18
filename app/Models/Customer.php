<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Product;

class Customer extends Model
{
    use HasFactory;

    protected $fillable = [
        'full_name',
        'father_name',
        'nrc',
        'type',
        'phone',
        'date_of_birth',
        'education',
        'gender',
        'occupation',
        'address',
        'status',
        'user_id'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function product(){
        return $this->hasMany(Product::class);
    }
}
