<div class="p-5">
    <div data-response="{{$response}}" id="loading" class="flex justify-center items-center"><img src="/images/gifs/loading.gif" alt="loading" width="40"/> Waiting for the driver's response</div>   
    <script>
        setTimeout(() => {
            $('#loading').click();
        }, 4500);
        $(document).on('click','#loading',function(e){
            e.preventDefault();
            console.log($(this).data('response'));
            if($(this).data('response') == 1){
                $(this).html('<img src="/images/gifs/tick.gif" alt="loading" width="200"/><p class="m-0">Driver accepted your offer<br/><small>The number of tickets will be deducted from your wallet</small></p>');
            }else{
                $(this).html('<img src="/images/close.png" alt="loading" width="90" class="pr-3"/><p class="m-0">Driver refused your offer<br/><small>Try another driver</small></p>');
            }
        });
    </script> 
</div>
