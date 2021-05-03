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
    $date = date('Y-m-d');
    $data = $GLOBALS['dbh']->query("SELECT maksimal_antrian from antrian_bulanan WHERE tanggal_antrian = '$date'")->fetch();

    return $data['maksimal_antrian'];
}

function gatewayApp()
{
    $date = date('Y-m-d');
    $data = $GLOBALS['dbh']->query("SELECT maksimal_antrian from antrian_bulanan WHERE tanggal_antrian = '$date'")->fetch();


    if ($data['maksimal_antrian'] == NULL) {
        $GLOBALS['dbh']->query("UPDATE core_status SET status = 0 WHERE token = '2a734c44a3a1cd46dd54450a0dab6ecc'");
        include 'blank.php';
        exit;
    } else {
        echo 0;
    }
}
