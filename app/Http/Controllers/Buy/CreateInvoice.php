<?php

namespace App\Http\Controllers\Buy;

use Livewire\Component;
use App\Models\Type_Made  as TypeMade;
use App\Models\Type_Product as TypeProduct;
use App\Models\Stock;
use Livewire\WithPagination;
use App\Models\company as Companies;
use App\Models\KalaKrawakanWasal;
use Illuminate\Support\Collection;
use Illuminate\support\Carbon;
use App\Models\PsulaKren;

class CreateInvoice extends Component
{
    public $ShowModel=false;

    public $name_company;
    public $phone;
    public $address;
    
    public $Barcodequery;
    public $search_results;


    public $name;
    public $purchase_price_in_units;
    public $selling_price_per_piece;
    public $total_number_of_units;
    public $expired_at;
    public $IDkala;

    //Insert PsulaKren
    public $ShowForm=false;
    public $NameCo;
    public $JmaraPsula;
    public $JorePsula;
    public $Date;
    // end insert PsulaKren


    public $sum_total_price;
    public $ZhmareDanekrdraw;
    public function mount(){
        
        $search_results = Collection::empty();
        

    }

    public function updatedBarcodequery() {
        $this->search_results = Stock::where('id', 'like', '%' . $this->Barcodequery . '%')
            ->OrWhere('name', 'like', '%' . $this->Barcodequery . '%')
            ->take(1)->get();

     
            foreach ($this->search_results as $result) {
                $this->name = $result->name;
                $this->purchase_price_in_units = $result->purchase_price_in_units;
                $this->selling_price_per_piece = $result->selling_price_per_piece;
                $this->total_number_of_units = $result->total_number_of_units;
                $this->expired_at = $result->expired_at->format('Y-m-d');
                $this->IDkala = $result->id;

            }
    
         

    }
    public function resetBarcodequery() {
        $this->Barcodequery = '';
        
        $result = Collection::empty();
        

    }
      

    public function InsertCompnay(){
        $this->Validate([
            'name_company' => 'required',
            'phone' => 'required',
            'address' => 'required',
           
        ]);

        Companies::create([
            'name'=>$this->name_company,
            'phone'=>$this->phone,
            'address'=>$this->address,
            'code' => rand(1000,10000),
        ]);
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->back();
    }

    public function SavePsulaKren(){
        $Validation_Data= $this->Validate([
            'NameCo' => 'required',
            'JmaraPsula' => 'required',
            'JorePsula' => 'required',
            'Date' => 'required',
           
        ]);        
        $this->ShowForm=true;
    }

    public function SaveKalaKrdrawakanWasl(){
        KalaKrawakanWasal::create([
            'Jmarawasll'=>$this->JmaraPsula,
            'NameKala'=>$this->name,
            'NrxkrenBaDana'=>$this->purchase_price_in_units,

            'BryKren'=>$this->total_number_of_units,
            'Konrx'=>$this->ZhmareDanekrdraw * $this->purchase_price_in_units,
            'BryKren'=>$this->ZhmareDanekrdraw,


            'IDKala'=>$this->IDkala,
            'IDPuslaKren'=>rand(1,200000000),
            'NrxFroshtn'=>$this->selling_price_per_piece,
            'BarwareEXP'=>$this->expired_at,
        
        ]);
        PsulaKren::create([
            'NameCo'=>$this->NameCo,
            'JmaraPsula'=>$this->JmaraPsula,
            'JorePsula'=>$this->JorePsula,
            'Date'=>$this->Date,
            'KoyPsula'=>$this->ZhmareDanekrdraw * $this->purchase_price_in_units,
            
        
        ]);
   

        $this->NameCo='';
        $this->JmaraPsula='';
        $this->JorePsula='';
        $this->Date='';
        $find_stock = Stock::FindOrFail(['id' =>$this->Barcodequery ]);
        foreach ($find_stock as $row){
            $row->total_number_of_units += $this->ZhmareDanekrdraw;
            $row->KoyNrx  *= $this->purchase_price_in_units;
            $row->save();
        }
        
         
       
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        $this->ShowForm=false;
    

        
    }
    
    public function Marked($id){
        $find_kala=KalaKrawakanWasal::find($id);
        $find_kala->CheckBox=true;
        $find_kala->save();
        return redirect()->back();
        
    }
    public function render()
    {
        $Company_name=Companies::latest()->get();
        $KalaKrdrawakanWasl= KalaKrawakanWasal::where(['CheckBox'=>false])->latest()->get();
        $this->sum_total_price=$this->ZhmareDanekrdraw * $this->purchase_price_in_units;
        return view('buy.create-invoice',compact('Company_name','KalaKrdrawakanWasl'))->extends('layouts.base');
    }
}
