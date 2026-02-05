<div id="offer">
    <?php
    $productInfo=$data['productInfo'];
    $date_end=$data['date_end'];
    ?>
    <span class="title"> Speacial Offer </span>
    <div class="price-info">
        <div class="price-info-old">
            <?=$productInfo['price']?>
        </div>
        <div class="price-info-new">
            <?=$productInfo['price_total']?>
        </div>
    </div>
    <div class="flipTimer">

        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
</div>
<style>
    .flipTimer {
        position: absolute;
        top: -16px;
        right: -130px;
        transform: scale(.3);
    }

    .flipTimer div {
        direction: ltr !important;
    }
     #offer{
        width: 1048px;
        height:74px;
        margin: auto;
        background: #c4ebff;
        margin-top: 34px;
        position: relative;
    }
     #offer .title{
        font-family: GothamMedium;
        font-size: 13pt;
        color:#616161;
        padding: 44px;
        line-height: 67px;
    }
     #offer .clock{
         transform: scale(0.3);
         position: absolute;
         top: -26px;
         right: -464px;
     }
</style>
<script>
    $('.flipTimer').flipTimer({
        direction:'down',
        date:'<?php echo $date_end?>',
        callback: function () {

        }
    })
</script>
