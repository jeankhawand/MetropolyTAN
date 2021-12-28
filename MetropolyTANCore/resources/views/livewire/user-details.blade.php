<div class="p-8 bg-white shadow-md text-sm hover:shodow-lg rounded-2xl">
    <div class="grid md:grid-cols-4 grid-cols-1 items-stretch">
        <div class="relative user-image h-full flex items-center justify-center bg-default-user">
            {{-- Hide/Show depending on selected user --}}
            @isset($user->email_verified_at)
                <div class="absolute md:top-7 md:right-7 top-3 right-3">
                    <x-heroicon-s-badge-check class="h-6 w-6"/>
                </div>
            @endisset
            <img width="100px" height="100px" class="border-2 rounded-full md:mb-0 mb-3"
                 src="{{$user->gravatar_url}}"/>
        </div>
        <div class="col-span-3 user-info flex flex-col justify-center pl-5 pr-3">
            <div class="pb-2">
                @if($user->hasRole(\Modules\Role\Entities\RoleVar::PASSENGER))
                    <span
                        class="inline-flex px-3 py-1 font-bold rounded-xl text-white text-xs hover:bg-green-500 bg-green-300">Passenger</span>
                @endif
                @if($user->hasRole(\Modules\Role\Entities\RoleVar::DRIVER))
                    <span
                        class="inline-flex px-3 py-1 font-bold rounded-xl text-white text-xs hover:bg-blue-500 bg-blue-300">Driver</span>
                @endif
            </div>
            <div class="flex">
                <ul class="style-none">
                    <li><b>Name</b></li>
                    <li><b>DOB</b></li>
                    <li><b>Phone</b></li>
                    <li><b>Email</b></li>
                    <li><b>Address</b></li>
                </ul>
                <ul class="style-none pl-3">
                    <li>{{$user->name}}</li>
                    <li>{{$user->birth_date}}</li>
                    <li>{{$user->phone_number}}</li>
                    <li>{{$user->email}}</li>
                    <li>{{$user->address}}</li>
                </ul>
            </div>
        </div>
    </div>
    @if($user->hasRole(\Modules\Role\Entities\RoleVar::PASSENGER))
        <hr class="my-4"/>
        {{-- The following block will be displayed if the user has a registered car --}}
        <div>
            <h3 class="font-bold mb-2">Subscriptions & Tickets</h3>
            <div class="grid grid-cols-3">
                <div class="flex col-span-2">
                    <ul class="style-none">
                        <li><b>Available Tickets</b></li>
                        <li><b>Subscription Details</b></li>
                    </ul>
                    <ul class="style-none pl-3">
                        <li>x{{$user->balance}}
                            <x-heroicon-o-ticket class="inline w-5 h-5"/>
                        </li>
                        <li>Monthly Subscription<br/>Student<br/><b>&euro;25.00</b></li>
                    </ul>
                </div>
                <div class="flex flex-col justify-end items-end text-xs">
                    <div>
                        <button class="px-3 py-2 bg-green-400 hover:bg-green-500 text-white font-bold rounded mb-2">Edit
                            Tickets
                        </button>
                    </div>
                    <div>
                        <button class="px-3 py-2 bg-green-400 hover:bg-green-500 text-white font-bold rounded mb-2">Edit
                            subscirption
                        </button>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if($user->hasRole(\Modules\Role\Entities\RoleVar::DRIVER))
        <hr class="my-4"/>
        {{-- The following block will be displayed if the user has a registered car --}}
        <div>
            <h3 class="font-bold mb-2">Car Information</h3>
            <div class="grid md:grid-cols-4 grid-cols-1 items-stretch">
                <div class="car-image h-full flex items-center justify-center bg-default-user">
                    <img width="100px" height="100px" class="border-2"
                         src="https://icon-library.com/images/car-flat-icon/car-flat-icon-0.jpg"/>
                </div>
                <div class="col-span-3 user-info flex flex-col justify-center pl-5 pr-3">
                    <div class="flex">
                        <ul class="style-none">
                            <li><b>Model</b></li>
                            <li><b>Year</b></li>
                            <li><b>Number</b></li>
                            <li><b>Available Seats</b></li>
                        </ul>
                        <ul class="style-none pl-3">
                            <li>Citroën C5</li>
                            <li>2021</li>
                            <li>VM-080-VX</li>
                            <li>4</li>
                        </ul>
                    </div>
                </div>
                <div id="map" class="col-span-4 mt-2" style="height: 300px"></div>
            </div>
        </div>
        <hr class="my-4"/>
        {{-- The following block will be displayed if the user has a registered car --}}
        <div>
            <h3 class="font-bold mb-2">Payout Information</h3>
            <div class="grid md:grid-cols-4 grid-cols-1 items-stretch">
                <div class="col-span-3 user-info flex flex-col justify-center pl-5 pr-3">
                    <div class="flex">
                        <ul class="style-none">
                            <li><b>Ticket Earned</b></li>
                            <li><b>Income KM/H</b></li>
                        </ul>
                        <ul class="style-none pl-3">
                            <li>
                                x{{$user->hasWallet('ticket-earned') ? $user->getWallet('ticket-earned')->balance : " N/A " }}
                                <x-heroicon-o-ticket class="inline w-5 h-5"/>
                            </li>
                            <li>
                                &euro;{{$user->hasWallet('payout-income') ? $user->getWallet('payout-income')->balance : " N/A " }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
    @if($user->hasRole(\Modules\Role\Entities\RoleVar::PASSENGER))
        <hr class="my-4"/>
        {{--
            For passenger we should show these columns: From, To, Check-in Time, Status, Payment Method
        --}}
        <div>
            <h3 class="font-bold mb-2">Passenger Itinerary History</h3>
{{--            <livewire:passenger-itinerary-table user='{{$user->id}}'/>--}}
        </div>
    @endif
    @if($user->hasRole(\Modules\Role\Entities\RoleVar::DRIVER))
        <hr class="my-4"/>
        {{--
            Driver we should show these columns: From, To, Start time, End time, Status, Available seats
        --}}
        <div>
            <h3 class="font-bold mb-2">Driver Itinerary History</h3>
{{--            <livewire:driver-itinerary-table user='{{$user->id}}'/>--}}
        </div>
    @endif
    {{-- If he's both we show the two tables --}}
</div>
@if($user->hasRole(\Modules\Role\Entities\RoleVar::DRIVER))
    <script src='https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js'></script>
    <script>
        mapboxgl.accessToken = '{{config("services.mapbox.public_token")}}';
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/navigation-night-v1',
            zoom: 0
        });

        map.on('load', () => {
            map.resize();
            // first call to get initial position most probably we will check once user not available show old position
            let geojson = {!! json_encode($user->recent_location) !!};
            map.addSource('driver', {
                type: 'geojson',
                data: geojson
            });
            map.addLayer({
                'id': 'driver',
                'type': 'symbol',
                'source': 'driver',
                'layout': {
                    'icon-image': 'rocket-15'
                }
            });
            map.flyTo({
                center: [geojson.features[0].geometry.coordinates[0], geojson.features[0].geometry.coordinates[1]],
                speed: 0.5,
                zoom: 15,
            });

        });
        Echo.channel('{{md5($user->id)}}')
            .listen(".user.coordinates", (data) => {
                map.getSource('driver').setData(data);
                map.flyTo({
                    center: [data.features.geometry.coordinates[0], data.features.geometry.coordinates[1]],
                    speed: 0.5,
                    zoom: 15,
                });
            })

    </script>
@endif
