@extends('layouts.master')

@section('title','Welcome')


@section('content')


<div class="p-10">
    <div class="container mx-auto shadow rounded pb-4 bg-cover" style="color:#606F7B;background-color: rgb(165, 182, 198);
     background-image:url('https://68.media.tumblr.com/f6a4004f3092b0d664daeabb95d5d195/tumblr_oduyciOJNb1uhjffgo1_500.gif');">
        <div class="mt-2 p-4 border-b border-grey-light  text-center">
          <span class="text-4xl font-thin">View US</span>
           <span class="hidden sm:inline-block align-bottom text-xs"> Copyright &copy; 2022 </span>
        </div>
    
        <div class="flex justify-center">
          <div class="text-center p-2">
             
              <div class="text-grey-light tracking-wide">
                <span class="set_date">Thursday 28 May </span>
                |             <span class="set_time">8:00 AM</span>
    
              </div>
              <small class="capitalize">all rights reserved and  powered by <a href="">Hoshmand Kamal</a></small>
            </div>
        </div>
      </div>
    
    
    </div>
    @auth
    
   <p>{{ auth()->user()->name }}</p>
@endauth
    <script type="text/javascript" >
      var setdate = document.querySelector(".set_date");
      var settime = document.querySelector(".set_time");
  
      var date = new Date().toDateString();
      setdate.innerHTML = date;
  
  
      setInterval(function () {
          var time = new Date().toLocaleTimeString();
          settime.innerHTML = time;
      }, 500);
  
      function checked(id) {
          var checked_green = document.getElementById("check" + id);
          checked_green.classList.toggle('green');
          var strike_unstrike = document.getElementById("strike" + id);
          strike_unstrike.classList.toggle('strike_none');
      }
  
  </script>








@endsection