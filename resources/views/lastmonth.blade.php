<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="">

    <title>Shaggers Bollywood Poll</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

     <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />




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
                <div class="max-w-7xl mx-auto px-2 sm:px-6 lg:px-8">
                    <div class="relative flex items-center justify-between h-16">
                        <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
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
                                <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M4 6h16M4 12h16M4 18h16" />
                                </svg>
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

                                    <a href="/"
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SHAGGERS
                                        INDEX</a>
                                        <a href='{!! url('/dashboard'); !!}'
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">DASHBOARD</a>
                                        <a href='{!! url('/lastmonth'); !!}'
                                        class="text-gray-300 hover:bg-gray-700 hover:text-white px-3 py-2 rounded-md text-sm font-medium">SEPT'21</a>



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
                <div class="sm:hidden" id="mobile-menu">

                </div>
            </nav>




        </div>

    </div>

    <!---- NAVBAR --->


    <!--NAVBAR --->




<table class="min-w-full table-auto">
        <thead class="justify-between">
            <tr class="bg-gray-800">
                <th class="px-16 py-2">
                    <span class="text-gray-300"></span>
                </th>

                <th class="px-8 py-2">
                    <span class="text-gray-300">ACTRESS</span>
                </th>
                <th class="px-8 py-2">
                    <span class="text-gray-300">SHAGG-SCORE</span>
                </th>
                <th class="px-8 py-2">
                    <span class="text-gray-300">POSITION</span>
                </th>

                <th class="px-8 py-2">
                    <span class="text-gray-300">UP/DOWN</span>
                </th>

                <th class="px-8 py-2">
                    <span class="text-gray-300">% INCREASE SHAGGS</span>
                </th>
            </tr>
        </thead>


    <tbody class="text-gray-700 w-full h-full">

            @foreach ($votes as $vote )

            <!--no.1-->


        {{-- Image --}}
        <tr class="w-full h-full items-center border-gray-200 border-4">
                <td class="text-left py-3 px-4">
                    <div class="object-cover items-center w-24 h-24"><img class="" src="/img/{{ $vote->avtaar }}"></div>
                </td>

        {{-- Name --}}
                <td>
                    <span class="text-center ml-2 font-semibold"><a href="/lastmonth/{{ $vote->id}}">{{ $vote->name }}</a></span>
                </td>
                {{-- <a href='{!! url('/dashboard'); !!}' --}}


        {{-- Count --}}
                <td class="px-16 py-2">
                    <a href="/lastmonth/{{ $vote->id}}"
                        class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                        {{ $vote->current_count }}

                    </a>
                </td>

        {{-- Rank --}}
                <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold text-2xl">{{  $vote->current_rank  }}</span>
                </td>


        {{-- checking Up and down --}}




        @if($vote->NE)
        <td class="px-16 py-2">


            <span class="">
                {{-- <i class="fas fa-arrow-alt-circle-up fa-3x "></i> --}}
             <h4 class="text-lg font-semibold bg-red-700 rounded-md p-2 text-white">New Entry</h4>
            </span>
        </td>

        @else

        <td class="px-16 py-2">

                    @if($vote->previous_rank -  $vote->current_rank > 0 )

                    <span style="color: limegreen;">
                        <i class="fas fa-arrow-alt-circle-up fa-3x "></i>
                        {{  $vote->previous_rank -  $vote->current_rank }}
                    </span>



                    @elseif($vote->previous_rank -  $vote->current_rank < 0)

                    <span style="color: red;">
                        <i class="fas fa-arrow-alt-circle-down fa-3x "></i>
                         {{ $vote->previous_rank -  $vote->current_rank }}
                     </span>

                     @else

                     <span style="color: black;">
                        <i class="fas fa-arrows-alt-h fa-3x fa-3x "></i>
                         {{  $vote->previous_rank -  $vote->current_rank }}
                     </span>

                    @endif

        </td>
        @endif




        {{-- checking Up and down --}}


        @if($vote->NE)
        <td class="">


            <span class="">
                {{-- <i class="fas fa-arrow-alt-circle-up fa-3x "></i> --}}
                <h4 class="text-lg font-semibold bg-red-700 rounded-md p-2 text-white ml-auto block">New Entry</h4>
            </span>
        </td>

        @else
            <td class="px-16 py-2">

                    <?php
                  $var = (($vote->current_count -  $vote->previous_count)/$vote->previous_count*100);
                    ?>


                    @if($var > 1)


                    <span class="text-green-500" style="color: limegreen;">

                        <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                    </span>
                    <span>
                        {{  number_format(($vote->current_count -  $vote->previous_count)/$vote->previous_count*100,2)  }}%
                    </span>
                    @else
                    <span class="text-red-500" style="color: red;">

                        <i class="fas fa-arrow-alt-circle-down fa-3x"></i>
                    </span>
                    <span>
                        {{  number_format(($vote->current_count -  $vote->previous_count)/$vote->previous_count*100,2)  }}%
                    </span>
                    @endif

            </td>
            @endif

        </tr>
            <!--no.1-->

            {{--
        <!--no.2-->
              <tr class="bg-white border-4 border-gray-200">
                  <td class="px-16 py-2 flex flex-row items-center">
                    <img
                      class="h-24 w-24 rounded-full object-cover "
                      src="https://preview.redd.it/2a0zb5bdvwl71.jpg?width=864&format=pjpg&auto=webp&s=fd66068967a340d32e60d98bb102c5485367e50e"
                      alt=""
                    />
                  </td>
                  <td>
                    <span class="text-center ml-2 font-semibold"><a href="2.html">Kajal Aggarwal</a></span>
                  </td>
                  <td class="px-16 py-2">
                     <a href="2.html" class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                      845
                    </a>
                  </td>
                  <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold text-2xl">2</span>
                  </td>
                  <td class="px-16 py-2">
                      <span class="" style="color: limegreen;">
                           <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                      </span>
                      <span>1 positions</span>
                  </td>
                  <td class="px-16 py-2">
                     <span class="text-green-500" style="color: limegreen;">
                   <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                    </span>
                    <span>7%</span>
                  </td>
              </tr>
        <!--no.2-->
        <!--no.3-->
              <tr class="bg-white border-4 border-gray-200">
                  <td class="px-16 py-2 flex flex-row items-center">
                    <img
                      class="h-24 w-24 rounded-full object-cover "
                      src="https://i.redd.it/mu4d7xuzbqo71.jpg"
                      alt=""
                    />
                  </td>
                  <td>
                    <span class="text-center ml-2 font-semibold"><a href="3.html">Deepika Padukone</a></span>
                  </td>
                  <td class="px-16 py-2">
                     <a href="3.html" class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                      825
                    </a>
                  </td>
                  <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold text-2xl">3</span>
                  </td>
                  <td class="px-16 py-2">
                      <span class="" style="color: tomato;">
                           <i class="fas fa-arrow-alt-circle-down fa-3x"></i>
                      </span>
                      <span>1 positions</span>
                  </td>
                  <td class="px-16 py-2">
                     <span class="text-green-500" style="color: limegreen;">
                   <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                    </span>
                    <span>4%</span>
                  </td>
              </tr>
        <!--no.3-->
        <!--no.4-->
              <tr class="bg-white border-4 border-gray-200">
                  <td class="px-16 py-2 flex flex-row items-center">
                    <img
                      class="h-24 w-24 rounded-full object-cover "
                      src="https://preview.redd.it/vlg4z1akh4o71.jpg?width=990&format=pjpg&auto=webp&s=4a33f58fad25c3ff768e2dc04a2c17a3cb10e7db"
                      alt=""
                    />
                  </td>
                  <td>
                    <span class="text-center ml-2 font-semibold"><a href="4.html">Kriti Sanon</a></span>
                  </td>
                  <td class="px-16 py-2">
                    <a href="4.html" class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                      823
                    </a>
                  </td>
                  <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold text-2xl">4</span>
                  </td>
                  <td class="px-16 py-2">
                      <span class="" style="color: limegreen;">
                           <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                      </span>
                      <span>3 positions</span>
                  </td>
                  <td class="px-16 py-2">
                     <span class="text-green-500" style="color: limegreen;">
                   <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                    </span>
                    <span>17%</span>
                  </td>
              </tr>
        <!--no.4-->
        <!--no.5-->
              <tr class="bg-white border-4 border-gray-200">
                  <td class="px-16 py-2 flex flex-row items-center">
                    <img
                      class="h-24 w-24 rounded-full object-cover "
                      src="https://i.redd.it/hqc0yd35pvf71.jpg"
                      alt=""
                    />
                  </td>
                  <td>
                    <span class="text-center ml-2 font-semibold"><a href="5.html">Alia Bhatt</a></span>
                  </td>
                  <td class="px-16 py-2">
                    <a href="5.html" class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                     801
                    </a>
                  </td>
                  <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold text-2xl">5</span>
                  </td>
                  <td class="px-16 py-2">
                      <span class="" style="color: tomato;">
                           <i class="fas fa-arrow-alt-circle-down fa-3x"></i>
                      </span>
                      <span>1 position</span>
                  </td>
                  <td class="px-16 py-2">
                     <span class="text-green-500" style="color: limegreen;">
                   <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                    </span>
                    <span>4%</span>
                  </td>
              </tr>
        <!--no.5-->
        <!--no.6-->
              <tr class="bg-white border-4 border-gray-200">
                  <td class="px-16 py-2 flex flex-row items-center">
                    <img
                      class="h-24 w-24 rounded-full object-cover "
                      src="https://i.redd.it/750rdzpk4bk71.jpg"
                      alt=""
                    />
                  </td>
                  <td>
                    <span class="text-center ml-2 font-semibold"><a href="6.html">Kiara Advani</a></span>
                  </td>
                  <td class="px-16 py-2">
                    <a href="6.html" class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                      799
                    </a>
                  </td>
                  <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold text-2xl">6</span>
                  </td>
                  <td class="px-16 py-2">
                      <span style="color: black;">
                            <i class="fas fa-arrows-alt-h fa-3x"></i>
                      </span>
                      <span></span>
                  </td>
                  <td class="px-16 py-2">
                     <span class="text-green-500" style="color: limegreen;">
                   <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                    </span>
                    <span>10%</span>
                  </td>
              </tr>
        <!--no.6-->
        <!--no.7-->
              <tr class="bg-white border-4 border-gray-200">
                  <td class="px-16 py-2 flex flex-row items-center">
                    <img
                      class="h-24 w-24 rounded-full object-cover "
                      src="https://i.redd.it/ut6x62q04wn71.jpg"
                      alt=""
                    />
                  </td>
                  <td>
                    <span class="text-center ml-2 font-semibold bg-green-500 p-2"><a href="7.html">Nora Fatehi</a></span>
                  </td>
                  <td class="px-16 py-2">
                    <a href="7.html" class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                      789
                    </a>
                  </td>
                  <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold text-2xl">7</span>
                  </td>
                  <td class="px-16 py-2">
                      <span style="color: royalblue;">
                          <i class="fas fa-thumbs-up fa-3x"></i>
                      </span>
                      <span></span>
                  </td>
                  <td class="px-16 py-2">
                     <span class="text-green-500" style="color: limegreen;">
                   <!-- <i class="fas fa-arrow-alt-circle-up fa-3x"></i> -->
                    </span>
                    <span class="bg-indigo-500 p-2 font-semibold">New Entry</span>
                  </td>
              </tr>
        <!--no.7-->
        <!--no.8-->
              <tr class="bg-white border-4 border-gray-200">
                  <td class="px-16 py-2 flex flex-row items-center">
                    <img
                      class="h-24 w-24 rounded-full object-cover "
                      src="https://preview.redd.it/hzncpok05to71.jpg?width=640&format=pjpg&auto=webp&s=e88cb5ab0b7fbc6baa4185e9fe1cfc128072cd8b"
                      alt=""
                    />
                  </td>
                  <td>
                    <span class="text-center ml-2 font-semibold"><a href="8.html">Kareen Kapoor</a></span>
                  </td>
                  <td class="px-16 py-2">
                    <a href="8.html" class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                      780
                    </a>
                  </td>
                  <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold text-2xl">8</span>
                  </td>
                  <td class="px-16 py-2">
                      <span class="" style="color: tomato;">
                           <i class="fas fa-arrow-alt-circle-down fa-3x"></i>
                      </span>
                      <span>3 Positions</span>
                  </td>
                  <td class="px-16 py-2">
                     <span class="text-green-500" style="color: limegreen;">
                   <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                    </span>
                    <span>3%</span>
                  </td>
              </tr>
        <!--no.8-->
        <!--no.9-->
              <tr class="bg-white border-4 border-gray-200">
                  <td class="px-16 py-2 flex flex-row items-center">
                    <img
                      class="h-24 w-24 rounded-full object-cover "
                      src="https://i.redd.it/soo9ss5z76p71.jpg"
                      alt=""
                    />
                  </td>
                  <td>
                    <span class="text-center ml-2 font-semibold"><a href="9.html">Anushka Sharma</a></span>
                  </td>
                  <td class="px-16 py-2">
                    <a href="9.html" class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                      778
                    </button>
                  </td>
                  <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold text-2xl">9</span>
                  </td>
                  <td class="px-16 py-2">
                      <span class="" style="color: tomato;">
                           <i class="fas fa-arrow-alt-circle-down fa-3x"></i>
                      </span>
                      <span>1 Positions</span>
                  </td>
                  <td class="px-16 py-2">
                     <span class="text-green-500" style="color: limegreen;">
                   <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                    </span>
                    <span>18%</span>
                  </td>
              </tr>
        <!--no.9-->
        <!--no.10-->
              <tr class="bg-white border-4 border-gray-200">
                  <td class="px-16 py-2 flex flex-row items-center">
                    <img
                      class="h-24 w-24 rounded-full object-cover "
                      src="https://i.redd.it/pzvdps9adzo71.jpg"
                      alt=""
                    />
                  </td>
                  <td>
                    <span class="text-center ml-2 font-semibold"><a href="10.html">Disha Patani</a></span>
                  </td>
                  <td class="px-16 py-2">
                    <a href="10.html" class="bg-indigo-500 text-white px-4 py-2 border rounded-md hover:bg-white hover:border-indigo-500 hover:text-black ">
                      702
                    </button>
                  </td>
                  <td class="px-16 py-2">
                    <span class="text-center ml-2 font-semibold text-2xl">10</span>
                  </td>
                  <td class="px-16 py-2">
                      <span class="" style="color: tomato;">
                           <i class="fas fa-arrow-alt-circle-down fa-3x"></i>
                      </span>
                      <span>1 Positions</span>
                  </td>
                  <td class="px-16 py-2">
                     <span class="text-green-500" style="color: limegreen;">
                   <i class="fas fa-arrow-alt-circle-up fa-3x"></i>
                    </span>
                    <span>15%</span>
                  </td>
              </tr>
        <!--no.10--> --}}
            @endforeach
            {{-- @endforeach --}}
        </tbody>
    </table>
    </div>







</body>

</html>
