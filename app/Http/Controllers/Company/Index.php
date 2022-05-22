<?php

namespace App\Http\Controllers\Company;

use Livewire\Component;
use App\Models\company as Companies;

class Index extends Component
{
    public $search;

    public $name;
    public $phone;
    public $address;

    // update

    public $company_id;
    public $update_name;
    public $update_phone;
    public $update_address;


    public function SaveCompany(){
        $this->Validate([
            'name' => 'required',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Companies::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'address' => $this->address,
            'code' => rand(1000,10000),
    
        ]);
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->route('Company');


    }

    public function delete($id){
        Companies::FindOrFail($id)->delete();
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی سڕایەوە');
        return redirect()->route('Company');
    }

    public function edit(Companies $company){
        $this->company_id = $company->id;
        $this->update_name = $company->name;
        $this->update_phone = $company->phone;
        $this->update_address = $company->address;

    }

    public function EditCompany(){
        $this->Validate([
            'update_name' => 'required',
            'update_phone' => 'required',
            'update_address' => 'required',
        ]);

        Companies::FindOrFail($this->company_id)->update([
            'name' => $this->update_name,
            'phone' => $this->update_phone,
            'address' => $this->update_address,
        ]);
        sweetalert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->route('Company');
    }
    public function render()
    {
        $company = Companies::where('name','LIKE','%'.$this->search.'%')->latest()->get();
        return view('company.index',compact('company'))->extends('layouts.base');
    }
}
