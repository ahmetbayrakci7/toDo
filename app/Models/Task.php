<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Ixudra\Curl\Facades\Curl;


class Task extends Model
{
    protected $table = "task";
    protected $fillable = [
        'provider',
        'name',
        'level',
        'duration'
    ];
}
