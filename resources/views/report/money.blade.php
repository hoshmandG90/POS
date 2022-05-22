<div class="m-8 ">
    @section('title','Report')
    <a href="{{ route('Box') }}" class="rounded px-3 mb-2 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
        گەڕانەوە
    </a>
    <h1 class="text-center text-xl my-4">بەشی ڕاپۆرتی پارە</h1>

      <div class="flex justify-around">
        <div class="bg-gray-100  p-8 mx-auto rounded-lg dark:bg-gray-900 dark:text-gray-100">
            <div class=" flex flex-col my-4">
                <p class=" text-gray-600 mb-4">
                    بینینی ڕاپۆرت بە دیاریکردنی ڕۆژ
      
                </p>
                <input wire:model="Date" type="date"  placeholder=""
                class="w-full pl-6 pr-2
                     text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">   
             <a wire:click.prevent="ViewReport"    class="bg-pink-500 flex mt-6 flex justify-center  shadow-md text-sm text-white font-bold py-3 px-4 hover:bg-pink-600 rounded uppercase" 
                href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
      
                بینینی ڕاپۆرت
               
               </a>     
                       
             </div>
        </div>
    
        
        <div class=" bg-gray-100 p-8 mx-auto rounded-lg dark:bg-gray-900 dark:text-gray-100">
            <div class=" flex flex-col my-4">
                <p class=" text-gray-600 mb-4">
                    بینینی ڕاپۆرت بە  دیاری کردنی بەروار
      
                </p>
                <input wire:model="Date" type="date"  placeholder=""
                class="w-full pl-6 pr-2
                     text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">   

                     <p class="text-center">بۆ</p>
                     <input wire:model="Date" type="date"  placeholder=""
                     class="w-full pl-6 pr-2
                          text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">   
             <a wire:click.prevent="ViewReport"    class="bg-pink-500 flex mt-6 flex justify-center  shadow-md text-sm text-white font-bold py-3 px-4 hover:bg-pink-600 rounded uppercase" 
                href="#">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                  </svg>
      
                بینینی ڕاپۆرت
               
               </a>     
                       
             </div>
        </div>
      </div>

    <section class="p-4 my-6 md:p-8 ">
        <div class="container grid grid-cols-1 gap-6 m-4 mx-auto md:m-0 md:grid-cols-2 xl:grid-cols-3">
            <div class="flex overflow-hidden rounded-lg border border-gray-500">
                
                <div class="flex items-center justify-between flex-1 p-3">
                    <p class="text-2xl font-semibold">200</p>
                    <p>کۆی پارە فرۆشتن بە نەقد</p>
                </div>
            </div>
            <div class="flex overflow-hidden rounded-lg border border-gray-500">
                
                <div class="flex items-center justify-between flex-1 p-3">
                    <p class="text-2xl font-semibold">200</p>
                    <p>کۆی پارەی سەرفکردن</p>
                </div>
            </div>

             <div class="flex overflow-hidden rounded-lg border border-gray-500">
                
                <div class="flex items-center justify-between flex-1 p-3">
                    <p class="text-2xl font-semibold">200</p>
                    <p>کۆی قەرزی کڕین لە کۆمپانیاکان</p>
                </div>
            </div>
            <div class="flex overflow-hidden rounded-lg border border-gray-500">
                
                <div class="flex items-center justify-between flex-1 p-3">
                    <p class="text-2xl font-semibold">200</p>
                    <p>کۆی پارەی مەوادی کراو</p>
                </div>
            </div>
            <div class="flex overflow-hidden rounded-lg border border-gray-500">
                
                <div class="flex items-center justify-between flex-1 p-3">
                    <p class="text-2xl font-semibold">200</p>
                    <p>کۆی پارەی قازانج کاڵا فرۆشتن</p>
                </div>
            </div>
            <div class="flex overflow-hidden rounded-lg border border-gray-500">
                
                <div class="flex items-center justify-between flex-1 p-3">
                    <p class="text-2xl font-semibold">200</p>
                    <p>کۆی پارەی فرۆشتن بە قەرز</p>
                </div>
            </div>
        </div>
    </section>
    

    

</div>
