<div>
 
    @section('title', 'Index')
    <div class="m-4">
        <a href="{{ route('Purchase') }}"
        class="rounded px-3 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
        گەڕانەوە
    </a>
    <h1 class="text-center mb-3 mt-2 font-bold text-xl mb-4">   گەڕانەوەی کاڵا فرۆشراوەکان بە نەقد </h1>
        <div class="overflow-x-auto mt-4 mb-1">
    
            <div class="  mt-5 flex items-center justify-center  font-sans overflow-hidden mt-4">
                <div class="w-full lg:w-5/6 ">
                    <div class="flex justify-between ">
                        <div class="xl:w-1/3 sm:w-3/4 md:w-2/5  relative   xl:max-w-sm lg:w-2/5">
                            <div class="relative w-full mr-6 focus-within:text-purple-500">
                                <div class="absolute inset-y-0 flex items-center pl-2">
                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input wire:model="searchBarcode"
                                    class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                    type="text" placeholder="گەڕان بە پێ بارکۆد" aria-label="Search" />
                            </div>
                        </div>

                        <div class="xl:w-1/3 sm:w-3/4 md:w-2/5  relative   xl:max-w-sm lg:w-2/5">
                            <div class="relative w-full mr-6 focus-within:text-purple-500">
                                <div class="absolute inset-y-0 flex items-center pl-2">
                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input wire:model="searchName"
                                    class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                    type="text" placeholder="گەڕان بە پێ ناو" aria-label="Search" />
                            </div>
                        </div>
    
                        
                        <div class="xl:w-1/3 sm:w-3/4 md:w-2/5  relative   xl:max-w-sm lg:w-2/5">
                            <div class="relative w-full mr-6 focus-within:text-purple-500">
                                <div class="absolute inset-y-0 flex items-center pl-2">
                                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd"
                                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                            clip-rule="evenodd"></path>
                                    </svg>
                                </div>
                                <input wire:model="searchWasl"
                                    class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                    type="text" placeholder="گەڕان بە پێ ژمارەی وەسڵ" aria-label="Search" />
                            </div>
                        </div>
    
                        
    
    
                      
                    </div>
    
                    @if ($FroshtnBaNaqad->IsNotEmpty())
    
    
                    <div class=" shadow-md rounded my-6">
    
                        <table class=" w-full table-auto">
                            <thead>
                                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                    <th class="py-3 px-6 text-left">ناوی کاڵا</th>
                                    <th class="py-3 px-6 text-center">ژمارەی وەسڵ</th>

                                    <th class="py-3 px-6 text-left">بارکۆد</th>
                                    <th class="py-3 px-6 text-center">ژ.دانە</th>
                                    <th class="py-3 px-6 text-center">بەرواری بەسەرچوون</th>
                                    <th class="py-3 px-6 text-center">بەرواری زیادکردن</th>

                                    <th class="py-3 px-6 text-center">نرخ بە دانە</th>
                                    <th class="py-3 px-6 text-center">جۆری کاڵا</th>
                                    

                                    <th class="py-3 px-6 text-right">گەڕانەوە</th>
                                </tr>
                            </thead>
                            <tbody class="text-gray-600 text-sm font-light">
                                @foreach ($FroshtnBaNaqad as $item)
                                
    
                                <tr class="border-b border-gray-200 hover:bg-gray-100">
                                    <td class="py-3 px-6 text-left whitespace-nowrap">
                                        <div class="flex items-center">
    
                                            <span class="font-medium">{{ $item->name }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <div class="flex items-center justify-center">
    
                                            <span>{{ $item->IDWasll }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-left">
                                        <div class="flex items-center">
    
                                            <span>{{ $item->stock_id }}</span>
                                        </div>
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span>{{ $item->item }}</span> دانە
    
    
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span class="flex justify-center "> 
                                            
                                            <small><svg xmlns="http://www.w3.org/2000/svg" class="text-red-500 h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
                                              </svg></small>
                                            {{ $item->stocks->expired_at->format('Y-m-d')    }}</span>  
    
    
                                    </td>

                                    <td class="py-3 px-6 text-center">
                                        <span class="flex justify-center "> 
                                            
                                            <small>
                                                <svg xmlns="http://www.w3.org/2000/svg" class="text-green-500 h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                                  </svg>
                                            </small>
                                            {{ $item->created_at }}</span>  
    
    
                                    </td>


                                    <td class="py-3 px-6 text-center">
                                        <span> {{ number_format( $item->NrxKrenKala,0,'.','.' )}}</span>  دینار
    
    
                                    </td>
                                    <td class="py-3 px-6 text-center">
                                        <span> {{ $item->stocks->name_product_type }}</span>  
    
    
                                    </td>
                                
                                    <td wire:click.prevent="ReturnValue('{{ $item->id }}')" class="py-3 px-6 text-center">
                                        <div class="flex item-center justify-end">
                                        
                                             <a href="">
                                                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-blue-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                                                  </svg>
                                             </a>
                                         
                                        </div>
                                    </td>
                                </tr>
                                       
 
    
                                @endforeach
    
                            </tbody>
                        </table>
                        @if ($FroshtnBaNaqad->count() > 20 )
                
           
       
                        <div
                        class="grid px-4  text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
                        <span class="flex items-center col-span-3">
                            بینینی بەشەکان {{ $FroshtnBaNaqad->currentPage() }}-{{ $FroshtnBaNaqad->lastItem() }} لە {{ $FroshtnBaNaqad->currentPage() }}
                        </span>
                        <span class="col-span-2"></span>
                        <!-- Pagination -->
                        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                            <nav aria-label="Table navigation">
                                <ul class="inline-flex items-center">
                
                                    {{ $FroshtnBaNaqad->links() }}
                                </ul>
                            </nav>
                        </span>
                    </div>
                    @endif
                    </div>
                    @else
                    <div class="  rounded my-6">
                        <div class="flex items-center justify-center">
                            <div class="w-full p-6">
                                <div class="flex items-center justify-center">
                
                                    <h3 class="text-lg text-red-600 font-medium">هیچ داتایەك نەدۆزرایەوە</h3>
                                </div>
                            </div>
                        </div>
                
                        @endif
                
                    </div>
                    </div>
           
                    </div>
                </div>
            </div>
            

    
    
     
        </div>
    

</div>
