<?php include 'connect.php';
function base_url($param = "")
{
    return "localhost/siantrian/admin/" . $param;
}

function host()
{
    return 'localhost/siantrian';
}

function getAntrianMAx()
{
    $data = $GLOBALS['dbh']->query("SELECT maksimal_antrian from antrian_bulanan WHERE tanggal_antrian = date('Y-m-d')")->fetch();
    return $data['maksimal_antrian'];
}
