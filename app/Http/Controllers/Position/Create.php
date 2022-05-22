<?php

namespace App\Http\Controllers\Position;

use Livewire\Component;
use App\Models\driver as Drivers;
use Illuminate\Support\Str;
use App\Models\position as Positions;
class Create extends Component
{

    public $search;
    

    public $driver_id;
    public $name_nawcha;
    public $name_shar;
    public $NrxGyandn;

    

    // update the model position with the new data
    public $position_id;
    public $update_driver_id;
    public $update_name_nawcha;
    public $update_name_shar;
    public $update_NrxGyandn;

    


    public function SavePositions(){
        $driver_name=Drivers::find(['id'=>$this->driver_id])->first();
        $this->Validate([
            'name_nawcha' => 'required',
            'name_shar' => 'required',
            'NrxGyandn' => 'required',
            'driver_id' => 'required',
        ]);



        Positions::create([
            'code' => rand(1000,9999),
            'driver_id' => $this->driver_id,
            'name_nawcha' => $this->name_nawcha,
            'name_shar' => $this->name_shar,
            'NrxGyandn' => $this->NrxGyandn,
            'name_driver' => $driver_name->name,
    
    
        ]);
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->route('Position');


    }

    public function delete($id){
        Positions::FindOrFail($id)->delete();
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی سڕایەوە');
        return redirect()->route('Position');
    }

    public function edit(Positions $position){
        $this->position_id=$position->id;
        $this->update_driver_id = $position->driver_id;
        $this->update_name_nawcha = $position->name_nawcha;
        $this->update_name_shar = $position->name_shar;
        $this->update_NrxGyandn = $position->NrxGyandn;


    }

    public function EditPosition(){
        $driver_name=Drivers::find($this->update_driver_id)->first();
        $this->Validate([
            'update_name_nawcha' => 'required',
            'update_name_shar' => 'required',
            'update_NrxGyandn' => 'required',
            'update_driver_id' => 'required',
        ]);

        Positions::FindOrFail($this->position_id)->update([
            'driver_id' => $this->update_driver_id,
            'name_nawcha' => $this->update_name_nawcha,
            'name_shar' => $this->update_name_shar,
            'NrxGyandn' => $this->update_NrxGyandn,
            'name_driver' => $driver_name->name,

        ]);
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->route('Position');
    }

    public function render()
    {
        $drivers=Drivers::latest()->get();
        $positions=Positions::Where('name_shar','LIKE','%'.$this->search.'%')->latest()->get();
        return view('position.create',compact('drivers','positions'))->extends('layouts.base');
    }
}
