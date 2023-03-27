<?php
    require 'controller.php';
    $students = query("SELECT * FROM students");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi ke Database</title>
</head>
<body>
    <table border=10>
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIS</th>
                <th>Rombel</th>
                <th>Rayon</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ( $students as $student ) { ?> 
            <tr>
                <td><?= $student["nama"] ?></td>
                <td><?= $student["nis"] ?></td>
                <td><?= $student["rombel"] ?></td>
                <td><?= $student["rayon"] ?></td>
                <td><?= $student["status"] ?></td>
            </tr>
            <?php } ?>
        </tbody>
    </table>
</body>
</html>