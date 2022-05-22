<?php

namespace App\Http\Controllers\Person;

use Livewire\Component;
use App\Models\User ;
class Create extends Component
{

    public $userid;
    public $name;
    public $username;
    public $password;
    public $phone;
    public $EditForm=false;



    // 12 Column and update real time
    
    public $user;
    public $ListKala;
    public $ListCompanya;
    public $ListGarak;
    public $ListMaxzan;
    public $KalaKren;
    public $Bakarhenar;
    public $KalaFroshtn;
    public $Nawneshan;
    public $hokareWarnageraw;
    public $BashiGarawakan;


    // ----------------------------------------------------------------
    public $Insertname;
    public $Insertusername;
    public $Insertpassword;
    public $Insertphone;
    public $ShowModel=false;


    public function SaveUser(){
        $this->validate([
            'Insertname' => 'required',
            'Insertusername' => 'required',
            'Insertpassword' => 'required',
            'Insertphone' => 'required',
        ]);

        User::create([
            'name' => $this->Insertname,
            'username' => $this->Insertusername,
            'password' => $this->Insertpassword,
            'phone' => $this->Insertphone,
        
        ]);
        sweetAlert()->livewire()->addSuccess("بەسەرکەتووی زیاد کرا");
        return redirect()->route('CreatePerson');
        $this->ShowModel=false;

        
    }


    

    public function edit(User $user)
    {
        $this->name = $user->name;
        $this->username = $user->username;
        $this->password = $user->show_password;
        $this->phone = $user->phone;
        $this->EditForm=true;
        $this->userid=$user->id;
      

        
    }


    public function EditUser(){

        $this->Validate([
            'name' => 'required',
            'username' => 'required',
            'password' => 'required',
            'phone' => 'required',
        ]);

        $user=User::FindOrFail($this->userid);
        $user->name=$this->name;
        $user->username=$this->username;
        $user->password=$this->password;
        $user->phone=$this->phone;
        $user->save();
        $this->EditForm=false;
        sweetAlert()->livewire()->addSuccess("بەسەرکەتووی گۆرانکاریکە کرا");
        return redirect()->route('CreatePerson');

    }

    
    public function clicked(User $user){
        $this->user = User::FindOrFail($user->id);
        $this->ListKala = $this->user->ListKala;
        $this->ListCompanya = $this->user->ListCompanya;
        $this->ListGarak = $this->user->ListGarak;
        $this->ListMaxzan = $this->user->ListMaxzan;
        $this->KalaKren = $this->user->KalaKren;
        $this->Bakarhenar = $this->user->Bakarhenar;
        $this->KalaFroshtn = $this->user->KalaFroshtn;
        $this->Nawneshan = $this->user->Nawneshan;
        $this->hokareWarnageraw = $this->user->hokareWarnageraw;
        $this->BashiGarawakan = $this->user->BashiGarawakan;

  
    }

    public function updatedListKala(){
        $this->user->update(['ListKala'=>$this->ListKala]);
    }
    public function updatedListCompanya(){
        $this->user->update(['ListCompanya'=>$this->ListCompanya]);
    }
    public function updatedListGarak(){
        $this->user->update(['ListGarak'=>$this->ListGarak]);
    }
    public function updatedListMaxzan(){
        $this->user->update(['ListMaxzan'=>$this->ListMaxzan]);
    }
    public function updatedKalaKren(){
        $this->user->update(['KalaKren'=>$this->KalaKren]);
    }
    public function updatedBakarhenar(){
        $this->user->update(['Bakarhenar'=>$this->Bakarhenar]);
    }
    public function updatedKalaFroshtn(){
        $this->user->update(['KalaFroshtn'=>$this->KalaFroshtn]);
    }
    public function updatedNawneshan(){
        $this->user->update(['Nawneshan'=>$this->Nawneshan]);
    }
    public function updatedhokareWarnageraw(){
        $this->user->update(['hokareWarnageraw'=>$this->hokareWarnageraw]);
    }
    public function updatedBashiGarawakan(){
        $this->user->update(['BashiGarawakan'=>$this->BashiGarawakan]);
    }

    public function delete($id)
    {
        $user = User::findorfail($id)->delete();
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی  سڕایەوە');
        return redirect()->route('CreatePerson');
    }
    public function render()
    {
        $users=User::latest()->get();
        return view('person.create',compact('users'))->extends('layouts.base');
    }
}
