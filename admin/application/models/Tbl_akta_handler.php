<?php
include_once "Gg_model.php";

class Tbl_akta_handler extends Gg_model
{

    public function insert_akta_kelahiran_baru($arr_data = NULL, $table = "akta_kelahiran_baru")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_kelahiran_hilang($arr_data = NULL, $table = "akta_kelahiran_hilang")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_kelahiran_rusak($arr_data = NULL, $table = "akta_kelahiran_rusak")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_kelahiran_pembaruan($arr_data = NULL, $table = "akta_kelahiran_pembaruan")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
