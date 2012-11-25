$(function() {
   
    var updateTotalPrice = function(){
        var price = 0;
        var count = 0;
        $(".pifa-item").each(function(){
            var checkbox = $(this).find(".item-check").get(0);
            if(!checkbox || checkbox.checked){
                count += 1;
                price += parseFloat($(this).find(".total_price").html());
            }
        });
        $("#total_good").html(count);
        $("#total_amount").html(price);
    };
    $(".pifa-item").each(function(){
        
        var $this = $(this);

        var itemid = $this.data('id'),
            maxcount = parseFloat($this.find(".maxcount").html()),
            $number = $this.find(".item-number"),
            pifaprice = $this.data('price');

        var getPrice = function(v){
            for(var i = 0, l = pifaprice.length; i <l; i++){
                var item = pifaprice[i],
                    start = item.start || 0,
                    end = item.end || Number.MAX_VALUE;

                if(v >= start && v<= end){
                    return item.price;
                }
            }
            return null;
        };
        
        var updatePrice = function(p){
            var v = parseInt($number.val());
            if(v <= 0){
                v = 1;
            }else if(v >= maxcount){
                v = maxcount;
            }
            $number.val(v);
            var price = getPrice(v);
            $this.find(".total_price").html(price * v);
            updateTotalPrice();
        }

        $number.blur(updatePrice);

        $this.find(".minus").click(function(){
            $number.val(parseFloat($number.val()) - 1);
            updatePrice();
        });
        $this.find(".add").click(function(){
            $number.val(parseFloat($number.val()) + 1);
            updatePrice();
        });
        
        $this.find(".item-check").change(updateTotalPrice);
        updatePrice();
    });
});