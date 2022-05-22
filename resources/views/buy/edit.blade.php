<div>
    @section('title','Edit')
    <div class="mt-20">
        <div class="w-full bg-center bg-cover h-96"
            style="background-image: url(https://img.freepik.com/free-vector/pharmacy-counter-queue-people-pharmacist-medical-masks-waiting-turn-store-medical-drugs-seller-checkout-shelves-display-cases-with-medicines-drugstore-vector-flat-concept_176411-3626.jpg?w=1380);">
    
            <div class="flex items-center justify-start w-full h-full bg-gray-900 bg-opacity-50">
                <div class="flex flex-col space-y-2">
                    <h1 class="text-4xl font-bold text-white mb-2  ml-7 ">بەشی ناساندنی کاڵا</h1>
    
    
                    <div class="flex justify-start">
                        <div class="  px-4 sm:px-6 lg:px-8">
                            <div class="flex items-center space-x-2 text-gray-400 text-sm">
                                <a href="{{ route('welcome') }}"
                                    class="hover:underline text-white hover:text-blue-600">سەرەتا</a>
                                <span>
                                    <svg class="h-5 w-5 leading-none text-white"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
                                <a href="{{ route('CreateBuy') }}"
                                    class="hover:underline text-white hover:text-blue-600">گەرانەوە</a>
                                <span>
                                    <svg class="h-5 w-5 leading-none text-white"
                                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M9 5l7 7-7 7" />
                                    </svg>
                                </span>
    
                                <a 
                                class="hover:underline text-white hover:text-blue-600">{{ $stock->name }}</a>
                          


                            </div>
                        </div>
    
                    </div>
                </div>
            </div>
        </div>
    
    </div>    
  
    <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel"
    aria-labelledby="dashboard-tab">
    <section class="p-6 dark:bg-coolGray-800 dark:text-coolGray-50">
        <form wire:submit.prevent="SaveStocks('{{ $stock->id }}')"
            class="container flex flex-col mx-auto space-y-12 ng-untouched ng-pristine ng-valid">
            <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-coolGray-900">
                <div class="space-y-2 col-span-full lg:col-span-1">
                </div>
                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">
                    <div class="col-span-full sm:col-span-2">
                        <label for="city" class="text-sm block text-sm font-medium text-gray-700">ناوی
                            کاڵا </label>
                        <input wire:model.defer="name" id="city" type="text" placeholder=""
                            class="w-full pl-6 pr-2
                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                        @error('name')
                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full sm:col-span-2">
                        <label for="state"
                            class="text-sm block text-sm font-medium text-gray-700">بارکۆد</label>
                        <input wire:model.defer="barcode" type="number"
                            class="w-full pl-6 pr-2
                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"  >
                        @error('barcode')
                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full mt-10 sm:col-span-2">
                        <div class="flex items-start">
                            <div class="flex items-center h-5">
                                <input wire:model.defer="is_barcode" type="checkbox"
                                    class="focus:ring-indigo-500 h-4 w-4 text-indigo-600 border-gray-300 rounded" @if($is_barcode == true)
                                    checked   
                                    @endif>
                            </div>
                            <div class="ml-3 text-sm">
                                <label for="comments"
                                    class="block text-sm font-medium text-gray-700">کلیك بکە لە کاڵای بێ
                                    بارکۆد</label>
                            </div>
                        </div>

                    </div>






                    <div class="col-span-full">
                        <label for="bio"
                            class="text-sm block text-sm font-medium text-gray-700">تێبینی</label>
                        <textarea wire:model.defer="notes" id="bio" placeholder=""
                            class="w-full pl-6 pr-2
                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple"></textarea>


                        @error('notes')
                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="col-span-full sm:col-span-2">
                        <label for="city"
                            class="text-sm block text-sm font-medium text-gray-700">بەرواری
                            بەسەرچوون</label>
                        <input wire:model.defer="expired_at" type="date" placeholder=""
                            class="w-full pl-6 pr-2
                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                        @error('expired_at')
                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full sm:col-span-2">
                        <label for="state" class="text-sm block text-sm font-medium text-gray-700">شوێنی
                            کاڵا</label>
                        <input wire:model.defer="address" id="state" type="text"
                            class="w-full pl-6 pr-2
                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                        @error('address')
                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full sm:col-span-2">

                        <div>
                            <label for="price"
                                class="block text-sm font-medium text-gray-700">بەرهەمی</label>
                            <div class="mt-1 relative rounded-md shadow-sm">
                                <select wire:model.defer="made_in"
                                    class="w-full pl-6 pr-2
                                        text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                    >
                                    <option>دانەیك هەلبژێرە</option>
                                    @foreach ($Made_in as $row)
                                    <option value="{{ $row->type_made }}">{{ $row->type_made }}</option>

                                    @endforeach




                                </select>
                           
                            </div>
                        </div>
                        @error('made_in')
                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                        @enderror






                    </div>

                </div>
            </fieldset>
            <fieldset class="grid grid-cols-4 gap-6 p-6 rounded-md shadow-sm dark:bg-coolGray-900">
                <div class="space-y-2 col-span-full lg:col-span-1">
                </div>
                <div class="grid grid-cols-6 gap-4 col-span-full lg:col-span-3">

                    <div class="col-span-full ">

                        <div class="col-span-full sm:col-span-2">

                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">ناوی
                                    کۆمپانیا</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <select wire:model.defer="name_company"
                                        class="w-full pl-6 pr-2
                                            text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                        >
                                        <option>دانەیك هەلبژێرە</option>
                                        @foreach ($Company_name as $row)
                                        <option value="{{ $row->company_name }}">{{ $row->company_name }}</option>

                                        @endforeach



                                    </select>
                                
                                </div>
                            </div>
                   

                            @error('made_in')
                            <span
                                class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>

                    <div class="col-span-full ">

                        <div class="col-span-full sm:col-span-2">

                            <div>
                                <label for="price" class="block text-sm font-medium text-gray-700">جۆری
                                    کاڵا</label>
                                <div class="mt-1 relative rounded-md shadow-sm">
                                    <select wire:model.defer="name_product_type"
                                        class="w-full pl-6 pr-2
                                            text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                                        >
                                        <option>دانەیك هەلبژێرە</option>
                                        @foreach ($Type_product as $row)
                                        <option value="{{ $row->type_product }}">{{ $row->type_product }}</option>

                                        @endforeach



                                    </select>
                                  
                                </div>
                            </div>
                         

                            @error('made_in')
                            <span
                                class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                            @enderror

                        </div>
                    </div>

                    <div class="col-span-full sm:col-span-2">
                        <label for="city" class="text-sm block text-sm font-medium text-gray-700">کۆی
                            ژمارەی دانە</label>
                        <input wire:model.defer="total_number_of_units" type="number" placeholder=""
                            class="w-full pl-6 pr-2
                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                        @error('total_number_of_units')
                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="col-span-full sm:col-span-2">
                        <label for="city" class="text-sm block text-sm font-medium text-gray-700">
                            نرخی کڕین بە دانە</label>
                        <input wire:model.defer="purchase_price_in_units" type="number" placeholder=""
                            class="w-full pl-6 pr-2
                                 text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                        @error('purchase_price_in_units')
                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                        @enderror
                    </div>


                    <div class="col-span-full sm:col-span-2">
                        <label for="city" class="text-sm block text-sm font-medium text-gray-700">
                            نرخی فڕۆشتن بە دانە</label>
                        <input wire:model.defer="selling_price_per_piece" type="number" placeholder=""
                            class="w-full pl-6 pr-2
                                text-gray-400 py-2 my-2 bg-gray-200   focus:bg-white focus:border-purple-300 focus:outline-none rounded-md focus:shadow-outline-purple">
                        @error('selling_price_per_piece')
                        <span class="text-red-400 mt-2 mb-1 text-xs font-semibold">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="flex justify-center col-span-full sm:col-span-2 ">
                        <button type="submit"
                            class="w-full bg-blue-600 text-white font-medium py-2 px-4 rounded-md">
                            گۆرانکاریکردن
                        </button>
                    </div>



                </div>


            </fieldset>



        </form>
    </section>
</div>


</div>