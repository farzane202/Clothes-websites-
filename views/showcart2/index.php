<!--NAVIGATION PART-->
<script src="<?=URL?>public/js/ostan.js"></script>

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
<main id="main" style="margin-top:10px;background-color: #eeeeee;padding: 61px;">
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
    <div class="header">
        <h4> Choose your address </h4>
        <span class="btn">Enter to signin</span>
    </div>
    <div class="content_showcart2">
        <?php
        $address=$data['address'];
        foreach ($address as $row){
        ?>

        <table class="table_address" data-city="<?=$row['city']?>" style="margin-bottom: 20px;">
            <tr>
                <td rowspan="3" style="width: 3px;padding: 0;">
                    <table class="table">
                        <tr>
                            <td style="cursor: pointer" onclick="editAddress(<?=$row['id']?>)"><i></i></td>
                        </tr>
                        <tr>
                            <td><i></i></td>
                        </tr>
                    </table>
                </td>
                <td colspan="3" style="width: 1000px;"> <?=$row['family']?> </td>
                <td rowspan="3" class="select_address">
                    <span class="circle"></span>
                </td>
            </tr>
            <tr>
                <td>
                    Number : <?=$row['mobile']?>
                </td>
                <td rowspan="2" style="width: 466px;">
                    Address : <?=$row['address']?>
                </td>
                <td> State : <?=$row['city']?> </td>
            </tr>
            <tr>
                <td> Number : 22555254 </td>
                <td>City : <?=$row['city']?></td>
            </tr>
        </table>

        <?php
         }
        ?>




        <div class="header">
            <h4>Method sending</h4>
            <span class="btn">Add new address</span>
        </div>
        <style>
            #addAddress{
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
            #addAddress h4{
                font-family: GothamMedium;
                margin: 0;
                background: #a3c5d9;
                height:35px;
                font-size: 13pt;
                color:#525e71;
                padding-left: 29px;
                line-height: 30px;
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
            #addAddress .close{
                width: 32px;
                height:32px;
                display: block;
                background: url(public/images/x-mark.png);
                position: relative;
                top: -29px;
                right: -826px;
            }
            .row {
                float: left;
                font-family: GothamMedium;
                padding: 12px 19px;
                width: 95%;
            }

            .row .left {
                float: left;
                width: 225px;
            }

            .row .left .title {
                font-size: 10.5pt;
                color: #545454;
            }

            .row .right {
                float: right;
                margin-right: 338px;
            }

            .row .right input {
                border: 1px solid #ccc;
                height: 28px;
                position: relative;
                top: 3px;
                width: 260px;
            }

            .row .right textarea {
                border: 1px solid #eee;
                height: 120px;
                position: relative;
                top: 3px;
                width: 260px;
            }

        </style>
        <form id="add_address" action="showcart2/addaddress" method="post">
        <div id="addAddress">
            <h4>
                Add new address
                <span class="close"></span>
            </h4>
         <div class="row">
             <div class="left">
                 <span class="title"> Your name : </span>
             </div>
             <div class="right">
                 <input name="family">
             </div>
         </div>
            <div class="row">
             <div class="left">
                 <span class="title">  number : </span>
             </div>
             <div class="right">
                 <input name="number">
             </div>
         </div>
            <div class="row">
             <div class="left">
                 <span class="title">  postcode : </span>
             </div>
             <div class="right">
                 <input name="postcode">
             </div>
         </div>
            <div class="row">
             <div class="left">
                 <span class="title">  choose city : </span>
             </div>
             <div class="right">
                 <select style="width: 185px;height:30px;text-align: right !important;" onchange="ostan(this)" name="city">
                     <option value="">
                         choose city
                     </option>
                     <option data-val="41" value="Paris ">Paris</option>
                     <option data-val="44" value="Lyon ">Lyon</option>
                     <option data-val="45" value="Montpellier ">Montpellier</option>
                     <option data-val="31" value="Bordeaux ">Bordeaux</option>
                     <option data-val="26" value="Nice ">Nice</option>
                     <option data-val="41" value="Marseille ">Marseille</option>
                     <option data-val="84" value="Lille ">Lille</option>
                     <option data-val="77" value="Strasbourg ">Strasbourg</option>
                     <option data-val="21" value="Dijon ">Dijon</option>
                     <option data-val="38" value="Nantes">Nantes</option>
                     <option data-val="56" value="Rouen">Rouen</option>
                     <option data-val="51" value="Nancy">Nancy</option>
                     <option data-val="58" value="Avignon">Avignon</option>

                 </select>
             </div>
         </div>
            <div class="row">
             <div class="left">
                 <span class="title"> Address : </span>
             </div>
             <div class="right">
                <textarea name="address"></textarea>
             </div>
         </div>
            <style>
                .btn_blue {
                    width: 165px;
                    height: 40px;
                    background: #bc8eff;
                    display: inline-block;
                    font-family: GothamMedium;
                    color: white;
                    line-height: 35px;
                    text-align: center;
                    border-radius: 5px;
                    font-size: 11pt;
                    cursor: pointer;
                    position: relative;
                    right: -689px;
                    top: 80px;
                }
            </style>
                <span class="btn_blue" onclick="submitForm()"> save & return </span>
            <script>

            </script>
        </div>
        </form>
        <div id="dark"></div>


        <?php
        $postType=$data['postType'];
        foreach ($postType as $row){
        ?>
        <table class="table_post" data-post-type="<?=$row['id']?>">
            <tr>
                <td> <?=$row['title']?> </td>
                <td style="width: 900px;">
                    <p style="margin: 0;font-size: 10.5pt;margin-bottom: 10px;">Vanguard Post Postage according to the postal tariff</p>
                    <p style="margin: 0;font-size: 10.5pt;"><?=$row['description']?> </p>
                </td>
                <td class="select_post">
                    <span class="circle"></span>
                </td>
            </tr>
        </table>
        <?php
         }
        ?>
        <span class="btn" style="top:32px">save</span>
    </div>
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
    .header{
        float: left;
        width: 100%;
        margin-top: 87px;
    }
    .header h4{
        font-family: GothamMedium;
        color:#525e71;
        font-size: 12.5pt;
    }
    .btn {
        width: 165px;
        height: 40px;
        background: #65c86b;
        display: block;
        font-family: GothamMedium;
        position: relative;
        top: -51px;
        right: -1059px;
        color: white;
        line-height: 35px;
        text-align: center;
        border-radius: 5px;
        font-size: 11pt;
        cursor: pointer;
    }
    .content_showcart2{
        float: left;
        width: 100%;
        margin-top: 20px;
    }
    .content_showcart2 table{
        width: 100%;
        font-family: GothamMedium;
        color:#525e71;

    }
    .content_showcart2 table td{
        padding: 32px;
        border: 1px solid #ccc;
    }
    table.active tr:first-child td:last-child{
        background: #7eff4b;
    }
    table.active td .circle{
        width: 30px;
        height:30px;
        display: block;
        background: #3aaaff;
        border-radius: 50%;
        position: relative;
    }
    table td .circle{
        width: 30px;
        height:30px;
        display: block;
        border:1px solid #ccc;
        border-radius: 50%;
    }
    table.active td .circle::after{
        content: "";
        width: 8px;
        height:8px;
        display: block;
        background: white;
        position: absolute;
        border-radius: 50%;
        top: 10px;
        left: 11px;
    }
    .table{
        height: 254px;
    }
    .table tr:first-child td{
        background: #86e7ea !important;
    }
    .table tr:nth-child(2) td{
        background: #ea9ea3 !important;
    }
    .table tr:first-child td i{
        width: 16px;
        height:16px;
        display: block;
        background: url(public/images/edit.png);
    }
    .table tr:nth-child(2) td i{
        width: 16px;
        height:16px;
        display: block;
        background: url(public/images/cross.png);
    }

