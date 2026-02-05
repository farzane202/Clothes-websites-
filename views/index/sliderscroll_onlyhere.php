<div class="sliderscroll">
    <h3> Only here </h3>
    <div class="sliderscroll_content">
        <div class="sliderscroll_prev">
            <span class="prev" onclick="sliderscroll('right',this)"></span>
        </div>
        <div class="sliderscroll-main">
            <ul>
                <?php
                 $onlyhere=$data[3];
                 foreach ($onlyhere as $row){
                ?>
                <li><a href="<?=URL?>product/index/<?=$row['id']?>">
                        <img src="public/images/products/<?=$row['id']?>/product_220.png">
                        <p style="color:#616161;"> <?=$row['title']?> </p>
                        <p style="color:cornflowerblue"> <?=$row['price']?> </p>
                    </a></li>
                <?php
                 }
                ?>

            </ul>
        </div>
        <div class="sliderscroll_next">
            <span class="next" onclick="sliderscroll('left',this)"></span>
        </div>
    </div>
</div>
