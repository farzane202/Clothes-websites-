
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
                <a><i style=" background: url(public/images/deal.png)no-repeat;left: 22px;top: 12px;"></i>
                    <span> Today's Deals </span> </a>
            </li>
            <li data-time="3">
                <a><i style="background: url(public/images/customer-care.png)no-repeat;left: 24px;top: 10px;"></i> <span> Customer Service </span>
                </a>
            </li>
            <li data-time="4">
                <a><i style="background: url(public/images/gift-card.png)no-repeat;left: 23px;top: 11px;"></i> <span> Gift cards </span>
                </a>
            </li>

        </ul>
    </div>
</nav>
<style>
    nav {
        box-shadow: 1px 3px 4px #dadada;
        -webkit-box-shadow: 1px 3px 4px #dadada;
        -moz-box-shadow: 1px 3px 4px #dadada;
    }

    #menu_top {
        height: 40px;
        width: 1334px;
    }

    #menu_top ul {
        margin: 0;
        padding: 0;
        list-style: none;
        height: 40px;
        width: 1349px;

    }

    #menu_top ul li {
        float: left;
        height: 40px;
        position: relative;

    }

    #menu_top ul li a {
        font-family: GothamMedium;
        display: block;
        height: 30px;
        padding-left: 45px;
        padding-top: 10px;
        position: relative;
        font-size: 11pt;
        color: #545454;
        cursor: pointer;
    }

    .active_menu > a {
        color: #212121 !important;
    }

    #menu_top ul li a i {

        width: 24px;
        height: 24px;
        display: block;
        position: absolute;
        left: 20px;
        top: 10px;
    }

    #menu_top ul li #menu_top2 {
        width: 870px;
        height: 300px;
        background-color: #fff;
        box-shadow: 1px 3px 4px #6bb9f5;
        position: absolute;
        top: 41px;
        left: 17px;
        display: none;
    }

    #menu_top2 {
        z-index: 3;
    }

    #menu_top2 #menu_top2_left {
        width: 180px;
        height: 300px;
        float: left;
        box-shadow: 0 0 3px #cccccc;
    }

    #menu_top2 #menu_top2_right {
        width: 690px;
        height: 300px;
        float: right;
    }

    #menu_top2 #menu_top2_left ul {
        width: 180px;
        height: 300px;
    }

    #menu_top2 #menu_top2_left ul li {
        width: 180px;
        text-align: left;
        margin-top: 20px;
    }

    #menu_top2 #menu_top2_left ul li a {
        position: absolute;
        padding-left: 31px;
    }

    #menu_top2 #menu_top2_right ul {
        width: 690px;
        height: 300px;

    }

    #menu_top2 #menu_top2_right ul li {
        width: 190px;
        height: 50px;
        margin-top: 8px;
    }

    #menu_top2 #menu_top2_right ul li a {
        font-family: GothamLight;
    }

    #menu_top2 #menu_top2_right ul li a:hover {
        color: #649cd3;
    }

    #main:after {
        content: "";
        clear: both;
        display: block;
    }
</style>

<!--MAIN PART-->
<main id="main" style="margin-top:10px;background-color: #eeeeee;padding: 61px;height: 1282px;">
    <div class="order_steps">
        <div class="dashed">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
        <uL>
            <li>
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title"> Confirm </span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title"> Payment </span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title"> processing </span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="line"></span>
                <span class="title"> ready to send </span>
            </li>
            <li>
                <span class="circle"></span>
                <span class="title"> Delivered </span>
            </li>
        </uL>
        <div class="dashed" style="position: relative;left: -136px;">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <div class="content_showcart3">
        <table>
            <tr>
                <td>Product description</td>
                <td>Number</td>
                <td>Unit price</td>
                <td colspan="2">Total price</td>
                <td style="border: none;"></td>
            </tr>
            <tr>
                <td>
                    <img src="public/images/shirt1_1.png" style="float: left;">
                    <p style="margin-top:8px;">good quality</p>
                    <p> in three colors </p>
                    <p> for men & women </p>
                </td>
                <td>
                    <select style="width: 95px;">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select>
                </td>
                <td><span> 100$ </span></td>
                <td><span> 200$ </span></td>
                <td style="width: 2px;background: #fa5e58;padding: 5px;"><img src="public/images/clear.png"></td>
            </tr>
        </table>
    </div>
    <div id="final_price">
        <div class="total_price">
            <span> your total price : </span>
            <span style="float: right;color:green"> 2500$ </span>
        </div>
        <div class="price">
            <span> price you pay : </span>
            <span style="float: right;color:green"> 2505$ </span>
        </div>
        <div class="price">
            <span> shipping cost : </span>
            <span style="float: right;color:green"> 5$ </span>
        </div>
        <div class="price">
            <span> Discount : </span>
            <span style="float: right;color:green"> 100$ </span>
        </div>
    </div>
    <div style="float: left;width: 57%;margin-top: 25px;">
        <span class="btn" style="top: 859px;right: 128px;font-family: GothamMedium;font-size: 11pt;"> Select send method </span>
        <p style="font-family: GothamMedium;font-size: 9.5pt;color:#616161;"> Depending on the place of delivery of the order the shipping cost may be added  </p>
    </div>
    <div class="header">
        <h4> Order shipping information </h4>
    </div>
    <table style="float: left;width: 95%;">
        <tr>
            <td>
                <img src="public/images/truck.png">
            </td>
            <td>
                <span style="font-family: GothamMedium;font-size: 10.5pt;color:#333333">
                    This order will be delivered to farzaneh at damavand address and contact number 09302891367
                </span>
            </td>
        </tr>
        <tr>
            <td> <img src="public/images/location.png"></td>
            <td>
                <span style="font-family: GothamMedium;font-size: 10.5pt;color:#333333">
                    This order will be delivered to this address by mail and with postage
                </span>
            </td>
        </tr>
    </table>
    <span class="btn" style="top: 1203px;right: 128px;font-family: GothamMedium;font-size: 11pt;"> Continue </span>
