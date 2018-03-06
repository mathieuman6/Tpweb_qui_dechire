<?php

Class IngredientController extends MY_Controller
{
  public function index ()
  {
    $this->load->model('IngredientModel');


    $method = $this->input->method();


    $ingredients = $this->IngredientModel->getAll();
    $data = array('ingredients'->$ingredients,);

    $this -> renderView('ingredient/ingredient_list', $data);

    $this->load->view('global/header', $_data);
    $this->load->view($view, $_data);
    $this->load->view('global/footer');

  }
}
