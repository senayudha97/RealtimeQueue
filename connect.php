
<?php
$dbh = new PDO('mysql:host=localhost:3307;dbname=app_antrian', 'root', '');
global $dbh;

$data = $dbh->query("SELECT * from core_status WHERE token = '2a734c44a3a1cd46dd54450a0dab6ecc'")->fetch();

if ($data['status'] == 0) {
    include 'blank.php';
    exit;
}
?>
