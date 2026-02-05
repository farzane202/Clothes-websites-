<div id="introduction">
    <p style="color:#545454;font-size: 12pt;"> Product introduction </p>
    <p>
       <?=$productInfo['introduction']?>
    </p>
    <a class="more"> Show more </a>
</div>

<style>
    #introduction {
        float: left;
        width: 90%;
        margin-top: 90px;
        margin-left: 76px;
        height: 150px;
        overflow: hidden;
        position: relative;
    }
    #introduction p{
        font-family: GothamMedium;
        color:dimgrey;
        font-size: 10.5pt;
        line-height: 30px;
    }
    #introduction .more{
        width: 100%;
        height:40px;
        font-family: GothamMedium;
        display: block;
        text-align: center;
        position: absolute;
        top: 116px;
        line-height: 33px;
        color:#22349c;
        background:linear-gradient(top,rgba(255,255,255,.5),rgba(255,255,255,1.2));
        background:-moz-linear-gradient(top,rgba(255,255,255,.5),rgba(255,255,255,1.2));
    }
    #introduction.active{
        height:auto !important;
    }
    #introduction .more.active{
        top:230px !important;
    }
</style>

<script>

    $('#introduction .more').click(function (){
        $('#introduction').toggleClass('active');
        $(this).toggleClass('active');
    })
</script>
