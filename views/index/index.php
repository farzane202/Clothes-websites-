
<!--NAVIGATION PART-->
<nav>
    <div id="menu_top">
        <ul>
            <li data-time="1">
                <a><i style=" background: url(public/images/menu.png)no-repeat;left: 10px;"></i> <span> All </span> </a>
                <div id="menu_top2">
                    <div id="menu_top2_left">
                        <ul>
                            <li>
                                <a><i style="background: url(public/images/woman-clothes.png)no-repeat;left: 10px;"></i><span> Women's clothes </span></a>
                            </li>
                            <li>
                                <a><i style="background: url(public/images/men-clothes.png)no-repeat;left: 10px;"></i><span> Men's clothes </span></a>
                            </li>
                            <li>
                                <a><i style="background: url(public/images/baby-clothes.png)no-repeat;left: 10px;"></i><span> children's clothes </span></a>
                            </li>
                        </ul>
                    </div>
                    <div id="menu_top2_right">
                        <ul>
                            <li><a><span>Dress</span></a></li>
                            <li><a><span>Skirt</span></a></li>
                            <li><a><span>Jeans</span></a></li>
                            <li><a><span>Trousers</span></a></li>
                            <li><a><span>Sweater</span></a></li>
                            <li><a><span>T-shirt</span></a></li>
                            <li><a><span>Tunic</span></a></li>
                            <li><a><span>Tops</span></a></li>
                            <li><a><span>Sportswear</span></a></li>
                            <li><a><span>Leggings</span></a></li>
                            <li><a><span>Shirts</span></a></li>
                            <li><a><span>Swimsuit</span></a></li>
                            <li><a><span>Coat</span></a></li>
                            <li><a><span>Jacket</span></a></li>
                            <li><a><span>Bodysuit</span></a></li>
                        </ul>
                        <ul style="display: none;">
                            <li><a><span>Shoes</span></a></li>
                            <li><a><span>Suit</span></a></li>
                            <li><a><span>Jeans</span></a></li>
                            <li><a><span>Trousers</span></a></li>
                            <li><a><span>Sweater</span></a></li>
                            <li><a><span>T-shirt</span></a></li>
                            <li><a><span>Belt</span></a></li>
                            <li><a><span>Hoodie</span></a></li>
                            <li><a><span>Sportswear</span></a></li>
                            <li><a><span>Cap</span></a></li>
                            <li><a><span>Shirts</span></a></li>
                            <li><a><span>Tie</span></a></li>
                            <li><a><span>Coat</span></a></li>
                            <li><a><span>Jacket</span></a></li>
                            <li><a><span>Waistcoat</span></a></li>
                        </ul>
                        <ul style="display: none;">
                            <li><a><span>Overalls</span></a></li>
                            <li><a><span>Skirt</span></a></li>
                            <li><a><span>Jeans</span></a></li>
                            <li><a><span>Trousers</span></a></li>
                            <li><a><span>Mittens</span></a></li>
                            <li><a><span>T-shirt</span></a></li>
                            <li><a><span>Beanie</span></a></li>
                            <li><a><span>Baby apron</span></a></li>
                            <li><a><span>Diaper</span></a></li>
                            <li><a><span>Socks</span></a></li>
                            <li><a><span>Shirts</span></a></li>
                            <li><a><span>Shoes</span></a></li>
                            <li><a><span>Coat</span></a></li>
                            <li><a><span>Jacket</span></a></li>
                            <li><a><span>Diaper</span></a></li>
                        </ul>
                    </div>
                </div>
            </li>
            <li data-time="2">
                <a><i style=" background: url(public/images/deal.png)no-repeat;left: 22px;top: 12px;"></i> <span> Today's Deals </span> </a>
            </li>
            <li data-time="3">
                <a><i style="background: url(public/images/customer-care.png)no-repeat;left: 24px;top: 10px;"></i> <span> Customer Service </span> </a>
            </li>
            <li data-time="4">
                <a><i style="background: url(public/images/gift-card.png)no-repeat;left: 23px;top: 11px;"></i> <span> Gift cards </span> </a>
            </li>

        </ul>
    </div>
