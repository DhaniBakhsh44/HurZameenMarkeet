<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Schemes extends Model
{
    //use HasFactory;

    protected $fillabel=[
      'scheme_id',
      'schemes_name',
      'status'  
    ];
    public $timestamps = false;
}
