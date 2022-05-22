<?php

namespace App\Http\Controllers\Buy;

use Livewire\Component;
use App\Models\PsulaKren;
use Livewire\WithPagination;
use App\Models\WaslKredeQarzCompanyakan;
class Company extends Component
{
    use WithPagination;

    public $ShowEditWasl=false;


    public $NameCo;
    public $JmaraPsula;
    public $KoyPsula;
    public $Date;
    public $BryWaslBuu;
    public $JorePsula;

    public $find_PsulaKren;
    public $SearchCompany;

    public function delete($id)
    {
        PsulaKren::find($id)->delete();
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی سڕایەوە');
        return redirect()->back();
    }

    public function EditCompnay(PsulaKren $PsulaKren){
        $this->ShowEditWasl=true;
        $this->NameCo=$PsulaKren->NameCo;
        $this->JmaraPsula=$PsulaKren->JmaraPsula;
        $this->KoyPsula=$PsulaKren->KoyPsula;
        $this->Date=$PsulaKren->Date;
        $this->JorePsula=$PsulaKren->JorePsula;

        $this->find_PsulaKren=PsulaKren::find($PsulaKren->id);


     
        
    }

    public function setEditCompnay(){
        
        WaslKredeQarzCompanyakan::create([
            'NameCo'=>$this->NameCo,
            'JmaraPsula'=>$this->JmaraPsula,
            'KoyPara'=>$this->KoyPsula,
            'JorePsula'=>$this->JorePsula,
            'Date'=>$this->Date,
            
            'BryWaslBuu'=>$this->BryWaslBuu,
            'KoyQarzMawa'=> $this->KoyPsula - $this->BryWaslBuu,
        
        ]);

        $this->find_PsulaKren->KoyPsula=$this->KoyPsula - $this->BryWaslBuu;
        $this->find_PsulaKren->save();
        sweetAlert()->livewire()->addSuccess('بەسەرکەتووی زیادکرا');
        $this->ShowEditWasl=false;

    }
    public function render()
    {
        $PsulaKren=PsulaKren::where('NameCo','LIKE','%'.$this->SearchCompany.'%')->where(['JorePsula'=>'قەرز'])->latest()->paginate(20);
        return view('buy.company',compact('PsulaKren'))->extends('layouts.base');
    }
}
