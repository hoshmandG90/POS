<?php

namespace App\Http\Controllers\Buy;

use Livewire\Component;
use App\Models\Stock;
use App\Models\type_made as TypeMade ;
use App\Models\company as Company;
use App\Models\type_product as TypeProduct;


class Edit extends Component
{
  
    public $stock;

    
    public $barcode;
    public $name;
    public $is_barcode=false;
    public $notes;
    public $expired_at;
    public $address;

    public $made_in;
    public $name_company;
    public $name_product_type;
    public $total_number_of_units;
    public $purchase_price_in_units;
    public $selling_price_per_piece;

    public function mount(Stock $stock)
    {
        $this->stock = $stock;
        $this->barcode = $stock->id;
        $this->name = $stock->name;
        $this->is_barcode = $stock->is_barcode;
        $this->notes = $stock->note;
        $this->expired_at = $stock->expired_at->format('Y-m-d');
        $this->address = $stock->address;
        $this->made_in = $stock->made_in;
        $this->name_company = $stock->name_company;
        $this->name_product_type = $stock->name_product_type;
        $this->total_number_of_units = $stock->total_number_of_units;
        $this->purchase_price_in_units = $stock->purchase_price_in_units;
        $this->selling_price_per_piece = $stock->selling_price_per_piece;


    }

    public function SaveStocks(Stock $stock){
        $this->Validate([
            'barcode' => 'required',
            'name' => 'required',
            'notes' => 'required',
            'address' => 'required',
            'expired_at' => 'required',
            'made_in' => 'required',

            'name_company' => 'required',
            'name_product_type' => 'required',
            'total_number_of_units' => 'required',
            'purchase_price_in_units' => 'required',
            'selling_price_per_piece' => 'required',
        ]);

        $this->stock->update([
            'id' => $this->barcode,
            'name' => $this->name,
            'is_barcode' => $this->is_barcode,
            'note' => $this->notes,
            'expired_at' => $this->expired_at,
            'address' => $this->address,

            'made_in' => $this->made_in,
            'name_company' => $this->name_company,
            'name_product_type' => $this->name_product_type,
            'total_number_of_units' => $this->total_number_of_units,
            'purchase_price_in_units' => $this->purchase_price_in_units,
            'selling_price_per_piece' => $this->selling_price_per_piece,
        

        ]);

      sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
      return redirect()->back();
    }
    public function render()
    {
        $Made_in=TypeMade::latest()->get();
        $Company_name=Company::latest()->get();
        $Type_product=TypeProduct::latest()->get();
        return view('buy.edit',compact('Made_in','Company_name','Type_product'))->extends('layouts.base');
    }
}
