<?php

namespace App\Http\Controllers\Notification;

use Livewire\Component;
use App\Models\Stock;
use Livewire\WithPagination;
use Illuminate\support\Carbon;
class Expired extends Component
{
    use WithPagination;


 
    

  
    public function delete($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
        sweetalert()->livewire()->addSuccess('بەسەرکەوتوویی  سڕایەوە');
        return redirect()->back();
    }
  
    
  
    public $FirstMonths;
    public function FirstMonths($value){
        $this->FirstMonths = $value;

        

        
        
    }
    

    public function SecondMonths($value){
        $this->FirstMonths = $value;
     

        
    }

    public function ThirdMonths($value){
        $this->FirstMonths = $value;
        
    }


  

    

    
    public function render()
    {
        $Stocks=Stock::all();

        if($this-> FirstMonths == 30){
             $Stocks=Stock::whereBetween('expired_at',[Carbon::Today()->addDays(0),now()->addDays($this->FirstMonths)])->latest()->paginate(10);
        }elseif($this->FirstMonths == 60){
            $Stocks=Stock::whereBetween('expired_at',[Carbon::Today()->addDays(30),now()->addDays($this->FirstMonths)])->latest()->paginate(10);
        }elseif($this->FirstMonths == 90){
            $Stocks=Stock::whereBetween('expired_at',[Carbon::Today()->addDays(60),now()->addDays($this->FirstMonths)])->latest()->paginate(10);
        }else{
            $Stocks=Stock::latest()->paginate(10);
        }

        $count_first_month=Stock::whereBetween('expired_at',[Carbon::Today()->addDays(0),now()->addDays(30)])->count();
        $count_second_month=Stock::whereBetween('expired_at',[Carbon::Today()->addDays(30),now()->addDays(60)])->count();
        $count_third_month=Stock::whereBetween('expired_at',[Carbon::Today()->addDays(60),now()->addDays(90)])->count();
        return view('notification.expired',compact('Stocks','count_first_month','count_second_month','count_third_month'))->extends('layouts.base');
    }
}
