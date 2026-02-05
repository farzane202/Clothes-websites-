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

</style>

<!--MAIN PART-->
<main style="margin-top:10px;background-color: #eeeeee;  height: 1173px;">
    <div class="box">
        <div class="header"> User Informations</div>
        <div class="content_box">
            <p> Real User Info </p>
            <table>
                <tr>
                    <td>
                        <span> Name : </span>
                        <span style="color:#616161"> Farzaneh </span>
                    </td>
                    <td>
                        <span> Email : </span>
                        <span style="color:#616161"> farzaneh.mdi1380@gmail.com </span>
                    </td>
                    <td>
                        <span>NO. : </span>
                        <span style="color:#616161"> P525456900</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span> Date of birth : </span>
                        <span style="color:#616161"> 10/9/2001 </span>
                    </td>
                    <td>
                        <span> Phone number : </span>
                        <span style="color:#616161"> 09302891367 </span>
                    </td>
                    <td>
                        <span> number : </span>
                        <span style="color:#616161"> 2556300121</span>
                    </td>
                </tr>
                <tr>
                    <td>
                        <span> recevice notofication : </span>
                        <span style="color:#616161"> yes </span>
                    </td>
                    <td>
                        <span> Gender : </span>
                        <span style="color:#616161"> Female </span>
                    </td>
                    <td>
                        <span> Address : </span>
                        <span style="color:#616161"> No.24 , dallan behesht alley , damavand</span>
                    </td>
                </tr>
                <tr style="height: 52px;">
                    <td>
                        <a style="background: #7de2ff;margin-right: 22px;">Edit Info</a>
                        <a style="background: gray;font-size: 9pt;"> Change Password </a>
                    </td>
                </tr>
            </table>
        </div>
    </div>
    <ul id="tab">
        <li style="margin-left: 15px;"> My Message</li>
        <li> My orders</li>
        <li> My favorite list</li>
        <li>My comments</li>
        <li>My discount coupon</li>
    </ul>
    <div id="tabchilds">
        <section>
            <table>
                <tr style="background: #3c3c3c;color: white;">
                    <td>Number</td>
                    <td>Code</td>
                    <td>Date</td>
                    <td>Title</td>
                    <td>Content</td>
                    <td>Status</td>
                </tr>
                <tr style="background:white;color: black;">
                    <td>1</td>
                    <td>23150</td>
                    <td>10/2/2023</td>
                    <td>order confirm</td>
                    <td>your order has been registered</td>
                    <td>Unread</td>
                </tr>
            </table>
        </section>
        <section>
            <table>
                <tr style="background: #3c3c3c;color: white;">
                    <td>Number</td>
                    <td>Code</td>
                    <td>Date</td>
                    <td>Total price</td>
                    <td>Status</td>
                    <td>Payment</td>
                    <td>Details</td>
                </tr>
                <tr style="background:white;color: black;">
                    <td>1</td>
                    <td>23150</td>
                    <td>10/2/2023</td>
                    <td>25000$</td>
                    <td>Delivered</td>
                    <td>Paid</td>
                    <td><img src="public/images/icon1.jpeg" onclick="ShowDetailsTr(this)"></td>
                </tr>
                <tr class="details">
                    <td colspan="7">
                        <div class="subtable">
                            <table>
                                <tr style="background: #616161;color: white;">
                                    <td>Product</td>
                                    <td>number</td>
                                    <td>price</td>
                                    <td>discount</td>
                                    <td>total price</td>
                                </tr>
                                <tr style="background:white;color: black;">
                                    <td>Shirt</td>
                                    <td>2</td>
                                    <td>25000$</td>
                                    <td>5000$</td>
                                    <td>20000$</td>
                                </tr>
                            </table>
                            <h4 class="title"> Order tracking </h4>
                            <div class="order_steps">
                                <div class="dashed">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                                <uL>
                                    <li class="active">
                                        <span class="circle"></span>
                                        <span class="line"></span>
                                        <span class="title"> Confirm </span>
                                    </li>
                                    <li class="active">
                                        <span class="circle"></span>
                                        <span class="line"></span>
                                        <span class="title"> Payment </span>
                                    </li>
                                    <li class="active">
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
                            <div class="more">
                                <table>
                                    <tr>
                                        <td>code : 25548401</td>
                                        <td>shipping time : 1/2/2023</td>
                                        <td> shipping method : post</td>
                                    </tr>
                                    <tr>
                                        <td> phone number : 093089520 </td>
                                        <td>transferee : farzaneh</td>
                                        <td> address : No.24 , dallan behesht alley , damavand </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </section>
        <section style="display: block">
            <ul class="favorite">
                <li class="active">
                    <a>
                        <img src="public/images/folder.png" style="margin-left: 8px;margin-top: 8px;">
                        <span> All folders </span>
                    </a>
                </li>
                <li style="margin-left: 20px;">
                    <a>
                        <img src="public/images/folder.png" style="margin-left: 8px;margin-top: 8px;">
                        <span> Shirts </span>
                        <img class="edit" src="public/images/edit.png">
                    </a>
                </li>
            </ul>
            <div class="item">
                <div class="left">
                    <img src="public/images/shirt1_1.png">
                </div>
                <div class="right">
                    <h4> Shirt
                        <img src="public/images/edit.png" style="float: right;margin-right: 10px;">
                    </h4>
                    <p> I love the quality of this shirt and i want to buy it again. </p>
                </div>
            </div>
        </section>
        <section>
            <table>
                <tr style="background: #3c3c3c;color: white;">
                    <td>Number</td>
                    <td>Code</td>
                    <td>Date</td>
                    <td>Title</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr style="background:white;color: black;">
                    <td>1</td>
                    <td>23150</td>
                    <td>10/2/2023</td>
                    <td>order confirm</td>
                    <td><img src="public/images/edit.png"></td>
                    <td><img src="public/images/x.png"></td>
                </tr>
            </table>
        </section>
        <section>
            <div id="adddigibon">
                <span> Recieve code : </span>
                <input type="text">
                <a class="btn"> Save info </a>
            </div>
            <table style="margin-top:30px;">
                <tr style="background: #3c3c3c;color: white;">
                    <td>Number</td>
                    <td>Code</td>
                    <td>Date</td>
                    <td>Title</td>
                    <td>Edit</td>
                    <td>Delete</td>
                </tr>
                <tr style="background:white;color: black;">
                    <td>1</td>
                    <td>23150</td>
                    <td>10/2/2023</td>
                    <td>order confirm</td>
                    <td><img src="public/images/edit.png"></td>
                    <td><img src="public/images/x.png"></td>
                </tr>
            </table>
        </section>
    </div>
