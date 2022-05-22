<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaslKredeQarzCompanyakan extends Model
{
     
    protected $table = 'wasl_krede_qarz_companyakans';
    protected $guarded = [];

    
    protected $casts=[
        'Date'=>'datetime',
    ];
}
