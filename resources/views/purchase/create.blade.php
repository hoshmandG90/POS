<div class="my-8 mx-4">
    @section('title','Purchase')  
     <a href="{{ route('Purchase') }}" class="rounded px-3 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
                گەڕانەوە
            </a>
        <main class=" mt-4 overflow-y-auto">
         
            <div class="container grid px-6 mx-auto">
             
             
                @if(!empty($query))
                @if(!$search_results->isNotEmpty())
                <div class="flex p-4 mb-4 text-sm text-red-700 bg-red-100 rounded-lg dark:bg-red-200 dark:text-red-800" role="alert">
                    <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                    <div>
                      <span class="font-medium">کاڵاکە نەدۆزرایەوە تکایە دڵنیابە   </span> 
                    </div>
                  </div>
                    
                @endif
            @endif
                <div>
                </div>
        
                <div class="flex justify-between">
                      <div class=" ">
                  
                        
                        <div class="bg-white border border-gray-500  rounded-lg mt-2">
                            <section class="p-6 ">
                                <form 
                                    class="container flex flex-col space-y-12 ">
                                     <div class="flex justify-between">
                                        <fieldset class="grid  gap-6 p-6 rounded-md  dark:bg-coolGray-900">
                                       
                                            <div class=" flex flex-row-reverse grid-cols-8 gap-4 col-span-full lg:col-span-3">
                                               
                                             
                                                <div class="col-span-full sm:col-span-2">
                                                    <label for="state"
                                                        class="text-sm block text-sm font-medium text-center text-gray-700">ناوی کڕیار</label>
                                                    <input wire:model.defer="NameKryar"  type="text"
                                                        class="w-full pl-6 pr-2
                                                             text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                                  
                                                </div>
                                                <div class="col-span-full sm:col-span-2">
                                                    <label for="state"
                                                        class="text-sm block text-sm font-medium text-center text-gray-700">مەخزەن</label>
                                                    <input wire:model.defer="Maxzan"  type="text"
                                                        class="w-full pl-6 pr-2
                                                             text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                                  
                                                </div>
                                             
                                                <div class="col-span-full sm:col-span-2">
                                                    <label for="city" class="text-sm block text-sm font-medium text-center text-gray-700">سایەق</label>
                                                    <select wire:change="setProperity($event.target.value)"
                                                    class="w-full pl-6 pr-2
                                                        text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                                    >

                                                    <option value="Null">بێ ناوی سایەق</option>
                                                    @foreach ($Postion as $row)
                                                        
                                                    <option value="{{ $row->id }}">{{ $row->name_driver }}</option>
                                                    @endforeach


                                              



                                                </select>
                                                   
                                                </div>
                                             
                                                <div class="col-span-full sm:col-span-2">
                                                    <label for="state"
                                                        class="text-sm block text-sm font-medium text-center text-gray-700">ژمارە موبایل</label>
                                                    <input wire:model.defer="phone"    type="text"
                                                        class="w-full pl-6 pr-2
                                                             text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                                  
                                                </div>
                                                  
                                              
                                             
                                          </div>
                                          <div class="col-span-full sm:col-span-2">
                                            <label for="state"
                                                class="text-sm block text-sm font-medium text-center text-gray-700">گەڕەک</label>
                                            <input   wire:model.defer="address"  type="text"
                                                class="w-full pl-6 pr-2
                                                     text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                          
                                        </div>
                                            <div class="flex justify-center space-x-10 grid-cols-8 gap-4 col-span-full lg:col-span-3">
                        
                                                <div class="flex  justify-center col-span-full sm:col-span-2 ">
                                                    <label class="inline-flex items-center mt-3">
                                                        <input value="نەقد" wire:model.defer="jorePsula" type="radio" class="form-radio h-5 w-5 text-green-600"   checked><span class="ml-2 text-gray-700">نەقد</span>
                                                    </label>
                                                </div>
                        
                                            <div  class="flex justify-center col-span-full sm:col-span-2 ">
                                                <label class="inline-flex items-center mt-3">
                                                    <input value="قەرز" wire:model.defer="jorePsula" type="radio" class="form-radio h-5 w-5 text-red-600"   ><span class="ml-2 text-gray-700">قەرز</span>
                                                </label>
                                            </div>
                                            </div>
                                        </fieldset>
                                         
                                        <div class=" px-12   flex flex-row-reverse flex-col  col-span-full mt-4  lg:col-span-3">
                                            <div class="col-span-full sm:col-span-2">
                                                <label for="city" class="text-sm block text-sm font-medium text-center text-gray-700">گەڕان بەپێ ناو </label>
                                                <input       id="city" type="text" placeholder=""
                                                    class="w-full pl-6 pr-2
                                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                                @error('name')
                                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-span-full sm:col-span-2">
                                                <label for="state"
                                                    class="text-sm block text-sm font-medium  text-center text-gray-700">گەڕان بەپێ بارکۆد</label>
                                                <input  autofocus  wire:keydown.enter="resetQuery" wire:model="query" type="number"
                                                    class="w-full pl-6 pr-2
                                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple" autocomplete="">
                                                @error('barcode')
                                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                                @enderror
                                            </div>
                                         
                                          
                                      </div>
                                
                                     </div>
                        
                        
                                </form>

                  
                              
                            </section>
                           </div>
        
                    
                 
                   
                  
                
          
                    </div>
                 
                    <div class="flex flex-col text-right  space-y-2">
                        <a wire:click.prevent="AcceptCustomer" >
                            <button class="px-4 py-2 text-sm font-medium leading-5 text-white transition-colors
                             duration-150 bg-red-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                             
                              <div class="flex space-x-1 items-center">
                                  
                                   <span> <span>{{ $Receipt_number->id }}</span> ژمارەی وەسڵ</span> 
    
                                </div>
                        </button>   
                      </a>
              
                      <a wire:click.prevent="ReceiptRenewal" wire:click.prevent="$refresh" >
                        <button class="px-4 sound py-2 text-sm font-medium leading-5 text-white transition-colors duration-150 bg-purple-600 border border-transparent rounded-lg active:bg-purple-600 hover:bg-purple-700 focus:outline-none focus:shadow-outline-purple">
                         
                          <div class="flex space-x-1 items-center">
                               <span>تازەکردنەوەی وەسڵ </span> 
    
                            </div>
                    </button>   
                  </a>
          
                    
                    
                    <a   @if ($find_invoices->isNotEmpty()) onclick="BigInvoices('/invoice')"    @endif  target="_self">
                          <button class="px-4 py-2 text-sm font-medium leading-5 text-white 
                          transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-yellow-500 hover:bg-yellow-500 focus:outline-none focus:shadow-outline-purple">
                           
                            <div class="flex space-x-1 items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 17h2a2 2 0 002-2v-4a2 2 0 00-2-2H5a2 2 0 00-2 2v4a2 2 0 002 2h2m2 4h6a2 2 0 002-2v-4a2 2 0 00-2-2H9a2 2 0 00-2 2v4a2 2 0 002 2zm8-12V5a2 2 0 00-2-2H9a2 2 0 00-2 2v4h10z" />
                                  </svg>
                                 وەسڵی بچووك
                            </div>
                      </button>   
                    </a>
                 
                    <a @if ($find_invoices->isNotEmpty()) onclick="BigInvoices('/Receipt')"    @endif target="_self"> 
                        <button class="px-4 py-2 text-sm font-medium leading-5 text-white
                         transition-colors duration-150 bg-gray-600 border border-transparent rounded-lg active:bg-yellow-500 hover:bg-yellow-500 focus:outline-none focus:shadow-outline-purple">
                         
                          <div class="flex space-x-1 items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M5 4v3H4a2 2 0 00-2 2v3a2 2 0 002 2h1v2a2 2 0 002 2h6a2 2 0 002-2v-2h1a2 2 0 002-2V9a2 2 0 00-2-2h-1V4a2 2 0 00-2-2H7a2 2 0 00-2 2zm8 0H7v3h6V4zm0 8H7v4h6v-4z" clip-rule="evenodd" />
                              </svg>
                               وەسڵی گەورە
                            </div>
                    </button>   
                  </a>
                  
                  <a > 
                    @php
                    $sum=0;
                    for($i=0;$i<count($search_results_sum);$i++){
                      $Total_price=$search_results_sum[$i]['item']*$search_results_sum[$i]['price'];
                      $sum += $Total_price;
                    }
                @endphp
                    <button class="px-4 py-2 ">
                     
                      <div class=" flex flex-col space-x-1 items-center">
                        
                        <p class="truncate">کۆی گشتی پارە  </p>
                          <span>{{ number_format($sum,0,'.','.') }} دینار</span>
                        </div>
                </button>   
              </a>
    
                </div>
            </div>
                  
            
            <livewire:purchase.table/>   
            </div>
        </main>
    </div>
    
    <script >
         function printExternal(url) {
        var printWindow = window.open( url, 'Print', 'left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
        printWindow.addEventListener('load', function(){
            printWindow.print();
          
        });
    }
    </script>
    
    <script >
        function BigInvoices(url) {
       var printWindow = window.open( url, 'Print', 'left=200, top=200, width=950, height=500, toolbar=0, resizable=0');
       printWindow.addEventListener('load', function(){
           printWindow.print();
         
       });
    }
    </script>
    
    
    
    </div>
       


    {{-- @if ($checked)
    <div class="flex justify-evenly">
  <div class="col-span-full sm:col-span-2">
      <label for="state"
          class="text-sm block text-sm font-medium text-center text-gray-700">کۆی قەرز</label>
      <input  type="number"
          class="w-full pl-6 pr-2
               text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
    
  </div>

  <div class="col-span-full sm:col-span-2">
      <label for="state"
          class="text-sm block text-sm font-medium text-center text-gray-700"> کۆی واسڵ کردنی ئێستا</label>
      <input    type="number"
          class="w-full pl-6 pr-2
               text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
    
  </div>

  <div class="col-span-full sm:col-span-2">
      <label for="state"
          class="text-sm block text-sm font-medium text-center text-gray-700">بڕی چونە حیساب</label>
      <input    type="number"
          class="w-full pl-6 pr-2
               text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
    
  </div>

</div>
@endif --}}