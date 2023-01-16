<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activities extends Model
{
    use HasFactory;

    protected $fillable = [
        "customer_id",
        "have_other_account",
        "greet_the_customer",
        "listen_and_ask",
        "recommened_account",
        "cross_sell",
        "thanks_customer",
        "comment"
    ];
}
