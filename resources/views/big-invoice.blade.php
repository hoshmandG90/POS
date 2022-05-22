<div>

    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class=" p-5 bg-white shadow-lg">
          <div class="m-2 text-center">
            <div class="py-2 text-center space-x-1">
              <img src="https://as2.ftcdn.net/v2/jpg/02/94/66/63/1000_F_294666339_TsyCgYCgalA0zOCLsDe3tocYKv4adAGw.jpg"
                  alt="Tailwind POS" class="rounded-full border border-red-500  mb-3 w-20 h-20 inline-block">
              <h2 class="text-xl font-semibold">مارکێتی دیلان</h2>
    
          </div>
          <div class="text-xs pl-2 text-cebter space-x-1 ">
            <div class="text-center text-xs font-bold mb-1">~~~~~~~~~~~~~~~~~~~~~~~~~~~~</div>
    
              <div class="text-xs mb-1 space-y-1 capitalize"> <span> {{ auth()->user()->name }}</span> ناوی کاشێر</div>
              <div class="text-xs mb-1"><span>0751 131 95 37</span> ژمارە تەلەفون</div>
              <div class="mt-1 mb-1">ژمارەی پسوڵە : {{ $Receipt_number->id }}</div>
              @php
              $sum=0;
              for($i=0;$i<count($Search_Result);$i++){
                $Total_price=$Search_Result[$i]['item']*$Search_Result[$i]['price'];
                $sum += $Total_price;
              }
          @endphp
              <div class="mt-1"> کۆی گشتی پسوڵە : {{ number_format($sum,0,'.','.') }} دینار</div>
  
              <div class="flex justify-center mt-2 mb-4">
                  <span>{!! DNS1D::getBarcodeSVG("$Receipt_number->id", 'EAN13',1,20,'#212121', false) !!}</span>
          
              </div>
  
          </div>
          </div>
         
      
            <div class="w-full  p-4">
                    <table class="">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    #
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    ناوی کاڵا
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                  بارکۆد  
                              </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    ژ.دانە
                                </th>
                                <th class="px-4 py-2 text-xs text-gray-500 ">
                                    نرخ
                                </th>
                               
                             
                              <th class="px-4 py-2 text-xs text-gray-500 ">
                                  کۆی نرخ 
                               </th>
                          
                               <th class="px-4 py-2 text-xs text-gray-500 ">
                                  ناوی کۆمپانیا
                               </th>
  
                               <th class="px-4 py-2 text-xs text-gray-500 ">
                                  ناوی کڕیار
                               </th>
                               <th class="px-4 py-2 text-xs text-gray-500 ">
                                   ژ.موبایل
                               </th>
                            </tr>
                        </thead>
                        <tbody class="bg-white">
                                
                         
                          @foreach ($Search_Result as $index=> $item)
                              
                         
                            <tr class="whitespace-nowrap">
                                <td class="px-6 py-4 text-sm text-gray-500">
                                {{$index +1}}
                                </td>
                                <td class="px-6 py-4 text-center">
                                    <div class="text-sm text-gray-900">
                                     {{ $item->name }}
                                    </div>
                                </td>
                                <td class="px-6 py-4 text-center">
                                  <div class="text-sm text-gray-900">
                  <span>{!! DNS1D::getBarcodeSVG("$Receipt_number->id", 'EAN13',1,20,'#212121', false) !!}</span>
                                  </div>
                              </td>
                                <td class="px-6 py-4">
                                    <div class="text-sm text-gray-500">{{ $item->item }}</div>
                                </td>
                                
                                <td class="px-6 py-4 text-sm text-center text-gray-500">
                                  {{ number_format($item->price,0,'.','.') }} 
                                </td>
                                <td class="px-6 py-4 text-center">
                                  {{ number_format($item->price* $item->item,0,'.','.') }} 
                                </td>
                                <td class="px-6 py-4">
                                  <div class="text-sm text-center text-gray-500">{{ $item->CompanyName }}</div>
                              </td>
                              
                              <td class="px-6 py-4">
                                  <div class="text-sm text-center text-gray-500">{{ $item->NameKryar }}</div>
                              </td>
                                    
                              <td class="px-6 py-4">
                                  <div class="text-sm text-center text-gray-500">{{ $item->phone }}</div>
                              </td>
                             
                             
                           
                            </tr>
                            @endforeach
                       
                            <!--end tr-->
                         
                            <!--end tr-->
  
                        </tbody>
                      
                    </table>
           
        
  
         
  
        </div>
  
    </div>
           
  
  </div>