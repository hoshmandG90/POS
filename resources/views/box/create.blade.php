<div class="m-8">
    @section('title', 'Box') 
    <a href="{{ route('Box') }}"
        class="rounded px-3 mb-2 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">گەڕانەوە
    </a>
    <h1 class="text-center text-xl my-4"> بەشی قاسە </h1>

    <div class="flex justify-evenly">

        <div >
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
                    type="text" placeholder="گەڕان" aria-label="Search" />
            </div>
        </div>
        <div wire:click.prevent="$toggle('ShowForm')" class="">
            <button type="button" 
                class="bg-green-300 cursor-pointer hover:bg-green-600 rounded-lg px-4 py-4 ">
                <p class="text-sm font-medium leading-none truncate">زیادکردن </p>
            </button>
        </div>
  
    </div>


    @if ($ShowForm)

<div class="flex justify-center items-center p-8">
 <form wire:submit.prevent="Save" class="  gap-6 p-6 rounded-md  border border-grey-500 p- ">
                
     <div class=" flex flex-row-reverse  gap-4  lg:col-span-3">
    
         <div class="col-span-full sm:col-span-2">
             <label for="state"
                 class="text-sm block text-sm font-medium text-center text-gray-700">تێبینی</label>
             <input  wire:model.defer="TB"  type="text"
                 class="w-full pl-6 pr-2
                      text-gray-400 py-2 my-2 bg-gray-200    focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
           
         </div>
      
         <div class="col-span-full sm:col-span-2">
             <label for="state"
                 class="text-sm block text-sm font-medium text-center text-gray-700">بڕی پارە</label>
             <input  wire:model.defer="ParayDarkraw" type="number"
                 class="w-full pl-6 pr-2
                      text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
           
         </div>
      
         <div class="col-span-full sm:col-span-2">
             <label for="state"
                 class="text-sm block text-sm font-medium text-center text-gray-700">بەروار</label>
             <input  wire:model.defer="Date"   type="date"
                 class="w-full pl-6 pr-2
                      text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
           
         </div>
      
   </div>

     <div class="flex justify-end space-x-10 grid-cols-8 gap-4 col-span-full lg:col-span-3">

         <div class="flex  justify-center col-span-full sm:col-span-2 ">
             <label class="inline-flex items-center mt-3">
                 <input  value="1" wire:model.defer="Jor" type="radio" class="form-radio h-5 w-5 text-green-600"  ><span class="ml-2 text-gray-700">زیادکردن</span>
             </label>
         </div>

     <div  class="flex justify-center col-span-full sm:col-span-2 ">
         <label class="inline-flex items-center mt-3">
             <input  value="0" wire:model.defer="Jor" type="radio" class="form-radio h-5 w-5 text-red-600"   ><span class="ml-2 text-gray-700">کەمکردن</span>
         </label>
     </div>
  
     </div>
     <div class="text-center w-full mt-3 mb-2">
        <button type="submit" 
        class="bg-green-300 w-full text-center cursor-pointer hover:bg-green-600 rounded-lg px-4 py-4 ">
        <p class="text-sm font-medium leading-none truncate">زیادکردن </p>
    </button>
     </div>
  
 </form>
  
</div>

        
@endif

<div class="flex">
    <div class="mb-3 mt-3 flex justify-center mx-auto">  
        <div>
           <label for="city"
           class="text-sm block text-sm font-medium text-gray-700 text-center">بڕی پارەی قاسە</label>
       <input wire:model="ParaQasa" type="text" placeholder="" value=""
           class=" pl-6 pr-2
                text-gray-400 py-2 t my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
       </div>       
       
       
     
       
    
    
    </div>
</div>

    <!-- component -->
    <div class="overflow-x-auto">
        <div class="mb-4 mt-6 flex justify-center text-center items-center mx-auto">

        </div>
        <div class=" flex items-center justify-center  font-sans overflow-hidden">
            
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">پارەی قاسە</th>

                                <th class="py-3 px-6 text-left">بڕی پارە</th>
                                <th class="py-3 px-6 text-center">جۆر</th>
                                <th class="py-3 px-6 text-center">ناوی بەکارهێنەر</th>
                                <th class="py-3 px-6 text-center">بەروار</th>

                                <th class="py-3 px-6 text-center">تێبینی</th>
                                <th class="py-3 px-6 text-right">گۆرانکاری</th>

                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">

                            @foreach ($ParaDarkrdn as $row)
                                
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">

                                        <span class="font-medium">{{ $row->parayQasa }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-left">
                                    <div class="flex items-center">

                                        <span>{{ $row->ParayDarkraw }}</span>
                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">

                                        @if ($row->Jor == 1)
                                        <span>پارە کردنە قاسە</span>

                                        @else
                                        <span>پارە  دەرکردن</span>

                                            
                                        @endif
                                </td>
                                <td class="py-3 px-6 text-center  ">
                                    <span
                                        style="text-direction: ltr !important;">{{ $row->cashier_name }}</span>

                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="flex justify-center ">

                                        <small>
                                            <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 mr-1 text-green-500"
                                                viewBox="0 0 20 20" fill="currentColor">
                                                <path fill-rule="evenodd"
                                                    d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-8.707l-3-3a1 1 0 00-1.414 0l-3 3a1 1 0 001.414 1.414L9 9.414V13a1 1 0 102 0V9.414l1.293 1.293a1 1 0 001.414-1.414z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </small>
                                        {{ $row->created_at }}
                                    </span>


                                </td>
                                <td class="py-3 px-6 text-center  ">
                                    <span>{{ $row->TB }}</span>

                                </td>
                                <td wire:click.prevent="delete('{{ $row->id }}')" class="py-3 px-6 text-right">
                                    <div class="flex item-center justify-end">

                                        <div 
                                            class="w-4 mr-2 transform text-red-500 hover:scale-110">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                                stroke="currentColor">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                    d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                            </svg>
                                        </div>
                                    </div>
                                </td>

                  



                            </tr>
                            @endforeach




                        


                        </tbody>
                    </table>
                    
                </div>
             
               
            </div>
        </div>
      
    </div>





</div>
