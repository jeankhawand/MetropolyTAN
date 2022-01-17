@switch($status)
    @case(1)
        <div class="grid grid-cols-2 gap-4 p-3">
            <button class="shadow text-gray-500 rounded-3xl text-xs py-2 px-3 bg-green-200 hover:bg-green-300 transition" data-modalid="add-offer">Add Offer</button>
            <button class="shadow text-gray-500 rounded-3xl text-xs py-2 px-3 bg-green-200 hover:bg-green-300 transition" data-modalid="add-demand">Add Demand</button>
        </div>
        @break
    @case(2)
        <div class="bg-gray-500 bg-opacity-50 inset-0 z-30 flex items-center justify-center drop-shadow-md">
            Add offer
        </div>
        @break
    @case(3)
        <div class="bg-gray-500 bg-opacity-50 inset-0 z-30 flex items-center justify-center drop-shadow-md">
            <div class="bg-white md:w-1/3 w-11/12 p-5 rounded-3xl z-10">
                Add offer
            </div>
        </div>
        @break
    @default
        <div>Something went wrong!</div>
@endswitch