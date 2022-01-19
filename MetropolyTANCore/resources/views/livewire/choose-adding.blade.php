<div class="p-5">
    <form class="grid grid-cols-4 gap-3">
        <div class="relative place-input bot-result col-span-4">
            <input type="hidden" name="from-offer" value="" required/>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-2 leading-tight focus:outline-none focus:shadow-outline" name="from-offer-text" placeholder="From" autocomplete="off" required/>
            <div class="absolute bg-white inset-x-0 z-10">
                <ul class="list-unstyle">
                </ul>
            </div>
        </div>
        <label class="col-span-1 flex items-center mb-2">Start Time</label><input type="datetime-local" class="col-span-3 mb-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" name="start-time" value="<?php echo date('Y-m-d').'T'.date('H:i'); ?>" min="<?php echo date('Y-m-d').'T'.date('H:i'); ?>" required/>
        <div class="relative place-input bot-result col-span-4">
            <input type="hidden" name="to-offer" value="" required/>
            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-2 leading-tight focus:outline-none focus:shadow-outline" name="to-offer-text" placeholder="To" autocomplete="off" required/>
            <div class="absolute bg-white inset-x-0 z-10">
                <ul class="list-unstyle">
                </ul>
            </div>
        </div>
        <label class="col-span-2 flex items-center">Number of passengers</label><input class="col-span-2 shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-2 leading-tight focus:outline-none focus:shadow-outline" type="number" min="1" max="4" value="1" required/>
        <input type="submit" class="shadow rounded-3xl col-span-4 w-full py-2 px-3 bg-green-200 hover:bg-green-300 transition" value="Add">
    </form>
</div>