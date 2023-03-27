<?php
include("mysql_connect.php");
$nis = isset($_GET['nis']) ? $_GET['nis']: '';


$sql = "SELECT * FROM profile  WHERE  nis = '$nis'";
$query = mysqli_query($server, $sql);



    if(mysqli_num_rows($query) > 0)
    {
        while($data = mysqli_fetch_assoc($query)){
        ?>
        <form action="update.php" method="get">
        <table>
        <tr>
        <td>NIS</td>
        <td><input type="number" name="nis" id="kaka" value="<?php echo $data['nis']?>"></td>
        </tr>
        <tr>
        <td>Name</td>
        <td><input type="text" name="nama" id="kaka" value="<?php echo $data['nama']?>"></td>
        </tr>
        <tr>
        <td>Alamat</td>
        <td><input type="text" name="alamat" id="kaka" value="<?php echo $data['alamat']?>"></td>
        </tr>
        <tr>
        <td>Umur</td>
        <td><input type="number" name="umur" id="kaka" value="<?php echo $data['umur']?>"></td>
        </tr>
        <tr>
        <td>Sekolah</td>
        <td><input type="text" name="sekolah" id="kaka" value="<?php echo $data['sekolah']?>"></td>
        </tr>
        <tr>
        <td>Rombel</td>
        <td><input type="text" name="rombel" id="kaka" value="<?php echo $data['rombel']?>"></td>
        </tr>
        <tr>
        <td>Rayon</td>
        <td><input type="text" name="rayon" id="kaka" value="<?php echo $data['rayon']?>"></td>
        </tr>
        <br>
        </table>
        <input type="submit" value="Perbarui">
        </form>
        <?php
        }
    }
?>
