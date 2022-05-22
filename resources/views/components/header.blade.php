<h1 class="m-auto  text-xl font-semibold mb-6 mt-4 text-center text-gray-500 "> سڵاو بە خێربێت  <span class="text-red-500"></span></h1>
<section class="container mx-auto px-6 my-1 flex flex-wrap -m-4">

    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('Notification') }}"
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer {{  Request::is('Notification') ? 'bg-blue-300 text-gray-100' :' ' }} " >
            <img src="https://cdn-icons-png.flaticon.com/512/3306/3306630.png"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    ئاگادارییەکان
                </p>

            </div>
        </a>
    </div>



    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('Buy') }}"
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer {{  Request::is('Buy') ? 'bg-blue-300 text-gray-100' :' ' }}  ">
            <img src="https://cdn-icons-png.flaticon.com/512/985/985691.png"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    بەشی کڕین
                </p>

            </div>
        </a>
    </div>

    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('Purchase') }}"
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer {{  Request::is('Purchase') ? 'bg-blue-300 text-gray-100' :' ' }}  hover:scale-110  ">
            <img src="https://cdn-icons-png.flaticon.com/512/994/994393.png" class="w-10 h-10 img-fluid img-responsive "
                alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    فرۆشتن
                </p>

            </div>
        </a>
    </div>

    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('Drivers') }}"
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer ">
            <img src="https://cdn-icons.flaticon.com/png/512/1535/premium/1535791.png?token=exp=1652701644~hmac=253ec634f4f29d893c14fae2f15f6170"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    بەشی شوڤێر
                </p>

            </div>
        </a>
    </div>



    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('Person') }}" 
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer {{  Request::is('Person') ? 'bg-blue-300 text-gray-100' :' ' }}">
            <img src="https://cdn-icons-png.flaticon.com/512/686/686379.png"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    بەکارهێنەر
                </p>

            </div>
        </a>
    </div>

    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('Box') }}" 
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer {{  Request::is('Box') ? 'bg-blue-300 text-gray-100' :' ' }}">
            <img src="https://cdn-icons.flaticon.com/png/512/3577/premium/3577874.png?token=exp=1652896730~hmac=72e5839640b22635886171a3108328d5"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    قاسە
                </p>

            </div>
        </a>
    </div>

    

    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('ReportMoney') }}" 
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs  {{  Request::is('ReportMoney') ? 'bg-blue-300 text-gray-100' :' ' }} cursor-pointer ">
            <img src="https://cdn-icons-png.flaticon.com/512/3596/3596029.png"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    ڕاپۆرت
                </p>

            </div>
        </a>
    </div>
    

    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('Outcome') }}" 
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer ">
            <img src="https://cdn-icons.flaticon.com/png/512/3840/premium/3840696.png?token=exp=1652881749~hmac=6475e859d1f7ecb8d4de2535a45f97b1"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    مەسروفات
                </p>

            </div>
        </a>
    </div>

    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('Position') }}"
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer ">
            <img src="https://cdn-icons-png.flaticon.com/512/3721/3721984.png"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    لیستی ناوچە
                </p>

            </div>
        </a>
    </div>


    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('Company') }}"
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer ">
            <img src="https://cdn-icons-png.flaticon.com/512/4256/4256873.png"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    لیستی کۆمپانیاکان 
                </p>

            </div>
        </a>
    </div>




    <div class="p-2 w-full md:w-60  ">
        <a href="{{ route('Daily') }}"
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer ">
            <img src="https://cdn-icons-png.flaticon.com/512/1355/1355461.png"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    ڕۆژانە
                </p>

            </div>
        </a>
    </div>
    <div class="p-2 w-full md:w-60  ">
        <a  href="{{ route('welcome') }}" 
            class="flex flex-col items-center justify-center space-y-3 p-4 bg-white rounded-lg shadow-xs cursor-pointer ">
            <img src="https://cdn-icons-png.flaticon.com/512/1946/1946433.png"
                class="w-10 h-10 img-fluid img-responsive " alt="">

            <div>
                <p class=" font-medium ml-2 ">
                    سەرەتا
                </p>

            </div>
        </a>
    </div>
    <livewire:pages.logout/>

</section>
<hr class="mt-10 mb-10 text-gray-500">
