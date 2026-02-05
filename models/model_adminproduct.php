<?php
class model_adminproduct extends Model{
     function __construct()
    {
        parent::__construct();
    }

    function getProduct(){
         $sql="select * from tbl_product";
         $result=$this->doSelect($sql);
         return $result;
    }
    function getCategory(){
        $sql="select * from tbl_category";
        $result=$this->doSelect($sql);
        return $result;
    }
    function getColors(){
        $sql="select * from tbl_colors";
        $result=$this->doSelect($sql);
        return $result;
    }
    function getSizes(){
        $sql="select * from tbl_sizes";
        $result=$this->doSelect($sql);
        return $result;
    }
    function addproduct($data=[],$productId,$file=[]){
         $title=$data['title'];
         $categoryId=$data['categoryId'];
         $price=$data['price'];
         $introduction=$data['introduction'];
         $number_left=$data['number_left'];
         $discount=$data['discount'];
        $colors='';
        if(isset( $data['color'])){
            $colors = $data['color'];
            $colors = join(',', $colors);
        }
        $size='';
        if(isset( $data['size'])){
            $size = $data['size'];
            $size = join(',', $size);
        }


          if($productId==''){
              $sql="insert into tbl_product (title,price,idcategory,introduction,discount,left_number,colors,size) VALUES (?,?,?,?,?,?,?,?)";
              $values=[$title,$price,$categoryId,$introduction,$discount,$number_left,$colors,$size];
              $this->doQuery($sql,$values);
              $productId=parent::$conn->lastInsertId();
              mkdir('public/images/products/'.$productId);
          }else{
              $sql="update tbl_product set title=?,price=?,idcategory=?,introduction=?,discount=?,left_number=?,colors=?,size=? where id=?";
              $values=[$title,$price,$categoryId,$introduction,$discount,$number_left,$colors,$size,$productId];
              $this->doQuery($sql,$values);
          }

          $filename=$file['name'];
          $filesize=$file['size'];
          $fileTmp=$file['tmp_name'];
          $fileType=$file['type'];
          $fileError=$file['error'];
          $uploadOk=1;
          $targetMain='public/images/products/'.$productId.'/';
          $newName='product';

          if($fileType != 'image/jpg' and $fileType != 'image/jpeg' and $fileType != 'image/png'){
              $uploadOk=0;
          }

          if($filesize>5242880){
              $uploadOk=0;
              }
          if($uploadOk==1){
              $ext=pathinfo($filename,PATHINFO_EXTENSION);
              $target=$targetMain.$newName.'.'.$ext;
              move_uploaded_file($fileTmp,$target);
              $target220=$targetMain.$newName.'_220.'.$ext;
              $target350=$targetMain.$newName.'_350.'.$ext;
              $this->create_thumbnail($target,$target220,127,90);
              $this->create_thumbnail($target,$target350,350,350);
          }



    }
    function getProductInfo($productId){
         $sql="select * from tbl_product where id=?";
         $result=$this->doSelect($sql,[$productId],1);
         $colors=$result['colors'];
         $sizes=$result['size'];
         $colors=explode(',',$colors);
         $sizes=explode(',',$sizes);
         $result['colorsInfo']=[];
         $result['sizesInfo']=[];
         foreach($colors as $color){
             $sql="select * from tbl_colors where id=?";
             $colorInfo=$this->doSelect($sql,[$color],1);
             array_push($result['colorsInfo'],$colorInfo);
         }
         foreach($sizes as $size){
             $sql="select * from tbl_sizes where id=?";
             $sizeInfo=$this->doSelect($sql,[$size],1);
             array_push($result['sizesInfo'],$sizeInfo);
         }

         return $result;
    }
    function getReview($productId){
         $sql="select * from tbl_reviewcheck where idproduct=?";
         $result=$this->doSelect($sql,[$productId]);
         return $result;
    }
    function addReview($productId,$data=[],$reviewId){
         if($reviewId==''){
             $sql="insert into tbl_reviewcheck (title,description,idproduct) VALUES (?,?,?)";
             $params=[$data['title'],$data['description'],$productId];
             $this->doQuery($sql,$params);
         }else{
             $sql="update tbl_reviewcheck set title=?,description=? where id=?";
             $params=[$data['title'],$data['description'],$reviewId];
             $this->doQuery($sql,$params);
         }

    }
    function reviewInfo($reviewId){
         $sql="select * from tbl_reviewcheck where id=?";
         $data=[$reviewId];
         $result=$this->doSelect($sql,$data,1);
         return $result;
    }
    function deleteReview($ids=[]){
         $ids=join(',',$ids);
         $sql="delete from tbl_reviewcheck where id IN (".$ids.")";
         $this->doQuery($sql);

    }
    function deleteProduct($ids=[]){
        $ids=join(',',$ids);
        $sql="delete from tbl_product where id IN (".$ids.")";
        $this->doQuery($sql);

        $sql="delete from tbl_reviewcheck where idproduct IN (".$ids.")";
        $this->doQuery($sql);
    }
    function getproductAttr($productId){
         $productInfo=$this->getProductInfo($productId);
         $catId=$productInfo['idcategory'];
         $sql="select tbl_attr.*,tbl_product_attr.value from tbl_attr LEFT JOIN tbl_product_attr ON tbl_attr.id=tbl_product_attr.idattr and tbl_product_attr.idproduct=? where idcategory=? and parent != 0";
         $result=$this->doSelect($sql,[$productId,$catId]);
         return $result;

    }
    function editAttr ($data=[],$productId){
         $ids=$data['id'];
         foreach ($ids as $id){
             $sql="delete from tbl_product_attr where idproduct=? and idattr=?";
             $params=[$productId,$id];
             $this->doQuery($sql,$params);

             $sql="insert into tbl_product_attr (idproduct,idattr,value) VALUES (?,?,?)";
             $params=[$productId,$id,$data['value'.$id]];
             $this->doQuery($sql,$params);
         }
    }


