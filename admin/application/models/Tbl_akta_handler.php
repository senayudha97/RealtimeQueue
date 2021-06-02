<?php
include_once "Gg_model.php";

class Tbl_akta_handler extends Gg_model
{

    public function insert_akta_baru($arr_data = NULL, $table = "akta_baru")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }


    public function insert_akta_rusak($arr_data = NULL, $table = "akta_rusak")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_hilang($arr_data = NULL, $table = "akta_hilang")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
