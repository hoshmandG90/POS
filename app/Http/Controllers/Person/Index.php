<?php

namespace App\Http\Controllers\Person;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('person.index')->extends('layouts.master');
    }
}
