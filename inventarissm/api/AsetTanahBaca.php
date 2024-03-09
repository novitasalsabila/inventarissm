<?php

require ('../config.php');

$query = mysqli_query($koneksi, "SELECT * FROM tb_asettanah");
$result = array();
while ($row = mysqli_fetch_array($query)){
    array_push($result, array(
        'id' => $row['id'],
        'namatanah' => $row['namatanah'],
        'statustanah' => $row['statustanah'],
        'luas' => $row['luas'],
        'nomorsertifikat' => $row['nomorsertifikat'],
        'alamat' => $row['alamat'],
        'foto' => $row['foto']
    ));
}

echo json_encode(
    array('result' => $result)
);