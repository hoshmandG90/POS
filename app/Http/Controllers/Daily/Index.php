<?php

namespace App\Http\Controllers\Daily;

use Livewire\Component;
use App\Models\daily as Daily;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $name;
    public $phone;
    public $notes;

    // update the name of the person

    public $daily_id;
    public $update_name;
    public $update_phone;
    public $update_notes;


    public function SaveDaily(){
        $this->validate([
            'name' => 'required',
            'phone' => 'required',
            'notes' => 'required',
        ]);
        Daily::create([
            'name' => $this->name,
            'phone' => $this->phone,
            'notes' => $this->notes,
        ]);
        $this->name = '';
        $this->phone = '';
        $this->notes = '';
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->route('Daily');
    }
    public function delete($id){
        Daily::FindorFail($id)->delete();
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی سڕایەوە');
        return redirect()->route('Daily');
    }

    public function edit(Daily $daily){
        $this->daily_id = $daily->id;
        $this->update_name = $daily->name;
        $this->update_phone = $daily->phone;
        $this->update_notes = $daily->notes;

    }

    public function EditDaily(){
        $this->validate([
            'update_name' => 'required',
            'update_phone' => 'required',
            'update_notes' => 'required',
        ]);
        Daily::FindorFail($this->daily_id)->update([
            'name' => $this->update_name,
            'phone' => $this->update_phone,
            'notes' => $this->update_notes,
        ]);
      
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->route('Daily');
    }

    public function render()
    {
        $Daily = Daily::Where('notes','LIKE','%'.$this->search.'%')->latest()->paginate(10);
        return view('daily.index',compact('Daily'))->extends('layouts.base');
    }
}
