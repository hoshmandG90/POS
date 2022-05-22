<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stock;
class FroshtnBaQarz extends Model
{
   
    protected $table = 'froshtn_ba_qarzs';
    protected $guarded = [];

    public function stocks(){
        return $this->hasOne(Stock::class, 'id', 'stock_id');


    }

}
