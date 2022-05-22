<div class="m-8">
    @section('title','Personality')
    <a href="{{ route('Person') }}"
        class="rounded px-3 py-2  m-1 border-b-4 border-l-2 shadow-lg bg-blue-800 border-blue-900 text-white">
        گەڕانەوە
    </a>
    <h1 class="text-center mb-3 mt-2 font-bold text-xl">بەشی بەکارهێنەر</h1>
    <div class=" flex flex-row-reverse justify-center flex flex-wrap  p-10  ">
            
        <div class="page-1">
                <label class="inline-flex p-6 items-center mt-3">
                    <input type="checkbox" wire:model="ListKala" wire:click.prevent="$toggle('ListKala')" class="form-checkbox h-5 w-5 text-gray-600 mr-2 " @if($ListKala) checked @endif ><span class="ml-2 text-gray-700 truncate">لیستی کاڵا</span>
                </label>  

                <label class="inline-flex p-6 items-center mt-3">
                    <input type="checkbox" wire:model="ListCompanya" wire:click.prevent="$toggle('ListCompanya')" class="form-checkbox h-5 w-5 text-gray-600 mr-2"  @if($ListCompanya) checked @endif >لیستی کۆمپانیاکان
                </span>
                </label>  
                <label class="inline-flex p-6 items-center mt-3">
                    <input type="checkbox" wire:model="ListGarak" wire:click.prevent="$toggle('ListGarak')" class="form-checkbox h-5 w-5 text-gray-600 mr-2"   @if($ListGarak) checked @endif> <span class="ml-2 text-gray-700 truncate">لیستی گەرەك </span>
                </label>  
                <label class="inline-flex p-6 items-center mt-3">
                    <input type="checkbox" wire:model="ListMaxzan" wire:click.prevent="$toggle('ListMaxzan')" class="form-checkbox h-5 w-5 text-gray-600 mr-2"  @if($ListMaxzan) checked @endif ><span class="ml-2 text-gray-700 truncate">لیستی مەخزن</span>
                </label>  
                <label class="inline-flex p-6 items-center mt-3">
                    <input type="checkbox" wire:model="KalaKren" wire:click.prevent="$toggle('KalaKren')" class="form-checkbox h-5 w-5 text-gray-600 mr-2"   @if($KalaKren) checked @endif><span class="ml-2 text-gray-700 truncate">کاڵا کڕین</span>
                </label>  
                <label class="inline-flex p-6 items-center mt-3">
                    <input type="checkbox" wire:model="Bakarhenar" wire:click.prevent="$toggle('Bakarhenar')" class="form-checkbox h-5 w-5 text-gray-600 mr-2"  @if($Bakarhenar) checked @endif><span class="ml-2 text-gray-700 truncate">بەکارهێنەر</span>
                </label>  
                <label class="inline-flex p-6 items-center mt-3">
                    <input type="checkbox"wire:model="KalaFroshtn" wire:click.prevent="$toggle('KalaFroshtn')" class="form-checkbox h-5 w-5 text-gray-600 mr-2"   @if($KalaFroshtn) checked @endif><span class="ml-2 text-gray-700 truncate">کاڵا فرۆشتن</span>
                </label>  
                <label class="inline-flex p-6 items-center mt-3">
                    <input type="checkbox"wire:model="Nawneshan"  wire:click.prevent="$toggle('Nawneshan')" class="form-checkbox h-5 w-5 text-gray-600 mr-2"   @if($Nawneshan) checked @endif><span class="ml-2 text-gray-700 truncate">ناونیشان</span>
                </label> 

                <label class="inline-flex p-6 items-center mt-3">
                    <input type="checkbox" wire:model="hokareWarnageraw" wire:click.prevent="$toggle('hokareWarnageraw')" class="form-checkbox h-5 w-5 text-gray-600 mr-2"  @if($hokareWarnageraw) checked @endif ><span class="ml-2 text-gray-700 truncate"> هۆکارەکانی وەرنەگیراو                    </span>
                </label>  

                <label class="inline-flex p-6 items-center mt-3">
                    <input type="checkbox" wire:model="BashiGarawakan" wire:click.prevent="$toggle('BashiGarawakan')" class="form-checkbox h-5 w-5 text-gray-600 mr-2"  @if($BashiGarawakan) checked @endif > بەشی گەڕاوەکان                </span>
                </label>  
               
              
                
        </div>
   


     
  
       
         
    </div>


   


    <div class="mt-2">
