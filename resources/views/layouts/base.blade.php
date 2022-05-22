<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.output.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/tailwind.min.css') }}">
    <link href="{{ asset('assets/img/favicon.ico') }}" rel="shortcut icon">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <script src="https://unpkg.com/flowbite@1.4.1/dist/flowbite.js"></script>

    @livewireScripts
   

    @livewireStyles
</head>
<body>

    @flasher_render
    <!-- this render all flasher notifications. -->
    @flasher_livewire_render
    <!-- this render livewire notifications only. -->
    @yield('content')

    
    <script src="{{ asset('assets/js/alpine.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.js') }}"></script>

    <script>

        $(".sound").on("click", function(){
           var object=document.createElement("audio");
           object.src ='/assets/audio/beep.mp3';
           object.play();
        });
    </script>
    
  
</body>
</html>