</main>
<style>
    .order_steps .dashed{
        float:left ;
        margin-top: 11px;
        margin-right: 12px;
    }
    .order_steps{
        padding-left: 146px;
        padding-top: 43px;
    }
    .order_steps .dashed span{
        width: 11px;
        height: 3px;
        display: block;
        background: #208de6;
        float: left;
        margin-left: 3px;
    }
    .order_steps ul{
        margin: 0;
        padding: 0;
        list-style-type: none;
        float: left;
    }
    .order_steps ul li{
        width: 180px;
        position: relative;
        float: left;
    }
    .order_steps ul li.active .circle{
        border: 3px solid #2396f3;
        background: url(public/images/check_mark.png)-2px -2px;
    }
    .order_steps ul li.active .line{
        background: #2396f3;
    }
    .order_steps ul li.active .title{
        color: #2396f3;
    }
    .order_steps ul li .circle{
        width: 19px;
        height: 19px;
        display: block;
        border: 3px solid #ccc;
        border-radius: 100%;
    }
    .order_steps ul li .line{
        width: 128px;
        height: 2px;
        display: block;
        position: absolute;
        background: #cccccc;
        top: 12px;
        margin-left: 38px;
    }
    .order_steps ul li .title{
        font-size: 11pt;
        color: #aaa;
        background: none;
        position: absolute;
        top: 37px;
        right: 125px;
        width: 69px;
    }
    #main .content_showcart3 {
        float: left;
        width: 100%;
        margin-top: 95px;
    }

    #main .content_showcart3 table {
        width: 100%;
        font-family: GothamMedium;
        font-size: 10.5pt;
        color: #545454;
        margin-top: 25px;
    }

    #main .content_showcart3 table td {
        text-align: center;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        padding: 11px;
    }

    #main .content_showcart3 table tr:first-child td {
        border-top: 1px solid #ccc;
    }

    #main .content_showcart3 table tr:nth-child(2) {
        background: white;
    }

    #main .content_showcart3 table td p {
        margin: 0;
        line-height: 20px;
    }
    #main #final_price {
        float: left;
        width: 95%;
        margin-top: 50px;
    }

    #main #final_price .total_price{
        border: 1px solid #aaaaaa;
        padding: 9px;
    }
    #main #final_price .price{
        border: 1px solid #aaaaaa;
        padding: 9px;
        margin-top:8px;
    }
    #main #final_price  span{
        font-family: GothamMedium;
        font-size: 10pt;
        color:#616161;
    }
    .btn {
        width: 165px;
        height: 40px;
        background: #65c86b;
        display: block;
        position: absolute;
        top: 15px;
        right: 24px;
        color: white;
        line-height: 35px;
        text-align: center;
        border-radius: 5px;
    }
    .header{
        float: left;
        width: 95%;
        font-family: GothamMedium;
        margin-top: 25px;
    }
    .header h4{
        color:#525e71;
    }
    #main table td{
        border:1px solid #ccc;
        padding: 25px;
    }
    #main table td:nth-child(2){
        width: 997px;
    }
</style>

<!--Footer PART-->


<script>

    $('.check_input').click(function () {
        if ($(this).is(':checked')) {
            $(this).parents('.check_div').find('.check_label').addClass('checked');
        } else {
            $(this).parents('.check_div').find('.check_label').removeClass('checked');
        }
    })

    /*menu-top2-part*/
    var navItems = $('#menu_top2_right ul');
    var nextnav = 1;

    function nav2() {
        navItems.hide();
        navItems.eq(nextnav - 1).fadeIn(0);
        nextnav++;
    }

    function gotonav(index) {
        nextnav = index;
        nav2();
    }

    $('#menu_top2_left li').click(function () {
        var index = $(this).index();
        gotonav(index + 1);
    })


    /*NAVIGATION PART*/
    var timer = {};
    $('#menu_top li').hover(function () {
        var tag = $(this);
        var timerAttr = $(this).attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            $('#menu_top2', tag).fadeIn(0);
            tag.addClass('active_menu');
            $('#menu_top2_left li', tag).addClass('active_menu');

        }, 100)

    }, function () {
        var tag = $(this);
        var timerAttr = $(this).attr('data-time');
        clearTimeout(timer[timerAttr]);
        timer[timerAttr] = setTimeout(function () {
            $('#menu_top2', tag).fadeOut(0);
            tag.removeClass('active_menu');
            $('#menu_top2_left li', tag).removeClass('active_menu');
        }, 500)

    })
</script>
</body>
</html>
