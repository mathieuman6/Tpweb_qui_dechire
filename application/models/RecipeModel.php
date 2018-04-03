<?php
class RecipeModel extends CI_Model {
    public function getAll() {
        $arr = $this->db->get('recette')->result();

        return $arr;
      }

    public function get($name) {
        $arr = $this->db->select('*')->from('recette')->where('name',$name);
        $query = $this->db->get();

        return $query->result();

    }
    public function get_ingredients() {
        $arr = $this->db->select('name')->from('ingredient');
        $query = $this->db->get();

        return $query->result_array();

    }
    public function insert($name, $text) {
        if ($this->get($name) == null) {
            $data = array(
                'name' => $this->db->escape_str($name),
                'text' => $this->db->escape_str($text)
            );
            $this->db->insert('recette', $data);
        }
    }


}
?>
