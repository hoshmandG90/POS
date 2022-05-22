<div class="mx-auto p-6">

    @section('title','Purchase')
    <a href="{{ route('Buy') }}" class="rounded px-3 mb-2 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
        گەڕانەوە
    </a>
    <h1 class="text-center text-xl my-4">ئەو کۆمپانیایانەی بە قەرز کاڵامان لێ کڕیون </h1>
    <div class="">
        
        <div class=" sm:w-3/4 md:w-2/5  relative  xl:max-w-sm lg:w-2/5">
            <div class="relative w-full mr-6 focus-within:text-purple-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input wire:model="SearchCompany"
                    class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="گەڕان بە ناوی کۆمپانیا" aria-label="Search" />
            </div>
        </div>

     
   

        
    </div>

      @if ($ShowEditWasl)
      <div class="bg-white border border-gray-500  rounded-lg mt-2">
        <section class="p-6 ">
            <form  wire:submit.prevent="setEditCompnay"
                class="container flex flex-col space-y-12 ">
                 <div class="flex justify-end">
                    <fieldset class="grid  gap-6 p-6 rounded-md  dark:bg-coolGray-900">
                   
                        <div class=" flex flex-row-reverse grid-cols-8 gap-4 col-span-full lg:col-span-3">
                            <div class="col-span-full sm:col-span-2">
                                <label for="city" class="text-sm block text-sm text-center  font-medium text-gray-700">ناوی
                                    کۆمپانیا </label>
                                <input wire:model.defer="NameCo" id="city" type="text" placeholder=""
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('NameCo')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-full sm:col-span-2">
                                <label for="state"
                                    class="text-sm block text-sm font-medium text-center  text-gray-700">ژمارەی وەسڵ</label>
                                <input wire:model.defer="JmaraPsula" type="number"
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('JmaraPsula')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                         
                            <div class="col-span-full sm:col-span-2">
                                <label for="state"
                                    class="text-sm block text-sm font-medium text-center  text-gray-700">کۆی پارەی وەسڵ</label>
                                <input wire:model.defer="KoyPsula" type="number"
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('KoyPsula')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                         
                         
                      </div>
                        <div class="flex flex-row-reverse grid-cols-8 gap-4 col-span-full lg:col-span-3">
                            
                            <div class="col-span-full sm:col-span-2">
                                <label for="city"
                                    class="text-sm block text-sm font-medium text-center  text-gray-700">بەرواری
                                    بەسەرچوون</label>
                                <input  type="date" wire:model.defer="Date" placeholder=""
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('Date')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-full sm:col-span-2">
                                <label for="state" class="text-sm block text-sm font-medium text-center text-gray-700">بڕی پارەدان</label>
                                <input wire:model.defer="BryWaslBuu" id="state" type="number"
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('BryWaslBuu')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
    
                         
        
                        </div>
                        <div class="flex flex-row-reverse grid-cols-8 gap-4 col-span-full lg:col-span-3">
    
                     
    
                        <div class="flex justify-center col-span-full sm:col-span-2 ">
                            <button type="submit"
                                class="w-full bg-yellow-400 text-white font-medium py-2 px-4 rounded-md">
                                گۆرانکاریکردن
                            </button>
                        </div>
                        </div>
                    </fieldset>
                     
              
            
                 </div>
    
    
            </form>
        </section>
       </div>
    
      @endif   

    @if ($PsulaKren->IsNotEmpty())
    <div class=" shadow-md rounded my-6">
        
        <table class=" w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ناوی کۆمپانیا</th>
                    <th class="py-3 px-6 text-center">ژمارەی وەسڵ</th>
                    <th class="py-3 px-6 text-center">بەروار</th>
                    <th class="py-3 px-6 text-center">جۆری وەسڵ</th>
                    <th class="py-3 px-6 text-center">کۆی نرخی وەسڵ</th>
                    <th class="py-3 px-6 text-center">سڕینەوە</th>
                    <th class="py-3 px-6 text-left">پارەدان</th>


                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">


                @foreach ($PsulaKren as $item)
                    
              
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">

                            <span class="font-medium">{{ $item->NameCo }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="">

                            <span>{{ $item->JmaraPsula }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>{{ $item->Date->format('d-m-Y') }}</span> 


                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>{{ $item->JorePsula }}</span>  


                    </td>
                    <td class="py-3 px-6 text-center">
                        <span> {{ number_format( $item->KoyPsula,0,'.','.') }}</span>  دینار


                    </td>
                
                    <td class="py-3 px-6 text-right">
                        <div class="flex item-center justify-center">
                        
                          
                            <div wire:click.prevent="delete('{{ $item->id }}')"  class="w-4 mr-2 transform text-red-400   hover:text-red-700 hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                </svg>
                            </div>
                        </div>
                    </td>
                    <td  wire:click.prevent="EditCompnay('{{ $item->id }}')" class="py-3 px-6 text-left">
                        <div class=" text-right w-4 mr-2 transform text-purple-300 hover:text-purple-500 hover:scale-110">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                        </div>
                    </td>
                </tr>
                @endforeach

            </tbody>

        </table>
                                                       
             
        @if ($PsulaKren->count() > 20)
            
     
        <div
        class="grid px-4  text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800">
        <span class="flex items-center col-span-3">
            بینینی بەشەکان {{ $PsulaKren->currentPage() }}-{{ $PsulaKren->lastItem() }} لە {{ $PsulaKren->currentPage() }}
        </span>
        <span class="col-span-2"></span>
        <!-- Pagination -->
        <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
            <nav aria-label="Table navigation">
                <ul class="inline-flex items-center">

                    {{ $PsulaKren->links() }}
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
