<div id="slider">
    <span id="previous"></span>
    <span id="next"></span>
    <div id="slider_img" style="height: 380px;position: absolute;">
        <?php
       $slider1=$data[0];
         foreach ($slider1 as $row){
        ?>
        <a class="item" href="<?=$row['link']?>"><img src="<?=$row['img']?>"></a>
        <?php
         }
        ?>
    </div>
    <div id="slider_navigator">
        <ul>
            <li><a>winter sales</a></li>
            <li><a>online sale</a></li>
            <li><a>fashion</a></li>
            <li style="border-right: none;"><a>speacial price</a></li>
        </ul>
    </div>
</div>
<style>
    #slider{
        height:420px;
        width:1335px;
        box-shadow: 1px 3px 3px #cccccc;
        position: relative;
    }
    #slider_img a{
        display: none;
    }
    #slider #previous{
        width: 64px;
        height:64px;
        display: block;
        background: url(public/images/angle-left.png);
        position: absolute;
        top: 134px;
        left: 15px;
        cursor: pointer;
        z-index: 2;
    }
    #slider #next{
        width: 64px;
        height:64px;
        display: block;
        background: url(public/images/angle-right.png);
        position: absolute;
        top: 134px;
        right: 15px;
        cursor: pointer;
        z-index: 2;
    }
    #slider_navigator{
        width:1335px;
        height:40px;
        position: absolute;
        top: 380px;
        background: white;
    }
    #slider_navigator ul{
        font-family: GothamMedium;
        margin: 0;
        padding: 0;
        list-style-type: none;
    }
    #slider_navigator ul li{
        float:left;
        width: 332px;
        height: 40px;
        text-align: center;
        border-right: 1px solid #eeeeee;
    }
    #slider_navigator ul li a{
        display: block;
        width: 333px;
        height: 33px;
        padding-top: 7px;
        color: #545454;
        position: relative;
    }
    #slider #slider_navigator .active>a{
        background: #eeeeee;
        color: #000000;
    }
</style>

<script>
    /*SLIDER1 PART*/
    var slidertag=$('#slider');
    var slideritems=slidertag.find('.item');
    var nextslide =1;
    var numitems=slideritems.length;
    var slidernavigator=slidertag.find('#slider_navigator li');
    var timeout=4000;
    function slider(){
        slideritems.hide();
        slideritems.eq(nextslide-1).fadeIn(100);
        slidernavigator.removeClass('active');
        slidernavigator.eq(nextslide-1).addClass('active');
        nextslide++;
        if(nextslide>numitems){
            nextslide=1;
        }
        if(nextslide<1){
            nextslide=numitems;
        }
    }

    slider();
    var sliderInterval=setInterval(slider,timeout);
    slidertag.mouseleave(function (){
        clearInterval(sliderInterval);
        sliderInterval=setInterval(slider,timeout);
    })
    function gotonext(){
        slider();
    }
    $('#next').click(function (){
        clearInterval(sliderInterval);
        gotonext();
    });
    function gotoprev(){
        slider();
        nextslide=nextslide-2;
    }
    $('#previous').click(function (){
        clearInterval(sliderInterval);
        gotoprev();
    })
    function gotoslide(index){
        nextslide=index;
        slider();
    }

    $('#slider_navigator li').hover(function (){
        clearInterval(sliderInterval);
        var index= $(this).index();
        gotoslide(index+1);
    },function (){})

</script>
