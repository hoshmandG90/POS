<?php

namespace App\Http\Controllers\Buy;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('buy.index')->extends('layouts.master');
    }
}
