<?php

namespace App\Http\Controllers\Box;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('box.index')->extends('layouts.master');
    }
}