<!-- component -->
<div class="overflow-x-auto">
    <div class="flex items-center justify-center  font-sans overflow-hidden">
        
        <div class="w-full lg:w-5/6">
            <div class="mb-4 mt-4">
                
                @if ($ShowModel)
                   <form wire:submit.prevent="SaveUser" class="flex flex-col grid  gap-6 p-6 rounded-md  dark:bg-coolGray-900">
                                   
                    <div class=" flex flex-row-reverse grid-cols-8 gap-4 col-span-full lg:col-span-3">
                
                        <div class="col-span-full sm:col-span-2">
                            <label for="state"
                                class="text-sm block text-sm font-medium text-center text-gray-700">ناوی بەکارهێنەر</label>
                            <input wire:model.defer="Insertname"  type="text"
                                class="w-full pl-6 pr-2
                                     text-gray-400 py-2 my-2 bg-gray-200  @error('Insertname') border border-red-500 @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                          
                        </div>
                     
                        <div class="col-span-full sm:col-span-2">
       
                                     <label for="state" class="text-sm block text-sm font-medium text-center text-gray-700">جۆری ڕێگەپێدان</label>
                                     <select wire:model.defer="Insertusername"
                                     class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200 @error('Insertusername') border border-red-500 @enderror  focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                     >
                                     <option >جۆری ڕێگەپێدان</option>
                                     <option value="Admin">Admin</option>
                                     <option value="Owner">Owner</option>
                                     <option value="Driver">Driver</option>

                               


                                 </select>
                          
                        </div>
                     
                        <div class="col-span-full sm:col-span-2">
                            <label for="state"
                                class="text-sm block text-sm font-medium text-center text-gray-700">وشەی نهێنی</label>
                            <input wire:model.defer="Insertpassword"    type="text"
                                class="w-full pl-6 pr-2
                                     text-gray-400 py-2 my-2 bg-gray-200 @error('Insertpassword') border border-red-500 @enderror  focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                          
                        </div>
                        <div class="col-span-full sm:col-span-2">
                            <label for="state"
                                class="text-sm block text-sm font-medium text-center text-gray-700">ژمارەی بەکارهێنەر</label>
                            <input wire:model.defer="Insertphone"    type="text"
                                class="w-full pl-6 pr-2
                                     text-gray-400 py-2 my-2 bg-gray-200  @error('Insertphone') border border-red-500 @enderror focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                          
                        </div>

                          <div class="col-span-full sm:col-span-2  mt-7 ">
                    <button type="submit"
                        class="w-full bg-green-400 text-white font-medium py-2 px-4 rounded-md">
                        زیادکردن
                    </button>
                </div>
           
                  </div>
             
            
                </form>  
                @endif
               

                @if ($EditForm)
                    
           
                <form wire:submit.prevent="EditUser" class="flex flex-col grid  gap-6 p-6 rounded-md  dark:bg-coolGray-900">
                                   
                    <div class=" flex flex-row-reverse grid-cols-8 gap-4 col-span-full lg:col-span-3">
                
                        <div class="col-span-full sm:col-span-2">
                            <label for="state"
                                class="text-sm block text-sm font-medium text-center text-gray-700">ناوی بەکارهێنەر</label>
                            <input wire:model.defer="name"  type="text"
                                class="w-full pl-6 pr-2
                                     text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                          
                        </div>
                     
                        <div class="col-span-full sm:col-span-2">
       
                                     <label for="state" class="text-sm block text-sm font-medium text-center text-gray-700">جۆری ڕێگەپێدان</label>
                                     <select wire:model.defer="username"
                                     class="w-full pl-6 pr-2
                                         text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                     >
                                     <option >جۆری ڕێگەپێدان</option>
                                     <option value="Admin">Admin</option>
                                     <option value="Owner">Owner</option>
                                     <option value="Driver">Driver</option>

                               


                                 </select>
                          
                        </div>
                     
                        <div class="col-span-full sm:col-span-2">
                            <label for="state"
                                class="text-sm block text-sm font-medium text-center text-gray-700">وشەی نهێنی</label>
                            <input wire:model.defer="password"    type="text"
                                class="w-full pl-6 pr-2
                                     text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                          
                        </div>
                        <div class="col-span-full sm:col-span-2">
                            <label for="state"
                                class="text-sm block text-sm font-medium text-center text-gray-700">ژمارەی بەکارهێنەر</label>
                            <input wire:model.defer="phone"    type="text"
                                class="w-full pl-6 pr-2
                                     text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                          
                        </div>

                          <div class="col-span-full sm:col-span-2  mt-7 ">
                    <button type="submit"
                        class="w-full bg-green-400 text-white font-medium py-2 px-4 rounded-md">
                        زیادکردن
                    </button>
                </div>
           
                  </div>
             
            
                </form>
                @endif
                 
             
            </div>

            
            <div wire:click.prevent="$toggle('ShowModel')" class="mb-2">
                <div class="mb-4 mt-4">
                    <button type="submit"
                    class=" bg-green-400 text-white font-medium py-2 px-4 rounded-md">
                    زیادکردن
                </button>
                </div>
            </div>
            <div class="bg-white shadow-md rounded my-6">
            
                <table class="min-w-max w-full table-auto">
                    
                    <thead>
                        <tr class="bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                            <th class="py-3 px-6 text-left">ناوی بەکارهێنەر</th>
                            <th class="py-3 px-6 text-center">جۆری ڕێگەپێدان </th>
                            <th class="py-3 px-6 text-center">وشەی نهێنی</th>
                            <th class="py-3 px-6 text-center">ژمارەی بەکارهێنەر</th>
                            <th class="py-3 px-6 text-right">دەستکاریکردن</th>
                        </tr>
                    </thead>
                    <tbody class="text-gray-600 text-sm font-light">
                        @foreach ($users as $user)
                            
                        <tr class="border-b border-gray-200 hover:bg-gray-100">
                            <td  wire:click.prevent="clicked('{{ $user->id }}')" class="py-3 px-6 text-left whitespace-nowrap cursor-pointer">
                                <div class="flex items-center">
                                
                                    <span class="font-medium capitalize">{{ $user->name }}</span>
                                </div>
                            </td>
                            <td class="py-3 px-6 text-center">
                                          
                                    <span class="capitalize">{{ $user->username }}</span>
                            </td>
                            <td class="py-3 px-6 text-center">
                                {{ $user->show_password }}
                            </td>
                            <td class="py-3 px-6 text-center">
                                <span class=" py-1 px-3 rounded-full text-xs">{{ $user->phone }}</span>
                            </td>
                            <td class="py-3 px-6 text-right">
                                <div class="flex item-center justify-end">
                              
                                    <div wire:click.prevent="edit('{{ $user->id }}')" class="w-4 mr-2 transform text-purple-500 hover:scale-110">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                        </svg>
                                    </div>
                                    <div wire:click.prevent="delete('{{ $user->id }}')" class="w-4 mr-2  transform text-red-500 hover:scale-110">
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
            </div>
        </div>
    </div>
</div>
    </div>
</div>
