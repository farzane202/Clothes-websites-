

         <?php
       $productspecification=$data[0];
       foreach ($productspecification as $parent){
           $children=$parent['children'];
         ?>
    <h4> <?=$parent['title']?> </h4>
           <?php
            foreach ($children as $child){
           ?>
    <div class="row">
        <div class="left"> <?=$child['title']?> </div>
        <div class="right"> <?=$child['value']?> </div>
    </div>
                <?php
            }
                ?>
         <?php
          }
         ?>

    <style>
         .row{
            height:35px;
            width: 1145px;
            margin-left: 37px;
            margin-top: 30px;
        }
         .row .left{
            width: 241px;
            height: 35px;
            background: #C9C9C9;
            float: left;
            font-family: GothamMedium;
            font-size: 10pt;
            color: #333333;
            line-height: 29px;
            padding-left: 24px;
        }
         .row .right{
            width:813px;
            height:35px;
            float: right;
            background: #e1e1e1;
            font-family: GothamMedium;
            font-size: 10pt;
            color:dimgrey;
            line-height: 29px;
            padding-left: 24px;
        }
    </style>

