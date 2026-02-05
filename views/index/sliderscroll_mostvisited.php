<div class="sliderscroll" style="margin-top:35px;">
    <h3 style="background: #dfe5be"> The most visited </h3>
    <div class="sliderscroll_content">
        <div class="sliderscroll_prev">
            <span class="prev" onclick="sliderscroll('right',this)"></span>
        </div>
        <div class="sliderscroll-main">
            <ul>
                <?php
                $most_view=$data[4];
                foreach ($most_view as $row){
                ?>
                <li><a href="<?=URL?>product/index/<?=$row['id']?>">
                        <img src="public/images/products/<?=$row['id']?>/product_220.png ">
                        <p style="color:#616161;margin-top: -23px;"> <?=$row['title']?> </p>
                        <p style="color:cornflowerblue"> <?=$row['price']?>  </p>
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
