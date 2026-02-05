<main id="main" style="margin-top:10px;background-color: #eeeeee;height:376px;padding: 15px;">
<?php

require ('views/admin/menu_left.php');
$edit=$data['edit'];
$categoryInfo=$data['categoryInfo'];
?>

<div class="right">
    <p class="title">
        <?php
        if($edit==''){ ?>
        Add new category;
        <?php }else{ ?>
           Edit category
       <?php } ?>

         </p>
    <form action="admincategory/addcategory/<?=$categoryInfo['id']?>/<?=$edit?>" method="post">
        <div class="row">
            <span> Title : </span>
            <input type="text" name="title" value="<?php if($edit==''){}else{echo $categoryInfo['title'];}?> ">
        </div>
        <div class="row">
            <span> parent : </span>
            <select name="parent" autocomplete="off">
                <option>select</option>
                <?php
                $category=$data['category'];
                $parentId=$data['parentId'];
                if($edit==''){
                    $selectedId=$parentId;
                }else{
                    $selectedId=$categoryInfo['parent'];
                }
                foreach ($category as $row){
                    if($row['id']==$selectedId){
                        $x='selected';
                    }else{
                        $x='';
                    }
                ?>
                <option value="<?=$row['id']?>" <?=$x?>> <?=$row['title']?> </option>
                <?php
                 }
                ?>
            </select>
        </div>
        <button class="submit" type="submit"> Submit </button>
    </form>
</div>
</main>
<style>
    .right {
        width: 1050px;
        float: right;
    }

    .right .title {
        color: #3c3c3c;
        font-family: GothamMedium;

    }
    .row{
        height:55px;
        margin-top: 31px;
    }
    .row span{
        font-family: GothamMedium;
        color: #545454;
    }
    .row input{
        width: 275px;
        height:26px;
        margin-left: 17px;
    }
    .submit{
        width: 100px;
        height: 31px;
        position: relative;
        left: 461px;
    }
    .row select{
        text-align: center;
        margin-left: 17px;
    }
    .row select option{
        text-align: center;
    }
</style>
