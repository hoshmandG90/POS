<?php

namespace App\Http\Controllers\Report;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('report.index')->extends('layouts.master');
    }
}
