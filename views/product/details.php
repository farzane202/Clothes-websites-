<div id="details">
    <div class="right">
        <div class="gallery">
            <img id="zoomproduct" class="big_img" src="public/images/products/<?=$productInfo['id']?>/product_220.png" data-zoom-image="public/images/products/<?=$productInfo['id']?>/shirt112.png">
            <ul>
                <?php
                 $gallery=$data['gallery'];
                 foreach ($gallery as $row){
                ?>
                <li data-main-image="public/images/products/<?=$productInfo['id']?>/gallery/large/<?=$row['img']?>"><img src="public/images/products/<?=$productInfo['id']?>/gallery/small/<?=$row['img']?>"></li>
                <?php } ?>

            </ul>
        </div>
    </div>
    <div class="left">
        <div class="title">
            <span>Shirt</span>
            <div class="star_textcenter">
                <div class="gray">
                    <div class="red"></div>
                </div>
            </div>
            <p> 3.5 out of 5 </p>
        </div>
        <div class="right">
            <ul>
                <li>shirt</li>
                <li>In three diffrent colors</li>
                <Li>In diffrent size for you</Li>
            </ul>
        </div>
        <div class="left">
            <h4> Choose color : </h4>
            <ul class="colors">
                <?php
                $all_colors=$productInfo['all_colors'];
                foreach ($all_colors as $row){
                ?>
                <li>
                    <span data-id="<?=$row['id']?>" class="circle" style="background:<?=$row['hex']?>"></span>
                </li>
                <?php
                }
                ?>
            </ul>
            <h4> Choose your Size : </h4>
            <div id="selectlist">
                <span class="size"> your size </span>
                <ul>
                    <?php
                     $all_sizes=$productInfo['all_sizes'];
                     foreach ($all_sizes as $row){
                    ?>
                    <li data-id="<?=$row['id']?>" style="margin-top:2px;"><?=$row['title']?></li>
                    <?php
                      }
                    ?>
                </ul>
            </div>
            <div id="price">
                <span style="text-decoration: line-through;font-family: GothamMedium;font-size: 10pt;color:#718799;position: relative;top: 32px;left: 3px;"> Price : <?=$productInfo['price']?> $ </span>
                <div class="price-info" style="position: relative;top: 26px;left: -116px;">
                    <div class="price-info-old" style="width: 60px;height:90%;text-decoration: none;">
                        <?=$productInfo['price_discount']?> $
                    </div>
                    <div class="price-info-new" style="width: 100px;height:90%;font-size: 10pt;">
                        Discount
                    </div>
                </div>
            </div>
            <div id="price-for-you">
                <span> Price for you : </span>
                <span style="color:green;"> <?=$productInfo['price_total']?> $ </span>
            </div>
            <div id="addcart" style="cursor: pointer" onclick="addToBasket()">
             <span> add to cart
             <i></i>
             </span>
            </div>
        </div>
    </div>
</div>

