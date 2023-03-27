<?php
//array assosiatif
    $loves=[
    [   "name"=>"lubna",
        //"Q"    "Value"
        "Umur"=>"15 tahun",
        "nis"=>"12209428",
        "status"=>"Pelajar",
        "image"=>"5.jpg"
    ],
    [
        "name"=>"hana",
        "Umur"=>"16 tahun",
        "nis"=>"12209035",
        "status"=>"Pelajar",
        "image"=>"4.jpeg"
    ],
    [
        "name"=>"rainy",
        "Umur"=>"16 tahun",
        "nis"=>"12209358",
        "status"=>"Pelajar",
        "image"=>"3.jpg"
    ],
    [
        "name"=>"bergish",
        "Umur"=>"15 tahun",
        "nis"=>"12208940",
        "status"=>"Pelajar",
        "image"=>"6.jpg"
    ]
    ]
?>
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
            background-color: #9c7248 ;
        }
        table{
            margin-right:auto;
            margin-left:auto;
            background-color: #634014;
        }
        table tr td{
           padding-right: 35px;
           background-color: #6f4f1d;
           font-size: 20px;
        }
        th{
            background-color: #af8e6c;
            font-size: 25px;
        }
        img{
            width: 100px;
            hight: 100px;
            border-radius: 40px;
        }
    </style>
    <table border="3">
            <tr>
                <th>Nama: </th>
                <th>Umur: </th>
                <th>nis: </th>
                <th>status: </th>
                <th>image: </th>
            </tr>
            <?php foreach($loves as $love){ ?>
            <tr>
                <td><?php echo $love ["name"]?></td>
                <td><?php echo $love ["Umur"]?></td>
                <td><?php echo $love ["nis"]?></td>
                <td><?php echo $love ["status"]?></td>
                <td><img src="img/<?php echo $love ["image"]?>"></td>
            </tr>
    
    <?php } ?>
    </table>


</body>
</html>
    




