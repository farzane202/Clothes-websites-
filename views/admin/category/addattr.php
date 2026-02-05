<main id="main" style="margin-top:10px;background-color: #eeeeee;height:376px;padding: 15px;">
    <?php

    require ('views/admin/menu_left.php');

    $attrInfo=$data['attrInfo'];
    $categoryInfo=$data['categoryInfo'];
    $editInfo=$data['editInfo'];
    $parentId=$data['parentId'];
    $edit='';
    if(isset($editInfo['title'])){
        $edit=1;
    }
    ?>

    <div class="right">
        <p class="title">
          <?php
          if($edit==''){
           ?>
            Add new attribute
           <?php }else{ ?>
            Edit attribute
            <?php } ?>
            (
            <a style="color:red"> category : <?=$categoryInfo['title']?></a>
            )

        </p>
        <form action="admincategory/addattr/<?=$categoryInfo['id']?>/<?=$parentId?>/<?=$editInfo['id']?>" method="post">
            <div class="row">
                <span> Title : </span>
                <input type="text" name="title" value="<?=$editInfo['title']?>">
            </div>
            <div class="row">
                <span> parent : </span>
                <select name="parent" autocomplete="off">
                    <option>select</option>
                    <?php
                    $attr=$data['attr'];
                    $parentId=$data['parentId'];
                    foreach ($attr as $row){
                        if($row['id']==$parentId){
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

