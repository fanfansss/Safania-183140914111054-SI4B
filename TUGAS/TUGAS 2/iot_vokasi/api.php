<?php

include("config.php");



$sql = "SELECT * FROM buku";
$result = array();
$query = mysqli_query($db, $sql);
 
while($row = mysqli_fetch_array($query)){
    array_push($result, array('id' => $row['id'],
    'judul' => $row['judul'],
    'harga' => $row['harga']
));
}
echo json_encode(array("result" => $result));
?>