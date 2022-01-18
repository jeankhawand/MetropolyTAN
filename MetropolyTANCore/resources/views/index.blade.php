@extends('app')

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100;200;300;400;500;600;700;800;900&display=swap"
          rel="stylesheet">
    <link href='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.css' rel='stylesheet'/>
    
    <style>
        body {
            font-family: 'Outfit', sans-serif;
        }

        .mapboxgl-ctrl-top-right .mapboxgl-ctrl {
            margin: 77px 10px 0 0;
        }

        header button {
            width: 30px;
            height: 30px;
        }

        .w-20 {
            width: 20px;
            height: 20px;
        }

        .w-15 {
            width: 15px;
            height: 15px;
        }

        .w-10 {
            width: 10px;
            height: 10px;
        }

        .flip {
            transform: rotateZ(180deg);
        }

        #results.active {
            transform: translateY(0%);
        }

        #results {
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

        .result-details .details > span:nth-child(2)::after {
            content: ' ';
            position: absolute;
            height: 100%;
            width: 2px;
            left: calc(50% - 1px);
            background-color: white;
        }

        .result-details .details > p:first-child {
            width: 40px;
        }

        .result-details .details:first-child > span:nth-child(2)::after {
            top: 50%;
        }

        .result-details .details:nth-child(2) > span:nth-child(2)::after {
            bottom: 50%;
        }

        .collapse-details {
            max-height: 0;
            overflow: hidden;
            transition: max-height 0.75s linear 0s;
        }

        .collapse-details.open {
            max-height: 500px;
            transition: max-height 0.75s linear 0s;
        }

        .result-details > div:first-child > div:nth-child(2) {
            width: 100px;
        }

        .more-info > span {
            transform-origin: center 58%;
            transition: transform 0.25s linear;
        }

        .more-info.active > span {
            transform: rotateZ(180deg);
        }

        .time-popup .mapboxgl-popup-content{
            padding: 2px 5px;
        }
        .time-popup .mapboxgl-popup-tip{
            display: none;
        }

        .mapboxgl-ctrl-geocoder .suggestions{
            top: unset;
            bottom: 100%;
        }
        .mapboxgl-ctrl-geocoder.mapboxgl-ctrl{
            margin:0;
            width:100%;
            max-width: unset;
        }
    </style>
@endpush