</main>
<style>
    #tab {
        width: 1196px;
        height: 63px;
        float: left;
        background: rgba(255, 255, 255, .7);
        margin: 0;
        padding: 0;
        list-style-type: none;
        margin-left: 78px;
        margin-top: 50px;
        box-shadow: 3px 4px 3px #ccc;
    }

    #tab li {
        float: left;
        font-family: GothamMedium;
        height: 100%;
        margin-right: 43px;
        line-height: 58px;
        font-size: 11pt;
        color: #616161;
        cursor: pointer;
    }

    #tabchilds {
        float: left;
        width: 1196px;
        margin-left: 78px;
        margin-top: 15px;
    }

    #tabchilds section {
        display: none;
    }

    #tab li.active {
        color: #22349c;
    }
    #tabchilds section table{
        width: 100%;
        font-family: GothamMedium;
        font-size: 10.5pt;
    }
    #tabchilds section table tr{
        height:30px;
        text-align: center;
    }
    #tabchilds section table .details{
        display: none;
    }
    #tabchilds section table .details .title{
        color:#545454;
        font-size: 11pt;
        background: #ccc;
        height: 30px;
        line-height: 26px;
    }
    #tabchilds section table .details .order_steps .dashed{
        float:left ;
        margin-top: 11px;
        margin-right: 12px;
    }
    #tabchilds section table .details .order_steps{
        padding-left: 146px;
        padding-top: 43px;
    }
    #tabchilds section table .details .order_steps .dashed span{
        width: 11px;
        height: 3px;
        display: block;
        background: #208de6;
        float: left;
        margin-left: 3px;
    }
    #tabchilds section table .details .order_steps ul{
        margin: 0;
        padding: 0;
        list-style-type: none;
        float: left;
    }
    #tabchilds section table .details .order_steps ul li{
        width: 180px;
        position: relative;
        float: left;
    }
    #tabchilds section table .details .order_steps ul li.active .circle{
        border: 3px solid #2396f3;
        background: url(public/images/check_mark.png)-2px -2px;
    }
    #tabchilds section table .details .order_steps ul li.active .line{
        background: #2396f3;
    }
    #tabchilds section table .details .order_steps ul li.active .title{
        color: #2396f3;
    }
    #tabchilds section table .details .order_steps ul li .circle{
        width: 19px;
        height: 19px;
        display: block;
        border: 3px solid #ccc;
        border-radius: 100%;
    }
    #tabchilds section table .details .order_steps ul li .line{
        width: 128px;
        height: 2px;
        display: block;
        position: absolute;
        background: #cccccc;
        top: 12px;
        margin-left: 38px;
    }
    #tabchilds section table .details .order_steps ul li .title{
        font-size: 11pt;
        color: #aaa;
        background: none;
        position: absolute;
        top: 37px;
        right: 125px;
        width: 69px;
    }
    #tabchilds section table .details .subtable .more{
        float: left;
        width: 100%;
        margin-top: 90px;
    }
    #tabchilds section table .details .subtable .more tr{
        background: #fffcf9;
        color:#616161;
    }
    #tabchilds section .favorite{
        list-style-type: none;
        background: #ccc;
        float: left;
        border:1px dotted #aaaaaa;
        padding: 20px;
        width: 96%;
    }
    #tabchilds section .favorite li{
        width: 280px;
        height:50px;
        float: left;
    }
    #tabchilds section .favorite li a{
        width: 280px;
        height:50px;
        display: block;
    }
    #tabchilds section .favorite li.active{
        background: #eee;
    }
    #tabchilds section .favorite li a span{
        font-family: GothamMedium;
        font-size: 10pt;
        color:#333333;
        position: relative;
        top: -11px;
    }
    #tabchilds section .favorite li a .edit{
        position: relative;
        right: -167px;
        top: -16px;
        display: none;
    }
    #tabchilds section .favorite li a:hover{
        background: #eee;
    }
    #tabchilds section .item{
        float: left;
        width: 99%;
        border:1px dotted #616161;
    }
    #tabchilds section .item .left{
        width: 130px;
        height:100px;
        float: left;
    }
    #tabchilds section .item .right{
        float: right;
        width: 89%;
        height:100%;
    }
    #tabchilds section .item .right h4{
        font-family: GothamMedium;
        font-size: 13pt;
        color:#545454;
    }
    #tabchilds section .item .right p{
        font-family: GothamMedium;
        color:#5b697c;
        font-size: 11pt;
    }
    #tabchilds section #adddigibon{
        background: #ccc;
        height:65px;
    }
    #tabchilds section #adddigibon span{
        font-family: GothamMedium;
        font-size: 11pt;
        color:#545454;
        position: relative;
        top: 18px;
        left: 10px;
    }
    #tabchilds section #adddigibon input{
        width: 235px;
        border: 1px solid #aaa;
        height: 20px;
        position: relative;
        top: 17px;
        left: 20px;
    }
    #tabchilds section #adddigibon .btn{
        width: 120px;
        height: 35px;
        background: #4effd1;
        font-family: GothamMedium;
        color: white;
        font-size: 11pt;
        display: block;
        float: right;
        text-align: center;
        line-height: 28px;
        border-radius: 5px;
        position: relative;
        right: 625px;
        top: 12px;
    }
