<main id="main" style="margin-top:10px;background-color: #eeeeee;height:1699px;">
    <?php
    require('views/admin/menu_left.php');
    $products=$data['products'];

    ?>
    <div class="right">

        <p class="title"> Product Management
                <a style="text-decoration:none;cursor: pointer"></a>
        </p>

        <a class="add" href="adminproduct/addproduct" style="text-decoration: none"> Add product </a>
        <a class="remove" style="text-decoration: none" onclick="submitForm()"> Remove product </a>


        <form action="adminproduct/deleteproduct" method="post">
            <table class="list" cellspacing="0">
                <tr style="background-color: #67c4e7">
                    <td> number </td>
                    <td> title </td>
                    <td> price </td>
                    <td> discount </td>
                    <td> edit </td>
                    <td> gallery </td>
                    <td> review&check </td>
                    <td> Attributes </td>
                    <td> select </td>
                </tr>
                <?php
                foreach ($products as $row) {
                    ?>
                    <tr>
                        <td><?= $row['id'] ?></td>
                        <td><?= $row['title'] ?></td>
                        <td>  <?= $row['price'] ?></td>
                        <td><?= $row['discount'] ?></td>
                        <td><a style="cursor: pointer" href="adminproduct/addproduct/<?= $row['id'] ?>"> <img src="public/images/edit.png"></a></td>
                        <td><a href="adminproduct/gallery/<?=$row['id']?>" style="text-decoration: none;color:#5e5e5e">gallery</a></td>
                        <td><a style="text-decoration: none;color:#5e5e5e" href="adminproduct/review/<?= $row['id'] ?>"> review and check </a></td>
                        <td><a style="text-decoration: none;color:#5e5e5e" href="adminproduct/attr/<?= $row['id'] ?>"> attribute </a></td>
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
        background-color: #86eeff;
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