</style>

<!--Footer PART-->


<script>

    function getPostPrice(){
        var url = 'showcart2/getpostprice';
        var cityId = $('.table_address.active').attr('data-city');
        var postId = $('.table_post.active').attr('data-post-type');
        var data={'cityId':cityId,'postId':postId};
        $.post(url,data,function (msg) {

        })
    }

    $('.select_post').click(function () {
        $('.table_post').removeClass('active');
        $(this).parents('.table_post').addClass('active');
        getPostPrice();
    })

    $('.select_address').click(function () {
        $('.table_address').removeClass('active');
        $(this).parents('.table_address').addClass('active');
        getPostPrice();
    })

     var editAddressId='';
    function editAddress(addressId){
        editAddressId=addressId;
        var url='showcart2/editaddress/'+addressId;
        var data={}
        $.post(url,data,function (msg) {

          $('input[name=family]').val(msg['family']);
          $('input[name=number]').val(msg['mobile']);
          $('input[name=postcode]').val(msg['postcode']);
          $('textarea[name=address]').val(msg['address']);

            addaddress.fadeIn(100);
            $('#dark').fadeIn(100);

        },'json')
    }

    var addaddress=$('#addAddress');

    function submitForm(){
        var url='showcart2/addaddress/'+editAddressId;
        var data = $('#add_address').serializeArray();
        $.post(url,data,function (msg) {
           window.location='showcart2';
        })
        addaddress.fadeOut(200);
        $('#dark').fadeOut(200);
    }

    $('.btn').click(function (){
        addaddress.fadeIn(100);
        $('#dark').fadeIn(100);
        $('#add_address').trigger('reset');
        editAddressId='';
    })



    addaddress.find('.close').click(function (){
        addaddress.fadeOut(200);
        $('#dark').fadeOut(200);
    })



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
