<div>
    @section('title', 'Person')
    <section class="flex justify-center  mx-auto px-6 my-1 flex flex-wrap -m-4">

        <div class="p-2 w-full md:w-60  ">
            <a href="{{ route('CreatePerson') }}"
                class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer hover:bg-blue-200 hover:text-gray-500">
                <img src="https://cdn-icons-png.flaticon.com/512/3076/3076368.png"
                    class="w-10 h-10 img-fluid img-responsive " alt="">

                <div>
                    <p class=" font-medium ml-2 ">
                        بەکارهێنەر 
                    </p>

                </div>
            </a>
        </div>


        <div class="p-2 w-full md:w-60  ">
            <a href="{{ route('SupplierPerson') }}"
                class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer hover:bg-blue-200 hover:text-gray-500">
                <img src="https://cdn-icons-png.flaticon.com/512/3135/3135715.png"
                    class="w-10 h-10 img-fluid img-responsive " alt="">

                <div>
                    <p class=" font-medium ml-2 ">
                          کارمەندەکان
                    </p>

                </div>
            </a>
        </div>

     

    </section>
</div>
