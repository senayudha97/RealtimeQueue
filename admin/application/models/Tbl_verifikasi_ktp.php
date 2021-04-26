<?php
include_once "Gg_model.php";

class Tbl_verifikasi_ktp extends Gg_model
{
    public function insert_antrian_bulanan($arr_data = NULL, $table = "antrian_bulanan")
    {
        foreach ($arr_data as $row) {
            $this->auto_insert($row, $table);
        }
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
