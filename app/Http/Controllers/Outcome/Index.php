<?php

namespace App\Http\Controllers\Outcome;

use Livewire\Component;
use App\Models\Outcome as Outcome;
use Livewire\WithPagination;

class Index extends Component
{
    use WithPagination;

    public $search;
    public $name;
    public $type;
    public $notes;

    // update the name of the person

    public $daily_id;
    public $update_name;
    public $update_type;
    public $update_notes;


    public function SaveOutcome(){
        $this->validate([
            'name' => 'required',
            'type' => 'required',
        ]);
        Outcome::create([
            'name' => $this->name,
            'type' => $this->type,
            'notes' => $this->notes,
        ]);
        $this->name = '';
        $this->type = '';
        $this->notes = '';
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->route('Outcome');
    }
    public function delete($id){
        Outcome::FindorFail($id)->delete();
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی سڕایەوە');
        return redirect()->route('Outcome');
    }

    public function edit(Outcome $Outcome){
        $this->daily_id = $Outcome->id;
        $this->update_name = $Outcome->name;
        $this->update_type = $Outcome->type;
        $this->update_notes = $Outcome->notes;

    }

    public function Editoutcomes(){
        $this->validate([
            'update_name' => 'required',
            'update_type' => 'required',
            'update_notes' => 'required',
        ]);
        Outcome::FindorFail($this->daily_id)->update([
            'name' => $this->update_name,
            'type' => $this->update_type,
            'notes' => $this->update_notes,
        ]);
      
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        return redirect()->route('Outcome');
    }

    public function render()
    {
        $outcomes = Outcome::Where('type','LIKE','%'.$this->search.'%')->latest()->paginate(10);
        return view('Outcome.index',compact('outcomes'))->extends('layouts.base');
    }
}
