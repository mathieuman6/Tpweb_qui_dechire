<?php
  class RecipeController extends MY_Controller
  {
    public function index()
    {

        $this->load->model("RecipeModel");
        $data_arr['recipes'] = $this->RecipeModel->getAll();

        $this->renderView('recipe/main', $data_arr);
    }


    public function displayAll(){
      $this->load->model("RecipeModel");
      $data_arr['recipes'] = $this->RecipeModel->getAll();

      $this->renderView('recipe/main', $data_arr);
    }

    public function recipe($name) {

      $this->load->model("RecipeModel");
      $this->load->model("IngredientRecipeModel");
      $recipe = $this->RecipeModel->get($name);
      $ingredients = $this->IngredientRecipeModel->get(str_replace(" ","_",$name));
/*
      $this->load->model("IngredientRecetteModel");
      $ingredients = $this->IngredientRecetteModel->get($name);
*/
      $data = array('recipe' => $recipe,
                    'ingredients' => $ingredients
                  );
          //'ingredients' => $ingredients

      $this->renderView('recipe/recipe', $data);
    }

    function new_recipe() {
      $this->load->model("IngredientRecipeModel");
      $this->load->model("RecipeModel");
      $this->RecipeModel->insert(str_replace(" ","_",$_POST["name"]), $_POST["text"]);
      $count=0;
      $i_name = "ingredient".strval($count);
      while(isset($_POST[$i_name])){
        $name_underscored = str_replace(" ","_",$_POST["name"]);
        $this->IngredientRecipeModel->new_entry($name_underscored,
                                  $_POST[$i_name],
                                  3,
                                  'cl');
        $count=$count+1;
        $i_name = "ingredient".strval($count);
      }

      $data_arr['recipes'] = $this->RecipeModel->getAll();
      $this->renderView('recipe/main',$data_arr);
    }

    function display_new_recipe() {
      $this->load->model("IngredientModel");
      $data['ingredients'] = $this->IngredientModel->get_ingredients();
      $this->renderView('recipe/new_recipe',$data);
    }
  }
  ?>
