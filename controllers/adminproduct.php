<?php
class Adminproduct extends Controller{

     function __construct()
    {
        parent::__construct();
    }
    function index(){
      $products=$this->model->getProduct();
      $data=['products'=>$products];

      $this->view('admin/product/index',$data);
    }

    function addproduct($productId=''){

         if(isset($_POST['title'])){
             $this->model->addproduct($_POST,$productId,$_FILES['image']);

         }
        $category=$this->model->getCategory();
        $colors=$this->model->getColors();
        $sizes=$this->model->getSizes();
        $productInfo=$this->model->getProductInfo($productId);
        $data=['category'=>$category,'colors'=>$colors,'sizes'=>$sizes,'productInfo'=>$productInfo,'productId'=>$productId];
        $this->view('admin/product/addproduct',$data);
    }
    function review($productId){
         $getreview=$this->model->getReview($productId);
        $productInfo=$this->model->getProductInfo($productId);
         $data=['getreview'=>$getreview,'productInfo'=>$productInfo];
         $this->view('admin/product/review',$data);
    }
    function addreview($productId,$reviewId=''){
         if(isset($_POST['title'])){
             $this->model->addReview($productId,$_POST,$reviewId);
             header('location:'.URL.'adminproduct/review/'.$productId);
         }
         $reviewInfo=$this->model->reviewInfo($reviewId);
        $productInfo=$this->model->getProductInfo($productId);
        $data=['productInfo'=>$productInfo,'reviewInfo'=>$reviewInfo];
         $this->view('admin/product/addreview',$data);
    }
    function deletereview($productId){
         $this->model->deleteReview($_POST['ids']);
        header('location:'.URL.'adminproduct/review/'.$productId);
    }

    function deleteproduct(){
         $this->model->deleteProduct($_POST['ids']);
        header('location:'.URL.'adminproduct/index');
    }
    function attr($productId){
         if(isset($_POST['submited'])){
            $this->model->editAttr($_POST,$productId);
         }
         $attr=$this->model->getproductAttr($productId);
        $productInfo=$this->model->getProductInfo($productId);
         $data=['attr'=>$attr,'productInfo'=>$productInfo];

         $this->view('admin/product/attr',$data);
    }

    function gallery($productId){
         if(isset($_FILES['image'])){
             $this->model->addGallery($productId,$_FILES['image']);
         }
      $gallery=$this->model->getGallery($productId);
        $productInfo=$this->model->getProductInfo($productId);
      $data=['gallery'=>$gallery,'productInfo'=>$productInfo];
      $this->view('admin/product/gallery',$data);
    }


    function deletegallery($productId){
      $this->model->deleteGallery($_POST['ids'],$productId);
        header('location:'.URL.'adminproduct/gallery/'.$productId);
    }

}






?>
