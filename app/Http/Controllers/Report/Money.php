<?php

namespace App\Http\Controllers\Report;

use Livewire\Component;

class Money extends Component
{
    public function render()
    {
        return view('report.money')->extends('layouts.base');
    }
}
