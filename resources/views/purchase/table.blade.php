<div>
    <!-- component -->
    <div class="overflow-x-auto">
        <div class=" flex   font-sans overflow-hidden">
            <div class="w-full lg:w-5/6">
                <div class="bg-white shadow-md rounded my-6">
                    <table class="min-w-max w-full table-auto">
                        <thead>
                            <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                                <th class="py-3 px-6 text-left">ژمارە</th>
                                <th class="py-3 px-6 text-center">ناوی کاڵا</th>
                                <th class="py-3 px-6 ">بڕی پارە</th>
                                <th class="py-3 px-6 ">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>
                                </th>
                                <th class="py-3 px-6 text-center">دانە</th>
                                <th class="py-3 px-6 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z" clip-rule="evenodd" />
                                      </svg>    
                                </th>
                                <th class="py-3 px-6 text-center">کۆی نرخ</th>
                                <th class="py-3 px-6 text-right ">سڕینەوە</th>


                            </tr>
                        </thead>
                        <tbody class="text-gray-600 text-sm font-light">
                            @foreach ($cart_items as $index => $cart_item)
                                
                            <tr class="border-b border-gray-200 hover:bg-gray-100">
                                <td class="py-3 px-6 text-left whitespace-nowrap">
                                    <div class="flex items-center">
                                        <span>{{ $index+1 }}</span>

                                    </div>
                                </td>
                                <td class="py-3 px-6 text-center">
                                        <span class="font-medium">{{ $cart_item->name }}</span>

                                    
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium">{{ number_format($cart_item->price,0,'.','.') }} دینار</span>


                                </td>
                                <td wire:click.prevent="Plus('{{ $cart_item->id }}')" class="sound py-3 px-6 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-green-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 6v6m0 0v6m0-6h6m-6 0H6" />
                                    </svg>

                                </td>

                                <td class="py-3 px-6 text-center">
                                    <span class="  py-1 px-3 rounded-full text-xs">{{ $cart_item->item }}</span>
                                </td>
                                <td  wire:click.prevent="Minus('{{ $cart_item->id }}')" class="sound py-3 px-6 text-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-red-400"
                                        viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M5 10a1 1 0 011-1h8a1 1 0 110 2H6a1 1 0 01-1-1z"
                                            clip-rule="evenodd" />
                                    </svg>
                                </td>
                                <td class="py-3 px-6 text-center">
                                    <span class="font-medium"> {{ number_format($cart_item->price * $cart_item->item ,0,'.','.') }} دینار</span>


                                </td>
                                <td  wire:click="$refresh" wire:click.prevent="delete('{{ $cart_item->id }}')"class="py-3 px-6 flex justify-end text-right">

                                    <div class="w-5 mr-2 transform text-red-400 hover:text-red-600 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                        </svg>
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
