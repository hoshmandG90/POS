<div>
    @section('title','Create Purchase')
    <div>
  
        <div>
            <div class="mt-20">
                <a href="{{ route('Buy') }}" class="rounded ml-4 px-3 mb-2 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
            گەڕانەوە
        </a>
        
        <h1 class="text-center text-xl">ناساندنی کاڵای نوێ</h1>

                @if ($ShowForm == false)
                    
           
                <div class=" mt-10    flex items-center justify-center  font-sans overflow-hidden">
                    <div class="w-full lg:w-5/6 mt-2">
                        <div class="flex justify-between">
                            <div class="xl:w-1/3 sm:w-3/4 md:w-2/5  relative  xl:max-w-sm lg:w-2/5">
                                <div class="relative w-full mr-6 focus-within:text-purple-500">
                                    <div class="absolute inset-y-0 flex items-center pl-2">
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input wire:model="SearchName"
                                        class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                        type="text" placeholder="گەڕان بە ناو" aria-label="Search" />
                                </div>
                            </div>
                            <div class="xl:w-1/3 sm:w-3/4 md:w-2/5  relative  xl:max-w-sm lg:w-2/5">
                                <div class="relative w-full mr-6 focus-within:text-purple-500">
                                    <div class="absolute inset-y-0 flex items-center pl-2">
                                        <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </div>
                                    <input wire:model="SearchBarcode"
                                        class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                        type="text" placeholder="گەڕان بە بارکۆد" aria-label="Search" />
                                </div>
                            </div>
        
        
                            <div class="xl:w-1/3 sm:w-3/4 md:w-2/5  relative   xl:max-w-sm lg:w-2/5">
                                <button wire:click.prevent="$toggle('ShowForm')" class="bg-green-500 rounded-lg px-4 py-2 ">
                                    <p class="text-sm font-medium leading-none ">زیادکردن</p>
                                </button>
                            </div>
                        </div>
        
                        @if ($Stocks->IsNotEmpty())
        
                            
                   
        
                        <div class=" shadow-md rounded my-6">
        
                            <table class=" w-full table-auto">
                                <thead>
                                    <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                        <th class="py-3 px-6 text-left">ناوی کاڵا</th>
                                        <th class="py-3 px-6 text-left">بارکۆد</th>
                                        <th class="py-3 px-6 text-center">ژ.دانە</th>
                                        <th class="py-3 px-6 text-center">بەرواری بەسەرچوون</th>
                                        <th class="py-3 px-6 text-center">بەرواری زیادکردن</th>

                                        <th class="py-3 px-6 text-center">نرخ بە دانە</th>
                                        <th class="py-3 px-6 text-center">جۆری کاڵا</th>

                                        <th class="py-3 px-6 text-center">گۆرانکاری</th>

                                    </tr>
                                </thead>
                                <tbody class="text-gray-600 text-sm font-light">
                                    @foreach ($Stocks as $stock)
        
        
                                    <tr class="border-b border-gray-200 hover:bg-gray-100">
                                        <td class="py-3 px-6 text-left whitespace-nowrap">
                                            <div class="flex items-center">
        
                                                <span class="font-medium">{{ $stock->name }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-left">
                                            <div class="flex items-center">
        
                                                <span>{{ $stock->id }}</span>
                                            </div>
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <span>{{ $stock->total_number_of_units }}</span> دانە
        
        
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <span class="flex justify-center "> 
                                                
                                                <small><svg xmlns="http://www.w3.org/2000/svg" class="text-red-500 h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v3.586L7.707 9.293a1 1 0 00-1.414 1.414l3 3a1 1 0 001.414 0l3-3a1 1 0 00-1.414-1.414L11 10.586V7z" clip-rule="evenodd" />
                                                  </svg></small>
                                                {{ $stock->expired_at->format('d-m-Y') }}</span>  
        
        
                                        </td>

                                        <td class="py-3 px-6 text-center">
                                            <span class="flex justify-center "> 
                                                
                                                <small>
                                                    <svg xmlns="http://www.w3.org/2000/svg" class="text-green-500 h-4 w-4 mr-1" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                                      </svg>
                                                </small>
                                                {{ $stock->created_at }}</span>  
        
        
                                        </td>


                                        <td class="py-3 px-6 text-center">
                                            <span> {{ number_format( $stock->selling_price_per_piece,0,'.','.' )}}</span>  دینار
        
        
                                        </td>
                                        <td class="py-3 px-6 text-center">
                                            <span> {{ $stock->name_product_type }}</span>  
        
        
                                        </td>
                                    
                                        <td class="py-3 px-6 text-center">
                                            <div class="flex item-center justify-center">
                                            
                                                <a  href="{{ route('EditBuy',$stock->id) }}"  class="w-4 mr-2 transform text-purple-400 hover:text-purple-500 hover:scale-110">
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                                    </svg>
                                                </a>
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
                @endif


                @if ($ShowForm)
                    
            
                <div class=" p-4 rounded-lg" id="dashboard" role="tabpanel"
                    aria-labelledby="dashboard-tab">
                    <section class="p-6 dark:bg-coolGray-800 dark:text-coolGray-50">
                        <form wire:submit.prevent="SaveStocks"
                            class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
                            <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-coolGray-900">
                                <div class="space-y-2 col-span-full lg:col-span-1">
                                </div>
                                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                                    <div class="col-span-full sm:col-span-2">
                                        <label for="city" class="text-sm block text-sm font-medium text-gray-700">ناوی
                                            کاڵا </label>
                                        <input wire:model.defer="name" id="city" type="text" placeholder=""
                                            class="w-full pl-6 pr-2
                                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                        @error('name')
                                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-full sm:col-span-2">
                                        <label for="state"
                                            class="text-sm block text-sm font-medium text-gray-700">بارکۆد</label>
                                        <input wire:model.defer="barcode" type="number"
                                            class="w-full pl-6 pr-2
                                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                        @error('barcode')
                                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-full mt-10 sm:col-span-2">
                                        <div class="flex items-start">
                                            <div class="flex items-center h-5">
                                                <input wire:model.defer="is_barcode" type="checkbox"
                                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded">
                                            </div>
                                            <div class="ml-3 text-sm">
                                                <label for="comments"
                                                    class="block text-sm font-medium text-gray-700">کلیك بکە لە کاڵای بێ
                                                    بارکۆد</label>
                                            </div>
                                        </div>

                                    </div>






                                    <div class="col-span-full">
                                        <label for="bio"
                                            class="text-sm block text-sm font-medium text-gray-700">تێبینی</label>
                                        <textarea wire:model.defer="notes" id="bio" placeholder=""
                                            class="w-full pl-6 pr-2
                                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"></textarea>


                                        @error('notes')
                                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="col-span-full sm:col-span-2">
                                        <label for="city"
                                            class="text-sm block text-sm font-medium text-gray-700">بەرواری
                                            بەسەرچوون</label>
                                        <input wire:model.defer="expired_at" type="date" placeholder=""
                                            class="w-full pl-6 pr-2
                                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                        @error('expired_at')
                                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-full sm:col-span-2">
                                        <label for="state" class="text-sm block text-sm font-medium text-gray-700">شوێنی
                                            کاڵا</label>
                                        <input wire:model.defer="address" id="state" type="text"
                                            class="w-full pl-6 pr-2
                                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                        @error('address')
                                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-full sm:col-span-2">

                                        <div>
                                            <label for="price"
                                                class="block text-sm font-medium text-gray-700">بەرهەمی</label>
                                            <div class="mt-1 relative rounded-md shadow-sm">
                                                <select wire:model.defer="made_in"
                                                    class="w-full pl-6 pr-2
                                                        text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                                    >
                                                    <option>دانەیك هەلبژێرە</option>
                                                    @foreach ($Made_in as $row)
                                                    <option value="{{ $row->type_made }}">{{ $row->type_made }}</option>

                                                    @endforeach




                                                </select>
                                                <div wire:click.prevent="$toggle('ShowModel')"
                                                    class="absolute inset-y-0 right-0 flex items-center">
                                                    <svg xmlns="http://www.w3.org/2000/svg" title="Insert new Compnay"
                                                        class="h-5 w-5 mr-2" viewBox="0 0 20 20" fill="currentColor">
                                                        <path fill-rule="evenodd"
                                                            d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                            clip-rule="evenodd" />
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        @error('made_in')
                                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                        @enderror





                                        {{-- Model One --}}
                                        @if ($ShowModel)
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <div class="flex justify-end p-2">
                                                <button type="button"
                                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                    wire:click.prevent="$toggle('ShowModel')">
                                                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd"
                                                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                            clip-rule="evenodd"></path>
                                                    </svg>
                                                </button>
                                            </div>
                                            <div class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8">
                                                <h3 class="text-xl font-medium text-gray-900 dark:text-white">زیادکردنی بەرهەمی نوێ</h3>
                                                <div>
                                                    <label for="email"
                                                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">بەرهەمێك داخڵبکە</label>
                                                    <input wire:model.defer="type_made" type="text"
                                                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                        required>
                                                </div>


                                                <div class="flex">
                                                    
                                                </div>
                                                <button wire:click="SaveMadeIn" type="button"
                                                    class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                                                     font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">زیادکردن</button>

                                            </div>
                                        </div>
                                        @endif
                                        {{-- End Model One --}}



                                    </div>

                                </div>
                            </fieldset>
                            <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-coolGray-900">
                                <div class="space-y-2 col-span-full lg:col-span-1">
                                </div>
                                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">

                                    <div class="col-span-full ">

                                        <div class="col-span-full sm:col-span-2">

                                            <div>
                                                <label for="price" class="block text-sm font-medium text-gray-700">ناوی
                                                    کۆمپانیا</label>
                                                <div class="mt-1 relative rounded-md shadow-sm">
                                                    <select wire:model.defer="name_company"
                                                        class="w-full pl-6 pr-2
                                                            text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                                        >
                                                        <option>دانەیك هەلبژێرە</option>
                                                        @foreach ($Company_name as $row)
                                                        <option value="{{ $row->name }}">{{ $row->name }}</option>

                                                        @endforeach



                                                    </select>
                                                
                                                </div>
                                            </div>
                                     

                                            @error('made_in')
                                            <span
                                                class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-span-full ">

                                        <div class="col-span-full sm:col-span-2">

                                            <div>
                                                <label for="price" class="block text-sm font-medium text-gray-700">جۆری
                                                    کاڵا</label>
                                                <div class="mt-1 relative rounded-md shadow-sm">
                                                    <select wire:model.defer="name_product_type"
                                                        class="w-full pl-6 pr-2
                                                            text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                                        >
                                                        <option>دانەیك هەلبژێرە</option>
                                                        @foreach ($Type_product as $row)
                                                        <option value="{{ $row->type_product }}">{{ $row->type_product }}</option>

                                                        @endforeach



                                                    </select>
                                                    <div wire:click.prevent="$toggle('ShowModel3')"
                                                        class="absolute inset-y-0 right-0 flex items-center">
                                                        <svg xmlns="http://www.w3.org/2000/svg"
                                                            title="Insert new Compnay" class="h-5 w-5 mr-2"
                                                            viewBox="0 0 20 20" fill="currentColor">
                                                            <path fill-rule="evenodd"
                                                                d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                            {{-- Model One --}}
                                            @if ($ShowModel3)
                                            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                <div class="flex justify-end p-2">
                                                    <button type="button"
                                                        class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                                        wire:click.prevent="$toggle('ShowModel3')">
                                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd"
                                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                                clip-rule="evenodd"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="px-6 pb-4 space-y-6 lg:px-8 sm:pb-6 xl:pb-8">
                                                    <h3 class="text-xl font-medium text-gray-900 dark:text-white">زیادکردنی جۆری کاڵا</h3>
                                                    <div>
                                                        <label for="email"
                                                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">جۆری کاڵاکە داخڵبکە</label>
                                                        <input wire:model.defer="table_type_product" type="text"
                                                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                            required>
                                                    </div>


                                                    <button wire:click="SaveTypeProduct" type="button"
                                                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300
                                                        font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">زیادکردن</button>

                                                </div>
                                            </div>
                                            @endif
                                            {{-- End Model One --}}

                                            @error('made_in')
                                            <span
                                                class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                            @enderror

                                        </div>
                                    </div>

                                    <div class="col-span-full sm:col-span-2">
                                        <label for="city" class="text-sm block text-sm font-medium text-gray-700">کۆی
                                            ژمارەی دانە</label>
                                        <input wire:model.defer="total_number_of_units" type="number" placeholder=""
                                            class="w-full pl-6 pr-2
                                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                        @error('total_number_of_units')
                                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-full sm:col-span-2">
                                        <label for="city" class="text-sm block text-sm font-medium text-gray-700">
                                            نرخی کڕین بە دانە</label>
                                        <input wire:model.defer="purchase_price_in_units" type="number" placeholder=""
                                            class="w-full pl-6 pr-2
                                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                        @error('purchase_price_in_units')
                                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>


                                    <div class="col-span-full sm:col-span-2">
                                        <label for="city" class="text-sm block text-sm font-medium text-gray-700">
                                            نرخی فڕۆشتن بە دانە</label>
                                        <input wire:model.defer="selling_price_per_piece" type="number" placeholder=""
                                            class="w-full pl-6 pr-2
                                                text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                        @error('selling_price_per_piece')
                                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <div class="flex justify-center col-span-full  gap-5">
                                        <button type="submit"
                                            class="w-full bg-green-600 text-white font-medium py-2 px-4 rounded-md truncate">
                                            زیادکردن</button>
                                        </button>

                                        <p 
                                        class="w-full bg-gray-600 text-white font-medium py-2 px-4 rounded-md truncate">
                                      کۆی گشتی پارەکە  
                                          @if ($KoyNrx)
                                          <small> {{ number_format($KoyNrx,0,'.','.') }} </small> 

                                          @endif
                                     
                                        دینار
                                    
                                    </p>

                                        <p 
                                        class="w-full bg-gray-600 text-white font-medium py-2 px-4 rounded-md truncate">
                                        دانە کۆی  ژمارەی  
                                        @if ($total_number_of_units)
                                          <small> {{ $total_number_of_units }} </small> 

                                            
                                        @endif
                                         دانە
                                </p>
                                    </div>



                                </div>


                            </fieldset>



                        </form>
                    </section>
                </div>
            @endif

            </div>

        </div>


    </div>

</div>