    function getGallery($productId){
      $sql="select * from tbl_gallery where idproduct=?";
      $result=$this->doSelect($sql,[$productId]);
        return $result;
    }

    function addGallery($productId,$file){
        $filename=$file['name'];
        $filesize=$file['size'];
        $fileTmp=$file['tmp_name'];
        $fileType=$file['type'];
        $fileError=$file['error'];
        $uploadOk=1;
        $targetMain='public/images/products/'.$productId.'/gallery/';
        $newName=time();

        if($fileType != 'image/jpg' and $fileType != 'image/jpeg' and $fileType != 'image/png'){
            $uploadOk=0;
        }

        if($filesize>5242880){
            $uploadOk=0;
        }
        if($uploadOk==1){
            $ext=pathinfo($filename,PATHINFO_EXTENSION);
            $target=$targetMain.'large/'.$newName.'.'.$ext;
            move_uploaded_file($fileTmp,$target);
            $target_small=$targetMain.'small/'.$newName.'.'.$ext;
            $this->create_thumbnail($target,$target_small,127,90);

            $sql="insert into tbl_gallery (img,idproduct) VALUES (?,?)";
            $params=[$newName.'.'.$ext,$productId];
            $this->doQuery($sql,$params);

        }
    }

    function deleteGallery($ids,$productId){
         foreach ($ids as $galleryid){
             $sql="select * from tbl_gallery where id=?";
             $result=$this->doSelect($sql,[$galleryid],1);
             $filename=$result['img'];
             $dir='public/images/products/'.$productId.'/gallery/';
             $dir_small=$dir.'small/'.$filename;
             $dir_large=$dir.'large/'.$filename;
             unlink($dir_small);
             unlink($dir_large);
         }
         $ids=join(',',$ids);
         $sql="delete from tbl_gallery where id IN (".$ids.")";
         $this->doQuery($sql);
    }
}





?>
