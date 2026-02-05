<!--SIDEBAR PART-->
<div id="side_bar">
    <ul id="fashion_tv">
        <li>
            <a><img src="public/images/fashion_tv1.jpg">
                <span class="circle"><img src="public/images/play.png"></span>
            </a>
        </li>

        <li>
            <a><img src="public/images/fashion_tv2.jpg">
                <span class="circle"><img src="public/images/play.png"></span>
            </a>
        </li>
    </ul>
    <div id="Latest_fashion_news">
        <h3> Latest_fashion_news </h3>
        <ul>
            <li>
                <div class="col_right">
                    <img src="public/images/fashion_news.jpg">
                </div>
                <div class="col_left">
                    <a href="https://www.vogue.com/fashion/trends">
                        Fashion trends
                    </a>
                    <p>For the Most Directional Fall 2023 Menswear,Don't Miss the Woman's Shows </p>
                </div>
            </li>
            <li>
                <div class="col_right">
                    <img src="public/images/fashion_news2.jpg">
                </div>
                <div class="col_left">
                    <a href="https://www.vogue.com/fashion/designers">
                        Fashion Designers
                    </a>
                    <p>Gucci Handbags 101:A Guide to Shopping Their Iconic Bags,From the jackie to the Bamboo 1947</p>
                </div>
            </li>
            <li>
                <div class="col_right">
                    <img src="public/images/fashion_news3.jpg">
                </div>
                <div class="col_left">
                    <a href="https://www.vogue.com/fashion/celebrity-style">
                        Celebrity Style
                    </a>
                    <p>Beyonce's Unprecedented Renaissance Tour Wardrobe Includes 41 pairs of Custom Jimmy Choos</p>
                </div>
            </li>
        </ul>
    </div>
    <div id="brands_sidebar">
        <a><img src="public/images/calvin%20klein.png"></a>
        <a style=" margin-right: 5px;"><img src="public/images/chanel.png"></a>
        <a><img src="public/images/adidas.png"></a>
        <a style=" margin-right: 5px;"><img src="public/images/Gucci.png"></a>
        <a><img src="public/images/converse.png"></a>
        <a style=" margin-right: 5px;"> <img src="public/images/ecco.png"></a>
    </div>
</div>
<style>
    #main{
        height: 2303px;
    }
    #side_bar{
        width: 264px;
        float: right;
        margin-top: 416px;
    }
    #fashion_tv{
        padding: 0;
        margin: 0;
        float:right;
        list-style-type: none;
        margin-right:2px;
    }
    #fashion_tv li{
        margin-top:15px;
        box-shadow: 2px 3px 3px #cccccc;
    }
    #fashion_tv li a{
        display:block;
        width:250px;
        height:250px;
        position: relative;
    }
    #fashion_tv li a::after{
        content: "";
        display: block;
        background-color: rgba(0,0,0,.3);
        width:100%;
        height:250px;
        position: absolute;
        top:0;
    }
    #fashion_tv li a span{
        width:70px;
        height:70px;
        display: block;
        background: rgba(255,255,255,0.5);
        border-radius: 100%;
        z-index: 2;
        position: absolute;
        top: 88px;
        left: 97px;
    }
    #fashion_tv li a span img{
        position: absolute;
        top: 19px;
        left: 19px;
    }
    #fashion_tv li:hover span {
        background: rgba(255,255,255,0.8);
        transition: all 1s ease;
    }
    #Latest_fashion_news{
        float: right;
        margin-top: 10px;
        box-shadow: 1px 3px 7px #ccc;
        width: 254px;
        padding: 2px;
        background: #fff;
    }
    #Latest_fashion_news h3{
        font-family: GothamMedium;
        background: #b3c1db;
        color: #212121;
        margin: 0;
        width: 235px;
        padding: 10px;
        font-size: 11pt;
        float:right;
    }
    #Latest_fashion_news ul{
        list-style-type: none;
        margin: 0;
        padding: 0;
        margin-top: 50px;

    }
    #Latest_fashion_news ul li{
        margin-top: 8px;
        float:right;

    }
    #Latest_fashion_news ul li .col_right{
        float: right;
        width: 60px;
        height:65px;

    }
    #Latest_fashion_news ul li .col_right img{
        width: 60px;
        height:68px;
        border-radius: 50%;

    }
    #Latest_fashion_news ul li .col_left{
        float: left;
        width:189px;

    }
    #Latest_fashion_news ul li .col_left a{
        color: #343434;
        font-family: GothamLight;
        font-size: 10pt;

    }
    #Latest_fashion_news ul li .col_left p{
        font-family: GothamLight;
        font-size: 9pt;
        line-height: 16px;

    }
    #brands_sidebar{
        margin-top:25px;
        float: right;
    }
    #brands_sidebar a{
        display: block;
        width: 125px;
        height:115px;
        float: right;
    }
    #brands_sidebar a img{
        border-radius: 10px;
    }
</style>
