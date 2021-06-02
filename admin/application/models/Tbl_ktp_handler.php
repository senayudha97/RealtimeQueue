<?php
include_once "Gg_model.php";

class Tbl_ktp_handler extends Gg_model
{

    public function insert_ktp_pemula($arr_data = NULL, $table = "ktp_pemula")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_ktp_kehilangan($arr_data = NULL, $table = "ktp_kehilangan")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }

    public function insert_ktp_rusak($arr_data = NULL, $table = "ktp_rusak")
    {
        $this->db->insert($table, $arr_data);
        return ($this->db->affected_rows() != 1) ? false : true;
    }




    public function insert_ktp_baru($arr_data = NULL, $table = "antrian_ktp")
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
