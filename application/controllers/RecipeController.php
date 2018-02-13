<?php
  class RecipeController extends MY_Controller
  {
    public function index()
    {

      $data = array(
        'pageTitle => "Miam !!!"'
      );

      $this -> renderView('recipe/main', $data);
    }
    public function recipe(int $id){return true;}
  }
 ?>
