
<?php
$dbh = new PDO('mysql:host=localhost:3307;dbname=app_antrian', 'root', '');

$data = $dbh->query('SELECT * from antrian_kk')->fetchAll();

foreach ($data as $row) {
    echo $row['nama'] . "<br />\n";
}
exit;
?>
