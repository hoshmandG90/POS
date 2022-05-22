<div>


    <div style="width:350px" class="border border-gray-200 mb-3">
        <div class="text-left w-full text-sm p-6 overflow-auto">
            <div class="py-2 text-center">
                <img src="https://as2.ftcdn.net/v2/jpg/02/94/66/63/1000_F_294666339_TsyCgYCgalA0zOCLsDe3tocYKv4adAGw.jpg"
                    alt="Tailwind POS" class="rounded-full border border-red-500  mb-3 w-20 h-20 inline-block">
                <h2 class="text-xl font-semibold">مارکێتی دیلان</h2>
            </div>
            <div class="text-center text-xs font-bold mb-1">~~~~~~~~~~~~~~~~~~~~~~~~~~~~</div>
            <div class="text-xs pl-2 text-right">
                <div class="text-xs mb-1 capitalize"> <span> {{ auth()->user()->name }}</span> ناوی کاشێر</div>
                <div class="text-xs mb-1"><span>0751 131 95 37</span> ژمارە تەلەفون</div>
                <div>ژمارەی پسوڵە : {{ $Receipt_number->id }}</div>
            </div>
            <hr class="my-2">
            <div>
                <table class="w-full text-xs">
                    <thead>
                        <tr>
                            <th class="py-1  text-center">ژ</th>
                            <th class="py-1 px-2">ناو</th>
                            <th class="py-1  ">ژ.دانە</th>
                            <th class="py-1 text-right ">نرخ.دانە</th>
                            <th class="py-1 text-right ">کۆی نرخ</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($Search_Result as $index=>$item)
                            
                    
                        <tr class="border-t">

                            <td class="py-2 text-center">{{ $index+1 }}</td>
                            <td class="py-2 px-2">{{ $item->name }}</td>
                            <td class="py-2 text-center">{{ $item->item }}</td>


                            <td class="py-2 text-right">{{ number_format($item->price,0,'.','.') }} </td>
                            <td class="py-2 text-right">{{ number_format($item->price*$item->item,0,'.','.') }} </td>

                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <hr class="my-2">
            <div>
                @php
                $sum=0;
                for($i=0;$i<count($Search_Result);$i++){
                  $Total_price=$Search_Result[$i]['item']*$Search_Result[$i]['price'];
                  $sum += $Total_price;
                }
            @endphp
                <div class="flex font-semibold">
                    <div class="flex-grow">کۆی گشتی</div>
                    <div>Rp. {{ number_format($sum,0,'.','.') }} دینار</div>
                </div>
            </div>
        </div>


        <div class="flex justify-center mt-2 mb-4">
            <span>{!! DNS1D::getBarcodeSVG("$Receipt_number->id", 'EAN13',1,20,'#212121', false) !!}</span>

        </div>


    </div>
</div>
