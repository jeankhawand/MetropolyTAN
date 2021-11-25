@extends('app')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet' />
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
    </style>
@endpush

@section('content')
    <header class="fixed flex inset-x-0 top-0 z-10 justify-center py-3 text-gray-200 bg-gray-500 bg-opacity-50 rounded-b-3xl">
        <h1>MetropolyTAN</h1>
        <div class="absolute flex items-center inset-y-0 right-4">
            <button class="mr-3 hover:text-green-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                </svg>
            </button>
            <button id="open-search" class="hover:text-green-300 transition">
                <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>
        </div>
    </header>

    <main class="z-0">
        <div id="map" class="w-full h-screen"></div>
    </main>
  
    <div id="search" class="fixed bg-gray-500 bg-opacity-50 inset-0 z-30 flex items-center justify-center drop-shadow-md hidden">
        <div class="absolute inset-0 z-0"></div>
        <div class="bg-white md:w-1/3 w-11/12 p-5 rounded-3xl z-10">
            <form>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="from" type="text" placeholder="From">
                </div>
                <div class="mb-4 flex">
                    <div class="pl-2 flex items-center">
                        <button type="button" class="w-20">
                            <svg xmlns="http://www.w3.org/2000/svg" className="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path strokeLinecap="round" strokeLinejoin="round" strokeWidth={2} d="M7 16V4m0 0L3 8m4-4l4 4m6 0v12m0 0l4-4m-4 4l-4-4" />
                            </svg>
                        </button>
                    </div>
                    <div class="flex flex-grow">
                        <ul class="w-full">
                            <li>
                                <div class="flex items-center pl-2">
                                    <div class="flex flex-grow">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="w-15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                                        </svg>
                                        <input class="rounded text-xs w-full px-1 text-gray-700 focus:outline-none transition" id="stop" type="text" placeholder="Add Stop">
                                    </div>
                                    <button type="button" class="rounded text-xs py-1 px-2 bg-green-100">Add<button>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="mb-4">
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="to" type="text" placeholder="To">
                </div>
                <div class="mb-4">
                    <label class="inline-flex items-center">
                        <input type="radio" class="form-radio" name="type" value="passenger">
                        <span class="ml-2">Passenger</span>
                    </label>
                    <label class="inline-flex items-center ml-6">
                        <input type="radio" class="form-radio" name="type" value="driver">
                        <span class="ml-2">Driver</span>
                    </label>
                </div>
                <div>
                    <input type="submit" class="shadow rounded-3xl w-full py-2 px-3 bg-green-200 hover:bg-green-300 transition" value="Search">
                </div>
            </form>
        </div>
    </div>
@endsection

@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoicWF1bnR1bTk1NSIsImEiOiJja3RsdXQ3aG0wYjN0MndzNHh3bmNwZHF5In0.u4fqOWocyXyeUeCA3tUHUw';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/navigation-night-v1',
            center: [6.818934,47.510879],
            zoom: 12
        });

        $(document).on('click','#search > div:first-child, #open-search',function(){
            $('#search').toggleClass('hidden');
        });
    </script>
@endpush