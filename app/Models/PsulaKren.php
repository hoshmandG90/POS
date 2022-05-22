<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PsulaKren extends Model
{
   
    protected $table = 'psula_krens';
    protected $guarded = [];

    
        
    protected $casts=[
        'Date'=>'datetime',
    ];
}
