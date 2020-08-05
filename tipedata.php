<html>
    <head>
        <title>TIPE DATA PHP</title>
    </head>
<body>

    <?php
        $nim="1401102010043";
        $nama="Rozana Fauziati";
        $umur="24 ";
        $nilai=85.70;
        $status=TRUE;

        echo"NIM :".$nim."<br>";
        echo"NAMA :".$nama."<br>";
        echo"UMUR :".$umur."<br>";
        printf("Nilai : %.2f<br> " ,$nilai);

        if ($status) {
            echo"Anda Tidak Aktif";
        }else {
            echo"Anda Sedang Aktif";
        }
    ?>
    
</body>
</html>