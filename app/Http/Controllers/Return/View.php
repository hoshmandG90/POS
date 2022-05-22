<?php

namespace App\Http\Controllers\Return;

use Livewire\Component;
use App\Models\Stock;
use App\Models\FroshtnBaNaqad;
use Livewire\WithPagination;

class View extends Component
{
    use WithPagination;

    public $searchName;
    public $searchBarcode;
    public $searchWasl;



    public function ReturnValue(FroshtnBaNaqad $FroshtnBaNaqad){
      $counter=0;
      $find_qarz = FroshtnBaNaqad::FindOrFail(['id'=>$FroshtnBaNaqad->id])->first();
      if($find_qarz !=null){ 
        $find_stock = Stock::FindOrFail(['id'=>$FroshtnBaNaqad->stock_id])->first();
        if($find_stock !=null){
            $counter=$find_qarz->item;
            $convert_int=intval($counter);
            $find_stock->total_number_of_units+=$FroshtnBaNaqad->item;
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
            $FroshtnBaNaqad = FroshtnBaNaqad::where('name','like','%'.$this->searchName.'%')->paginate(10);
        }elseif($this->searchBarcode !=null){
            $FroshtnBaNaqad = FroshtnBaNaqad::where('stock_id','like','%'.$this->searchBarcode.'%')->paginate(10);
        }elseif($this->searchWasl !=null){
            $FroshtnBaNaqad = FroshtnBaNaqad::where('IDWasll','like','%'.$this->searchWasl.'%')->paginate(10);
        }else{
            $FroshtnBaNaqad = FroshtnBaNaqad::paginate(10);
        }
        return view('return.view',compact('FroshtnBaNaqad'))->extends('layouts.base');
    }
}
