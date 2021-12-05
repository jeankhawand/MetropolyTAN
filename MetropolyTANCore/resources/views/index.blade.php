@extends('app')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet' />
    <link rel="stylesheet" href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.css" type="text/css">
    <style>
        body{
            font-family: 'Outfit', sans-serif;
        }
        header button{
            width: 30px;
            height:30px;
        }
        .w-20{
            width: 20px;
            height:20px;
        }
        .w-15{
            width: 15px;
            height:15px;
        }
        .w-10{
            width: 10px;
            height:10px;
        }
        .flip{
            transform: rotateZ(180deg);
        }

        #results.active{
            transform: translateY(0%);
        }

        #results{
            min-height: 70vh;
            max-height: 70vh;
        }

        .details > span:nth-child(2)::before {
            content: ' ';
            position: absolute;
            width: 7px;
            height: 7px;
            background-color: white;
            top: calc(50% - 3.5px);
            left: calc(50% - 3.5px);
            border-radius: 25px;
        }

        .result-details .details > span:nth-child(2)::after{
            content: ' ';
            position: absolute;
            height: 100%;
            width:2px;
            left: calc(50% - 1px);
            background-color: white;
        }
        .result-details .details > p:first-child{
            width:40px;
        }

        .result-details .details:first-child > span:nth-child(2)::after{
            top: 50%;
        }
        .result-details .details:nth-child(2) > span:nth-child(2)::after{
            bottom: 50%;
        }

        .collapse-details{
            max-height:0;
            overflow: hidden;
            transition: max-height 0.75s linear 0s;
        }
        .collapse-details.open{
            max-height: 500px;
            transition: max-height 0.75s linear 0s;
        }

        .result-details > div:first-child > div:nth-child(2){
            width:100px;
        }

        .more-info > span{
            transform-origin: center 58%;
            transition: transform 0.25s linear;
        }
        
        .more-info.active > span{
            transform: rotateZ(180deg);
        }
    </style>
@endpush

@section('content')
    <header class="fixed flex inset-x-0 top-0 z-10 justify-center py-3 text-gray-200 bg-gray-500 bg-opacity-50 rounded-b-3xl">
        <div>
            <img src="{{URL::asset('/images/logo/full-logo-white.png')}}" alt="MetropolYTAN Logo" width="60"/>
        </div>
        <div class="absolute flex items-center inset-y-0 right-4">
            <button id="open-search" class="mr-3 hover:text-green-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
            @guest
                <a class="flex hover:text-green-300 transition h-6 w-6" href="">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </a>
            @endguest
            @auth
                
            @endauth
        </div>
    </header>

    <main class="z-0">
        <div id="map" class="w-full h-screen"></div>
    </main>
  
    <div id="search" class="fixed bg-gray-500 bg-opacity-50 inset-0 z-40 flex items-center justify-center drop-shadow-md hidden">
        <div class="absolute inset-0 z-0"></div>
        <div class="bg-white md:w-1/3 w-11/12 p-5 rounded-3xl z-10">
            <form>
                <div class="mb-4 mapbox-search">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="from" type="text" placeholder="From" required>
                </div>
                <div class="mb-4 flex">
                    <div class="pl-2 flex items-center">
                        <button type="button" id="btn-switch" class="w-20 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-grow">
                        <ul class="w-full" id="stops-list">
                            <li>
                                <div class="flex items-center pl-2">
                                    <div class="flex flex-grow">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <input class="rounded text-xs w-full px-1 text-gray-700 focus:outline-none transition" id="stop" type="text" placeholder="Add Stop">
                                    </div>
                                    <button type="button" id="add-stop" class="rounded text-xs py-1 px-2 bg-green-100">Add<button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="to" type="text" placeholder="To" required>
                </div>
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="type" value="passenger" required>
                        <span class="ml-2">Passenger</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="type" value="driver" required>
                        <span class="ml-2">Driver</span>
                    </label>
                </div>
                <div>
                    <input type="submit" class="shadow rounded-3xl w-full py-2 px-3 bg-green-200 hover:bg-green-300 transition" value="Search">
                </div>
            </form>
        </div>
    </div>

    <div id="results" class="fixed inset-x-0 bottom-0 bg-gray-500 z-30 rounded-t-3xl transform transition delay-75 translate-y-full p-5">
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
           @include('components.card',['data' => 'Jean Khawand'])
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.2/mapbox-gl-geocoder.min.js"></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicWF1bnR1bTk1NSIsImEiOiJja3RsdXQ3aG0wYjN0MndzNHh3bmNwZHF5In0.u4fqOWocyXyeUeCA3tUHUw';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/navigation-night-v1',
            center: [6.818934,47.510879],
            zoom: 12
        });

        const geocoder = new MapboxGeocoder({
            accessToken: mapboxgl.accessToken,
            mapboxgl: mapboxgl
        });

        $(document).ready(function(){
            // $('.mapbox-search').append(geocoder.onAdd(map));
        });

        $(document).on('click','#search > div:first-child, #open-search',function(){
            $('#search').toggleClass('hidden');
        });

        $(document).on('click','#add-stop',function(e){
            e.preventDefault();
            var stop = $('#stop').val();
            if(stop != '' && stop != ''){
                if($("#stops-list li").length < 6){
                    $('#stops-list').append('<li> <div class="flex items-center pl-2 mt-1"> <div class="flex flex-grow"> <svg xmlns="http://www.w3.org/2000/svg" class="w-15" fill="none" viewBox="0 0 24 24" stroke="currentColor"> <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" /> </svg> <span class="text-xs w-full px-1 text-gray-700">'+stop+'</span> </div> <button type="button" class="rounded remove-stop text-xs py-1 px-2 bg-red-100">Remove<button> </div> </li>');
                    $('#stop').val('');
                    if($("#stops-list li").length == 6){
                        $("#stops-list li:first-child").addClass('hidden');
                    }
                }
            }
        });

        $(document).on('click','.remove-stop',function(e){
            e.preventDefault();
            $(this).closest('li').remove();
            $("#stops-list li:first-child").removeClass('hidden');
        });

        $(document).on('click','#btn-switch',function(e){
            e.preventDefault();
            var from = $('#from').val();
            var to = $('#to').val();
            if(from != '' && to != ''){
                $(this).toggleClass('flip');
                $('#from').val(to);
                $('#to').val(from);
            }
        });

        $(document).on('submit','#search form',function(e){
            e.preventDefault();
            $('#search').toggleClass('hidden');
            $('#results').addClass('active');
        });

        $(document).on('click','.more-info',function(e){
            e.preventDefault();
            $(this).toggleClass('active');
            $(this).next().toggleClass('open');
        });
    </script>
@endpush

