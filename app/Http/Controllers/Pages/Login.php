<?php

namespace App\Http\Controllers\Pages;

use Livewire\Component;
use Illuminate\Support\Facades\Hash;
class Login extends Component
{
    public $username;
    public $password;

    public $check;

    public function updated($field)
    {
        $this->validateOnly($field, [
            'username' => 'required',
            'password' => 'required',
        ]);
    }
    public function SaveLogin(){
  
        $this->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        if(\Auth::attempt(['username' => $this->username, 'password' => $this->password])){
            return redirect()->route('welcome');
        }else{

            $this->check='تکایە دڵنیابە لە ناوی بە کارهێنەرەوە وشەی تێپەر';
        }
    }
    public function render()
    {
        return view('pages.login');
    }
}
