<div class="m-8">
    @section('title', 'outcomes') <a href="{{ route('welcome') }}"
        class="rounded px-3 mb-2 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">گەڕانەوە
    </a>
    <h1 class="text-center text-xl my-4">بەشی مەسروفات</h1>

    <div class="flex justify-evenly">
        
        <div class=" sm:w-3/4 md:w-2/5  relative  xl:max-w-sm lg:w-2/5">
            <div class="relative w-full mr-6 focus-within:text-purple-500">
                <div class="absolute inset-y-0 flex items-center pl-2">
                    <svg class="w-4 h-4" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd"></path>
                    </svg>
                </div>
                <input wire:model="search"
                    class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                    type="text" placeholder="جۆری مەسروف" aria-label="Search" />
            </div>
        </div>    
        <div  class="xl:w-1/3 sm:w-3/4 md:w-2/5   relative   xl:max-w-sm lg:w-2/5">
            <button  type="button" data-modal-toggle="large-modal"   class="bg-green-300 cursor-pointer hover:bg-green-600 rounded-lg px-4 py-4 ">
                <p class="text-sm font-medium leading-none truncate">زیادکردن</p>
            </button>
        </div>
    
    </div>

    <!-- component -->
<div class="overflow-x-auto">
    <div class=" flex items-center justify-center  font-sans overflow-hidden">
        <div class="w-full lg:w-5/6">
            <div class="bg-white shadow-md rounded my-6">
                <table class="min-w-max w-full table-auto">
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">جۆری مەسروف</th>
                            <th class="py-3 px-6 text-center">تێبینی</th>
                            <th class="py-3 px-6 text-center">بەرواری زیادکردن</th>
                            <th class="py-3 px-6 text-center">بڕی پارە</th>
                            <th class="py-3 px-6 text-center">ناوی پارەدەر</th>

                            <th class="py-3 px-6 text-right">گۆرانکاری</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($outcomes as $row)
                            
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td class="py-3 px-6 text-left whitespace-nowrap">
                                <div class="flex items-center">
                               
                                    <span class="font-medium">{{ $row->type }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                
                                @if ($row->notes)
                                <span style="text-direction: ltr !important;">{{ Str::limit($row->notes,60,'...') }}</span>

                                @else
                                <span style="text-direction: ltr !important;">هیچ تێبینی نیە</span>

                                    
                                @endif
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class="flex justify-center "> 
                                    
                                    <small>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-green-500" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z" clip-rule="evenodd" />
                                          </svg>
                                    </small>
                                    {{ $row->created_at }}</span>  


                            </td>
                            <td class="py-3 px-6 text-center  " >
                                <span > {{ number_format($row->name,0,'.','') }} <small >هەزار</small> </span> 

                            </td>
                            <td class="py-3 px-6 text-center  " >
                                <span >Hoshmand Kamal</span>

                            </td>
                          
                            <td class="py-3 px-6 text-right">
                                <div class="flex item-center justify-end">
                                  
                                    <div data-modal-toggle="extralarge-modal" wire:click.prevent="edit('{{ $row->id }}')" class="w-4 mr-2 transform text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div wire:click.prevent="delete('{{ $row->id }}')" class="w-4 mr-2 transform text-red-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
                                    </div>
                                </div>
                            </td>
                            
                        <div wire:ignore.self id="extralarge-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
                            <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
                                <!-- Modal content -->
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-toggle="extralarge-modal">
                                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                    </button>
                                    <div class="px-6 py-6 lg:px-8 text-center items-center">
                                        <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white mb-3 mt-1">گۆرانکاریکردن </h3>
                                        <form wire:submit.prevent="Editoutcomes" class="space-y-6" action="#">
                                            <div>
                                                <label 
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">بڕی پارە
                                                    </label>
                                                <input type="text" wire:model.defer="update_name"
                                                    class="bg-gray-50 border border-gray-300  @error('update_name') border border-red-500  @enderror text-gray-900 text-sm rounded-lg 
                        focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                              
                                            </div>
                                            <div>
                                                <label 
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">جۆری پارە سەرفکردن</label>
                                                <input type="text"   wire:model.defer="update_type"
                                                    class="bg-gray-50 border border-gray-300 text-gray-900   @error('update_type') border border-red-500  @enderror
                        text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                                              
                                            </div>
                                            <div class="mb-4">
                                                <label 
                                                    class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">تێبینی</label>
                                                <textarea  wire:model.defer="update_notes"
                                                class="bg-gray-50 border border-gray-300 text-gray-900   @error('update_notes') border border-red-500  @enderror
                                                text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                                                name="" id="" cols="30" rows="10"></textarea>
                                               
                                            </div>
                          
                                       
                                            <div>
                        
                                                <button data-modal-toggle="extralarge-modal" type="submit"
                                                    class="w-full mt-4 mb-1 text-white bg-yellow-700 hover:bg-yellow-800 focus:ring-4 focus:outline-none
                         focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">زیادکردن</button>
                        
                                        </form>
                                    </div>
                                </div>
                        </div>
                        </div>



                        </tr>
                       

                            

                        @endforeach

                     
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!-- Large Modal -->
<div wire:ignore.self id="large-modal" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-4xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <button type="button"
                class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                data-modal-toggle="large-modal">
                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd"
                        d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                        clip-rule="evenodd"></path>
                </svg>
            </button>
            <div class="px-6 py-6 lg:px-8 text-center items-center">
                <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white mb-3 mt-1">زیادکردنی مەسروف</h3>
                <form wire:submit.prevent="SaveOutcome" class="space-y-6" action="#">
                    <div>
                        <label for="email" 
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">بڕی پارە
                            </label>
                        <input type="text" wire:model.defer="name"
                            class="bg-gray-50 border border-gray-300  @error('name') border border-red-500  @enderror text-gray-900 text-sm rounded-lg 
focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                      
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">جۆری پارە سەرفکردن </label>
                        <input type="text"   wire:model.defer="type"
                            class="bg-gray-50 border border-gray-300 text-gray-900   @error('type') border border-red-500  @enderror
text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                      
                    </div>
                    <div>
                        <label for="password"
                            class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">تێبینی</label>
                        <textarea  wire:model.defer="notes"
                        class="bg-gray-50 border border-gray-300 text-gray-900  
                        text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white"
                        name="" id="" cols="30" rows="10"></textarea>
                       
                    </div>
                
                    <div>

                        <button data-modal-toggle="large-modal" type="submit"
                            class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">زیادکردن</button>

                </form>
            </div>
        </div>
</div>
</div>




</div>
