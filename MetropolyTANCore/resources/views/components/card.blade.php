<div class="rounded bg-white bg-opacity-50 p-3 text-white result-details">
    <div class="w-full flex">
        <div class="flex flex-col flex-grow">
            <div class="flex py-2 details">
                <p class="m-0">09:30</p>
                <span class="relative inline-flex mx-4"></span>
                <p class="flex-grow m-0">Montbéliard</p>
            </div>
            <div class="flex py-2 details">
                <p class="m-0">11:45</p>
                <span class="relative inline-flex mx-4"></span>
                <p class="flex-grow m-0">Strasbourg</p>
            </div>
            <div class="flex">
                <div class="flex flex-col pr-2">
                    <x-heroicon-o-user-circle class="w-8 h-8 flex-grow"/>
                </div>
                <div class="flex flex-col">
                    <p class="text-md">{{$data}}</p>
                    <p class="flex m-0 items-center">
                        <x-heroicon-s-star class="w-4 h-4"/> <span class="inline-flex pl-1">4.6</span>
                    </p>
                </div>
            </div>
        </div>
        <div  class="flex flex-col items-center">
            <p class="flex justify-center items-center pb-3">x3&nbsp;&nbsp;<x-heroicon-o-ticket class="w-5 h-5"/></p>
            <button class="rounded bg-green-200 hover:bg-green-300 p-2">Proceed</button>
        </div>
    </div>
    <div class="flex flex-col pt-3">
        <hr />
        <div class="flex flex-col pt-1">
            <button class="w-full more-info text-center">View more <span class="inline-flex">&utrif;</span></button>
            <div class="collapse-details text-sm">
                <ul class="list-unstyle pt-2">
                    <li>25 mins correspondance in Belfort-Montbéliard TGV</li>
                </ul>
            </div>
        </div>
    </div>
</div>