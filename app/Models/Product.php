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
        'category_id',
        'sale_quantity',
        'remain_quantity',
        "sold_date",
        "customer_id",
        "user_id"
    ];

    public function customer(){
       return $this->belongsTo(Customer::class);
    }

    public function user(){
        return $this->belongsToMany(User::class,"product_user");
    }

}
