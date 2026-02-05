
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
<main id="main" style="margin-top:10px;background-color: #eeeeee;padding: 30px;">
    <div class="head">
        <h4> Your shopping cart </h4>
        <a class="btn" href="showcart1">Complete the purchase</a>
    </div>
    <div class="content_showcart">

        <table id="tableBasket">
            <thead>
            <tr>
                <td>Product description</td>
                <td>Number</td>
                <td>Unit price</td>
                <td colspan="2">Total price</td>
                <td style="border: none;"></td>
            </tr>
            </thead>
            <tbody>
            <?php
            $basket=$data['basket'];
            foreach ($basket as $row){
            ?>
            <tr>
                <td>
                    <p style="text-align: left;padding-left: 130px;"> <?=$row['title']?> </p>
                    <img src="public/images/products/<?=$row['id']?>/product_220.png" style="float: left;">
                    <p style="margin-top:8px;">good quality</p>
                    <p> in three colors </p>
                    <p> for men & women </p>
                    <p> Color: <?=$row['colorTitle']?></p>
                    <p> Size: <?=$row['sizeTitle']?></p>
                </td>
                <td>
                    <div class="selectlist">
                    <span class="yekan zamanattitle">
<?= $row['number'] ?>
                    </span>
                        <ul>
                            <?php for ($i = 1; $i < 6; $i++) { ?>
                                <li onclick="updateBasket(<?= $i ?>,<?= $row['basketRow'] ?>)"><?= $i ?></li>
                            <?php } ?>
                        </ul>
                    </div>
                </td>

                <td><span> <?=$row['price']?> $ </span></td>
                <td><span> <?=$row['price']*$row['number']?> $</span></td>
               <td style="width: 2px;background: #fa5e58;padding: 5px;cursor: pointer" onclick="removeBasket(<?=$row['basketRow']?>)"><img src="public/images/clear.png"></td>
           </tr>
                <?php
            }
            ?>
            </tbody>

        </table>

    </div>
    <div id="final_price">
        <?php
         $priceTotalall=$data['priceTotalall'];
        ?>
        <div class="total_price">
            <span> your total price : </span>
            <span class="total_price2" style="float: right;color:green"> <?=$priceTotalall?> </span>
        </div>
        <div class="price">
            <span> price you pay : </span>
            <span class="total_price2" style="float: right;color:green"> <?=$priceTotalall?></span>
        </div>
    </div>
    <div style="float: left;width: 57%;">
        
        <p style="font-family: GothamMedium;font-size: 9.5pt;color:#616161;"> Depending on the place of delivery of the order the shipping cost may be added  </p>
    </div>
</main>

<style>
    #main .head {
        float: left;
        width: 100%;
        position: relative;
    }

    #main .head h4 {
        font-family: GothamMedium;
        color: #323434;
        font-size: 11pt;
        width: 12%;
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
        cursor: pointer;
        font-family:GothamMedium;
        font-size: 9.5pt;
        text-decoration: none;
    }

    #main .content_showcart {
        float: left;
        width: 100%;
    }

    #main .content_showcart table {
        width: 100%;
        font-family: GothamMedium;
        font-size: 10.5pt;
        color: #545454;
        margin-top: 25px;
    }

    #main .content_showcart table td {
        text-align: center;
        border-right: 1px solid #ccc;
        border-bottom: 1px solid #ccc;
        padding: 11px;
    }

    #main .content_showcart table tr:first-child td {
        border-top: 1px solid #ccc;
    }

    #main .content_showcart table tr:nth-child(2) {
        background: white;
    }

    #main .content_showcart table td p {
        margin: 0;
        line-height: 20px;
    }

    #main #final_price {
        float: left;
        width: 600px;
        margin-top: 15px;
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
    .selectlist {
        width: 100px;
        height: 37px;
        border: 1px solid #8f8f73;
        background: #eee;
        position: relative;
        text-align: center;
        cursor: pointer;
        margin: auto;
        font-family: GothamMedium;
    }



    .selectlist span {
        font-size: 9.7pt;
        line-height: 36px;
    }

    .selectlist ul {
        padding: 0;
        box-shadow: 0 2px 2px #cacaca;
        display: none;
        background: #fff;
        position: relative;
        z-index: 2;
        list-style-type: none;
        margin-bottom: 0;
        margin-top: 2px;
    }

    .selectlist ul li {
        font-size: 10pt;
        padding: 2px 5px;
        height: 24px;

    }

    .selectlist ul li:hover {
        background: #f9f9ff;

    }
</style>
<!--Footer PART-->


<script>




    function updateBasket(number,basketRow){
        var url='showcart/updatebasket/';
        var data={'basketRow':basketRow,'number':number};
        $.post(url,data,function (msg) {
            var basket=msg[0];
            var priceTotalall=msg[1];
            createBasketList(basket,priceTotalall);
        },'json')
    }

    function removeBasket(productId){
        var url='showcart/deletebasket/'+productId ;
        var data = {};
        $.post(url,data,function (msg) {
            var basket=msg[0];
            var priceTotalall=msg[1];
           createBasketList(basket,priceTotalall);
        },'json')
    }


    function createBasketList(basket,priceTotalall){
        $('#tableBasket tbody tr').remove();
        $.each(basket,function (index,value){
            var id=value['id'];
            var title=value['title'];
            var price=value['price'];
            var number=value['number'];
            var basketRow=value['basketRow'];
            var color=value['colorTitle'];
            var size=value['sizeTitle'];


            var trTag='<tr><td><p style="text-align: left;padding-left: 130px;">'+title+'</p><img src="public/images/products/'+id+'/product_220.png" style="float: left;"><p style="margin-top:8px;">good quality</p><p> in three colors </p><p> for men & women </p><p> Color :'+color+'</p><p> Size : '+size+'</p></td><td><div class="selectlist"><span class="zamanattitle">'+number+'</span><ul><?php for ($i = 1; $i < 6; $i++) { ?><li onclick="updateBasket(<?= $i ?>,'+basketRow+')"><?=$i?></li><?php } ?></ul></div></td> <td><span> '+price+' $ </span></td><td><span> '+price*number+'$</span></td><td style="width: 2px;background: #fa5e58;padding: 5px;cursor: pointer" onclick="removeBasket('+basketRow+' )"><img src="public/images/clear.png"></td></tr>' ;
            $('#tableBasket tbody').append(trTag);
        })
        $('.total_price2').text(priceTotalall);
        $('.selectlist').click(function () {
            var ulTag = $('ul', this);
            ulTag.slideToggle(200);
        });
    }


    $('.check_input').click(function () {
        if ($(this).is(':checked')) {
            $(this).parents('.check_div').find('.check_label').addClass('checked');
        } else {
            $(this).parents('.check_div').find('.check_label').removeClass('checked');
        }
    })

    $('.selectlist').click(function () {
        var ulTag = $('ul', this);
        ulTag.slideToggle(200);
    });

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
