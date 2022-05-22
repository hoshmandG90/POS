<div class="mt-5 p-6">
    @section('title','Notification')
    
    <a href="{{ route('Notification') }}" class="rounded px-3 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
گەڕانەوە
</a>
<h1 class="text-center text-xl">لیستی کاڵا کەمبووەکان</h1>
    <div class="flex justify-between mt-5 mb-4 bg-white   shadow-md p-5">

        <div class="flex justify-between space-x-10">
   <div class="flex flex-col">
            <div class="mt-2 mb-3">
                <input type="number" wire:model="options" 
                class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                type="text" placeholder="ژمارەیك دابگرە" aria-label="Search" >
            </div>
            <h1 class="text-center">بۆ</h1>
            <div class="mt-2 mb-3">
                <input type="number" wire:model="options2"
                class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                type="text" placeholder="ژمارەیك دابگرە" aria-label="Search" >
            </div>

        </div>
        <div>
        <a  wire:click="GetExtraced" class="bg-yellow-500 mt-2 flex justify-center  shadow-md text-sm text-white font-bold py-3 px-4 hover:bg-yellow-600 rounded uppercase" 
        href="#">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
          </svg>

        هێنان</a>
        </div>
   
        </div>
     

        <div class="flex justify-between space-x-10">
              <div class="flex flex-col">
            
            <div class="mt-2 mb-3">
                <input wire:model="quantity"  type="number"
                class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                type="text" placeholder="ژمارەیك دابگرە" aria-label="Search" >
            </div>
            <a wire:click.prevent="SeeActionResult('{{ $quantity }}')" class="bg-yellow-500 flex justify-center  shadow-md text-sm text-white font-bold py-3 px-4 hover:bg-yellow-600 rounded uppercase" 
            href="#">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
              </svg>

            بینین</a>

            <span class="text-center my-3 mb-1">ژمارەی دانە  : @if ($sum_count_stock) {{ count($sum_count_stock) }} @else 0 @endif</span>
                
              </span>

                
        
        </div>  

        <div class="flex flex-col">
              <label class="inline-flex items-center mt-3">
            <input type="checkbox" wire:model="condition" value=">=" class="form-checkbox h-5 w-5 text-gray-600"  @if ($condition == ">") checked  @endif ><span class="ml-2 text-gray-700">زیاترە لە</span>
        </label>
        <label class="inline-flex items-center mt-3">
            <input type="checkbox"  wire:model="condition2" value="<=" class="form-checkbox h-5 w-5 text-gray-600"  @if ($condition2 == "<") checked  @endif   class="form-checkbox h-5 w-5 text-gray-600"  ><span class="ml-2 text-gray-700">کەمتر لە</span>
        </label>
        <label class="inline-flex items-center mt-3">
            <input type="checkbox"   wire:model="condition3" value="=" class="form-checkbox h-5 w-5 text-gray-600"  @if ($condition3 == "=") checked  @endif   class="form-checkbox h-5 w-5 text-gray-600"  ><span class="ml-2 text-gray-700">یەکسانە بە</span>
        </label>
        </div>
      
        </div>
      

    </div>
        
                            
                   
        
    <div class=" shadow-md rounded my-6">

        <table class=" w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ژمارە</th>

                    <th class="py-3 px-6 text-left">ناوی کاڵا</th>
                    <th class="py-3 px-6 text-center">بارکۆد</th>
                    <th class="py-3 px-6 text-center">ژ.دانە</th>
                    <th class="py-3 px-6 text-center">بەرواری بەسەرچوون</th>
                    <th class="py-3 px-6 text-center">بەرواری زیادکردن</th>

                    <th class="py-3 px-6 text-center">نرخ بە دانە</th>
                    <th class="py-3 px-6 text-center">جۆری کاڵا</th>

                    <th class="py-3 px-6 text-center">گۆرانکاری</th>

                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">
                @foreach ($Stocks as $index=>$stock)


                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left">
                        <span>{{ $index +1 }}</span> 


                    </td>
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">

                            <span class="font-medium">{{ $stock->name }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">

                            <span>{{ $stock->id }} </span>

                        
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>{{ $stock->total_number_of_units }}</span> دانە


                    </td>
                    <td class="py-3 px-6 text-center">
                      
                        <span class="flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 text-red-500 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M16.707 10.293a1 1 0 010 1.414l-6 6a1 1 0 01-1.414 0l-6-6a1 1 0 111.414-1.414L9 14.586V3a1 1 0 012 0v11.586l4.293-4.293a1 1 0 011.414 0z" clip-rule="evenodd" />
                              </svg>
                          
                            {{ $stock->expired_at->format('d-m-Y') }}</span>  


                    </td>
                    <td class="py-3 px-6 text-center">
                          
                        <span class="flex justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-500 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M7 11l5-5m0 0l5 5m-5-5v12" />
                              </svg>
                          
                            {{ $stock->created_at->format('d-m-Y') }}</span>  


                    </td>
                    <td class="py-3 px-6 text-center">
                        <span> {{ number_format( $stock->selling_price_per_piece,0,'.','.' )}}</span>  دینار


                    </td>
                    <td class="py-3 px-6 text-center">
                        <span> {{ $stock->name_product_type }}</span>  


                    </td>
                
                    <td class="py-3 px-6 text-center">
                        <div class="flex item-center justify-center">
                            <div wire:click.prevent="delete('{{ $stock->id }}')" class="w-4 mr-2 transform text-red-400   hover:text-red-700 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>
        </table>

        

        @if ($Stocks->count() > 20 )
            
       
   
        <div
        class="grid px-4  text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
            بینینی بەشەکان {{ $Stocks->currentPage() }}-{{ $Stocks->lastItem() }} لە {{ $Stocks->currentPage() }}
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                <ul class="inline-flex items-center">

                    {{ $Stocks->links() }}
                </ul>
            </nav>
        </span>
    </div>
    @endif
    </div>
  
    </div>
</div>
</div>

</div>