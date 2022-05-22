<?php

namespace App\Http\Controllers\Purchase;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('purchase.index')->extends('layouts.master');
    }
}
