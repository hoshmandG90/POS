<div>

    @section('title','Login')
    <section class="min-h-screen flex flex-col">
        <div class="flex flex-1 items-center justify-center">
            <div class="rounded-lg sm:border-2 px-4 lg:px-24 py-16 lg:max-w-xl sm:max-w-md w-full text-center">


                @if ($check)
                    
          
                <span class="font-semibold text-red-400 mt-2 mb-1 text-center items-center">{{ $check }}</span>
                    @endif
                <form wire:submit.prevent="SaveLogin" class="text-center">
                    <h1 class="font-bold tracking-wider text-3xl mb-8 w-full text-gray-600">
                        چوونەژوورەوە
                    </h1>
                    <div class="py-2 text-left">
                        <input wire:model="username" type="text"
                            class="bg-gray-200 border-2 @error('username') border border-red-400 @enderror border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700 "
                            placeholder="ناوی بەکارهێنەو" />




                    
                    </div>
                    <div class="py-2 text-left">
                        <input wire:model="password" type="password"
                            class="bg-gray-200 border-2 @error('password') border border-red-400 @enderror border-gray-100 focus:outline-none bg-gray-100 block w-full py-2 px-4 rounded-lg focus:border-gray-700 "
                            placeholder="وشەی تێپەر" />


                    

                    </div>
                    <div class="py-2">
                        <button type="submit"
                            class="border-2 border-gray-100 focus:outline-none bg-purple-600 text-white font-bold tracking-wider block w-full p-2 rounded-lg focus:border-gray-700 hover:bg-purple-700">
                            جوونەژوورەوە
                        </button>
                    </div>
                </form>


            </div>
        </div>
    </section>

</div>
