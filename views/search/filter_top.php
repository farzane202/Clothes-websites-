<div id="filter_selected">

             <span class="filter_selected_span">number : one
              <i class="remove_filter" onclick="removeselected(this)"></i></span>
</div>
<ul class="filter_top">
    <li style="margin-left: 0">
        <span class="title"> Number </span>
        <img src="public/images/icons8-arrow-right-24.png">
        <div class="options">
            <ul>
                <li style="margin-top: 10px;" data-id="1">show all
                    <span class="square"></span>
                </li>
                <div class="horizental_row" style="width: 112px;float: left;z-index: 3;position: relative;margin: 0;margin-bottom: 15px;margin-left: 15px;"></div>

                <li  data-id="2">one<span class="square"></span></li>
                <li  data-id="3">two<span class="square"></span></li>
                <li  data-id="4">three<span class="square"></span></li>
                <li  data-id="5">four<span class="square"></span></li>
            </ul>
        </div>
    </li>    <li>
        <span class="title"> Colors </span>
        <img src="public/images/icons8-arrow-right-24.png">
        <div class="options">
            <ul>
                <li style="margin-top: 10px;" data-id="1">show all
                    <span class="square"></span>
                </li>
                <div class="horizental_row" style="width: 112px;float: left;z-index: 3;position: relative;margin: 0;margin-bottom: 15px;margin-left: 15px;"></div>

                <li  data-id="2">Red<span class="square"></span></li>
                <li  data-id="3">Blue<span class="square"></span></li>
                <li  data-id="4">Yellow<span class="square"></span></li>
                <li  data-id="5">Black<span class="square"></span></li>
            </ul>
        </div>
    </li>    <li>
        <span class="title"> Size </span>
        <img src="public/images/icons8-arrow-right-24.png">
        <div class="options">
            <ul>
                <li style="margin-top: 10px;" data-id="1">show all
                    <span class="square"></span>
                </li>
                <div class="horizental_row" style="width: 112px;float: left;z-index: 3;position: relative;margin: 0;margin-bottom: 15px;margin-left: 15px;"></div>

                <li  data-id="2">L<span class="square"></span></li>
                <li  data-id="3">XL<span class="square"></span></li>
                <li  data-id="4">XXL<span class="square"></span></li>
            </ul>
        </div>
    </li>
</ul>

<style>

     .filter_top{
        height:30px;
        list-style-type: none;
        padding: 0;
        margin: 0;
        width: 1042px;
        font-family: GothamMedium;
        font-size: 10.4pt;
        margin-left: 33px;
        margin-top: 16px;
    }
     .filter_top li{
        width: 140px;
        height:30px;
        background: #ccc;
        border-radius: 5px;
        position: relative;
        float: left;
        margin-left:20px;
    }
     .filter_top span{
        font-size: 9.8pt;
        display: block;
        padding-top: 6px;
        padding-left: 17px;
    }
     .filter_top li img{
        position: relative;
        top: -17px;
        right: -108px;
    }
     .filter_top li .options{
        width:140px;
        height:200px;
        background: #f5f5f5;
        box-shadow: 3px 4px 3px #C9C9C9;
        position: absolute;
        top: 28px;
        display: none;
        z-index: 3;
    }
     .filter_top li .options ul{
        list-style-type: none;
        padding: 0;
        height:200px;
        overflow-y: auto;
    }
     .filter_top li .options ul li{
        float: left;
        background: #f5f5f5;
        font-size: 9pt;
        color: #565656;
        margin-left: 30px;
        width: 110px;
        height: 25px;
        position: relative;
    }
     .filter_top li .options ul li .square{
        display: block;
        width: 10px;
        height: 9px;
        background: url(public/images/aads.jpeg)no-repeat -240px -171px;
        padding: 0;
        position: absolute;
        left: -20px;
        top: 3px;
    }
    .square_hover{
        background: url(public/images/aads.jpeg)no-repeat -240px -222px!important;
    }
    .square_click{
        background: url(public/images/aads.jpeg)no-repeat -240px -273px!important;
    }
     #filter_selected{
        width: 1042px;
        margin-left: 33px;
        height: 35px;

    }
     #filter_selected .filter_selected_span{
        background: #d1d1d1;
        padding: 5px;
        position: relative;
        top:9px;
        padding-left: 29px;
        margin-left: 10px;
    }
     #filter_selected .remove_filter{
        display: block;
        width: 9px;
        height: 9px;
        background: url(public/images/aads.jpeg)no-repeat -238px -380px;
        position: absolute;
        top:9px;
        left: 8px;
        z-index: 2;
    }
</style>

<script>
    $('.filter_top > li').hover(function (){
        $('.options',this).slideDown(200);
    },function (){
        $('.options',this).slideUp(200);
    })
    /*fiter part*/
    var Items= $('.options li');
    Items.click(function (){
        var title =  $(this).parents('li').find('.title').text();
        var value = $(this).text();
        var id=$(this).attr('data-id');
        var filter_selected= $('#filter_selected');
        var filter_selected_span= filter_selected.find('span[data-id='+id+']');
        var len = filter_selected_span.length;
        if(len>0){
            filter_selected_span.remove();
        }else {
            var span = '<span data-id="'+id+'" class="filter_selected_span">'+title+':'+value+' <i class="remove_filter" onclick="removeselected(this)"></i></span>';
            filter_selected.append(span);
        }
        $(this).find('.square').toggleClass('square_click');
    });

    function removeselected(tag){
        var span_tag = $(tag).parents('span');
        span_tag.remove();
        var id = span_tag.attr('data-id');
        $('.options li[data-id='+id+']').find('.square').removeClass('square_click');
    }
</script>
