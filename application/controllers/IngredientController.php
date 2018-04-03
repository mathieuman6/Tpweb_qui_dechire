<?php

Class IngredientController extends MY_Controller
{
  public function index()
  {

    $data = array(
      'pageTitle => "Miam !!!"'
    );
    $this -> renderView('recipe/main', $data);
  }

  public function get_all() {
    $this->load->model("IngredientModel");
    $data_arr['ingredients'] = $this->IngredientModel->getAll();
    $this->renderView('recipe/all_ingredients', $data_arr);
  }
    function display_new_ingredients() {
      $this->load->model("IngredientModel");
      $data['ingredients'] = $this->IngredientModel->get_ingredients();
      $this->renderView('recipe/new_ingredients',$data);
    }

    function new_ingredients() {
      $this->load->model("IngredientModel");
      $count=0;
      $i_name = "ingredient".strval($count);
      while(isset($_POST[$i_name])){
        $this->IngredientModel->insert($_POST[$i_name]);
        $count=$count+1;
        $i_name = "ingredient".strval($count);
      }

      $data_arr['ingredients'] = $this->IngredientModel->getAll();
      $this->renderView('recipe/all_ingredients',$data_arr);
    }
}
?>