</style>
<style>
    .box {
        width: 1200px;
        font-family: GothamMedium;
        margin: auto;
        box-shadow: 3px 3px 9px #ccc;
    }

    .box .header {
        background: #3c3c3c;
        color: white;
        height: 40px;
        padding-left: 45px;
        line-height: 33px;
    }

    .box .content_box table {
        width: 1200px;
    }

    .box .content_box table tr {
        font-size: 10pt;
        height: 27px;
    }

    .box .content_box {
        padding-left: 9px;
    }

    .box .content_box table tr a {
        width: 120px;
        height: 30px;
        display: block;
        text-align: center;
        line-height: 26px;
        float: left;
        border-radius: 5px;
        color: white;
    }
</style>
<!--Footer PART-->



<script>

    $('.favorite li a').hover(function (){
        $('.edit',this).fadeIn(200);
    },function (){
        $('.edit',this).fadeOut(200);
    })

    function ShowDetailsTr(tag){
        var imgtag = $(tag);
        var src = imgtag.attr('src');
        if(src==='public/images/icon2.jpeg'){
            imgtag.attr('src','public/images/icon1.jpeg');
        }else{
            imgtag.attr('src','public/images/icon2.jpeg');
        }
        var parentTr = imgtag.parents('tr');
        parentTr.next().slideToggle(200);
    }


    $('#tab li').click(function () {
        $('#tab li').removeClass('active');
        $(this).addClass('active');
        $('#tabchilds section').fadeOut(0);
        var index = $(this).index();
        $('#tabchilds section').eq(index).fadeIn(200);
    });

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