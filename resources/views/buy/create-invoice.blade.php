<div class="container mt-4 p-8">

    @section('title','create Invoice')
    <a href="{{ route('Buy') }}" class="rounded px-3 mb-2 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
        گەڕانەوە
    </a>
    <h1 class="text-center text-xl mb-4">کاڵا کڕین</h1>

    <form wire:submit.prevent="SavePsulaKren" class="flex space-x-8 ">
        
        
     

        <button class="xl:w-1/3 sm:w-3/4 md:w-2/5   relative   xl:max-w-sm lg:w-2/5">
            <button type="submit"   class="bg-green-300 cursor-pointer hover:bg-green-600 rounded-lg px-4 py-4 ">
                <p class="text-sm font-medium leading-none truncate">زیادکردن وەسڵ</p>
            </button>
        </button>


        <div class="flex space-x-4">

            <div class=" sm:w-3/4 md:w-2/5  relative  xl:max-w-sm lg:w-2/5">
                <div class="relative w-full mr-6 focus-within:text-purple-500">
                    <input type="date" wire:model.defer="Date"
                    class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text"  aria-label="Search" />
             
                </div>
                
            </div>
            <div class=" sm:w-3/4 md:w-2/5  relative  xl:max-w-sm lg:w-2/5">
                <div class="relative w-full mr-6 focus-within:text-purple-500">
                    <select wire:model.defer="JorePsula"
                    class="w-full pl-6 pr-2
                        text-gray-400 py-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                    >
                    <option>جۆری کرین</option>
                    <option>نەقد</option>
                    <option> قەرز</option>
                   
    
    
    
    
                </select>
             
                </div>
                
            </div>
            <div class=" sm:w-3/4 md:w-2/5  relative  xl:max-w-sm lg:w-2/5">
                <div class="relative w-full mr-6 focus-within:text-purple-500">
                    <input  wire:model.defer="JmaraPsula"
                    class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="ژمارەی وەسڵ" aria-label="Search" />
             
                </div>
                
            </div>

        
        <div class="  md:w-2/5  relative   ">
                <select  wire:model.defer="NameCo"
                    class="w-full pl-6 pr-2
                        text-gray-400 py-2  bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                    >
                    <option>ناوی کۆمپانیا</option>
                    @foreach ($Company_name as $row)
                    <option cvalue="{{ $row->name }}">{{ $row->name }}</option>

                    @endforeach

                    
                   




                </select>
                <div data-modal-toggle="authentication-modal" wire:click.prevent="$toggle('ShowModel')"
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


    </form>

    @if ($ShowForm)
    <div class="bg-white border border-gray-500  rounded-lg mt-2">
        <section class="p-6 ">
            <form 
                class="container flex flex-col space-y-12 ">
                 <div class="flex justify-between">
                    <fieldset class="grid  gap-6 p-6 rounded-md  dark:bg-coolGray-900">
                   
                        <div class=" flex flex-row-reverse grid-cols-8 gap-4 col-span-full lg:col-span-3">
                            <div class="col-span-full sm:col-span-2">
                                <label for="city" class="text-sm block text-sm font-medium text-gray-700">ناوی
                                    کاڵا </label>
                                <input wire:model="name" id="city" type="text" placeholder=""
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('name')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-full sm:col-span-2">
                                <label for="state"
                                    class="text-sm block text-sm font-medium text-gray-700">نرخی کڕین</label>
                                <input wire:model="purchase_price_in_units" type="number"
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('purchase_price_in_units')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                         
                            <div class="col-span-full sm:col-span-2">
                                <label for="state"
                                    class="text-sm block text-sm font-medium text-gray-700">نرخی فرۆشتن بە جوملە</label>
                                <input wire:model="selling_price_per_piece" type="number"
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('selling_price_per_piece')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                         
                            <div class="col-span-full sm:col-span-2">
                                <label for="state"
                                    class="text-sm block text-sm font-medium text-gray-700">نرخی فرۆشتن بە تاك</label>
                                <input wire:model="selling_price_per_piece" type="number"
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('selling_price_per_piece')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                         
                      </div>
                        <div class="flex flex-row-reverse grid-cols-8 gap-4 col-span-full lg:col-span-3">
                            
                            <div class="col-span-full sm:col-span-2">
                                <label for="city"
                                    class="text-sm block text-sm font-medium text-gray-700">بەرواری
                                    بەسەرچوون</label>
                                <input  type="date" wire:model="expired_at" placeholder=""
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('expired_at')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="col-span-full sm:col-span-2">
                                <label for="state" class="text-sm block text-sm font-medium text-gray-700">ژمارەی دانە ی کڕدراو</label>
                                <input wire:model="ZhmareDanekrdraw"  type="text"
                                    class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                @error('total_number_of_units')
                                <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                                @enderror
                            </div>
    
                         
        
                        </div>
                        <div class="flex flex-row-reverse grid-cols-8 gap-4 col-span-full lg:col-span-3">
    
                        <div class="flex justify-center col-span-full sm:col-span-2 ">
                            <button wire:click.prevent="SaveKalaKrdrawakanWasl" type="submit"
                                class="w-full bg-green-500 text-white font-medium py-2 px-4 rounded-md">
                                زیادکردن
                            </button>
                        </div>
    
                        <div class="flex justify-center col-span-full sm:col-span-2 ">
                            <button type="submit"
                                class="w-full bg-yellow-400 text-white font-medium py-2 px-4 rounded-md">
                                گۆرانکاریکردن
                            </button>
                        </div>
                        </div>
                    </fieldset>
                     
                    <div class=" px-12   flex flex-row-reverse flex-col  col-span-full lg:col-span-3">
                        <div class="col-span-full sm:col-span-2">
                            <label for="city" class="text-sm block text-sm font-medium text-center text-gray-700">گەڕان بەپێ ناو </label>
                            <input wire:keydown.escape="resetQuery" wire:model="Barcodequery"  id="city" type="text" placeholder=""
                                class="w-full pl-6 pr-2
                                     text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                            @error('name')
                            <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="col-span-full sm:col-span-2">
                            <label for="state"
                                class="text-sm block text-sm font-medium  text-center text-gray-700">گەڕان بەپێ بارکۆد</label>
                            <input  wire:keydown.escape="resetQuery" wire:model="Barcodequery" type="number"
                                class="w-full pl-6 pr-2
                                     text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                            @error('barcode')
                            <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                            @enderror
                        </div>
                     
                      
                  </div>
            
                 </div>
    
                 <div>
                    <h1 class="truncate text-xs"> {{ $sum_total_price }} : کۆی نرخی گشتی پسوڵە </h1>
            
                </div>
            </form>
        </section>
       </div>
    
    @endif
    <div class=" shadow-md rounded my-6">
        
        <table class=" w-full table-auto">
            <thead>
                <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                    <th class="py-3 px-6 text-left">ناوی کاڵا</th>
                    <th class="py-3 px-6 text-center"> نرخی کڕین بە دانە</th>
                    <th class="py-3 px-6 ">بڕی دانە</th>
                    <th class="py-3 px-6 text-center"> کۆی نرخ</th>
                    <th class="py-3 px-6 text-center"> نرخی فرۆشتن بە تاك</th>
                    <th class="py-3 px-6 text-center"> </th>


                </tr>
            </thead>
            <tbody class="text-gray-600 text-sm font-light">

 @foreach ($KalaKrdrawakanWasl as $row)
                <tr class="border-b border-gray-200 hover:bg-gray-100">
                   
                        
                   
                    <td class="py-3 px-6 text-left whitespace-nowrap">
                        <div class="flex items-center">

                            <span class="font-medium">{{ $row->NameKala }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>{{ number_format($row->NrxkrenBaDana,0,'.','.') }}</span> 


                    </td>
                    <td class="py-3 px-6 text-center">
                        <div class="">

                            <span>{{ $row->BryKren }}</span>
                        </div>
                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>{{ number_format($row->Konrx,0,'.','.') }}</span> دینار


                    </td>
                    <td class="py-3 px-6 text-center">
                        <span>{{ number_format($row->NrxFroshtn,0,'.','.') }}</span> 



                    </td>
                  
                
                    <td wire:click.prevent="Marked('{{ $row->id }}')" class="py-3 px-6 text-center sound">
                        <div class="sound flex item-center justify-center cursor-pointer ">
                       
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                              </svg>
                        </div>
                    </td>
                   
                </tr>
                 @endforeach

            </tbody>
        </table>

        

        
        <div wire:ignore.self id="authentication-modal" tabindex="-1" aria-hidden="true"
        class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full justify-center items-center">
        <div class="relative w-full h-full max-w-md p-4 md:h-auto">

            <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                <button type="button"
                    class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                    data-modal-toggle="authentication-modal">
                    <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
                <div class="px-6 py-6 lg:px-8">
                    <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">زیادکردنی کۆمپانیا</h3>
                    <form wire:click.prevent="InsertCompnay" class="space-y-6" action="#">
                        <div>
                            <label for="email" 
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ناوی
                                کۆمپانیا</label>
                            <input type="text" wire:model.defer="name_company"
                                class="bg-gray-50 border border-gray-300  @error('name_company') border border-red-500  @enderror text-gray-900 text-sm rounded-lg 
    focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                          
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ژمارە موبایل</label>
                            <input type="text"   wire:model.defer="phone"
                                class="bg-gray-50 border border-gray-300 text-gray-900   @error('phone') border border-red-500  @enderror
    text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                          
                        </div>
                        <div>
                            <label for="password"
                                class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ناونیشان</label>
                            <input type="text"   wire:model.defer="address"
                                class="bg-gray-50 border border-gray-300 text-gray-900   @error('address') border border-red-500  @enderror
    text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                          
                           
                        </div>
                    
                        <div>

                            <button data-modal-toggle="authentication-modal" type="submit"
                                class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
     focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">زیادکردن</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
   
            
        
 
</div>
