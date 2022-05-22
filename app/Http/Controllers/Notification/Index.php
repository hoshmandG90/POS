<?php

namespace App\Http\Controllers\Notification;

use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        return view('notification.index')->extends('layouts.master');
    }
}
