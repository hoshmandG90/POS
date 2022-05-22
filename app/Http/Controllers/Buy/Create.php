<?php

namespace App\Http\Controllers\Buy;

use Livewire\Component;
use App\Models\Type_Made  as TypeMade;
use App\Models\Type_Product as TypeProduct;
use App\Models\Stock;
use Livewire\WithPagination;
use App\Models\company as Companies;

class Create extends Component
{
  
    public $ShowForm=false;
    public $SearchName;
    public $SearchBarcode;


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


    public $ShowModel=false;
    public $type_made;

   public $ShowModel2=false;
   public $table_company_name;


   public $ShowModel3=false;
   public $table_type_product;
   public $KoyNrx;




   public function SaveMadeIn(){
      
    $this->Validate([
       'type_made' => 'required',
    ]);

    TypeMade::create([
        'type_made' => $this->type_made,
    ]);
    sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');

  $this->ShowModel=false;

}



public function SaveCompanyName(){
    $this->Validate([
        'table_company_name' => 'required',
    ]);

    Company::create([
        'company_name' => $this->table_company_name,
    ]);
    sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
    $this->ShowModel2=false;
}


public function SaveTypeProduct(){
    $this->Validate([
        'table_type_product' => 'required',
    ]);

    typeProduct::create([
        'type_product' => $this->table_type_product,
    ]);
    sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
    $this->ShowModel3=false;
}





    public function SaveStocks(){
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


        Stock::create([
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

            'user_id'=>auth()->user()->id,
            'KoyNrx'=>$this->purchase_price_in_units*$this->total_number_of_units,
            'stock_code'=>rand(100000,999999),
            
        ]);
 

        sweetAlert()->livewire()->addSuccess('بەسەرکەوتووی زیادکرا');
        $this->ShowForm=false;
    }

    public function delete($barcode){
       $Find_Stock=Stock::find($barcode);
       $Find_Stock->delete();
       sweetAlert()->livewire()->addSuccess('بەسەرکەتووی سڕایەوە');
       return redirect()->back();
       
    }


      public function updateKoyNrx(){
        $this->KoyNrx=$this->purchase_price_in_units*$this->total_number_of_units;
      }
    public function render()
    {
   
        $Made_in=TypeMade::latest()->get();
        $Type_product=TypeProduct::latest()->get();
        $Stocks=Stock::where('name','LIKE','%'.$this->SearchName.'%')->where('id','LIKE','%'.$this->SearchBarcode.'%')->latest()->paginate(20);
        $Company_name=Companies::latest()->get();
        $this->KoyNrx=$this->purchase_price_in_units*$this->total_number_of_units;
        return view('buy.create',compact('Made_in','Type_product','Stocks','Company_name'))->extends('layouts.base');
    }
}
