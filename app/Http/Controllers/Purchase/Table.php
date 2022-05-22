<?php

namespace App\Http\Controllers\Purchase;

use Livewire\Component;
use App\Models\Stock;
use App\Models\invoice as Invoices;
use Illuminate\Support\Collection;
use App\Models\FroshtnBaNaqad as Sold;
use Illuminate\support\Carbon;
class Table extends Component
{
    public $cart_items;

    public function delete($id){
        $find_sold=sold::FindOrFail($id);
        if($find_sold){
            $find_stock=stock::FindOrFail($find_sold->stock_id);
            if($find_stock){
                // Count all to stock
               $find_stock->total_number_of_units= $find_stock->total_number_of_units+$find_sold->item;
               $find_stock->save();

               // Update sold
               $find_sold->item=$find_sold->item-$find_sold->item;
               $find_sold->delete();

               
            }
        }
        return redirect();

   }



    public function Plus($id){
        $find_sold=Sold::FindOrFail($id);
        if($find_sold){
            $find_stock=Stock::FindOrFail([$find_sold->stock_id])->first();
             if($find_stock->id){
                $find_stock->total_number_of_units == 0 ?  $find_stock->total_number_of_units=0:    $find_stock->total_number_of_units-=1;
                    $find_stock->save();
                if($find_sold->item == 1){
                    $find_sold->delete();
                }else{
                    $find_stock->total_number_of_units == 0 ?    $find_stock->total_number_of_units=0 : $find_sold->item+=1;                   
                    $find_sold->save();
                }
             }
        }
        return redirect()->to(route('CreatePurchase'));
      

    }
    

    public function Minus($id){
        $find_sold=Sold::FindOrFail($id);
        if($find_sold){
            $find_stock=Stock::FindOrFail([$find_sold->stock_id])->first();
             if($find_stock->id){

                $find_stock->total_number_of_units+=1;
                $find_stock->save();
                if($find_sold->item == 1){
                    $find_sold->delete();
                }else{
                    $find_sold->item-=1;
                    $find_sold->save();
                }
             }
        }
        return redirect()->to(route('CreatePurchase'));

        
    }

    
    public function render()
    {
        $this->cart_items = Sold::where(['checkBox'=>false])->latest()->get();

        return view('purchase.table')->extends('layouts.base');
    }
}
