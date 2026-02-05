
<div id="slider2">
    <div class="flipTimer">

        <div class="hours"></div>
        <div class="minutes"></div>
        <div class="seconds"></div>
    </div>
    <div class="slider2_finished">
        Finished
    </div>
    <div class="clock"></div>
    <div id="slider2-content">
        <?php
         $slider2=$data[1];
         $date_end=$data[2];

         foreach ($slider2 as $row){
        ?>
        <a class="item" href="<?=URL?>product/index/<?=$row['id']?>">
            <div class="slider2-content-right">
                <p class="title">
                    Discount
                </p>
                <div class="price-info">
                    <div class="price-info-old">
                        <?=$row['price']?>
                    </div>
                    <div class="price-info-new">
                       <?=$row['price_total']?>
                    </div>
                </div>
                <p style="float:right;width:100%;margin:2px;text-align:right;margin-right:28px;line-height: 19px;margin-top: 67px;font-family: GothamMedium;font-size: 11pt;">
                    Good quality
                </p>
                <p style="float:right;width:100%;margin:2px;text-align:right;margin-right:28px;line-height: 19px;font-family: GothamMedium;font-size: 11pt;">
                    In different color
                </p>
                <p style="float:right;width:100%;margin:2px;text-align:right;margin-right:28px;line-height: 19px;font-family: GothamMedium;font-size: 11pt;">
                    Perfect price
                </p>

            </div>
            <div class="slider2-content-left">
                <p class="yekan" style="text-align:center;font-size:15pt;">
                    <?=$row['title']?>
                </p>
                <img src="public/images/products/<?=$row['id']?>/product_220.png">
            </div>
        </a>
        <?php
         }
        ?>

    </div>
    <div id="slider2-navigator">
        <ul>
            <?php
             foreach ($slider2 as $row){
            ?>
            <li>
                <a class="yekan">
                    <?=$row['title']?>
                </a>

            </li>
            <?php
            }
            ?>
        </ul>
    </div>

</div>
<style>
    .flipTimer {
        position: absolute;
        top: 190px;
        right: -130px;
        transform: scale(.3);
    }

   .flipTimer div {
        direction: ltr !important;
    }
    #slider2 #slider2-navigator .active>a{
        background: #fff;
        color: #000000;
    }
    .slider2-finished{
        width:705px;
        height:100%;
        color:red;
        background:rgba(0,0,0,.2);
        position:absolute;
        right:0;
        text-align:center;
        font-size:36pt;
        line-height:235px;
        display:none;
    }
    .price-info-old::before{
        content:"";
        height:0;
        width:95%;
        border-bottom:1px solid #000;
        position:absolute;
        top:17px;
        right:1px;
        transform:rotate(-30deg);
    }
    .price-info-new::before{
        content:"";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 6.5px 15px 6.5px 0;
        border-color: transparent #ffffff transparent transparent;
        position:absolute;
        top:10px;
        right:0;
    }
    .price-info-old::after {
        content: "";
        width: 0;
        height: 0;
        border-style: solid;
        border-width: 6.5px 15px 6.5px 0;
        border-color: transparent #cccccc transparent transparent;
        position:absolute;
        top:10px;
        left:-13px;
        z-index:2;
    }

    .price-info-new{
        width:155px;
        height:100%;
        float:left;
        background:red;
        color:#fff;
        line-height:35px;
        margin-right:2px;
        position:relative;
    }
    .price-info-old{
        width:75px;
        height:100%;
        background:#ccc;
        float:right;
        color:#fff;
        line-height:36px;
        position:relative;
    }
    .slider2-content-right .price-info{
        height: 35px;
        float: right;
        border-radius: 5px;
        overflow: hidden;
        position: relative;
        top: 91px;
        right: -82px;
    }
    .slider2-content-right .title{
        color:red;
        font-size:15pt;
        padding-top: 15px;
        float: right;
        margin-right: 43px;
    }
    .slider2-content-left img{
        width:200px;
        height:230px;
    }
    .slider2-content-left{
        width:305px;
        height:100%;
        float:left;
    }
    .slider2-content-right{
        width: 520px;
        height:100%;
        float:right;
    }
    #slider2-content a{
        display:block;
        width:100%;
        height:100%;
        text-align:center;
    }
    #slider2-navigator ul li a{
        display:block;
        width:100%;
        height:100%;
        text-align:center;
        line-height:37px;
        font-size:10pt;
        font-family: GothamMedium;
    }
    #slider2-navigator ul li{
        height:50px;

    }
    #slider2-navigator ul{
        padding:0;
        width:100%;
        height:100%;
        margin:0;
    }
    #slider2-navigator{
        width:184px;
        height:100%;
        float:left;
        border-right:1px solid #ccc;
        background:#d1d1d1;
    }
    #slider2-content{
        width: 878px;
        height:100%;
        float:right;
    }
    #slider2{
        width:1065px;
        height:300px;
        background:#fff;
        border-radius:5px;
        overflow:hidden;
        box-shadow:0 1px 2px rgba(0,0,0,.2);
        margin-top:10px;
        position:relative;
    }
    #slider2 .clock{
        position: absolute;
        transform: scale(0.3);
        top: 191px;
        right: -491px;
    }
    .slider2_finished{
        width: 878px;
        height: 100%;
        background: rgba(0,0,0,.3);
        color: red;
        position: absolute;
        right: 0;
        text-align: center;
        line-height: 261px;
        z-index: 3;
        font-size: 34pt;
        font-family: GothamMedium;
        display: none;
    }
</style>

<script>
    /*slider2*/
    var slidertag2=$('#slider2');
    var slideritems2=slidertag2.find('.item');
    var nextslide2 =1;
    var numitems2=slideritems2.length;
    var slidernavigator2=slidertag2.find('#slider2-navigator li');
    var timeout2=4000;
    function slider2(){
        slideritems2.hide();
        slideritems2.eq(nextslide2-1).fadeIn(100);
        slidernavigator2.removeClass('active');
        slidernavigator2.eq(nextslide2-1).addClass('active');
        nextslide2++;
        if(nextslide2>numitems2){
            nextslide2=1;
        }
        if(nextslide2<1){
            nextslide2=numitems2;
        }
    }

    slider2();
    var sliderInterval2=setInterval(slider2,timeout2);
    slidertag2.mouseleave(function (){
        clearInterval(sliderInterval2);
        sliderInterval2=setInterval(slider2,timeout2);
    })

    function gotoslide2(index){
        nextslide2=index;
        slider2();
    }
    $('#slider2-navigator li').hover(function (){
        clearInterval(sliderInterval2);
        var index= $(this).index();
        gotoslide2(index+1);
    },function (){})

    /*Timer*/
     $('.flipTimer').flipTimer({
         direction:'down',
         date:'<?php echo $date_end?>',
         callback: function () {

         }
     })   
    
    
</script>
