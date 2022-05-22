<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ParaDarkrdn extends Model
{
    protected $table = 'para_darkrdns';
    protected $guarded = [];

    protected $casts=[
        'Date'=>'datetime',
    ];
}
