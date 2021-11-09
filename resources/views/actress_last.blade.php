{{-- @if(!Auth::user())

<h1>Please Login</h1>

@else

{{ $actress->name }}

{{ $actress->current_count }}


<img src="{{ $actress->image }}" alt="">
@endif --}}


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="">

    <title>Shaggers Index</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/tailwindcss@2.2.4/dist/tailwind.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />

        <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>


</head>


<body class="flex items-center justify-center" style="background: #edf2f7;">



    <div>


        {{-- <div>
            @foreach ($votes as  $vote)

            {{ $vote->name }};

        @endforeach

    </div> --}}

    <div class="m-8 ">
        <h1 class="text-black font-semibold text-5xl mx-64 mb-2 p-4 text-center bg-indigo-400">
            Shaggers Index Sept'21 </h1>

        <div>


            <!-- This example requires Tailwind CSS v2.0+ -->
            <nav class="bg-gray-800">
                <div class="max-w-full mx-auto px-2 sm:px-6 lg:px-8">
                    <div class=" items-center justify-between h-16">
                        <div class="flex items-center">
                            <!-- Mobile menu button-->
                            <button type="button"
                                class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-white hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-white"
                                aria-controls="mobile-menu" aria-expanded="false">
                                <span class="sr-only">Open main menu</span>
                                <!--
                  Icon when menu is closed.

                  Heroicon name: outline/menu

                  Menu open: "hidden", Menu closed: "block"
                -->

                                <!--
                  Icon when menu is open.

                  Heroicon name: outline/x

                  Menu open: "block", Menu closed: "hidden"
                -->
                                <svg class="hidden h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M6 18L18 6M6 6l12 12" />
                                </svg>
                            </button>
                        </div>
                        <div class="flex-1 flex items-center justify-center sm:items-stretch sm:justify-start">
                            <div class="flex-shrink-0 flex items-center">
                                <!--  <img class="block lg:hidden h-8 w-8" src="" alt="">
                <img class="hidden lg:block h-8 w-8" src="" alt=""> -->
                            </div>
                            <div class="hidden sm:block sm:ml-6">
                                <div class="flex space-x-4">
                                    <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                                    <a href="https://bollykittens.net/"
                                        class="bg-gray-900 text-white px-3 py-2 rounded-md text-sm font-medium"
                                        aria-current="page">BOLLYKITTNS</a>

                                    <a href="/lastmonth"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SHAGGERS
                                        INDEX </a>
                                    <a href="/dashboard"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">DASHBOARD</a>




                                    @if(!Auth::user())
                                    <a href="/login"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">LOGIN</a>
                                    <a href="/register"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">REGISTER</a>

                                    @endif


                                </div>


                            </div>
                        </div>

                    </div>
                </div>

                <!-- Mobile menu, show/hide based on menu state. -->
                <div class="" id="mobile-menu">

                </div>
            </nav>




        </div>

    </div>

    <!---- NAVBAR --->

    <section class="m-8 relative pt-12 bg-gray-50-50">

        <div class="items-center flex">
            <div class="flex mr-4 object-cover">
                <img alt="..." class="rounded-lg shadow-lg object-cover h-full w-full" src="/img/{{ $actress->image }}">
            </div>


            <div class="flex ml-4 w-1/2">
           <div>
            <div class="md:pr-12">
                <div class="text-white-600 p-3 text-center inline-flex items-center justify-center w-16 h-16 mb-6 shadow-lg rounded-full bg-black-300 mt-8 mr-3">
                  <i class="fas fa-hashtag fa-3x"></i>
                </div>
                <span class="font-bold text-4xl"> {{ $actress->current_rank }}</span>

                  <h3 class="text-3xl font-semibold">{{ $actress->name }}</h3>


                    <div class="flex space-x-3 justify-center lg:justify-start mt-6">


           <a href="https://www.facebook.com/FontGen/" class="bg-blue-500 px-4 py-1 font-semibold text-white inline-flex items-center space-x-2 rounded">
           <span class="text-white font-bold">Count:</span> <i class="fas fa-tint p-1"></i> {{ $actress ->current_count }}</span>
          </a>


  <!-- checking rank --->


            @if($actress->NE)

            <a href="https://www.facebook.com/FontGen/" class="bg-blue-500 px-4 py-1 font-semibold text-white inline-flex items-center space-x-2 rounded">
                <span class="text-white font-bold">Rank:</span>  <i class="fas fa-arrow-alt-circle-up p-1  "></i>  New Entry </span>
             </a>

            @else

          @if($actress->previous_rank -  $actress->current_rank > 0 )


          <a href="https://www.facebook.com/FontGen/" class="bg-green-500 px-4 py-1 font-semibold text-white inline-flex items-center space-x-2 rounded">
           <span class="text-white font-bold">Rank:</span>  <i class="fas fa-arrow-alt-circle-up p-1  "></i>  {{  $actress->previous_rank -  $actress->current_rank }}</span>
        </a>

        @elseif($actress->previous_rank -  $actress->current_rank < 0)

         <a href="https://www.facebook.com/FontGen/" class="bg-red-500 px-4 py-1 font-semibold text-white inline-flex items-center space-x-2 rounded">
           <span class="text-white font-bold">Rank:</span>  <i class="fas fa-arrow-alt-circle-down   p-1 "></i>  {{  $actress->previous_rank -  $actress->current_rank }}</span>
        </a>

         @else

          <a href="https://www.facebook.com/FontGen/" class="bg-gray-500 px-4 py-1 font-semibold text-white inline-flex items-center space-x-2 rounded">
           <span class="text-white font-bold">Rank:</span>  <i class="fas fa-arrows-alt-h   p-1 "></i>  {{  $actress->previous_rank -  $actress->current_rank }}</span>
        </a>

        @endif

        @endif

<!-- checking rank --->



<!-- checking score --->

@if($actress->NE)

<a href="https://www.facebook.com/FontGen/" class="bg-blue-500 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
    <span class="text-white font-bold">Score:</span><i class="fas fa-arrow-alt-circle-up p-1  "></i> New Entry</span>
</a>

@else
        <?php
        $var = (($actress->current_count -  $actress->previous_count)/$actress->previous_count*100);
          ?>


            @if($var > 1)

          <a href="https://www.facebook.com/FontGen/" class="bg-green-500 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
             <span class="text-white font-bold">Score:</span><i class="fas fa-arrow-alt-circle-up p-1 "></i> by  {{  number_format(($actress->current_count -  $actress->previous_count)/$actress->previous_count*100,2)  }}%</span>
        </a>

        @else

        <a href="https://www.facebook.com/FontGen/" class="bg-red-500 px-4 py-2 font-semibold text-white inline-flex items-center space-x-2 rounded">
            <span class="text-white font-bold">Score:</span><i class="fas fa-arrow-alt-circle-down p-1 "></i> by  {{  number_format(($actress->current_count -  $actress->previous_count)/$actress->previous_count*100,2)  }}%</span>
       </a>

       @endif
@endif
<!-- checking score --->




                </div>


                <div class="flex mt-8" >

                    <div class="text-white-600 p-3 text-center inline-flex items-center justify-center w-8 h-8 mb-3 shadow-lg rounded-full bg-black-300 mt-2 mr-6">
                        <i class="fas fa-hand-point-right fa-3x"></i>

                      </div>
                      <p class="inline-flex items-center font-semibold text-justify text-lg text-black bg-yellow-500 rounded-lg p-2 max-w-lg">{{ $actress->comment }}</p>
                </div>

    </div>


 </section>


</body>
</html>
