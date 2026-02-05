<?php
class model_showcart2 extends Model{
     function __construct()
    {
        parent::__construct();
    }
    function index(){

    }
    function addAddress($data,$editAddressId){
        $family=$data['family'];
        $number=$data['number'];
        $postcode=$data['postcode'];
        $city=$data['city'];
        $address=$data['address'];
        Model::sessionInit();
        $userId=Model::sessionGet('userId');
        if($editAddressId==''){
            $sql="insert into tbl_user_address (userid,family,mobile,city,address,postcode) VALUES (?,?,?,?,?,?)";
            $params=[$userId,$family,$number,$city,$address,$postcode];
            $this->doQuery($sql,$params);
        }else{
            $sql="update tbl_user_address set family=?,mobile=?,city=?,address=?,postcode=? where id=?";
            $params=[$family,$number,$city,$address,$postcode,$editAddressId];
            $this->doQuery($sql,$params);
        }

    }

    function getAddress(){
         $sql="select * from tbl_user_address where userid=?";
        Model::sessionInit();
        $userId=Model::sessionGet('userId');
        $params=[$userId];
        $result=$this->doSelect($sql,$params);
        return $result;
    }
    function getAddressInfo($addressId){
         $sql="select * from tbl_user_address where id=?";
         $params=[$addressId];
         $result=$this->doSelect($sql,$params,1);
         return $result;
    }

    function getPostType(){
         $sql="select * from tbl_post_type";
         $result=$this->doSelect($sql);
         return $result;
    }

    function getPostPrice($data)
    {
        $cityId=$data['cityId'];
        $postId=$data['postId'];
        $basketInfo=$this->getBasket();
        $basket=$basketInfo[0];
        $priceTotal=$basketInfo[1];
        $weightTotalAll=0;
        foreach ($basket as $row){
            $weight=$row['weight'];
            $number=$row['number'];
            $weightTotal=$weight*$number;
            $weightTotalAll=$weightTotalAll+$weightTotal;
        }
    }
}


?>
