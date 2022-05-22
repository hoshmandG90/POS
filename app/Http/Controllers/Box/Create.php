<?php

namespace App\Http\Controllers\Box;
use Livewire\Component;
use App\Models\ParaQasa;
use App\Models\ParaDarkrdn;
use Livewire\WithPagination;
use Illuminate\support\Carbon;


class Create extends Component
{
    use WithPagination;

    public $ParayDarkraw;
    public $Date;
    public $TB;
    public $Jor;

    public $ShowForm=false;

    public $ParaQasa=0;

    public $Find_ParaQasa;
    public function mount(){
        $this->Find_ParaQasa=ParaQasa::latest()->get();
     
        
    }


    public function Save(){
        $this->validate([
            'ParayDarkraw' => 'required',
            'TB' => 'required',
            'Jor' => 'required',
            'Date' => 'required',
        ]);

        
        $ParaDarkrdn = new ParaDarkrdn;
        $ParaDarkrdn->Date = $this->Date;
        $ParaDarkrdn->TB = $this->TB;
        if($this->Jor == 1){           
            foreach($this->Find_ParaQasa as $row){
                $row->shwen += $this->ParayDarkraw;
                $row->save();
            }
            $ParaDarkrdn->ParayDarkraw = $this->ParayDarkraw;

         
        }else{
            foreach($this->Find_ParaQasa as $row){
                $row->shwen -= $this->ParayDarkraw;
                $row->save();
            }
            $ParaDarkrdn->ParayDarkraw = -$this->ParayDarkraw;

        }

        $Find_ParaQasa=ParaQasa::latest()->first();
        $ParaDarkrdn->Jor = $this->Jor;
        $ParaDarkrdn->cashier_name = auth()->user()->name;
        $ParaDarkrdn->parayQasa = $Find_ParaQasa->shwen ;
        $ParaDarkrdn->save();

        $this->ParayDarkraw=null;
        $this->Date=null;
        $this->Jor=null;
        $this->TB=null;




        return redirect()->back();
    
        
    }
   
    public function delete($id){
        $find=ParaDarkrdn::FindOrFail($id)->delete();
        return redirect()->back();

    }

    public function render()
    {
       
        $ParaDarkrdn=ParaDarkrdn::latest()->paginate(10);
        $ParaQasa=ParaQasa::latest()->first();
        if($this->ParaQasa == 0){
            $this->ParaQasa = $ParaQasa->shwen;
        }

        return view('box.create',compact('ParaDarkrdn'))->extends('layouts.base');
    }
}