</nav>
<style>
    nav{
        box-shadow: 1px 3px 4px #dadada;
        -webkit-box-shadow:1px 3px 4px #dadada;
        -moz-box-shadow:1px 3px 4px #dadada;
    }
    #menu_top{
        height:40px;
        width:1334px;
    }
    #menu_top ul{
        margin: 0;
        padding: 0;
        list-style: none;
        height:40px;
        width:1349px;

    }
    #menu_top ul li{
        float:left;
        height:40px;
        position: relative;

    }
    #menu_top ul li a{
        font-family: GothamMedium;
        display: block;
        height:30px;
        padding-left: 45px;
        padding-top: 10px;
        position: relative;
        font-size: 11pt;
        color: #545454;
        cursor: pointer;
    }
    .active_menu >a {
        color:#212121!important;
    }
    #menu_top ul li a i{

        width: 24px;
        height:24px;
        display: block;
        position: absolute;
        left: 20px;
        top: 10px;
    }
    #menu_top ul li #menu_top2{
        width:870px;
        height:300px;
        background-color: #fff;
        box-shadow: 1px 3px 4px #6bb9f5;
        position: absolute;
        top: 41px;
        left: 17px;
        display: none;
    }
    #menu_top2{
        z-index:3;
    }
    #menu_top2 #menu_top2_left{
        width: 180px;
        height:300px;
        float: left;
        box-shadow: 0 0 3px #cccccc;
    }
    #menu_top2 #menu_top2_right{
        width: 690px;
        height:300px;
        float:right;
    }
    #menu_top2 #menu_top2_left ul{
        width: 180px;
        height:300px;
    }
    #menu_top2 #menu_top2_left ul li{
        width: 180px;
        text-align: left;
        margin-top: 20px;
    }
    #menu_top2 #menu_top2_left ul li a{
        position:absolute;
        padding-left: 31px;
    }
    #menu_top2 #menu_top2_right ul{
        width: 690px;
        height:300px;

    }
    #menu_top2 #menu_top2_right ul li{
        width:190px;
        height: 50px;
        margin-top: 8px;
    }
    #menu_top2 #menu_top2_right ul li a {
        font-family: GothamLight;
    }
    #menu_top2 #menu_top2_right ul li a:hover {
        color:#649cd3;
    }

</style>
<!--MAIN PART-->
<main style="margin-top:10px;background-color: #eeeeee;  height: 2303px;">
    <div id="main">
        <?php
        require ('sidebar.php');
        ?>

        <div id="content" style="width:1066px;height: 2300px;">
            <?php
            require ('slider1.php');
            ?>
            <?php
            require ('slider2.php');
            ?>
            <?php
            require ('direct_access.php');
            ?>
            <?php
            require ('sliderscroll_onlyhere.php');
            ?>
            <?php
            require ('sliderscroll_mostvisited.php');
            ?>
            <?php
            require ('sliderscroll_bestseller.php');
            ?>



            <style>
                .sliderscroll{
                    width:1010px;
                    height:267px;
                    border: 1px solid #C9C9C9;
                    float: right;
                    position: relative;
                    top: -245px;
                    left: -16px;
                }
                .sliderscroll h3{
                    font-family: GothamMedium;
                    font-size: 11pt;
                    height: 35px;
                    margin: 0;
                    line-height: 29px;
                    color:#545454;
                    background: #d4dfe5;
                    font-weight: normal;
                    padding-left: 23px;
                }
                .sliderscroll_content{
                    height:232px;
                    width:100%;
                }
                .sliderscroll .sliderscroll_prev{
                    width:55px;
                    height: 100%;
                    float:right;
                    box-shadow: 0px 0px 6px #ccc;
                    position: relative;
                }
                .sliderscroll .sliderscroll_next{
                    width:55px;
                    height: 100%;
                    float:left;
                    box-shadow: 0px 0px 6px #ccc;
                    position: relative;
                }
                .sliderscroll .sliderscroll_prev .prev{
                    width: 64px;
                    height:64px;
                    display: block;
                    background: url(public/images/angle-right5.png);
                    position: absolute;
                    top: 75px;
                    right: -6px;
                }
                .sliderscroll .sliderscroll_next .next{
                    width: 64px;
                    height:64px;
                    display: block;
                    background: url(public/images/angle-left1.png);
                    position: absolute;
                    top: 75px;
                    left: -5px;
                }
                .sliderscroll .sliderscroll-main{
                    width: 897px;
                    height:100%;
                    float: right;
                    overflow: hidden;
                }
                .sliderscroll .sliderscroll-main ul{
                    margin: 0;
                    padding: 0;
                    list-style-type: none;
                    height:100%;
                }
                .sliderscroll .sliderscroll-main ul li{
                    width: 224.25px;
                    height: 100%;
                    float:left;
                }
                .sliderscroll .sliderscroll-main ul li a{
                    width: 224.25px;
                    height: 100%;
                    display: block;
                    text-decoration: none;
                }
                .sliderscroll .sliderscroll-main ul li a img{
                    margin-left: 47px;
                    margin-top: 10px;
                    width: 140px;
                    height: 164px;
                }
                .sliderscroll .sliderscroll-main ul li a p{
                    margin:0;
                    font-family: GothamMedium;
                    text-align: center;
                }
            </style>
        </div>
    </div>
