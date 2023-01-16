<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
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
        'status'
    ];

    public function user(){
        return $this->belongsTo(User::class);
    }
}
