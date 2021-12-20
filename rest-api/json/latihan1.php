<?php 

// $mahasiswa =[
//     [
//         "nama" => "Dimas Sp",
//         "nis" => "0033801279",
//         "email" => "dimas302putra@gmail.com",
//     ],
//     [
//         "nama" => "Dimas Sp",
//         "nis" => "0033801279",
//         "email" => "dimas302putra@gmail.com",
//     ]
// ];


$mysqli = new mysqli("localhost","root","","db_spp");

if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$sql = "SELECT * FROM spp";
$result = $mysqli -> query($sql);

$row = $result -> fetch_all(MYSQLI_ASSOC);

$data = json_encode($row);
echo $data;

?>