
  <a title="Orders" data-content="


 @foreach($order->cart->items as $item)  
                    
                      {{$item['item']['title']}} {{$sellers->seller_name($item['item']['sellers'])}} {{ $item['qty'] }} ||
   @endforeach








  " data-placement="right" data-toggle="popover" class="btn" data-original-title="Order Item">Details</a>


<script> 
  $("[data-toggle=show-popover]").popover('show');
  $("[data-toggle=popover]").popover();
</script>