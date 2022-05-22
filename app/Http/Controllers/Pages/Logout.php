<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;

class Logout extends Component
{
    public function Logout(){
        \Auth::logout();
        return redirect()->to(route('home'));
    }
    public function render()
    {
        return view('pages.logout');
    }
}
