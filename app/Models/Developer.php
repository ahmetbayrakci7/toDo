<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Developer extends Model
{
    protected $table = "developer";

    protected $fillable = [
        'name',
        'level'
    ];
}
