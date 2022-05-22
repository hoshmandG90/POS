<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Stock;
class FroshtnBaNaqad extends Model
{
    protected $table = 'froshtn_ba_naqads';
    protected $guarded = [];

    public function stocks()
    {
        return $this->HasOne(Stock::class, 'id', 'stock_id');

    }
}

