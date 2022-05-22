<div class="m-8 ">
     @section('title','Report')
     <a href="{{ route('Box') }}" class="rounded px-3 mb-2 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
         گەڕانەوە
     </a>
     <h1 class="text-center text-xl my-4">بەشی ڕاپۆرتی قاسە</h1>

      <div class=" flex justify-center items-center">
          <!-- Start of component -->
          <div class="max-w-sm bg-white border-2 border-gray-300 p-6 rounded-md  shadow-lg">
            
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
          <!-- End of component -->
       </div>


       <div class="flex justify-around my-6">
            
      <div class=" flex justify-center items-center">
          <!-- Start of component -->
          <div class=" bg-white border-2 border-gray-300 p-6 rounded-md  shadow-lg">
            
             <div class=" flex flex-col my-4">
                <p class=" text-gray-600 mb-4">
                  کۆی پارە ئێستا لە قاسە
      
                </p>
                @if ($ParaQasa->shwen)
                <h1 class="text-2xl mb-1">{{ number_format($ParaQasa->shwen,0,'.','.') }} <small class="text-pink-500 mt-1">USD</small></h1>  
  
                @else
                    
                <h1 class="text-2xl mb-1">0 <small class="text-pink-500 mt-1">USD</small></h1>  

                @endif
                
                       
             </div>
          </div>
          <!-- End of component -->
       </div>
       
       <div class=" flex justify-center items-center">
          <!-- Start of component -->
          <div class=" bg-white border-2 border-gray-300 p-6 rounded-md  shadow-lg">
            
             <div class=" flex flex-col my-4">
                <p class=" text-gray-600 mb-4">
                 کۆی دەرهێانی پاە لە قاسە
      
                </p>
                @if ($convert_int)
                 <h1 class="text-2xl mb-1">{{ number_format($convert_int,0,'.','.') }} <small class="text-pink-500 mt-1">USD</small></h1>  

                @else
                <h1 class="text-2xl mb-1">0 <small class="text-pink-500 mt-1 mr-2">USD</small></h1>  

                @endif
        
                       
             </div>
          </div>
          <!-- End of component -->
       </div>
       <div class=" flex justify-center items-center">
          <!-- Start of component -->
          <div class=" bg-white border-2 border-gray-300 p-6 rounded-md  shadow-lg">
            
             <div class=" flex flex-col my-4">
                <p class=" text-gray-600 mb-4">
                  کۆی زیادکردنی پارە لە قاسە
      
                </p>
                @if ($convert_int2)
                <h1 class="text-2xl mb-1">{{ number_format($convert_int2,0,'.','.') }} <small class="text-pink-500 mt-1">USD</small></h1>  

               @else
               <h1 class="text-2xl mb-1 mr-2">0 <small class="text-pink-500 mt-1 mr-2">USD</small></h1>  

               @endif               
                       
             </div>
          </div>
          <!-- End of component -->
       </div>
       </div>

</div>
