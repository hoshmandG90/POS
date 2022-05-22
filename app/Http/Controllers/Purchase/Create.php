<?php

namespace App\Http\Controllers\Purchase;

use Livewire\Component;
use App\Models\Stock;
use App\Models\invoice as Invoices;
use Illuminate\Support\Collection;
use App\Models\FroshtnBaNaqad as Sold;
use App\Models\FroshtnBaQarz as FroshtnBaQarz;
use Illuminate\support\Carbon;
use App\Models\position as Position;
class Create extends Component
{


    public $query;
    public $search_results;
    public $how_many;

    public $Receipt_number;


    // zanyare lasar bashi sarawwe table
    public $NameKryar;
    public $Maxzan;
    public $NrxGayandn;
    public $phone;
    public $driver_name;
    public $address;
    public $jorePsula;
    // --------------------------------

    public $sum;


    public $how_many2;
    public $search_results2;
    public $checked=false;
   
    public function mount(){
        $this->query = '';
        $this->how_many = 1;
        $this->how_many2 = 1;
        $search_results = Collection::empty();

        $this->Receipt_number =Invoices::orderBy('id','DESC')->first();
        $search_results_sum=sold::where(['user_id'=>auth()->user()->id])->get();
  



     
    }

    public function updatedQuery()
    {

    
        $this->search_results = Stock::where('is_barcode',false)->Find(['id'=>$this->query])
        ->take($this->how_many);
        
        foreach( $this->search_results as $result){
            $this->sum=$result->selling_price_per_piece* $this->how_many;

           
            if($result->total_number_of_units !=0){
                if($result->expired_at >= Carbon::today()){
                    $result->total_number_of_units=$result->total_number_of_units-1;
                    $result->save();
                    $find_sold=Sold::where(['checkBox'=>false,'stock_id'=>$result->id])->first();
                    
                    
                    
                                if($find_sold == null){
                                Sold::create([
                                    'IDWasll'=>$this->Receipt_number->id,
                                    'name'=>$result->name,
                                    'price' => $result->selling_price_per_piece,
                                    'item' => $this->how_many,
                                    'KoNrx' => $result->selling_price_per_piece * $this->how_many,
                                    'CasherName' => auth()->user()->name,          
                                    'stock_id' => $result->id,
                                    'user_id' => auth()->user()->id,
                                    'CompanyName' => $result->name_company,
                                    'joreKala' => $result->name_product_type,
                                    'jorePsula' => $this->jorePsula,
                                    'IDKala' => $result->id,
                                    'Koywasl' =>$result->selling_price_per_piece * $this->how_many,
                                    'Qazanj' => $result->selling_price_per_piece - $result->purchase_price_in_units,
                                    'NrxKrenKala' => $result->purchase_price_in_units,
                                    'NameKryar' => $this->NameKryar,
                                    'NrxGayandn' => 3000,
                                    'Maxzan' =>$this->Maxzan,
                                    'driver_name'=>$this->driver_name,
                                    'phone' => $this->phone,
                                    'address' => $this->address,
                                    'checkBox' => false,
                                ]);                
                            }else{
                                $find_sold->item = $find_sold->item+1;
                                $find_sold->KoNrx = $find_sold->price * $find_sold->item;
                                $find_sold->Koywasl = $find_sold->price * $find_sold->item;
                            
                                $find_sold->save();
                            }

                  
                    
            
                }
                else{
                 sweetAlert()->livewire()->addInfo('کاڵاکە ئیکسپایەر بووە تکایە دووبارە بکەوە');

                }

              } else{
                sweetAlert()->livewire()->addError('کاڵاکە لە مەخزەن بوونی نەماوە ');

           }
       
        }

    }

  

    public function ReceiptRenewal(){
        Invoices::create([
            'number' =>1
        ]);
        $find_sold=sold::where(['user_id'=>auth()->user()->id,'checkBox'=>false])->update(['checkBox'=>true]);
        $this->Receipt_number =Invoices::orderBy('id','DESC')->first();
       

        return redirect()->to(route('CreatePurchase'));
             


        
    }


 
    
    public function resetQuery() {
        $this->query = '';
        $this->how_many = 1;
        $result = Collection::empty();
        return redirect()->to(route('CreatePurchase'));
     

    }
      

    public $NrxGyandn;
    public $position_id;
    public function setProperity(Position $position){
     $this->address = $position->name_shar;
        $this->driver_name = $position->driver_name;
        $this->NrxGyandn = $position->NrxGyandn;
        $this->position_id = $position->id;
     

    

    }

    
  
    public function AcceptCustomer(){
        
        $find_customer=Sold::where(['IDWasll'=>$this->Receipt_number->id,'checkBox'=>false])->get();
        $find_sum_price=Sold::where(['IDWasll'=>$this->Receipt_number->id])->sum('KoNrx');
        
         
        $find_nrx=Position::findorfail(['id'=>$this->position_id])->first();
        foreach($find_customer as $customer){
             $customer->NameKryar = $this->NameKryar;
             $customer->Maxzan = $this->Maxzan;
             $customer->driver_name = $find_nrx->name_driver;
             $customer->phone = $this->phone;
             $customer->address = $this->address;
             $customer->NrxGayandn = $find_nrx->NrxGyandn;
             $customer->jorePsula = $this->jorePsula;
             $customer->save();
   
         }

    
       
   
        
   
          
     
   
     
       }
    
    public function render()
    {
        $search_results_sum=sold::where(['user_id'=>auth()->user()->id,'checkBox'=>false])->get();
        $find_invoices=Sold::where(['user_id'=>auth()->user()->id,'checkBox'=>false,'IDWasll'=>$this->Receipt_number->id])->get();
        $Postion=Position::latest()->get();
        return view('purchase.create',compact('search_results_sum','find_invoices','Postion'))->extends('layouts.base');
    }
}
