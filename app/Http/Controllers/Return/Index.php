<?php

namespace App\Http\Controllers\Return;

use Livewire\Component;
use App\Models\Stock;
use App\Models\FroshtnBaQarz as FroshtnBaQarz;
use Livewire\WithPagination;
class Index extends Component
{
    use WithPagination;

    public $searchName;
    public $searchBarcode;
    public $searchWasl;



    public function ReturnValue(FroshtnBaQarz $FroshtnBaQarz){
      $counter=0;
      $find_qarz = FroshtnBaQarz::FindOrFail(['id'=>$FroshtnBaQarz->id])->first();
      if($find_qarz !=null){ 
        $find_stock = Stock::FindOrFail(['id'=>$FroshtnBaQarz->stock_id])->first();
        if($find_stock !=null){
            $counter=$find_qarz->item;
            $convert_int=intval($counter);
            $find_stock->total_number_of_units+=$FroshtnBaQarz->item;
            $find_stock->save();
            $find_qarz->item-=$convert_int;
            $find_qarz->save();
            if($find_qarz->item==0){
                $find_qarz->delete();
            }         
         
        }

      }       
      
       

    }
    public function render()
    {
        if($this->searchName !=null){
            $FroshtnBaQarz = FroshtnBaQarz::where('name','like','%'.$this->searchName.'%')->paginate(10);
        }elseif($this->searchBarcode !=null){
            $FroshtnBaQarz = FroshtnBaQarz::where('stock_id','like','%'.$this->searchBarcode.'%')->paginate(10);
        }elseif($this->searchWasl !=null){
            $FroshtnBaQarz = FroshtnBaQarz::where('IDWasll','like','%'.$this->searchWasl.'%')->paginate(10);
        }else{
            $FroshtnBaQarz = FroshtnBaQarz::paginate(10);
        }
        return view('return.index',compact('FroshtnBaQarz'))->extends('layouts.base');
    
    }
}
