<?php
class IngredientModel extends CI_Model
{

  public function getAll()
  {
    $query = $this->db->select('ingredient.*')->from('ingredient');

    $result = $query->get()->result('ingredient');

    return $result;
  }
}
 ?>
