@switch($status)
    @case(2)
        <div id="add-offer" class="modal fixed bg-gray-500 bg-opacity-50 inset-0 z-30 flex items-center justify-center drop-shadow-md hidden">
            <div class="absolute inset-0 z-0"></div>
            <div class="bg-white md:w-1/3 w-11/12 p-5 rounded-3xl z-10">
                Add offer
            </div>
        </div>
        @break
    @case(3)
        <div id="add-demand" class="modal fixed bg-gray-500 bg-opacity-50 inset-0 z-30 flex items-center justify-center drop-shadow-md hidden">
            <div class="absolute inset-0 z-0"></div>
            <div class="bg-white md:w-1/3 w-11/12 p-5 rounded-3xl z-10">
                Add demand
            </div>
        </div>
        @break
    @default
        <div id="choose-add" class="modal fixed bg-gray-500 bg-opacity-50 inset-0 z-30 flex items-center justify-center drop-shadow-md hidden">
            <div class="absolute inset-0 z-0"></div>
            <div class="bg-white p-5 rounded-3xl z-10 grid grid-cols-2 gap-3">
                <button class="btn-open-modal shadow text-gray-500 rounded-3xl text-xs py-2 px-3 bg-green-200 hover:bg-green-300 transition" data-modalid="add-offer">Add Offer</button>
                <button class="btn-open-modal shadow text-gray-500 rounded-3xl text-xs py-2 px-3 bg-green-200 hover:bg-green-300 transition" data-modalid="add-demand">Add Demand</button>
            </div>
        </div>
@endswitch