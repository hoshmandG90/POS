<div class="m-4">
    @section('title', 'positions')
    <a href="{{ route('welcome') }}"
    class="rounded px-3 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
    گەڕانەوە
</a>
<h1 class="text-center mb-3 mt-2 font-bold text-xl mb-4">لیستی ناوچەکان</h1>
    <div class="overflow-x-auto mt-4 mb-1">

        <div class="   flex items-center justify-center  font-sans overflow-hidden mt-8">
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
                            <input wire:model="search"
                                class="w-full pl-8 pr-2 py-3 text-sm text-gray-700 placeholder-gray-600 bg-gray-100 border-0 rounded-md dark:placeholder-gray-500 dark:focus:shadow-outline-gray dark:focus:placeholder-gray-600 dark:bg-gray-700 dark:text-gray-200 focus:placeholder-gray-500 focus:bg-white focus:border-purple-300 focus:outline-none focus:shadow-outline-purple form-input"
                                type="text" placeholder="ناوی شار" aria-label="Search" />
                        </div>
                    </div>


                    <div class="xl:w-1/3 sm:w-3/4 md:w-2/5  relative  xl:max-w-sm lg:w-2/5">
                        <button data-modal-toggle="authentication-modal2" class="bg-green-500 rounded-lg px-4 py-2 ">
                            <p class="text-sm font-medium leading-none ">زیادکردن</p>
                        </button>
                    </div>
                </div>

                @if ($positions->IsNotEmpty())


                <div class=" shadow-md rounded my-6">

                    <table class=" w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">کۆدی ناوچە</th>
                                <th class="py-3 px-6 text-center">ناوی ناوچە</th>
                                <th class="py-3 px-6 text-center">ناوی شار</th>
                                <th class="py-3 px-6 text-center">نرخی گەیاندن</th>

                                <th class="py-3 px-6 text-center">ناوی شوڤێر</th>
                                <th class="py-3 px-6 text-right">سڕینەوە</th>
                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($positions as $position)


                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">

                                        <span class="font-medium">{{ $position->code }}</span>
                                </td>
                                <td class="py-3 px-6 text-center">

                                        <span>{{ $position->name_nawcha }}</span>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span>{{ $position->name_shar }}</span>


                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span>{{ number_format( $position->NrxGyandn,0,'.','.') }}</span> <small>USD</small>

                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span> {{ $position->name_driver }} </span>


                                </td>
                                <td class="py-3 px-6 text-right">
                                    <div class="flex item-center justify-end">
                                  
                                        <div data-modal-toggle="authentication-modal3" wire:click.prevent="edit('{{ $position->id }}')" class="w-4 mr-2 transform text-purple-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                            </svg>
                                        </div>
                                        <div wire:click.prevent="delete('{{ $position->id }}')" class="w-4 mr-2  transform text-red-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                                   
<div wire:ignore.self id="authentication-modal3" tabindex="-1" aria-hidden="true"
class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full justify-center items-center">
<div class="relative w-full h-full max-w-md p-4 md:h-auto">

    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button"
            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
            data-modal-toggle="authentication-modal3">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="px-6 py-6 lg:px-8">
            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">لیستی ناوچەکان</h3>
            <form wire:submit.prevent="EditPosition" class="space-y-6" action="#">
                <div class="mt-4 mb-3">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ناوی ناوچە</label>
                    <input type="text" wire:model.defer="update_name_nawcha"
                        class="bg-gray-50 border border-gray-300  @error('update_name_nawcha') border border-red-300 @enderror  text-gray-900 text-sm rounded-lg 
focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                 
                </div>
                <div class="mt-4 mb-3">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ناوی شار</label>
                    <input type="text"   wire:model.defer="update_name_shar"
                        class="bg-gray-50 border border-gray-300 @error('update_name_shar') border border-red-300 @enderror text-gray-900 
text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                  
                </div>
            
              
                <div class="mt-4 mb-3">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">نرخی گەیاندن</label>
                    <input type="text" wire:model.defer="update_NrxGyandn"
                        class="bg-gray-50 border border-gray-300  @error('update_NrxGyandn') border border-red-300 @enderror text-gray-900 text-sm rounded-lg 
focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                
                </div>


                <div class="mt-4 mb-3">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-red-300">ناوی شوڤێر</label>
                        <select wire:model.defer="update_driver_id"
                        class="@error('update_driver_id') border border-red-300 @enderror  w-full pl-6 pr-2
                            text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                        >
                        <option>ناوی شوڤێر هەلبژێرە</option>
                        @foreach ($drivers as $row)
                        <option  value="{{ $row->id }}">{{ $row->name }}</option>
        
                        @endforeach
        
                </div>
             



            </select>

                    <button type="submit" data-modal-toggle="authentication-modal2" 
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">زیادکردن</button>

            </form>
        </div>
    </div>
</div>
</div>
                            
                                   


                            @endforeach

                        </tbody>
                    </table>
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
        
<div wire:ignore.self id="authentication-modal2" tabindex="-1" aria-hidden="true"
class="fixed top-0 left-0 right-0 z-50 hidden w-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full justify-center items-center">
<div class="relative w-full h-full max-w-md p-4 md:h-auto">

    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
        <button type="button"
            class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
            data-modal-toggle="authentication-modal2">
            <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="px-6 py-6 lg:px-8">
            <h3 class="mb-4 text-xl font-medium text-gray-900 dark:text-white">لیستی ناوچەکان</h3>
            <form wire:submit.prevent="SavePositions" class="space-y-6" action="#">
                <div class="mt-4 mb-3">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ناوی ناوچە</label>
                    <input type="text" wire:model.defer="name_nawcha"
                        class="bg-gray-50 border border-gray-300  @error('name_nawcha') border border-red-300 @enderror  text-gray-900 text-sm rounded-lg 
focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                 
                </div>
                <div class="mt-4 mb-3">
                    <label for="password"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">ناوی شار</label>
                    <input type="text"   wire:model.defer="name_shar"
                        class="bg-gray-50 border border-gray-300 @error('name_shar') border border-red-300 @enderror text-gray-900 
text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                  
                </div>
            
              
                <div class="mt-4 mb-3">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">نرخی گەیاندن</label>
                    <input type="text" wire:model.defer="NrxGyandn"
                        class="bg-gray-50 border border-gray-300  @error('NrxGyandn') border border-red-300 @enderror text-gray-900 text-sm rounded-lg 
focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white">
                
                </div>


                <div class="mt-4 mb-3">
                    <label for="email"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-red-300">ناوی شوڤێر</label>
                        <select wire:model.defer="driver_id"
                        class="@error('driver_id') border border-red-300 @enderror  w-full pl-6 pr-2
                            text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                        >
                        <option>ناوی شوڤێر هەلبژێرە</option>
                        @foreach ($drivers as $row)
                        <option  value="{{ $row->id }}">{{ $row->name }}</option>
        
                        @endforeach
        
                </div>
             



            </select>

                    <button type="submit" data-modal-toggle="authentication-modal2" 
                        class="w-full text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none
focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">زیادکردن</button>

            </form>
        </div>
    </div>
</div>
</div>


 
    </div>
