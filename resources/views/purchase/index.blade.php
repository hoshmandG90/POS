<div>
    @section('title', 'Purchase')
    <section class="flex justify-center  mx-auto px-6 my-1 flex flex-wrap -m-4">

        <div class="p-2 w-full md:w-60  ">
            <a href="{{ route('CreatePurchase') }}"
                class="flex p-7 flex-col  items-center justify-center space-y-3  bg-white rounded-lg shadow-xs cursor-pointer  ">
                <img src="https://cdn-icons-png.flaticon.com/512/1162/1162456.png"
                    class="w-10 h-10 img-fluid img-responsive " alt="">

                <div>
                    <p class=" font-medium ml-2 ">
                        کاڵا فرۆشتن 
                    </p>

                </div>
            </a>
        </div>


        <div class="p-2 w-full md:w-60  ">
            <a href="{{ route('ReturnIndex') }}"
                class="flex  flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer hover:bg-blue-200 ">
                <img src="https://as2.ftcdn.net/v2/jpg/04/37/98/05/1000_F_437980580_JdthZIiZDxOdnd5t9Sc29iAsoZJ5XXnh.jpg"
                    class="w-10 h-10 img-fluid img-responsive " alt="">

                <div>
                    <p class=" text-sm truncate ml-2  text-center">
                          گەڕانەوەی کاڵا 
                          <p>فرۆشراوەکان بە قەرز</p>
                    </p>

                </div>
            </a>
        </div>

        <div class="p-2 w-full md:w-60  ">
            <a href="{{ route('ReturnView') }}"
                class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer hover:bg-blue-200 ">
                <img src="https://cdn-icons-png.flaticon.com/512/3596/3596029.png"
                    class="w-10 h-10 img-fluid img-responsive " alt="">

                <div>
                    <p class="text-sm truncate  text-center ml-2 ">
                          گەڕانەوەی کاڵا 
                          <p>فرۆشراوەکان بە نەقد</p>
                    </p>

                </div>
            </a>
        </div>


     

    </section>
</div>
