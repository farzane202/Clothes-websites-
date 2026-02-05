<main id="main" style="margin-top:10px;background-color: #eeeeee;padding: 15px;" xmlns="http://www.w3.org/1999/html">
    <?php
    require ('views/admin/menu_left.php');
    $productInfo=$data['productInfo'];
    $productId=$data['productId'];
    ?>

    <div class="right">
        <p class="title">
            <?php
            if($productId=='') {
                echo 'Add new product';
                }else {
                echo 'Edit product';
            }
             ?>

        </p>

        <form action="adminproduct/addproduct/<?=@$productInfo['id']?>" enctype="multipart/form-data" method="post">

            <div class="row" style="margin-top: 31px">
                <span> Product title : </span>
                <input type="text" name="title" value="<?=@$productInfo['title']?>">
            </div>
            <div class="row">
                <span> parent : </span>
                <select name="categoryId" autocomplete="off">
                    <option>select</option>
                    <?php
                    $category=$data['category'];
                    $parentId=$data['parentId'];
                    $categoryId=@$productInfo['idcategory'];
                    if($edit==''){
                        $selectedId=$parentId;
                    }else{
                        $selectedId=$categoryInfo['parent'];
                    }
                    foreach ($category as $row){
                        if($row['id']==$categoryId){
                            $selected='selected';
                        }else{
                            $selected='';
                        }
                        ?>
                        <option value="<?=$row['id']?>" <?=$selected?>> <?=$row['title']?> </option>
                        <?php
                    }
                    ?>
                </select>
            </div>
            <div class="row">
                <span> Price : </span>
                <input type="text" name="price" value="<?=@$productInfo['price']?>">
            </div>
            <div class="row">
                <span> Image : </span>
                <input type="file" name="image" value="">
            </div>

            <script src="public/ckeditor/ckeditor.js"></script>
            <div class="row" style="margin-top:15px;">
                <span style="position: relative;bottom: 8px;"> Introduction : </span>
                 <textarea class="editor1" id="editor1" name="introduction"><?=@$productInfo['introduction']?></textarea>
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
            <div class="row" style="margin-top:15px;">
                <span> Number left : </span>
                <input type="text" name="number_left" value="<?=@$productInfo['left_number']?>">
            </div>
            <div class="row">
                <span> Discount % : </span>
                <input type="text" name="discount" value="<?=@$productInfo['discount']?>">
            </div>
            <div class="row" style=" ">
                <span> Colors : </span>
                <select name="color" autocomplete="off">
                    <option>select</option>
                    <?php
                    $colors=$data['colors'];

                    foreach ($colors as $row){
                    ?>
                        <option data-title="<?php echo $row['title'];?>" onclick=addColor(this,"<?php echo $row['id'];?>","<?php echo $row['hex'];?>") value="<?=$row['id']?>"> <?=$row['title']?> </option>
                  <?php } ?>
                </select>
                <?php
                $colorsInfo=$productInfo['colorsInfo'];
                $colorsInfo=array_filter($colorsInfo);
                foreach ($colorsInfo as $row){
                ?>
                <span class="span_item" style="background-color:<?=$row['hex']?>">
                        <input type="hidden" name="color[]" value="<?=$row['id']?>">
                    <img onclick="removeItem(this)" src="public/images/remove.png">
                    <?=$row['title']?>
                    </span>
                <?php
                }
                ?>
            </div>
            <div class="row" style=" ">
                <span> Sizes : </span>
                <select name="size" autocomplete="off">
                    <option>select</option>
                    <?php
                    $sizes=$data['sizes'];
                    foreach ($sizes as $row){
                    ?>
                        <option data-title="<?php echo $row['title'];?>" onclick=addSise(this,"<?php echo $row['id'];?>") value="<?=$row['id']?>"> <?=$row['title']?> </option>
                  <?php } ?>
                </select>
                <?php
                $sizesInfo=$productInfo['sizesInfo'];
                $sizesInfo=array_filter($sizesInfo);
                foreach ($sizesInfo as $row){
                    ?>
                    <span class="span_item" style="background-color:white">
                        <input type="hidden" name="size[]" value="<?=$row['id']?>">
                    <img onclick="removeItem(this)" src="public/images/remove.png">
                    <?=$row['title']?>
                    </span>
                    <?php
                }
                ?>
            </div>


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

