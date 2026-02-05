<style>
    #product_gallery{
        width: 900px;
        height:600px;
        background: white;
        position: fixed;
        left:0;
        right:0;
        margin: auto;
        top: 10px;
        z-index: 8;
        display: none;
    }
    #product_gallery h4{
        font-family: GothamMedium;
        margin: 0;
        background: #a3c5d9;
        height:35px;
        font-size: 15pt;
        color:#525e71;
        padding-left: 29px;
        line-height: 30px;
    }
    #product_gallery .right{
        width: 700px;
        float: right;
    }
    #product_gallery .left{
        width: 199px;
        float: left;
        height: 565px;
        border-right: 1px solid #ccc;
    }
    #product_gallery .right img{
        margin-left: 87px;
    }
    #product_gallery .left ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
    }
    #product_gallery .left ul li{
        width: 200px;
        height: 120px;
        text-align: center;
        border-bottom: 1px solid #ccc;
    }
    #product_gallery .left ul li img{
        margin-top: 13px;
    }
    #dark{
        width: 100%;
        height: 100%;
        position: fixed;
        left:0;
        top:0;
        background: rgba(0,0,0,.3);
        z-index: 7;
        display: none;
    }
    #product_gallery .left ul li.active{
        background: rgba(0,0,0,.1);
    }
    #product_gallery .close{
        width: 32px;
        height:32px;
        display: block;
        background: url(public/images/x-mark.png);
        position: relative;
        top: -28px;
        right: -830px;
    }
</style>
<div id="product_gallery">
    <h4> <?=$productInfo['title']?>
        <span class="close"></span>
    </h4>
    <div class="right">
        <img class="mainimage" src="">
    </div>
    <div class="left">
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
<div id="dark"></div>

<script>
    var productgallery = $('#product_gallery');
    var productgalleryThumbnails=productgallery.find('.left ul li');
    productgalleryThumbnails.click(function (){
        productgalleryThumbnails.removeClass('active');
        $(this).addClass('active');
        var mainImaageUrl = $(this).attr('data-main-image');
        productgallery.find('.mainimage').attr('src',mainImaageUrl);
    })
    productgallery.find('.close').click(function (){
        productgallery.fadeOut(200);
        $('#dark').fadeOut(200);
    })
    $('.gallery ul li').click(function (){
        productgallery.fadeIn(200);
        $('#dark').fadeIn(200);
        var mainImageUrl= $(this).attr('data-main-image');
        productgallery.find('.mainimage').attr('src',mainImageUrl);
    })

    $('#zoomproduct').elevateZoom({
        'zoomWindowOffetx':-800,
        'scrollZoom':true,
        'lensFadeIn':true,
        'tint':true,
    })
</script>
