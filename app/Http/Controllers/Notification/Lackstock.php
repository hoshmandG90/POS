<?php

namespace App\Http\Controllers\Notification;

use Livewire\Component;
use App\Models\Stock;
use Livewire\WithPagination;
use Illuminate\support\Carbon;
class Lackstock extends Component
{
  use WithPagination;     

public $condition;
public $condition2;
public $condition3;
public $quantity;


// between the two numbers

public $options;
public $options2;


 
public function delete($id)
{
    $stock = Stock::find($id);
    $stock->delete();
    sweetalert()->livewire()->addSuccess('بەسەرکەوتوویی  سڕایەوە');
    return redirect()->back();
}


public $sum_count_stock;
public function SeeActionResult(){
   $string_query = $this->quantity;
   $convert_int=intval($string_query);
   if($this->condition == '>='){
    $this->sum_count_stock = Stock::where('total_number_of_units',$this->condition,$convert_int)->get();
   }elseif($this->condition2 == '<='){
    $this->sum_count_stock = Stock::where('total_number_of_units',$this->condition2,$convert_int)->get();
   }else{
    $this->sum_count_stock = Stock::where('total_number_of_units',$this->condition3,$convert_int)->get();
   }
}


public $get_between_quantity;

public function GetExtraced(){
      $string1=$this->options;
      $string2=$this->options2;
      $int1=intval($string1);
      $int2=intval($string2);

        $this->get_between_quantity=Stock::whereBetween('total_number_of_units',[$int1,$int2])->get();
        

}





    public function render()
    {

        
        $Stocks=Stock::Where('total_number_of_units',$this->condition,$this->quantity)->latest()->paginate(10);
        if($this->get_between_quantity !=null){
            $Stocks=$this->get_between_quantity;
        }
        if($this->sum_count_stock !=null){
            $Stocks=$this->sum_count_stock;
        }
        return view('notification.lackstock',compact('Stocks'))->extends('layouts.base');
    }
}
