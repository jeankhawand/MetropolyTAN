<div class="p-8 bg-white shadow-md text-sm hover:shodow-lg rounded-2xl">
    <div class="grid md:grid-cols-4 grid-cols-1 items-stretch">
        <div class="relative user-image h-full flex items-center justify-center bg-default-user">
            {{-- Hide/Show depending on selected user --}}
            <div class="absolute md:top-7 md:right-7 top-3 right-3">
                <x-heroicon-s-badge-check class="h-6 w-6" />
            </div>
            <img width="100px" height="100px" class="border-2 rounded-full md:mb-0 mb-3" src="https://i.pinimg.com/originals/64/81/22/6481225432795d8cdf48f0f85800cf66.jpg"/>
        </div>
        <div class="col-span-3 user-info flex flex-col justify-center pl-5 pr-3">
            <div class="pb-2">
                <span class="inline-flex px-3 py-1 font-bold rounded-xl text-white text-xs hover:bg-green-500 bg-green-300">Passenger</span>
                <span class="inline-flex px-3 py-1 font-bold rounded-xl text-white text-xs hover:bg-blue-500 bg-blue-300">Driver</span>
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
                    <li>Jean Rizk</li>
                    <li>19/04/1995</li>
                    <li>+33 06 12 13 14 15</li>
                    <li>jean.rizk@gmail.com</li>
                    <li>23 Rue Maurice Ravel<br>25200, Montbéliard</li>
                </ul>
            </div>
        </div>
    </div>
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
                    <li>x3 <x-heroicon-o-ticket class="inline w-5 h-5"/></li>
                    <li>Monthly Subscription<br/>Student<br/><b>&euro;25.00</b></li>
                </ul>
            </div>
            <div class="flex flex-col justify-end items-end text-xs">
                <div>
                    <button class="px-3 py-2 bg-green-400 hover:bg-green-500 text-white font-bold rounded mb-2">Edit Tickets</button>
                </div>
                <div>
                    <button class="px-3 py-2 bg-green-400 hover:bg-green-500 text-white font-bold rounded mb-2">Edit subscirption</button>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-4"/>
    {{-- The following block will be displayed if the user has a registered car --}}
    <div>
        <h3 class="font-bold mb-2">Car Information</h3>
        <div class="grid md:grid-cols-4 grid-cols-1 items-stretch">
            <div class="car-image h-full flex items-center justify-center bg-default-user">
                <img width="100px" height="100px" class="border-2" src="https://icon-library.com/images/car-flat-icon/car-flat-icon-0.jpg"/>
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
            <x-mapbox class="col-span-4 mt-2" style="height:200px;"/>
        </div>
    </div>
    <hr class="my-4"/>
    {{-- 
        For passenger we should show these columns: From, To, Check-in Time, Status, Payment Method
    --}}
    <div>
        <h3 class="font-bold mb-2">Passenger Itinerary History</h3>
        @livewire('user-table')
    </div>
    <hr class="my-4"/>
    {{-- 
        Driver we should show these columns: From, To, Start time, End time, Status, Available seats
    --}}
    <div>
        <h3 class="font-bold mb-2">Driver Itinerary History</h3>
        @livewire('user-table')
    </div>
    {{-- If he's both we show the two tables --}}
</div>