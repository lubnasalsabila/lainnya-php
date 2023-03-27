<?php
    $conn = mysqli_connect("localhost","root", "", "db_students"); 

    function query( $query ){
        global $conn;
        $result = mysqli_query($conn, $query);
        $wadah = [];
        while( $baju = mysqli_fetch_assoc($result)) {
            $wadah[] =$baju;
        }
        return $wadah;
    }

    function tambah ($data){
        global $conn;
        //htmlspecialchars untuk blok tag elemen html
        //simpan data ke dalam variable superglobal $_POST
        $nama = htmlspecialchars($data["nama"]);
        $nis = htmlspecialchars($data["nis"]);
        $rombel = htmlspecialchars($data["rombel"]);
        $rayon = htmlspecialchars($data["rayon"]);
        $status = htmlspecialchars($data["status"]);

        // data yang disimpan di $_POST masukkan ke database
        $query = "INSERT INTO students
                  VALUES
              ('', '$nama', '$nis', '$rombel', '$rayon', '$status')
        ";
        mysqil_query($conn, $query);

        // yang akan dikembalikan nilai 1 atau -1 untuk menghasilkan pesan
        return mysqil_affected_rows($conn)
    }
   


 


