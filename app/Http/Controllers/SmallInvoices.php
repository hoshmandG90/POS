<?php

namespace App\Http\Controllers;

use Livewire\Component;
use App\Models\Stock;
use App\Models\invoice as Invoices;
use Illuminate\Support\Collection;
use App\Models\FroshtnBaNaqad as Sold;
use App\Models\FroshtnBaQarz as FroshtnBaQarz;
use Illuminate\support\Carbon;
class SmallInvoices extends Component
{
    public $Receipt_number;
    public $Search_Result;
    public function mount(){
        $this->Receipt_number =Invoices::orderBy('id','DESC')->first();
        $this->Search_Result=Sold::Where(['user_id'=>auth()->user()->id,'checkBox'=>false])->get();
        $find_frosht_qarz=Sold::Where(['user_id'=>auth()->user()->id,'checkBox'=>false,'jorePsula'=>'قەرز'])->get();
        $new_model = new FroshtnBaQarz();
        $final_model=FroshtnBaQarz::where(['user_id'=>auth()->user()->id,'checkBox'=>false])->get();
         foreach($find_frosht_qarz as $result){
             if($final_model !=null){
            FroshtnBaQarz::create([
                'IDWasll'=>$result->IDWasll,
                'name'=>$result->name,
                'price' => $result->price,
                'item' => $result->item,
                'KoNrx' => $result->KoNrx,
                'CasherName' => $result->CasherName,  
                'stock_id' => $result->stock_id,
                'user_id' => $result->user_id,
                'CompanyName' => $result->CompanyName,
                'joreKala' => $result->joreKala,
                'jorePsula' => $result->jorePsula,
                'IDKala' => $result->IDKala,
                'Koywasl' => $result->Koywasl,
                'Qazanj' => $result->Qazanj,
                'NrxKrenKala' => $result->NrxKrenKala,
                'NameKryar' => $result->NameKryar,
                'NrxGayandn' => $result->NrxGayandn,
                'Maxzan' => $result->Maxzan,
                'driver_name'=>$result->driver_name,
                'phone' => $result->phone,
                'address' =>    $result->address,
                'checkBox' => $result->checkBox,
            ]); 
            if($result->jorePsula=='قەرز'){
                $find_frosht_qarz=Sold::Where(['user_id'=>auth()->user()->id,'checkBox'=>false,'jorePsula'=>'قەرز'])->delete();
            }  
        }     
         }


      
        
    }
    public function render()
    {
        return view('small-invoices')->extends('layouts.base');
    }
}
