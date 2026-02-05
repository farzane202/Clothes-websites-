<?php


class Showcart2 extends Controller
{

    function __construct()
    {

    }

    function index()
    {
        $address=$this->model->getAddress();
        $postType=$this->model->getPostType();
        $data=['address'=>$address,'postType'=>$postType];
        $this->view('showcart2/index',$data);
    }

    function addaddress($editAddress=''){

        $this->model->addAddress($_POST,$editAddress);
    }
    function editaddress($addressId){
       $addressInfo= $this->model->getAddressInfo($addressId);
        echo json_encode($addressInfo);
    }

    function getpostprice(){
        $data=$_POST;
        $this->model->getPostPrice($data);
    }

}


?>




