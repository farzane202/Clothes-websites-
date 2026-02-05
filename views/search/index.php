
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
    #main:after{
        content: "";
        clear:both;
        display: block;
    }
</style>

<!--MAIN PART-->
<main id="main" style="margin-top:10px;background-color: #eeeeee; ">
    <?php
     require ('sidebar.php');
    ?>

    <div id="content">
        <?php
         require ('page_navigator.php');
        ?>
        <?php
         require ('filter_top.php');
        ?>
        <div class="horizental_row" style="float: left;width: 75%;margin-top: 32px;margin-bottom: 32px;"></div>
        <?php
         require ('search.php');
        ?>
        <?php
         require ('products.php');
        ?>



    </div>
</main>







<script>

    Items.hover(function (){
        $(this).find('.square').addClass('square_hover');
    },function (){
        $(this).find('.square').removeClass('square_hover');
    })


    $('.check_input').click(function (){
        if($(this).is(':checked')){
            $(this).parents('li').find('.check_label').addClass('checked');
        }else{
            $(this).parents('li').find('.check_label').removeClass('checked');
        }
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
