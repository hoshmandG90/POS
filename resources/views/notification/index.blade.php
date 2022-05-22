<div>
    @section('title', 'Notification')
    <section class="flex justify-center  mx-auto px-6 my-1 flex flex-wrap -m-4">

        <div class="p-2 w-full md:w-60  ">
            <a href="{{ route('SmallNotification') }}"
                class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer hover:bg-blue-200 hover:text-gray-200">
                <img src="https://cdn-icons-png.flaticon.com/512/3652/3652191.png"
                    class="w-10 h-10 img-fluid img-responsive " alt="">

                <div>
                    <p class=" font-medium ml-2 ">
                        کاڵا بەسەرچووەکان
                    </p>

                </div>
            </a>
        </div>


        <div class="p-2 w-full md:w-60  ">
            <a href="{{ route('LackOfStockNotification') }}"
                class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer hover:bg-blue-200 hover:text-gray-200">
                <img src="https://cdn-icons-png.flaticon.com/512/4270/4270872.png"
                    class="w-10 h-10 img-fluid img-responsive " alt="">

                <div>
                    <p class=" font-medium ml-2 ">
                         کاڵا کەمبووەکان
                    </p>

                </div>
            </a>
        </div>

        <div class="p-2 w-full md:w-60  ">
            <a  href="{{ route('ExpiredNotification') }}"
                            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer hover:bg-blue-200 hover:text-gray-200 ">
                <img src="https://cdn-icons-png.flaticon.com/512/5511/5511401.png"
                    class="w-10 h-10 img-fluid img-responsive " alt="">

                <div>
                    <p class=" font-medium ml-2 ">
                      کاڵای نزیك بەسەرچوون
                    </p>

                </div>
            </a>
        </div>
        


    </section>
</div>
