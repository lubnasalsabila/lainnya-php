<!DOCTYPE html>
<html lang="en">
<head>
    <title>tampil</title>
    <style>
        body{
            background-color: #be9b7b;
            text-align: center;
        }
        tr{
            background-color: #a3827c;
        }
       
        
    </style>
</head>
<body>
    <form method="post" action="index.php">
    <h1 align=center>Data siswa</h1>
    <table border=1 align=center>
        <th> Nis </th>
        <th> Nama </th>
        <th> Alamat </th>
        <th> umur </th>
        <th> sekolah </th>
        <th> rombel </th>
        <th> rayon </th>
        <th> Aksi </th>
   
    <?php

    $server = mysqli_connect("localhost", "root", "", "latihan_xpplg");
    
    // if ($server) {
    //     echo "berhasil hore! <br>";
    // } else {
    //     echo "gagal:(";
    // }
    $sql = "SELECT * FROM profile";
    $query = mysqli_query($server, $sql);

    if(mysqli_num_rows($query) > 0)
    {
        while($data = mysqli_fetch_assoc($query)){
        ?>
        <tr>
            <td><?php echo $data["nis"]; ?></td>
            <td><?php echo $data["nama"]; ?></td>
            <td><?php echo $data["alamat"]; ?></td>
            <td><?php echo $data["umur"]; ?></td>
            <td><?php echo $data["sekolah"]; ?></td>
            <td><?php echo $data["rombel"]; ?></td>
            <td><?php echo $data["rayon"]; ?></td>
            <td><b><a href="tampilUpdate.php?nis=<?php echo $data['nis'] ?>">Edit</a></b>
             | <b><a href="hapusdata.php?nis=<?php echo $data['nis'] ?>">Hapus</a></b></td>
            </tr>
        <?php
        }
    }else{
        echo "Data dalam tabel <b> profile</b> kosong!";
    }

    //menutup koneksi
    mysqli_close($server);
?>
</table>
<input type="submit" value="input kembali"><br>
<button><a href="tampil.php">kembali</a></button>
</body>
</html>