<style>
    #details{
        width: 1048px;
        position: relative;
        right: -144px;
        box-shadow: 3px 4px 3px #cccccc;
    }
    #details .left{
        width: 595px;
        float:left;
    }
    #details .right{
        width: 450px;
        float:right;
    }
    #details .right .gallery{
        text-align: center;
        width: 100%;
        float: right;
    }
    #details .right .big_img{
        margin-top:40px;
    }
    #details .right .gallery ul{
        margin: 0;
        padding:0;
        list-style-type: none;
        padding-left: 56px;
        padding-top: 30px;
    }
    #details .right .gallery ul li{
        float: left;
        width: 108px;
        height:100px;
        box-shadow: 2px 4px 10px #ccc;
        background: #f5f5f5;
    }
    #details .right .gallery ul li img{
        position: relative;
        right:8px;
    }
    .star_textcenter{
        width: 12%;
        position: relative;
        top: -9px;
        right: -512px;
    }
    .star_textcenter .gray{
        width: 69px;
        height: 11px;
        background: url(public/images/star.png) 0 -11px;
        position: relative;
    }
    .star_textcenter .gray .red{
        width: 49px;
        height: 11px;
        background: url(public/images/star.png) 0 -24px;
        position: absolute;
        top: -2px;
    }
    #details .left .title{
        width: 100%;
        height:60px;
        background: #f5f5f5;
        box-shadow: 2px 4px 10px #ccc;
        margin-top: 25px;
    }
    #details .left .title span{
        font-family: GothamMedium;
        font-size: 14pt;
        color:#616161;
        position: relative;
        top: 11px;
        left: 16px;
    }
    #details .left .title p{
        font-family: GothamMedium;
        font-size: 10pt;
        color:dimgrey;
        text-align: right;
        padding-right: 13px;
        line-height: 0;
    }
    #details .left .left{
        width:454px;
        float: left;
    }
    #details .left .right{
        width:141px;
    }
    #details .left .left h4{
        font-family: GothamMedium;
        color:#718799;
        font-size: 10pt;
    }
    #details .left .left .colors{
        padding: 0;
        margin: 0;
        list-style-type: none;
        height: 30px;
    }
    #details .left .left .colors li{
        width: 37px;
        height:28px;
        float: left;
        border: 1px solid #718799;
        border-radius: 5px;
        margin-left: 15px;
        position: relative;
    }
    #details .left .left .colors li .circle{
        display: block;
        width: 17px;
        height:17px;
        border-radius: 50%;
        position: absolute;
        left: 10px;
        top: 5px;
    }
    #details .left .left .colors li .circle.active::after{
        content: "";
        width: 16px;
        height:16px;
        display: block;
        background:url(public/images/tick-icon.png);
        background-position: 1px 0;
    }
    #details .left .left #selectlist{
        width: 160px;
        height:28px;
        border: 1px solid #718799;
        border-radius: 5px;
        text-align: center;
    }
    #details .left .left #selectlist span{
        font-family: GothamMedium;
        font-size: 10pt;
        line-height: 25px;
        color:#718799;
    }
    #details .left .left #selectlist ul{
        padding: 0;
        margin: 0;
        list-style-type: none;
        background: #f7f7f7;
        margin-top: 4px;
        display: none;
        z-index: 3;
        position: relative;
    }
    #details .left .left #selectlist ul li{
        width: 160px;
        height:28px;
        font-family: GothamMedium;
        font-size: 9.5pt;
        color:#718799;
        line-height: 24px;
    }
    #details .left .left #selectlist ul li:hover{
        background: #d5d5d5;
    }
    #details .left .left #price-for-you{
        position: relative;
        top: 66px;
        left: 2px;
        font-family: GothamMedium;
        font-size: 10.5pt;
        color:#718799;
    }
    #details .left .left #addcart{
        position: relative;
        top: 100px;
        left: 2px;
        background: #b5dbef;
        width:150px;
        height:30px;
        border-radius: 5px;
    }
    #details .left .left #addcart span{
        font-size: 11pt;
        font-family: GothamMedium;
        color:#5b697c;
        position: relative;
        top: 5px;
        left: 10px;
    }
    #details .left .left #addcart span i{
        width: 24px;
        height:24px;
        display: block;
        background: url(public/images/shopping-online.png);
        position: relative;
        top: -20px;
        right: -107px;
    }
    #details .left .right ul{
        margin:0;
        padding: 0;
        font-family: GothamMedium;
        font-size: 10pt;
        color:dimgrey;
        margin-top: 43px;
    }
    #details .left .right ul li{
        line-height: 20px;
    }
    .price-info-new{
        width:155px;
        height:100%;
        float:left;
        background:#a3c5d9;
        color:#565656;
        line-height:35px;
        margin-right:2px;
        position:relative;
        left: 2px;
        text-align: center;
    }
    .price-info-old{
        width:75px;
        height:100%;
        background:#dbdbdb;
        float:right;
        color:#565656;
        line-height:36px;
        position:relative;
        text-align: center;
        text-decoration: line-through;
    }
    .price-info{
        height: 35px;
        float: right;
        border-radius: 5px;
        overflow: hidden;
        position: relative;
        top: 18px;
        right: 292px;
        font-family: GothamMedium;
    }

</style>

<script>
    var size_selected = '';
    function addToBasket($productId){
        var color = $('.colors').find('.circle.active').attr('data-id');
        var url='<?=URL?>product/addtobasket/<?=$productInfo['id']?>/'+color+'/'+size_selected;
        var data = {};
        $.post(url,data,function (msg) {

        })
        
    }
    
    
    $('#selectlist').click(function (){
        $('ul',this).slideToggle(200);
    })
    $('#selectlist ul li').click(function (){
        var id=$(this).attr('data-id');
        size_selected = id ;
        var txt= $(this).text();
        $('#selectlist .size').text(txt);
    })

    $('.colors li').click(function (){
        $('.circle').removeClass('active');
        $('.circle',this).addClass('active');

    })
</script>
