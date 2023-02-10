<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class cust extends Model
{
    use HasFactory;
    protected $table="cust";

    protected $fillable = [
        'name',
        'email',
        'password',
    ];
}
