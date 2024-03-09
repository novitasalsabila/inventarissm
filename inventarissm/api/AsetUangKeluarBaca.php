<?php

require ('../config.php');

$query = mysqli_query($koneksi, "SELECT * FROM tb_asetuangkeluar");
$result = array();
while ($row = mysqli_fetch_array($query)){
    array_push($result, array(
        'id' => $row['id'],
        'nominalkeluar' => $row['nominalkeluar'],
        'tanggalkeluar' => $row['tanggalkeluar'],
        'tujuan' => $row['tujuan'],
        'keterangan' => $row['keterangan']
    ));
}

echo json_encode(
    array('result' => $result)
);