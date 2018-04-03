<?php
class IngredientModel extends CI_Model
{

  public function getAll() {
      $arr = $this->db->get('ingredient')->result();

      return $arr;
    }
    public function get($name) {
        $arr = $this->db->select('*')->from('ingredient')->where('name',$name);
        $query = $this->db->get();

        return $query->result_array();

    }
    public function get_ingredients() {
        $arr = $this->db->select('name')->from('ingredient');
        $query = $this->db->get();

        return $query->result_array();

    }
    public function insert($name) {
        if ($this->get($name) == null) {
            $data['name'] = $this->db->escape_str($name);
            $this->db->insert('ingredient', $data);
        }
    }
}
 ?>
