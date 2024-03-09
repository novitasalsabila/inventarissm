<?php

require ('../config.php');

$query = mysqli_query($koneksi, "SELECT * FROM tb_asetuang");
$result = array();
while ($row = mysqli_fetch_array($query)){
    array_push($result, array(
        'id' => $row['id'],
        'nominal' => $row['nominal'],
        'tanggal' => $row['tanggal'],
        'status' => $row['status'],
        'namadonatur' => $row['namadonatur']
    ));
}

echo json_encode(
    array('result' => $result)
);
