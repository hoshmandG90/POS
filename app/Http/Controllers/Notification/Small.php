<?php

namespace App\Http\Controllers\Notification;

use Livewire\Component;
use App\Models\Stock;
use Livewire\WithPagination;
use Illuminate\support\Carbon;
class Small extends Component
{
    use WithPagination;


 
    
    public $options;

  
    public function delete($id)
    {
        $stock = Stock::find($id);
        $stock->delete();
        sweetalert()->livewire()->addSuccess('بەسەرکەوتوویی  سڕایەوە');
        return redirect()->back();
    }
  
    
  


  

    

    public $sum_expired;
    public function getDateRange(){
        
        $this->sum_expired=Stock::whereBetween('expired_at',[Carbon::Today(),now()->addDays($this->options)])->latest()->paginate(10)->count();

    }
    
    public function render()
    {
    
        $this->options ? $Stocks=Stock::whereBetween('expired_at',[Carbon::Today(),now()->addDays($this->options)])->latest()->paginate(10):$Stocks=Stock::latest()->paginate(10);
        return view('notification.small',compact('Stocks'))->extends('layouts.base');
    }
   
}
