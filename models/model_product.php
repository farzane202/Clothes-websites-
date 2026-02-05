<?php
class model_product extends Model{

     function __construct()
    {
        parent::__construct();
    }

    function productInfo($id){
       $sql="select * from tbl_product where id=?";
       $result=$this->doSelect($sql,[$id],1);
       $price=$result['price'];
       $discount=$result['discount'];
       $price_calculate=$this->calculateDiscount($price,$discount);
       $result['price_discount']=$price_calculate[0];
       $result['price_total']=$price_calculate[1];
       $colors=$result['colors'];
       $colors=explode(',',$colors);
       $colors=array_filter($colors);
       $all_colors=[];
       foreach ($colors as $color){
           $colorInfo=$this->colorInfo($color);
           array_push($all_colors,$colorInfo);
       }
       $result['all_colors']=$all_colors;
       $sizes=$result['size'];
       $sizes=explode(',',$sizes);
       $sizes=array_filter($sizes);
       $all_sizes=[];
       foreach ($sizes as $size){
           $sizeInfo=$this->sizeInfo($size);
           array_push($all_sizes,$sizeInfo);
       }
       $result['all_sizes']=$all_sizes;
       return $result;
    }
    function colorInfo($id){
         $sql="select * from tbl_colors where id=?";
         $result=$this->doSelect($sql,[$id],1);
         return $result;
    }
    function sizeInfo($id){
        $sql="select * from tbl_sizes where id=?";
        $result=$this->doSelect($sql,[$id],1);
        return $result;
    }

    function getSlider2 () {
        $sql="select * from tbl_product where special=1";
        $result=$this->doSelect($sql);

        @$first_row = $result[0];
        $time_special = $first_row['time_special'];
        $sql='select * from tbl_options where setting ="time_special"';
         $result2=$this->doSelect($sql,[],1);
        $duration_special = $result2['value'];

        $time_end = $time_special + $duration_special;
        date_default_timezone_set('Asia/Tehran');
        $date = date('F d,Y H:i:s', $time_end);


        return [$result, $date];
    }
    function reviewCheck ($id){
         $sql="select * from tbl_reviewcheck where idproduct=? ";
         $result=$this->doSelect($sql,[$id]);
         return $result;
    }
    function productSpecification ($idcategory,$idproduct){
         $sql="select * from tbl_attr where idcategory=? and parent=0";
         $params=[$idcategory];
         $result=$this->doSelect($sql,$params);
         foreach ($result as $key=>$row){
             $sql2="select tbl_attr.title,tbl_product_attr.value from tbl_attr LEFT JOIN tbl_product_attr ON tbl_attr.id=tbl_product_attr.idattr where tbl_attr.parent=? and tbl_product_attr.idproduct=?";
             $params=[$row['id'],$idproduct];
             $result2=$this->doSelect($sql2,$params);
             $result[$key]['children']=$result2;
         }
              return $result;
    }


    function comment_params($idcategory){
         $sql="select * from tbl_comment_params where idcategory=?";
         $params=[$idcategory];
         $result=$this->doSelect($sql,$params);
         return $result;
    }
    function getComment($idproduct){
      $sql="select * from tbl_comment where idproduct=?";
      $data=[$idproduct];
      $result=$this->doSelect($sql,$data);
      $scores_total=[];
      foreach ($result as $row){
          $params_score=$row['params'];
          $params_score=unserialize($params_score);
          foreach ($params_score as $key=> $val){
              $param_id=$key;
              $score=$val;
              if(!isset($scores_total[$param_id])){
                  $scores_total[$param_id]=0;
                  //$score_total[$param_id]=4;  مقدار فعلی
              }
              $scores_total[$param_id]=$scores_total[$param_id]+$score;
              //$score_total[$param_id]=3+4    مقدار فعلی بعلاوه ی مقدار قبلی
          }
      }
      $total_comments=sizeof($result);
      foreach ($scores_total as $key=>$val){
          $val=$val/$total_comments;
          $scores_total[$key]=$val;
      }
      return [$result,$scores_total];
    }

    function getQuestions ($idproduct){
         $sql="select * from tbl_questions where idproduct=? and parent=0";
         $result=$this->doSelect($sql,[$idproduct]);
        $sql2="select * from tbl_questions where parent !=0";
        $all_answer=$this->doSelect($sql2);
        $all_answer_new=[];
         foreach ($all_answer as $answer){
           $question_id=$answer['parent'];
           $all_answer_new[$question_id]=$answer;
         }
         return [$result,$all_answer_new];
    }


    function getGallery($idproduct){
        $sql="select * from tbl_gallery where idproduct=?";
        $result=$this->doSelect($sql,[$idproduct]);
        return $result;
    }

    function addToBasket($productId,$color,$size){
        $cookie=self::getBasketCookie();
        $sql="select * from tbl_basket where cookie=? and idproduct=? and color=? and size=?";
        $params=[$cookie,$productId,$color,$size];
        $result=$this->doSelect($sql,$params);
        if(isset($result[0])){
            $sql="update tbl_basket set number=number+1 where cookie=? and idproduct=? and color=? and size=?";
        }else{
            $sql="insert into tbl_basket (cookie,idproduct,number,color,size) values (?,?,1,?,?)";
        }
        $params=[$cookie,$productId,$color,$size];
        $this->doQuery($sql,$params);

    }

}


?>
