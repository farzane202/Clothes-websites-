<div id="search1">
    <input class="search_input" placeholder="search .....">
    <img src="public/images/icons8-search.gif">
    <span class="exist">
                 <span class="exist_back"></span>
                 <span class="exist_yesno"></span>
             </span>
    <span class="available_products"> Only display available products </span>
    <span class="display_type">
                 <span> Display type </span>
                 <span class="type2"></span>
                 <span class="type1"></span>
             </span>
</div>
<div id="sort">
    <span> Sort by </span>
    <select style="margin-left:10px;">
        <option>Price</option>
        <option>Newest</option>
        <option>Bestselling</option>
        <option>speacial offer</option>
    </select>
    <select style="margin-left:10px;">
        <option>Up to down</option>
        <option>Down to top</option>
    </select>
    <span style="padding-left: 10px;"> Number of product display </span>
    <select style="margin-left:10px;">
        <option>4</option>
        <option>8</option>
        <option>12</option>
    </select>
</div>
<div id="pagination">
    <span class="next"> Next </span>
    <ul>
        <li>2</li>
        <li>1</li>
    </ul>
    <span class="prev"> Before </span>
</div>

<style>
    #search1{
        float: left;
        position: relative;
    }
    #search1 .search_input{
        width: 270px;
        border: 1px solid #cccccc;
        margin-left: 31px;
        height: 7px;
        border-radius: 5px;
        padding: 10px;
    }
    #search1 img{
        position: relative;
        right: 28px;
        top: 3px;
    }
    #search1 .available_products{
        font-family: GothamMedium;
        font-size: 9.5pt;
        color:#616161;
    }
    #search1 .exist{
        position: absolute;
        top: 4px;
        left: 561px;
    }
    #search1 .exist .exist_back{
        width: 40px;
        height:21px;
        display: block;
        background: url(public/images/search3.jpeg)no-repeat -374px -282px;
        position: relative;
        border-radius: 7px;
    }
    #search1 .exist .exist_yesno{
        width: 29px;
        height:20px;
        display: block;
        background: url(public/images/yesno.jpeg)no-repeat -278px -175px;
        position: absolute;
        top: 1px;
        border-radius: 5px;
        left: -1px;
    }
    #search1 .exist.active .exist_back{
        background: url(public/images/search3.jpeg)no-repeat -414px -282px;
    }
    #search1 .exist.active .exist_yesno{
        background: url(public/images/yesno.jpeg)no-repeat -278px -154px;
    }
    #search1 .display_type .type2{
        display: block;
        width: 24px;
        height: 24px;
        background: url(public/images/displaytype.png)no-repeat -367px -198px;
        position: absolute;
        top: 1px;
        left: 90px;
    }
    #search1 .display_type .type1{
        display: block;
        width: 24px;
        height: 24px;
        background: url(public/images/displaytype.png)no-repeat -390px -222px;
        position: absolute;
        top: 1px;
        left: 114px;
    }
    #search1 .display_type{
        display: block;
        position: absolute;
        left: 654px;
        top: 0;
        font-family: GothamMedium;
        font-size: 9.5pt;
        color: #616161;
        width: 31%;
        height: 28px;
        padding-top: 6px;
    }
     #sort{
        float: left;
        margin-top: 24px;
        width: 77%;
        font-family: GothamMedium;
        font-size: 9.5pt;
        color: #616161;
        padding-left: 33px;
    }
     #pagination{
        float: left;
        margin-top: 24px;
        width: 77%;
        font-family: GothamMedium;
        font-size: 9.5pt;
        color: #616161;
        padding-left: 33px;
    }
     #pagination .next{
        font-family: GothamMedium;
        font-size: 9pt;
        float: left;
        width: 60px;
        height: 20px;
        display: block;
        border: 1px solid #eee;
        box-shadow: 0 2px 4px rgba(0,0,0,.2);
        text-align: center;
        background: linear-gradient(bottom , #fff , #efefef);
        background: -moz-linear-gradient(bottom , #fff , #efefef);
        color: #616161;
        line-height: 17px;
    }
     #pagination .prev{
        font-family: GothamMedium;
        font-size: 9pt;
        float: left;
        width: 60px;
        height: 20px;
        display: block;
        border: 1px solid #eee;
        box-shadow: 0 2px 4px rgba(0,0,0,.2);
        text-align: center;
        background: linear-gradient(bottom , #fff , #efefef);
        background: -moz-linear-gradient(bottom , #fff , #efefef);
        color: #616161;
        line-height: 17px;
    }
     #pagination ul{
        margin: 0;
        padding: 0;
        float: left;
        list-style-type: none;
    }
     #pagination ul li{
        float: left;
        font-size: 9pt;
        width: 25px;
        height: 20px;
        border: 1px solid #eee;
        border-radius: 3px;
        margin-right: 2px;
        margin-left: 2px;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0,0,0,.2);
        background: linear-gradient(bottom , #fff , #efefef);
        background: -moz-linear-gradient(bottom , #fff , #efefef);
        line-height: 17px;
    }
    .type1.active{
        background-position: -390px -198px!important;
    }
    .type2.active{
        background-position:  -367px -222px!important;
    }
</style>
<script>

    $('.type1').click(function (){
        $('#products').addClass('display1');
        $(this).addClass('active');
        $('.type2').removeClass('active');
    } );

    $('.type2').click(function (){
        $('#products').removeClass('display1');
        $(this).addClass('active');
        $('.type1').removeClass('active');
    })



    $('.exist').click(function (){
        $(this).toggleClass('active');
        if($(this).hasClass('active')){
            $('.exist_yesno',this).animate({'left':'12px'},400)
        }else{
            $('.exist_yesno',this).animate({'left':'0'},400)
        }
    })
</script>
