<main id="main" style="margin-top:10px;background-color: #eeeeee;padding: 15px;" xmlns="http://www.w3.org/1999/html">
    <?php
    require ('views/admin/menu_left.php');
    $productInfo=$data['productInfo'];
    $reviewInfo=$data['reviewInfo'];
    ?>

    <div class="right">
        <p class="title">
            <?php  $edit=0;
             if(isset($reviewInfo['title'])){
                $edit=1;
            } ?>
            <?php
             if($edit==0){
             ?>
             Add review(<?=$productInfo['title']?>)
            <?php
             }else{
             ?>
                 Edit review(<?=$productInfo['title']?>)
            <?php } ?>

        </p>

        <form action="adminproduct/addreview/<?=@$productInfo['id']?>/<?=$reviewInfo['id']?>" method="post">

            <div class="row" style="margin-top: 31px">
                <span> review title : </span>
                <input type="text" name="title" value="<?=$reviewInfo['title']?>">
            </div>


            <script src="public/ckeditor/ckeditor.js"></script>
            <div class="row" style="margin-top:15px;">
                <span style="position: relative;bottom: 8px;"> description : </span>
                <textarea class="editor1" id="editor1" name="description"><?=$reviewInfo['description']?></textarea>
            </div>
            <script>
                CKEDITOR.replace('editor1',{

                });
            </script>
            <style>
                .editor1{
                    margin-top:15px;
                }
            </style>


            <button class="submit" type="submit"> Submit </button>
        </form>
    </div>
</main>
<style>

    #main:after{
        content: "";
        clear:both;
        display: block;
    }
    .right {
        width: 1050px;
        float: right;
    }

    .right .title {
        color: #3c3c3c;
        font-family: GothamMedium;

    }
    .row {
        width: 100%;
        float: left;
        margin-top: 10px;
    }

    .row textarea{
        width: 240px;
        height: 200px;
        float: right;
        position: relative;
        right: 649px;
        vertical-align: top;

    }
    .row span{
        font-family: GothamMedium;
        color: #545454;
        font-size: 11pt;
    }
    .row input{
        height: 23px;
        float: right;
        position: relative;
        right: 649px;
        width: 240px;
    }
    .submit{
        width: 100px;
        height: 31px;
        position: relative;
        left: 461px;
        margin-top: 20px;
    }
    .row select{
        width: 247px;
        height: 28px;
        text-align: center;
        margin-left: 17px;
        float: right;
        position: relative;
        right: 649px;
    }
    .row select option{
        text-align: center;
    }
    .span_item{
        display: inline-block;
        font-size: 10pt !important;
        height:27px;
        text-align: center;
        position: relative;
        padding: 2px 14px;
        float: right;
        margin-left: 4px;
        margin-bottom: 5px;
    }

    .span_item img{
        position: relative;
        cursor:pointer;
    }
</style>
<script>
    function addColor(tag,colorId,colorCode){
        var optionTag=$(tag);
        var colorName = optionTag.attr('data-title');
        var spanTag='<span style="background-color:'+colorCode+'" class="span_item"><input type="hidden" name="color[]" value="'+colorId+'"><img onclick="removeItem(this)" src="public/images/remove.png">'+colorName+'</span>';
        var divRow= optionTag.parents('.row');
        divRow.append(spanTag);
    }
    function addSise(tag,sizeId){
        var optionTag=$(tag);
        var sizeName = optionTag.attr('data-title');
        var spanTag='<span style="background-color: white" class="span_item"><input type="hidden" name="size[]" value="'+sizeId+'"><img onclick="removeItem(this)" src="public/images/remove.png">'+sizeName+'</span>';
        var divRow= optionTag.parents('.row');
        divRow.append(spanTag);
    }
    function removeItem(tag){
        var removeTag = $(tag);
        var spanItem= removeTag.parents('.span_item');
        spanItem.remove();
    }
</script>


