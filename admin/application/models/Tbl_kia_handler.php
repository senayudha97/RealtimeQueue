<?php
include_once "Gg_model.php";

class Tbl_KIA_handler extends Gg_model
{

    public function insert_KIA_pemula($arr_data = NULL, $table = "KIA_pemula")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }


    public function insert_KIA_rusak($arr_data = NULL, $table = "KIA_rusak")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_KIA_kehilangan($arr_data = NULL, $table = "KIA_kehilangan")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
