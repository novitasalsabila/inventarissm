<?php

require ('../config.php');

$query = mysqli_query($koneksi, "SELECT * FROM tb_asettidakbergerak");
$result = array();
while ($row = mysqli_fetch_array($query)){
    array_push($result, array(
        'id' => $row['id'],
        'nama_aset' => $row['nama_aset'],
        'jenis_aset' => $row['jenis_aset'],
        'tanggal_masuk' => $row['tanggal_masuk'],
        'foto' => $row['foto']
    ));
}

echo json_encode(
    array('result' => $result)
);