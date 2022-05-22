<?php

namespace App\Http\Controllers\Driver;

use Livewire\Component;
use App\Models\driver as Drivers;
use Illuminate\Support\Str;

class Index extends Component
{

    public $search;

    public $name;
    public $phone;
    public $address;

    // update

    public $driver_id;
    public $update_name;
    public $update_phone;
    public $update_address;


    public function SaveDriver(){
        $this->Validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Drivers::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'address' => $this->address,
            'code' => rand(1000,10000),
    
        ]);
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->back();


    }

    public function delete($id){
        Drivers::FindOrFail($id)->delete();
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی سڕایەوە');
        return redirect()->back();
    }

    public function edit(Drivers $driver){
        $this->driver_id = $driver->id;
        $this->update_name = $driver->name;
        $this->update_phone = $driver->phone;
        $this->update_address = $driver->address;

    }

    public function EditDriver(){
        $this->Validate([
            'update_name' => 'required',
            'update_phone' => 'required',
            'update_address' => 'required',
        ]);

        Drivers::FindOrFail($this->driver_id)->update([
            'name' => $this->update_name,
            'phone' => $this->update_phone,
            'address' => $this->update_address,
        ]);
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->back();
    }
    public function render()
    {
        $drivers=Drivers::where('name','LIKE','%'.$this->search.'%')->latest()->get();

       
        return view('driver.index',compact('drivers'))->extends('layouts.base');
    }
}
