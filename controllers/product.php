<?php


class Product extends Controller
{

    function __construct()
    {

    }

    function index($id)
    {
      $productInfo=$this->model->productInfo($id);
        $gallery=$this->model->getGallery($id);
        $slider2 = $this->model->getSlider2();
        $slider2_item=$slider2[0];
        $date_end=$slider2[1];

        $data=['productInfo'=>$productInfo,'date_end'=>$date_end,'gallery'=>$gallery];
        $this->view('product/index',$data);
    }
    function tab($id,$idcategory){

        $number=$_POST['number'];

        if($number==0){
            $reviewcheck=$this->model->reviewCheck($id);
            $data=[$reviewcheck];
           $this->view('product/tab1',$data,1,1);
        }
        if($number==1){
            $productspecification=$this->model->productSpecification($idcategory,$id);
            $data=[$productspecification];
            $this->view('product/tab2',$data,1,1);
        }
        if($number==2){
            $comment_param=$this->model->comment_params($idcategory);
            $productInfo=$this->model->productInfo($id);
            $getcomment=$this->model->getComment($id);
            $getcomment_names=$getcomment[0];
            $getcomment_scores=$getcomment[1];
            $data=[$comment_param,$productInfo,$getcomment_names,$getcomment_scores];
            $this->view('product/tab3',$data,1,1);
        }
        if($number==3){
            $getquestions=$this->model->getQuestions($id);
            $questions=$getquestions[0];
            $answers=$getquestions[1];
            $data=[$questions,$answers];
            $this->view('product/tab4',$data,1,1);
        }
    }



    function addtobasket($productId,$color,$size){
        $this->model->addToBasket($productId,$color,$size);
    }


}


?>
