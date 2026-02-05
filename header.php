<!DOCTYPE html>
<html lang="en">
<head>
    <base href="<?=URL?>">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="public/js/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="public/css/flipTimer.css">
    <script src="public/js/jquery.flipTimer.js"></script>
    <script src="public/js/jquery.elevatezoom.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
    <title>Fashion & Clothes Store</title>
</head>
<body>
<!--HEADER PART-->
<header>
    <div id="header">
        <div id="header_right">

            <span id="cart"><a href="/cart"></a></span>
            <span class="register">
              <a class="register1" href="<?=URL?>register"></a>
              <span id="vertical_row"></span>
              <a class="login" href="<?=URL?>login">Log in</a>
          </span>
            <div id="search">
                <input id="search_box" placeholder="Search ........">
                <img class="search_icon" src="public/images/icon_search.png">
            </div>
        </div>
        <div id="header_left">
            <img src="public/images/logo1.png" style=width:184px;height:115px;margin:-22px;margin-top:-25px;">
        </div>
    </div>
</header>
<style>
    @font-face {
        font-family: 'GothamLight';
        src:url('public/fonts/GothamLight.ttf')format('truetype');
    }
    @font-face {
        font-family: 'GothamMedium';
        src:url('public/fonts/GothamMedium.ttf')format('truetype');
    }
    #header{
        width:1334px;
        height:67px;
        background:#dcdcdc;
    }
    #header_right{
        width: 680px;
        height: 61px;
        float: right;
        padding-top: 5px;
    }
    #header_left{
        width:654px;
        height:66px;
        float:left;
    }
    #header_right #cart{
        width: 30px;
        height:30px;
        background: url(public/images/icons8-cart.png);
        display: block;
        margin: 10px;
        margin-right: 21px;
        float: right;
    }
    #header_right #cart a{
        width: 30px;
        height:30px;
        display: block;
        margin: 10px;
        margin-right: -3px;
        float: right;
        margin-top: 0px
    }
    #header_right .register{
        width: 114px;
        height: 33px;
        border: 1px solid dimgrey;
        display: block;
        float: right;
        margin: 9px;
        border-radius: 9px;
    }
    #header_right .register .register1{
        display: block;
        width: 24px;
        height: 24px;
        background: url(public/images/icons8-register.png)no-repeat;
        float: right;
        margin: 3px;
        margin-right: 9px;
    }
    #header_right .register .login{
        font-family: GothamMedium;
        text-decoration: none;
        display: block;
        margin: 13px;
        margin-top: 7px;
        font-size: 11pt;
        color: #343434;
    }
    #header_right .register #vertical_row {
        display: block;
        height: 18px;
        width: 1px;
        border-right: 1px solid dimgrey;
        float: right;
        margin-top: 7px;
        margin-right: 7px;
    }
    #header_right #search{
        width:410px;
        height:35px;
        float:right;
        margin-top: 10px;
    }
    #header_right #search #search_box{
        width: 396px;
        height: 32px;
        float: right;
        padding: 0;
        border-radius: 11px;
        background-color: #eee;
        border: 1px solid #ccc;
        font-family: GothamLight;
        font-size: 11pt;
        color: dimgrey;
        padding-left: 11px;
    }
    #header_right #search .search_icon{
        width: 24px;
        height: 24px;
        float: right;
        margin-top: -31px;
        margin-right: 8px;
    }
</style>