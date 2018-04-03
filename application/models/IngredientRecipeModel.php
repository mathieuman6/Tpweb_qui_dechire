<?php
class IngredientRecipeModel extends CI_Model {
    public function getAll() {
        $arr = $this->db->get('ingredient_recette')->result();

        return $arr;
      }

    public function get($name) {
        $arr = $this->db->select('*')->from('ingredient_recette')->where('recipeName',$name);
        $query = $this->db->get();

        return $query->result_array();

    }
    public function new_entry($name,$ingredient,$quantity,$quantity_unit) {
            $data = array(
                'recipeName' => $this->db->escape_str($name),
                'ingredient' => $this->db->escape_str($ingredient),
                'quantity' => $quantity,
                'quantity_unit' => $quantity_unit
            );
            $this->db->insert('ingredient_recette', $data);
        
    }
  }
?>