</main>
<style>
    #back-to-top {
        display: none;
        width: 1335px;
        position: relative;
        bottom: 20px;
        right: 20px;
        z-index: 99;
        font-size: 18px;
        background-color: #cccccc;
        color: white;
        border: none;
        outline: none;
        cursor: pointer;
        padding: 15px;
        border-radius: 10px;
        top: -153px;
        left: 0;
    }

    #back-to-top:hover {
        background-color: dimgrey;
    }
</style>

<script>
    var backToTopBtn = document.getElementById("back-to-top");

    window.onscroll = function() {
        scrollFunction();
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            backToTopBtn.style.display = "block";
        } else {
            backToTopBtn.style.display = "none";
        }
    }

    backToTopBtn.addEventListener("click", function() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    });
</script>

<script>

    /*slider scroll*/
    function sliderscroll(direction,tag){
        var span_tag = $(tag);
        var sliderscrollTag = span_tag.parents('.sliderscroll');
        var sliderscrollUl = sliderscrollTag.find('.sliderscroll-main ul');
        var sliderscrollItems = sliderscrollUl.find('li');
        var sliderscrollItemsnumbers = sliderscrollItems.length;
        var sliderscrollNumbers = Math.ceil(sliderscrollItemsnumbers/4);
        var maxNegativemargin = -(sliderscrollNumbers-1)*897;
        sliderscrollUl.css('width',sliderscrollItemsnumbers*224.25);
        var marginleftNew ;
        var marginleftOld = sliderscrollUl.css('margin-left');
        marginleftOld = parseFloat(marginleftOld);
        if(direction==='right'){
            marginleftNew = marginleftOld - 897 ;
        }
        if(direction==='left'){
            marginleftNew = marginleftOld + 897 ;
        }
        if(marginleftNew<maxNegativemargin){
            marginleftNew = 0;
        }
        if(marginleftNew>0){
            marginleftNew = maxNegativemargin;
        }
        sliderscrollUl.animate({'margin-left':marginleftNew},1500);

    }
    $('.sliderscroll_prev .prev').click(function (){
        sliderscroll('right');
    })
    $('.sliderscroll_next .next').click(function (){
        sliderscroll('left');
    })







    /*menu-top2-part*/
    var navItems= $('#menu_top2_right ul');
    var nextnav = 1 ;
    function nav2(){
        navItems.hide();
        navItems.eq(nextnav-1).fadeIn(0);
        nextnav++;
    }
    function gotonav(index){
        nextnav = index;
        nav2();
    }
    $('#menu_top2_left li').click(function (){
        var index = $(this).index();
        gotonav(index+1);
    })



    /*NAVIGATION PART*/
    var timer={};
    $('#menu_top li').hover(function (){
        var tag=$(this);
        var timerAttr=$(this).attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr]= setTimeout(function (){
            $('#menu_top2',tag).fadeIn(0);
            tag.addClass('active_menu');
            $('#menu_top2_left li',tag).addClass('active_menu');

        },100)

    },function (){
        var tag=$(this);
        var timerAttr=$(this).attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr]= setTimeout(function (){
            $('#menu_top2',tag).fadeOut(0);
            tag.removeClass('active_menu');
            $('#menu_top2_left li',tag).removeClass('active_menu');
        },500)

    })
</script>
</body>
</html>
