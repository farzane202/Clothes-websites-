<main id="main" style="margin-top:10px;background-color: #eeeeee;height:1699px;">
    <?php
    require('views/admin/menu_left.php');
    $parents=[];
    if(isset($data['parents'])){
        $parents = $data['parents'];
        $parents = array_reverse($parents);
    }
    $attrInfo=$data['attrInfo'];
    $categoryInfo=[];
    if(isset($data['categoryInfo'])){
        $categoryInfo = $data['categoryInfo'];
    }

    ?>
    <div class="right">

        <p class="title"> Attribute Management

                <a style="text-decoration:none;cursor: pointer" href="admincategory/showattr/<?=$categoryInfo['id']?> "> (<?=$categoryInfo['title']?>) </a>
              <?php if(isset($attrInfo['id'])){ ?>
               <span style="color:red"> attr: <?=$attrInfo['title']?> </span>
            <?php }?>
        </p>

        <a class="add" href="admincategory/addattr/<?=@$categoryInfo['id']?>/<?=$attrInfo['id']?>/" style="text-decoration: none"> Add attribute </a>
        <a class="remove" style="text-decoration: none" onclick="submitForm()"> Remove attribute </a>


        <form action="admincategory/deleteattr/<?=$categoryInfo['id']?>/<?=$attrInfo['id']?>" method="post">
            <table class="list" cellspacing="0">
                <tr style="background-color: #ffd756">
                    <td> number</td>
                    <td> title</td>
                    <?php if(!isset($attrInfo['id'])){  ?>
                    <td> view subAttributes</td>
                    <?php }?>
                    <td> edit </td>
                    <td> select</td>
                </tr>
                <?php
                $attr=$data['attr'];
                $categoryId=$data['categoryId'];
                foreach ($attr as $row) {
                    ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['title'] ?></td>
                        <?php if(!isset($attrInfo['id'])){  ?>
                        <td> <a href="admincategory/showattr/<?=$categoryInfo['id']?>/<?= $row['id'] ?>" style="cursor: pointer;text-decoration: none"> view </a> </td>
                        <?php }?>
                        <td><a style="cursor: pointer" href="admincategory/addattr/<?=$categoryInfo['id']?>/<?=$attrInfo['id']?>/<?=$row['id']?>"> <img src="public/images/edit.png"> </a></td>
                        <td><input type="checkbox" name="ids[]" value="<?=$row['id']?>"></td>
                    </tr>
                    <?php
                }
                ?>
            </table>
        </form>
    </div>

</main>


<style>
    .add{
        display: block;
        width: 135px;
        height: 40px;
        background-color: #adff84;
        border: 1px solid #ccc;
        font-size: 10.8pt;
        text-align: center;
        line-height: 35px;
        border-radius: 5px;
        float: right;
        position: relative;
        top: -31px;
        right: 55px;
        cursor: pointer;
        color:#545454;
    }
    .remove{
        display: block;
        width: 135px;
        height: 40px;
        background-color: #ff5261;
        border: 1px solid #ccc;
        font-size: 10pt;
        text-align: center;
        line-height: 35px;
        border-radius: 5px;
        float: right;
        position: relative;
        top: -31px;
        right: 76px;
        cursor: pointer;
        color: #444444;
    }
    .list {
        width: 995px;
        border-right: 1px solid #bfbaba;
        border-bottom: 1px solid #bfbaba;
        margin-top: 44px;
    }

    .list tr td {
        padding: 4px;
        border: 1px solid #bfbaba;
        border-bottom: none;
        border-right: none;
        font-size: 10.5pt;
        color: #5e5e5e;
        text-align: center;
    }

    .list tr td:first-child {
        width: 70px;
    }

    .list tr {
        height: 36px;
        background-color: #fff463;
    }

    #main {
        padding: 10px;
        font-family: GothamMedium;
    }

    .right {
        width: 1050px;
        float: right;
    }

    .right .title {
        color: #3c3c3c;
    }
</style>

<script>
    function submitForm(){
        $('form').submit();
    }
</script>

