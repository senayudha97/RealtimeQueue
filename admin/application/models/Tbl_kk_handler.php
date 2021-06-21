<?php
include_once "Gg_model.php";

class Tbl_kk_handler extends Gg_model
{

    public function insert_kk_kehilangan($arr_data = NULL, $table = "kk_kehilangan")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_kk_rusak($arr_data = NULL, $table = "kk_rusak")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_kk_perubahan_data($arr_data = NULL, $table = "kk_perubahan_data")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_kk_pecah_1desa($arr_data = NULL, $table = "kk_pecah_1desa")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_kk_pindah_kecamatan($arr_data = NULL, $table = "kk_pindah_kecamatan")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_kk_pindah_keluar_kota($arr_data = NULL, $table = "kk_pindah_keluar_kota")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_kk_pengurangan_kematian($arr_data = NULL, $table = "kk_pengurangan_kematian")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_kk_penambahan_kedatangan($arr_data = NULL, $table = "kk_penambahan_kedatangan")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_kk_penambahan_kelahiran($arr_data = NULL, $table = "kk_penambahan_kelahiran")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }



    public function insert_kk_baru($arr_data = NULL, $table = "antrian_kk")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function delete_antrian_bulanan($param = NULL, $user = NULL)
    {
        $sql['table'] = "antrian_bulanan";
        $sql['pk'] = "pk_antrian_bulanan";
        $sql['user'] = $user;
        $sql['value'] = $param;
        $this->deleteData($sql);
    }

    public function update_antrian_bulanan($arr_data)
    {
        $this->updateData($arr_data['data'], $arr_data['pk'], 'antrian_bulanan');
    }
}
