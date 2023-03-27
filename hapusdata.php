<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <style>
        body{
            background-color: #be9b7b; 
        }
    </style>

<?php
$nis = $_GET ["nis"];
$server = mysqli_connect("localhost", "root", "", "latihan_xpplg");
echo $nis;

$sql = "DELETE FROM profile WHERE nis = '$nis'";

$query = mysqli_query($server, $sql);
if($query) {
    echo "<center>";
    echo "Data Terhapus!";
    echo "<a href='tampil2.php'> Tampilkan Data</a> <br>";
    echo "</center>";
} else{
    echo "Gagal terhapus karna: <br>".mysqli_error($server);
}

function hapusdata($nis, $nama, $alamat) {
    include("mysql_connect.php");

$sql = "DELETE FROM profile WHERE(nis, nama, alamat) values('$nis', '$nama', '$alamat')";
$query = mysqli_query($server, $sql);
if($query){
    echo "data berhasil terhapus";
} else{
    echo "data gagal terhapus";
}
return $query;
}
?>

</body>
</html>