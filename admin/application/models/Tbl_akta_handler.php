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

    // AKTA PERKAWINAN

    public function insert_akta_perkawinan_baru($arr_data = NULL, $table = "akta_perkawinan_baru")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_perkawinan_hilang($arr_data = NULL, $table = "akta_perkawinan_hilang")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_perkawinan_rusak($arr_data = NULL, $table = "akta_perkawinan_rusak")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_perkawinan_pembaruan($arr_data = NULL, $table = "akta_perkawinan_pembaruan")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    // AKTA KEMATIAN

    public function insert_akta_kematian_baru($arr_data = NULL, $table = "akta_kematian_baru")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_kematian_hilang($arr_data = NULL, $table = "akta_kematian_hilang")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_kematian_rusak($arr_data = NULL, $table = "akta_kematian_rusak")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_kematian_pembaruan($arr_data = NULL, $table = "akta_kematian_pembaruan")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    // AKTA KEMATIAN

    public function insert_akta_perceraian_baru($arr_data = NULL, $table = "akta_perceraian_baru")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_perceraian_hilang($arr_data = NULL, $table = "akta_perceraian_hilang")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_perceraian_rusak($arr_data = NULL, $table = "akta_perceraian_rusak")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_akta_perceraian_pembaruan($arr_data = NULL, $table = "akta_perceraian_pembaruan")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }
}
