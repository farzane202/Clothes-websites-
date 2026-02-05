
    <div class="itemcontainer">
        <?php
        $reviewcheck=$data[0];
        foreach ($reviewcheck as $row){
        ?>
        <div class="item">
            <h4> <i></i> <span><?=$row['title']?></span>
            </h4>
            <div class="description">
                <p> <?=$row['description']?> </p>
            </div>
        </div>
        <?php
        }
        ?>

    </div>

<style>
     .itemcontainer{
        border-left:1px solid #ccc;
        margin-left: 23px;
    }
     .itemcontainer .item{
        position: relative;

    }
      .itemcontainer .item i{
         display: block;
         width: 16px;
         height:16px;
         background: url(public/images/plus.png)no-repeat;
         position: absolute;
         left: -8px;
     }
      .itemcontainer .item h4.active i{
         background: url(public/images/minus.png)no-repeat;
     }
      .itemcontainer .item .description{
         font-family: GothamMedium;
         color:#5b697c;
         font-size: 9.8pt;
         margin-left: 64px;
         display: none;
     }
</style>

    <script>
        $('.itemcontainer .item h4').click(function (){
            $(this).toggleClass('active');
            var item= $(this).parents('.item');
            $('.description',item).slideToggle(200);
        })
    </script>