@section('content')
    <header class="fixed flex inset-x-0 top-0 z-10 justify-center py-3 text-gray-200 bg-gray-500 bg-opacity-50 rounded-b-3xl">
        <div>
            <img src="{{URL::asset('/images/logo/full-logo-white.png')}}" alt="MetropolYTAN Logo" width="60"/>
        </div>
        <div class="absolute flex items-center inset-y-0 right-4">
            @guest
                <a class="flex hover:text-green-300 transition h-6 w-6" href="{{route('login')}}">
                    <x-heroicon-o-user-circle class="w-6 h-6"/>
                </a>
            @endguest
            @auth
                @hasanyrole('driver')
                    <button class="w-auto h-auto text-white hover:text-green-300 transition mr-2" onclick="Livewire.emit('openModal', 'choose-adding')">
                        <x-heroicon-o-plus-circle class="w-6 h-6"/>
                    </button>
                @endhasanyrole

                <div x-data="{ dropdownOpen: false }">
                    <button @click="dropdownOpen = !dropdownOpen"
                            class="mt-2 hover:text-green-300 transition">
                        <img alt="profil"
                             src="{{auth()->user()->gravatar_url}}"
                             class="rounded-full"/>
                    </button>
                    {{--            <div x-show="dropdownOpen" @click="dropdownOpen = false" class="fixed inset-0 h-full w-full z-10"></div>--}}
                    <div x-show="dropdownOpen"
                         class="absolute right-0 mt-6 py-1 w-48 bg-white rounded-md shadow-xl z-20">
                        <p class="block px-4 py-2 text-sm text-gray-700">Welcome {{auth()->user()->name}}!</p>
                        <form method="POST" id="logoutForm" action="{{route('logout')}}">
                            @csrf
                            <a href="#"
                               class="block px-4 py-2 text-sm capitalize text-gray-700 hover:bg-blue-500 hover:text-white"
                               onclick="document.getElementById('logoutForm').submit()">Sign Out</a>
                        </form>
                    </div>
                </div>
            @endauth
        </div>
    </header>

    <main class="z-0">
        <div id="map" class="w-full h-screen"></div>
    </main>

    <style>
        /* width */
        .place-input > div.absolute::-webkit-scrollbar, #stops-div::-webkit-scrollbar {
            width: 2px;
        }

        /* Track */
        .place-input > div.absolute::-webkit-scrollbar-track, #stops-div::-webkit-scrollbar-track {
            background: #f1f1f1; 
            border-radius: 25px;
        }

        /* Handle */
        .place-input > div.absolute::-webkit-scrollbar-thumb, #stops-div::-webkit-scrollbar-thumb {
            background: #888; 
            border-radius: 25px;
        }

        /* Handle on hover */
        .place-input > div.absolute::-webkit-scrollbar-thumb:hover, #stops-div::-webkit-scrollbar-thumb:hover {
            background: #555; 
        }

        .place-input > div.absolute{
            bottom: 100%;
            max-height: 0px;
            overflow-y: auto;
        }

        .place-input ul li{
            padding:5px 10px
        }

        .place-input.bot-result > div.absolute{
            bottom:unset;
        }
    </style>

    <div id="results" class="fixed inset-x-0 bottom-0 bg-gray-500 z-30 transform transition delay-75 translate-y-full p-5">
        <div id="search-inline" class="absolute flex p-5 inset-x-0 bg-gray-500 rounded-t-3xl">
            <form autocomplete="off" class="grid grid-cols-1 md:grid-cols-4 gap-4 w-full">
                <div class="relative mb-4 md:mb-0">
                    <div class="relative place-input">
                        <input type="hidden" name="from" value="" required/>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-2 leading-tight focus:outline-none focus:shadow-outline" name="from-text" placeholder="From" autocomplete="off"/>
                        <div class="absolute bg-white inset-x-0">
                            <ul class="list-unstyle">
                            </ul>
                        </div>
                    </div>
                    <button type="button" id="btn-switch" class="absolute bg-gray-500 border border-solid border-white -left-3 p-1 z-10 transition rounded-full">
                        <x-heroicon-o-switch-vertical class="w-5 h-5 text-white"/>
                    </button>
                    <div class="relative place-input">
                        <input type="hidden" name="to" value="" required/>
                        <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="to-text" placeholder="To" autocomplete="off"/>
                        <div class="absolute bg-white inset-x-0">
                            <ul class="list-unstyle">
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="flex flex-col justify-between">
                    <label class="py-2 text-white">Add your stops:</label>
                    <div class="grid grid-cols-3 gap-2">
                        <div class="relative place-input col-span-2">
                            <input type="hidden" name="stop" value="" required/>
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="stop-text" placeholder="Type here" autocomplete="off"/>
                            <div class="absolute bg-white inset-x-0">
                                <ul class="list-unstyle">
                                </ul>
                            </div>
                        </div>
                        <button type="button" id="add-stop" class="rounded text-sm py-1 px-2 bg-green-100">
                            Add stop
                        </button>
                    </div>
                </div>
                <div id="stops-div" class="flex max-h-full overflow-y-auto overflow-x-hidden">
                    <ul id="stops-list" class="list-unstyle text-sm text-white w-full">
                        <li class="text-center">No stops added</li>
                    </ul>
                </div>
                <div class="flex items-center">
                    @hasallroles('driver|passenger')
                    <div class="flex flex-col">
                        <label class="flex items-center">
                            <input type="radio" class="form-radio" name="type" value="passenger" required>
                            <span class="ml-2 text-white">Passenger</span>
                        </label>
                        <label class="flex items-center">
                            <input type="radio" class="form-radio" name="type" value="driver" required>
                            <span class="ml-2 text-white">Driver</span>
                        </label>
                    </div>
                    @endhasallroles
                    <div class="relative w-full">
                        <input type="submit"
                            class="shadow rounded-3xl w-full py-2 ml-3 px-3 bg-green-200 hover:bg-green-300 transition"
                            value="Search">
                    </div>
                </div>
            </form>
        </div>
        <div class="grid gap-4 grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @include('components.card',['data' => 'Jean Khawand'])
        </div>
    </div>
    <livewire:update-user-coordinates/>
