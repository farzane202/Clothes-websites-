<?php


class Index extends Controller
{

    function __construct()
    {
//        echo 'we are in index controller!<br>';
    }

    function index()
    {

     $slider1 = $this->model->getSlider1();
      $slider2 = $this->model->getSlider2();
       $slider2_item=$slider2[0];
       $date_end=$slider2[1];
       $onlyhere=$this->model->onlyhere();
        $most_view=$this->model->mostviewed();

         $data=[$slider1,$slider2_item,$date_end,$onlyhere,$most_view];
        $this->view('index/index',$data);

    }


}


?>
