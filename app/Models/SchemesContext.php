<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SchemesContext extends Model
{
   // use HasFactory;
    protected $fillable=[
        'sch_cont_id',
        'scheme_id',
        'context',
        'status'
    ];
    public $timestamps = false;
    
}
