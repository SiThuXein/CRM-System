<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Customer;
use App\Models\User;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        "product_name",
        "sold_date",
  
    ];

    public function customer(){
       return $this->belongsTo(Customer::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }

}
