<?php

require ('../config.php');

$query = mysqli_query($koneksi, "SELECT * FROM tb_asettotal");
$result = array();
while ($row = mysqli_fetch_array($query)){
    array_push($result, array(
        'id' => $row['id'],
        'nominalakhir' => $row['nominalakhir'],
        'tanggalperubahan' => $row['tanggalperubahan']
    ));
}

echo json_encode(
    array('result' => $result)
);
