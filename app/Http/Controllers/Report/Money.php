<?php

namespace App\Http\Controllers\Report;

use Livewire\Component;
use App\Models\Stock;
use App\Models\invoice as Invoices;
use Illuminate\Support\Collection;
use App\Models\FroshtnBaNaqad as Sold;
use App\Models\FroshtnBaQarz as FroshtnBaQarz;
use Illuminate\support\Carbon;
use App\Models\position as Position;
use App\Models\KalaKrawakanWasal ;
use App\Models\outcome as Masrufat;
class Money extends Component
{



    public $option1;
    public $option2;


    public $Date;
    public $find_date_qarz_company;
    public $find_date_qarz_company_sum;

    //Koye Pare Froshtn ba naqaad
    public $find_para_naqad;
    public $find_para_naqad_sum;

    //Koye Pare Froshtn ba qarz
    public $find_para_qarz;
    public $find_para_qarz_sum;

    //Koye Pare Qazanj Kala Froshtn
    public $find_para_qazanj_kala;
    public $find_para_qazanj_kala_sum;

    // Koye Para Sarfkrdn
    public $find_para_sarfkrdn;
    public $find_para_sarfkrdn_sum;

    // Koye Paraye Mwade Kraw
    public $find_para_mwade_kraw;
    public $find_para_mwade_kraw_sum;

    public function ViewReport(){
        $this->find_date_qarz_company = KalaKrawakanWasal::whereDate('created_at',$this->Date)->sum('Konrx');
        $this->find_date_qarz_company_sum=intval($this->find_date_qarz_company);
        //Koye FroshtnBaNaqad
        $this->find_para_naqad = Sold::whereDate('created_at',$this->Date)->sum('KoNrx');
        $this->find_para_naqad_sum=intval($this->find_para_naqad);
        //Koye FroshtnBaQarz
        $this->find_para_qarz = FroshtnBaQarz::whereDate('created_at',$this->Date)->sum('KoNrx');
        $this->find_para_qarz_sum=intval($this->find_para_qarz);
        //Koye Qazanj Kala Froshtn
        $this->find_para_qazanj_kala = Sold::whereDate('created_at',$this->Date)->sum('Qazanj');
        $this->find_para_qazanj_kala_sum=intval($this->find_para_qazanj_kala);
        $find_qazanj_qarz = FroshtnBaQarz::whereDate('created_at',$this->Date)->sum('Qazanj');
        $this->find_para_qazanj_kala_sum+=$find_qazanj_qarz;
        //Koye Para Sarfkrdn
        $this->find_para_sarfkrdn = Masrufat::whereDate('created_at',$this->Date)->sum('name');
        $this->find_para_sarfkrdn_sum=intval($this->find_para_sarfkrdn);
        //Koye Paraye Mwade Kraw
        $this->find_para_mwade_kraw = Stock::whereDate('created_at',$this->Date)->sum('KoyNrx');
        $this->find_para_mwade_kraw_sum=intval($this->find_para_mwade_kraw);

    }


    public function ViewReportBetweenTwoDays()
    {
         $this->find_date_qarz_company = KalaKrawakanWasal::whereBetween('created_at',[$this->option1,$this->option2])->sum('Konrx');
         $this->find_date_qarz_company_sum=intval($this->find_date_qarz_company);
        //Koye FroshtnBaNaqad
        $this->find_para_naqad = Sold::whereBetween('created_at',[$this->option1,$this->option2])->sum('KoNrx');
        $this->find_para_naqad_sum=intval($this->find_para_naqad);
        //Koye FroshtnBaQarz
        $this->find_para_qarz = FroshtnBaQarz::whereBetween('created_at',[$this->option1,$this->option2])->sum('KoNrx');
        $this->find_para_qarz_sum=intval($this->find_para_qarz);
        //Koye Qazanj Kala Froshtn
        $this->find_para_qazanj_kala = Sold::whereBetween('created_at',[$this->option1,$this->option2])->sum('Qazanj');
        $this->find_para_qazanj_kala_sum=intval($this->find_para_qazanj_kala);
        $find_qazanj_qarz = FroshtnBaQarz::whereBetween('created_at',[$this->option1,$this->option2])->sum('Qazanj');
        $this->find_para_qazanj_kala_sum+=$find_qazanj_qarz;
        //Koye Para Sarfkrdn
        $this->find_para_sarfkrdn = Masrufat::whereBetween('created_at',[$this->option1,$this->option2])->sum('name');
        $this->find_para_sarfkrdn_sum=intval($this->find_para_sarfkrdn);
        //Koye Paraye Mwade Kraw
        $this->find_para_mwade_kraw = Stock::whereBetween('created_at',[$this->option1,$this->option2])->sum('KoyNrx');
        $this->find_para_mwade_kraw_sum=intval($this->find_para_mwade_kraw);
        

     }
    public function render()
    {


        return view('report.money')->extends('layouts.base');
    }
}
