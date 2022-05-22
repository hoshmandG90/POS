<?php

namespace App\Http\Controllers\Box;

use Livewire\Component;
use App\Models\ParaQasa;
use App\Models\ParaDarkrdn;
use Illuminate\support\Carbon;

class View extends Component
{

    public $Date;

    public $find;
    public $find2;

    public $convert_int;
    public $convert_int2;

    public function ViewReport(){
        $this->find = ParaDarkrdn::where('Jor',false)->where('date',$this->Date)->sum('ParayDarkraw');
        $this->find2 = ParaDarkrdn::where('Jor',true)->where('date',$this->Date)->sum('ParayDarkraw');

        $convert_int=intval(-$this->find);
        $convert_int2=intval($this->find2);
        $this->convert_int=$convert_int;
        $this->convert_int2=$convert_int2;
     

       
        
    }

    public function render()
    {
        $ParaQasa=ParaQasa::latest()->first();
        $find=ParaDarkrdn::where('Date','LIKE','%'.$this->Date.'%')->get();
       
        return view('box.view',compact('ParaQasa'))->extends('layouts.base');
    }
}
