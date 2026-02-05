<?php
 $productInfo=$data[1];
?>
    <div id="comment_result">
        <p>
            Users score to :
            <span> <?=$productInfo['title']?> </span>
        </p>
        <?php
        $comment_param=$data[0];
        $getcomment_scores=$data[3];
        foreach ($comment_param as $row){
            $score=$getcomment_scores[$row['id']];
            $part1=floor($score);
            $part2=$score-$part1;
            $num_li=$part1;
        ?>
        <div class="row1" style="">
            <span> <?=$row['title']?> </span>
            <ul>
                <?php for($i=0;$i<$part1;$i++){ ?>
                <li><span class="full"></span></li>
                <?php }?>

                <?php if($part1<5){ $num_li++ ?>
                <li><span style="width:<?php echo $part2*100 ?>%!important; background: #4cb4c8; "></span></li>
                <?php } ?>

                <?php
                $num_li_remain=5-$num_li;
                for($i=0;$i<$num_li_remain;$i++){
                ?>
                <li> <span style="background: none!important;"></span> </li>
                <?PHP
               } ?>
            </ul>
        </div>
        <?php
         }
        ?>

    </div>
    <div id="comment_send">
        <p> You can also send your comment </p>
        <p style="font-size: 10pt;line-height: 20px;"> To register your comment , you must first log in to your account and purchase this product . </p>
        <div id="comment" style="margin-top: 40px;float: right">
            <span class="btn"> Send comment </span>
        </div>
    </div>

        <?php
        $getcomment=$data[2];
        foreach ($getcomment as $row){
          ?>
    <div id="comments">
        <p> Users's comments </p>

        <div class="comments" style="float:left;width: 100%;">
            <div class="comment_header">
                <div class="left">
                    <p> farzane mohammadi </p>
                    <p style="font-size: 9pt;"> <?=$row['date']?> </p>
                </div>
                <div class="right">
                    <span class="like"><i></i> <?=$row['likecount']?> </span>
                    <span class="unlike"><i></i> <?=$row['dislikecount']?> </span>
                </div>
            </div>
            <div class="comment_content">
                <div class="left">
                   <?php
                   $scores=unserialize($row['params']);
                    foreach ($comment_param as $param){
                    $param_id=$param['id'];
                    $score=$scores[$param_id];
                    ?>
                    <div class="row1" style="">
                        <span> <?=$param['title']?> </span>
                        <ul>
                            <?php
                             for($i=0;$i<$score;$i++){
                            ?>
                            <li><span class="full"></span></li>
                            <?php
                             }
                            ?>
                            <?php
                             for($i=0;$i<5-$score;$i++){
                            ?>
                            <li style="border-right:none;"><span></span></li>
                            <?php
                             }
                            ?>
<!--                            <li><span class="full"></span></li>-->
<!--                            <li><span class="full"></span></li>-->
<!--                            <li><span class="full" style="width: 50%;"></span></li>-->

                        </ul>
                    </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="right">
                    <div class="top">
                        <?=$row['title']?>
                    </div>
                    <div class="center">
                        <p><?=$row['negitive']?></p>
                        <?=$row['positive']?>
                    </div>
                    <div class="bottom">
                        <?=$row['text']?>
                    </div>
                </div>
            </div>
        </div>

        <?php
        }
        ?>

    </div>

<style>
     #comment_result{
        width: 600px;
        float:left;
    }
     #comment_send{
        width: 560px;
        float:right;
    }
     #comment_result p{
        font-family: GothamMedium;
        font-size: 11pt;
        color:#616161;
         margin-bottom: 41px;
         display: inline-block;
    }
     #comment_result p span{
        font-family: GothamMedium;
        font-size: 10pt;
        color:#516dc8;
    }
      .row1{

        height:35px;
    }
      .row1 span{
        font-family: GothamMedium;
        font-size: 11pt;
        color:#616161;
        float: left;
    }
      .row1 ul{
        list-style-type: none;
        margin: 0;
          width: 100%;
        float: left;
          margin-top: -11px;
          padding-left: 178px;
    }
      .row1 li{
        float: left;
        width: 65px;
        height:10px;
        border-right: 1px solid #fff;
        background:#ccc;
    }
      .row1 li span{
        width: 65px;
        height:10px;
        display: block;


    }
      .row1 li span.full{
        background: #4cb4c8;
        width: 100%;
    }
     #comment_send p{
        font-family: GothamMedium;
        color:#616161;
        font-size: 11pt;
    }
      #comments{
         float: left;
         width: 100%;
         margin-top: 25px;
     }
      #comments p{
         font-family: GothamMedium;
         font-size: 10.5pt;
         color:#323434;
     }
      #comments .comments .comment_header{
         height: 57px;
         background: #ccc;
         margin-top:40px;
     }
      #comments .comments .comment_header .left{
         font-family: GothamMedium;
         font-size: 10pt;
         float:left;
         padding-left: 20px;
     }
      #comments .comments .comment_header .left p{
         margin:0;
         line-height: 24px;
         color:#545454;
     }
      #comments .comments .comment_header .right{
         float:right;
     }
      #comments .comments .comment_header .right .like{
         width: 54px;
         height: 27px;
         display: block;
         background: #eee;
         position: relative;
         top: 15px;
         left: -78px;
         border-radius: 5px;
         font-family: GothamMedium;
         color: #565656;
         font-size: 10pt;
         text-align: right;
         padding-right: 8px;
         line-height: 0px;
     }
      #comments .comments .comment_header .right .unlike{
         width: 54px;
         height: 27px;
         display: block;
         background: #eee;
         position: relative;
         top: -12px;
         left: -12px;
         border-radius: 5px;
         font-family: GothamMedium;
         color:#565656;
         font-size: 10pt;
         text-align: right;
         padding-right: 8px;
         line-height: 0px;
     }
      #comments .comments .comment_header .right .like i{
         display: block;
         width: 16px;
         height: 16px;
         background: url(public/images/like.png);
         position: relative;
         left: 5px;
         top: 4px;

     }
      #comments .comments .comment_header .right .unlike i{
         display: block;
         width: 16px;
         height: 16px;
         background: url(public/images/unlike.png);
         position: relative;
         left: 5px;
         top: 4px;

     }
      #comments .comments .comment_content{
          float: left;
          width: 1157px;
          box-shadow: 0px 2px 8px #ccc;
          padding: 20px;
     }
      #comments .comments .comment_content .left{
         float:left;
     }
      #comments .comments .comment_content .right{
         float:right;
          width: 533px;
         font-family: GothamMedium;
     }
      #comments .comments .comment_content .right .top{
         color:#565656;
         font-size: 10.5pt;
     }
      #comments .comments .comment_content .right .center{
         color:#83e080;
         font-size: 10.5pt;
         margin-top: 15px;
     }
      #comments .comments .comment_content .right .center p{
         color:#e05f6b;
         margin: 0;
     }
      #comments .comments .comment_content .right .bottom{
         font-size: 10.5pt;
         color:#565656;
         margin-top: 15px;
     }
</style>