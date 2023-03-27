<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
include("mysql_connect.php");

$nis2 = $_GET['nis'];

$nis = isset($_GET['nis'])? $_GET['nis']: '';
$nama = isset($_GET['nama'])? $_GET['nama']: '';
$alamat = isset($_GET['alamat'])? $_GET['alamat']: '';
$umur = isset($_GET['umur'])? $_GET['umur']: '';
$sekolah = isset($_GET['sekolah'])? $_GET['sekolah']: '';
$rombel = isset($_GET['rombel'])? $_GET['rombel']: '';
$rayon = isset($_GET['rayon'])? $_GET['rayon']: '';

echo $nis2;

$sql = "UPDATE `profile` SET `nama`='$nama',`rombel`='$rombel',`alamat`='$alamat',`umur`='$umur',`sekolah`='$sekolah',`rayon`='$rayon' WHERE nis = '$nis' ";

$query = mysqli_query($server, $sql);

?>
</body>
</html>
