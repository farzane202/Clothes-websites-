<?php

  class Admincategory extends Controller{
      public function __construct()
      {
          parent::__construct();
      }
      function index(){
          $getcategory=$this->model->getChildren(0);
          $data=['getcategory'=>$getcategory];
          $this->view('admin/category/index',$data);
      }
      function showchildren($idcategory=0){
         $children=$this->model->getChildren($idcategory);
          $categoryInfo=$this->model->categoryInfo($idcategory);
         $parents=$this->model->getParents($idcategory);
          $data=['getcategory'=>$children,'parents'=>$parents,'categoryInfo'=>$categoryInfo];
          $this->view('admin/category/index',$data);

      }

      function addcategory($parentId='',$edit=''){
          if(isset($_POST['title'])){
              $title=$_POST['title'];
              $parent=$_POST['parent'];
              $this->model->addCategory($title,$parent,$edit,$parentId);
          }
          $category=$this->model->getCategory();
          $categoryInfo=$this->model->categoryInfo($parentId);
          $data=['category'=>$category,'parentId'=>$parentId,'edit'=>$edit,'categoryInfo'=>$categoryInfo];

          $this->view('admin/category/addcategory',$data);
      }

      function deletecategory($parentId=0){
          $ids=$_POST['ids'];
          $this->model->deleteCategory($ids);
          header('location:'.URL.'admincategory/showchildren/'.$parentId);
      }

      function showattr($categoryId,$attrId=0){
          $attr=$this->model->getAttr($categoryId,$attrId);
          $categoryInfo=$this->model->categoryInfo($categoryId);
          $attrInfo=$this->model->attrInfo($attrId);
          $data=['attr'=>$attr,'categoryId'=>$categoryId,'categoryInfo'=>$categoryInfo,'attrInfo'=>$attrInfo];
          $this->view('admin/category/showattr',$data);
      }

      function addattr($categoryId,$parentId='',$editId=''){
//          $attrInfo=$this->model->attrInfo($attrId);
          if(isset($_POST['title'])){
            $this->model->addAttr($_POST,$categoryId,$editId);
              header('location:'.URL.'admincategory/showattr/'.$categoryId.'/'.$parentId);
          }
          $attr=$this->model->getAttr($categoryId,0);
          $categoryInfo=$this->model->categoryInfo($categoryId);
          $editInfo=$this->model->attrInfo($editId);

          $data=['attr'=>$attr,'categoryInfo'=>$categoryInfo,'parentId'=>$parentId,'editInfo'=>$editInfo];
          $this->view('admin/category/addattr',$data);
      }

      function deleteattr($categoryId,$attrId){
          $ids=$_POST['ids'];
          $this->model->deleteAttr($ids);
          header('location:'.URL.'admincategory/showattr/'.$categoryId.'/'.$attrId);
      }


  }


?>
