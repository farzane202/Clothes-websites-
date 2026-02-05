<div id="sidebar">
    <h3> Woman's clothes <span class="arrow"></span> </h3>
    <ul style="margin-top: 17px;">
        <li> clothes <span></span>
            <ul style="margin-top: 24px;">
                <li style="color:#545454;">
                    Dress <span></span>
                    <ul>
                        <li style="color:#545454;"> T-shirt <span></span>
                        </li>
                    </ul>
                </li>
            </ul>

        </li>
    </ul>
    <div class="horizental_row"></div>
    <ul class="filter_ul">
        <li>Based on size</li>
        <li class="check_li" style="margin-top: 10px;">
            <input class="check_input" type="checkbox">
            <label class="check_label"></label>
            L
        </li>
        <li>
            <input class="check_input" type="checkbox">
            <label class="check_label"></label>
            XL</li>
        <li>
            <input class="check_input" type="checkbox">
            <label class="check_label"></label>
            XXL</li>
        <li>
            <input class="check_input" type="checkbox">
            <label class="check_label"></label>
            XXXL</li>
    </ul>
    <div class="horizental_row"></div>
    <ul class="filter_ul">
        <li>Colors</li>
        <li class="check_li" style="margin-top: 10px;">
            <input class="check_input" type="checkbox">
            <label class="check_label"></label>
            Red
            <p class="product_color"></p>
        </li>
        <li>
            <input class="check_input" type="checkbox">
            <label class="check_label"></label>
            Green
            <p class="product_color" style="background: green;"></p>
        </li>
        <li>
            <input class="check_input" type="checkbox">
            <label class="check_label"></label>
            Blue
            <p class="product_color" style="background: blue;"></p>
        </li>
        <li>
            <input class="check_input" type="checkbox">
            <label class="check_label"></label>
            Brown
            <p class="product_color" style="background: brown;"></p>
        </li>
        <li>
            <input class="check_input" type="checkbox">
            <label class="check_label"></label>
            Yellow
            <p class="product_color" style="background: yellow;"></p>
        </li><li>
            <input class="check_input" type="checkbox">
            <label class="check_label"></label>
            Pink
            <p class="product_color" style="background: hotpink;"></p>
        </li>
    </ul>
</div>

<style>
    #sidebar{
        width:250px;
        border:1px solid gray;
        float:right;
    }
    #sidebar h3{
        font-family: GothamMedium;
        font-size: 10.5pt;
        background: #343434;
        color:#fff;
        margin:0;
        height: 35px;
        line-height: 29px;
        padding-left: 63px;
        position: relative;
    }
    #sidebar h3 .arrow{
        background: url(public/images/arrowdownsign.png)no-repeat;
        display: block;
        width: 24px;
        height:24px;
        position: absolute;
        top: 10px;
        left: 30px;
    }
    #sidebar ul{
        list-style-type: none;
        font-family: GothamMedium;
        font-size: 10pt;
        margin-top: 8px;
    }
    #sidebar ul li{
        position: relative;
    }
    #sidebar ul li span{
        display: block;
        background: url(public/images/next.png);
        width: 16px;
        height: 16px;
        position: absolute;
        left: -24px;
        top: 1px;
    }
    .horizental_row{
        height: 1px;
        background: #ccc;
        margin: 15px;
        width: 85%;
        float: right;
    }
    #sidebar .filter_ul{
        margin-top: 30px!important;
    }
    #sidebar .filter_ul li{
        height:30px!important;
        position: relative;
    }
    #sidebar .filter_ul li .check_input{
        width: 16px;
        height: 16px;
        display: inline-block;
        position: relative;
        z-index: 2;
        opacity: 0;
        cursor: pointer;
    }

    #sidebar .filter_ul li .check_label{
        display: block;
        width: 16px;
        height: 16px;
        background: url(public/images/difcheckbox.jpeg)-670px -257px;
        position: absolute;
        top: 3px;
        left: 4px;
    }
    .checked {
        background: url(public/images/difcheckbox.jpeg) -670px -287px !important;
    }
</style>