@endsection
{{-- {{route('name')}} --}}
@push('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
            integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js" integrity="sha512-qTXRIMyZIFb8iQcfjXWCO8+M5Tbc38Qi5WzdPOYZHIlZpzBHG3L3by84BBBOiRGiEb7KKtAOAs5qYdUiZiQNNQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/alpinejs/2.8.2/alpine.js"></script>

    <script>
        $(document).ready(function () {
            $('#search-inline').css('top','calc(-'+$('#search-inline').innerHeight()+'px + 2px)');
            var btnHeight = $('#btn-switch').innerHeight()/2;
            $('#btn-switch').css('top','calc(50% - '+btnHeight+'px)');
            $('#stops-list').parent().css('max-height', $('#stops-list').parent().innerHeight()+'px');
        });
        
        var stops = [];
        var stop;

        //Custom input places
        $(document).on('keyup','.place-input > input[type=text]',function(e){
            $(this).next().css('max-height','200px');
            var ul = $(this).next().children('ul');
            ul.html('<li>Loading ...</li>');
            $.ajax("https://photon.komoot.io/api/?q="+encodeURIComponent($(this).val())+"&lat=6.797655&lon=47.509381")
            .done(function(data) {
                ul.html('');
                $.each(data.features, function(i, item) {
                    ul.append('<li class="hover:bg-gray-200 cursor-pointer" data-coords="'+item.geometry.coordinates+'">'+item.properties.name+'</li>');
                });
            })
        });
        $(document).on('focus','.place-input > input[type=text]',function(e){
            $(this).next().css('max-height','200px');
        });
        $(document).on('click','.place-input ul li',function(e){
            e.preventDefault();
            $(this).attr('selected','true');
            var coords = $(this).data('coords');
            var place = $(this).html();
            $(this).parent().parent().css('max-height','0px');
            $(this).parents('.place-input').children('input[type=text]').val(place);
            $(this).parents('.place-input').children('input[type=hidden]').val(coords);
        });

        mapboxgl.accessToken = '{{config("services.mapbox.public_token")}}';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/navigation-night-v1',
            center: [6.818934, 47.510879],
            zoom: 12
        });

        const trajet = [[6.801092,47.494105],[6.795333,47.511371],[6.757310,47.568328],[6.835759,47.598260],[6.857846,47.636139]]
        var start_time = moment().format('H:mm');

        function drawPopup(coords, html){
            new mapboxgl.Popup({ closeButton: false,className: 'time-popup' })
            .setLngLat(coords)
            .setHTML(html)
            .addTo(map);
        }
        function drawMarker(coords, popup = '', color = '#FEF349'){
            const marker = new mapboxgl.Marker({ color: color, rotation: 0 })
            .setLngLat(coords)
            .addTo(map);

            if(popup != '')
                marker.setPopup(new mapboxgl.Popup({ offset: 25,closeButton: false,className: 'time-popup' }).setHTML(popup)).togglePopup()
        }
        async function drawRoute(id, start, end, color = '#FEF349', time = '', profile = 'driving'){
            //Profiles can be: driving-traffic | driving | walking | cycling
            const query = await fetch(
                `https://api.mapbox.com/directions/v5/mapbox/${profile}/${start[0]},${start[1]};${end[0]},${end[1]}?steps=true&geometries=geojson&access_token=${mapboxgl.accessToken}`, {
                    method: 'GET'
                }
            );
            const json = await query.json();
            const data = json.routes[0];
            const route = data.geometry.coordinates;
            const geojson = {
                type: 'Feature',
                properties: {},
                geometry: {
                    type: 'LineString',
                    coordinates: route
                }
            };
            if (map.getSource(id)) {
                map.getSource(id).setData(geojson);
            }else {
                map.addLayer({
                    id: id,
                    type: 'line',
                    source: {
                        type: 'geojson',
                        data: geojson
                    },
                    layout: {
                        'line-join': 'round',
                        'line-cap': 'round'
                    },
                    paint: {
                        'line-color': color,
                        'line-width': 5,
                        'line-opacity': 1
                    }
                });
            }
            //Draw each end point
            if(time != ''){
                var mins = Math.floor(data.duration/60);
                drawPopup(route[Math.round(route.length/2)], '<b>'+mins+' mins</b>');
                var new_time = moment(time,'H:mm').add('m',mins).format('H:mm');
                drawMarker(coords = end, popup = 'Expected arrival time <b>'+new_time+'</b>');
                return new_time;
            }
            return null;
        }
        async function getRoutes(trajet){
            if(trajet.length >= 2){
                var res_time = start_time;
                for (let i = 0; i < trajet.length-1; i++) {
                    res_time = await drawRoute('route'+(trajet[i]+trajet[i+1]).toString().replaceAll('.', '').replaceAll(',', '')+'',trajet[i],trajet[i+1],color='#FFFFFF', time = res_time);
                }
                //Draw START point
                drawMarker(coords = trajet[0], popup = 'Start time <b>'+start_time+'</b>');
            }else{
                console.log('Path is too short');
            }
        }

        map.on('load', () => {
            map.loadImage(
                'https://docs.mapbox.com/mapbox-gl-js/assets/custom_marker.png',
                (error, image) => {
                    if (error) throw error;
                    map.addImage('custom-marker', image);
                    map.addSource('points', {
                        'type': 'geojson',
                        'data': {!! $bus_stops !!}
                    });
                    // Add a symbol layer
                    map.addLayer({
                        'id': 'points',
                        'type': 'symbol',
                        'source': 'points',
                        'layout': {
                            'icon-image': 'custom-marker',
                            'text-field': ['get', 'title'],
                            'text-font': [
                                'Open Sans Semibold',
                                'Arial Unicode MS Bold'
                            ],
                            'text-offset': [0, 1.25],
                            'text-anchor': 'top'
                        }
                    });
                });
            getRoutes(trajet);
        });
        
        //Search form functions
        $(document).on('click', '#add-stop', function (e) {
            e.preventDefault();
            var stop = $('input[name=stop]').val();
            var stop_text = $('input[name=stop-text]').val();
            if(stop != '' && stop_text != ''){
                $('#stops-list').html('');
                stops.push([stop_text,stop]);
                $.each(stops, function( index, value ) {
                    $('#stops-list').append('<li> <div class="flex items-center pl-2 mt-1"> <div class="flex flex-grow"> <span class="text-xs w-full px-1">' + value[0] + '</span> </div> <button data-stop="'+value[0]+'" type="button" class="rounded remove-stop text-xs py-1 px-2 text-gray-700 bg-red-100">Remove<button> </div> </li>');
                });
                $('input[name=stop]').val('');
                $('input[name=stop-text]').val('');
            }
        });
        $(document).on('click', '.remove-stop', function (e) {
            e.preventDefault();
            var stop = $(this).data('stop');
            var i;
            $.each(stops, function( index, value ) {
                if(value[0]==stop){
                    i = index;
                }
            });
            stops.splice(i,1);
            $(this).closest('li').remove();
            if($("#stops-list li").length == 0){
                $('#stops-list').append('<li class="text-center">No stops added</li>');
            }
        });
        $(document).on('click', '#btn-switch', function (e) {
            e.preventDefault();
            var from = $('input[name=from]').val();
            var from_text = $('input[name=from-text]').val();
            var to = $('input[name=to]').val();
            var to_text = $('input[name=to-text]').val();
            $('input[name=from]').val(to);
            $('input[name=from-text]').val(to_text);
            $('input[name=to]').val(from);
            $('input[name=to-text]').val(from_text);
        });
        $(document).on('submit', '#search-inline form', function (e) {
            e.preventDefault();
            $('#results').addClass('active');
        });

        //Result card functions
        $(document).on('click', '.more-info', function (e) {
            e.preventDefault();
            $(this).toggleClass('active');
            $(this).next().toggleClass('open');
        });
    </script>
    @auth
        @hasanyrole('driver|passenger')
        <script>
            // Initialize the GeolocateControl.
            const oldposition = {
                accuracy: 0,
                latitude: 0,
                longitude: 0
            }

            const geolocate = new mapboxgl.GeolocateControl({
                // positionOptions: {
                //     enableHighAccuracy: true
                // },
                showAccuracyCircle: true,
                showUserHeading: true,
                trackUserLocation: true
            });
            map.addControl(geolocate);
            // this event would be triggered on each location change
            geolocate.on('geolocate', (data) => {
                console.log('A geolocate event has occurred.');
                const {accuracy, latitude, longitude} = data.coords;
                const position = {
                    accuracy,
                    latitude,
                    longitude
                }
                if (position.latitude > oldposition.latitude && position.longitude > oldposition.latitude) {
                    $('input[name=from]').val(latitude+','+longitude);
                    $('input[name=from-text]').val('Your location');
                    Livewire.emit('updateUserCoordinates', JSON.stringify(position), '{{auth()->user()->id}}')
                }

            });

            geolocate.on('error', (data) => {
                console.log('An error event has occurred.');
                console.error(data)
            });
            geolocate.on('outofmaxbounds', (data) => {
                console.log('An outofmaxbounds event has occurred.');
                console.log(data)
            });
            // once user trigger the location button
            geolocate.on('trackuserlocationstart', () => {
                console.log('A trackuserlocationstart event has occurred.');

            });
            geolocate.on('trackuserlocationend', (data) => {
                console.log('A trackuserlocationend event has occurred.');
                console.log(data)
            });
        </script>
        @endhasanyrole
    @endauth
@endpush


{{-- Operateur de transport OT
Autorite orginasitrice de mobilite AOM 

Add trains + scheduling 

sendCommand(SecurityInterstitialCommandId.CMD_PROCEED)--}}