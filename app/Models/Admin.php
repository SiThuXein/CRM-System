<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Permission\Traits\HasRoles;

class admin extends Model
{
    use HasFactory;
    use HasRoles;
    protected $fillable = [
        'staff_id',
        'username',
        'password',
        'role',
        'crm_role',
        'branch',
        'guard_name'
    ];

}
