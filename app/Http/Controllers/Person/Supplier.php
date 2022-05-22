<?php

namespace App\Http\Controllers\Person;

use Livewire\Component;
use App\Models\karmandakan as Suppliers;

class Supplier extends Component
{
    public $search;

    public $name;
    public $phone;
    public $address;
    public $money;


    public function SaveSupplier(){
        $this->Validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'money' => 'required',
        ]);

        Suppliers::create([
            'nawe_karmand' => $this->name,
            'phone' => $this->phone,
            'address' => $this->address,
            'money' => $this->money,
    
        ]);
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->back();


    }

    public function delete($id){
        Suppliers::FindOrFail($id)->delete();
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی سڕایەوە');
        return redirect()->back();
    }


    public function render()
    {
        $suppliers=Suppliers::where('nawe_karmand','LIKE','%'.$this->search.'%')->latest()->get();
        return view('person.supplier',compact('suppliers'))->extends('layouts.base');
    }
}
