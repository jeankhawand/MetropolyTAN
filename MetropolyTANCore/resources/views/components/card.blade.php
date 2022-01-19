<div>
    <div class="rounded bg-white bg-opacity-50 p-3 text-white result-details">
        <div class="w-full flex">
            <div class="flex flex-col flex-grow">
                <div class="flex py-2 details">
                    <p class="m-0">{{$data['from'][2]}}</p>
                    <span class="relative inline-flex mx-4"></span>
                    <p class="flex-grow m-0">{{$data['from'][0]}}</p>
                </div>
                <div class="flex py-2 details">
                    <p class="m-0">{{$data['to'][2]}}</p>
                    <span class="relative inline-flex mx-4"></span>
                    <p class="flex-grow m-0">{{$data['to'][0]}}</p>
                </div>
                <div class="flex">
                    <div class="flex flex-col pr-2">
                        <x-heroicon-o-user-circle class="w-8 h-8 flex-grow"/>
                    </div>
                    <div class="flex flex-col">
                        <p class="text-md">{{$data['name']}}</p>
                        <p class="flex m-0 items-center">
                            <x-heroicon-s-star class="w-4 h-4"/> <span class="inline-flex pl-1">{{$data['star']}}</span>
                        </p>
                    </div>
                </div>
            </div>
            <div  class="flex flex-col items-center">
                <p class="flex justify-center items-center pb-3">x{{$data['tickets']}}&nbsp;&nbsp;<x-heroicon-o-ticket class="w-5 h-5"/></p>
                <button class="rounded w-full bg-green-200 hover:bg-green-300 p-2 mb-2" onclick="Livewire.emit('openModal', 'proceed-modal')">Proceed</button>
                @php
                    $coords = array();
                    array_push($coords,$data['from'][1]);
                    foreach($data['details'] as $detail){
                        if($detail[1] != null)
                            array_push($coords,$detail[1]);
                    }
                    array_push($coords,$data['to'][1]);
                    echo '<button data-coords="'.json_encode($coords).'" data-time="'.$data['from'][2].'" class="see-on-map w-full flex justify-center rounded bg-gray-200 hover:bg-gray-300 text-sm p-2">See on map</button>';
                @endphp
            </div>
        </div>
        <div class="flex flex-col pt-3">
            <hr />
            <div class="flex flex-col pt-1">
                <button class="w-full more-info text-center">View more <span class="inline-flex">&utrif;</span></button>
                <div class="collapse-details text-sm">
                    <ul class="list-decimal pl-5 pt-2">
                        @foreach($data['details'] as $detail)
                            <li>{{$detail[0]}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>