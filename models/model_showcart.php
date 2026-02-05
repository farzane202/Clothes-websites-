<?php

class model_showcart extends Model{
    function __construct()
    {
        parent::__construct();
    }
    function index(){

    }
    function getBasket(){
        $sql="select b.number,b.id as basketRow,p.*,c.title as colorTitle,s.title as sizeTitle from tbl_basket b 
         JOIN tbl_product p ON b.idproduct=p.id
         JOIN tbl_colors c ON b.color=c.id
         JOIN tbl_sizes s ON b.size=s.id
         where cookie=?";
        $cookie=self::getBasketCookie();
        $param=[$cookie];
        $result=$this->doSelect($sql,$param);
        $priceTotalall=0;
        foreach ($result as $row){
            $price=$row['price'];
            $number=$row['number'];
            $priceTotal=$price*$number;
            $priceTotalall=$priceTotalall+$priceTotal;
        }
        return [$result,$priceTotalall];
    }

    function deleteBasket($productId){
        $sql="delete from tbl_basket where id=?";
        $params=[$productId];
        $this->doQuery($sql,$params);
    }

    function updateBasket($data){
        $number=$data['number'];
        $basketRow=$data['basketRow'];
        $sql="update tbl_basket set number=? where id=?";
        $params=[$number,$basketRow];
        $this->doQuery($sql,$params);
    }
}



?>

