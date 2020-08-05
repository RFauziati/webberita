<thml>
    <head>
        <title>CONTOH PERCABANGAN IF PHP</title>
    </head>

<body>

    <?php
        $nilaiquiz= 90;
        $nilaitugas=80;
        $nilaiuts=70;
        $nilaiuas=50;
    
        $nilai_akhir=((0.10*$nilaiquiz)+(0.20*$nilaitugas)+(0.30*$nilaiuts)+(0.40*$nilaiuas));
    
        echo"nilai Quiz: $nilaiquiz <br>";
        echo"nilai Tugas: $nilaitugas <br>";
        echo"nilai Uts: $nilaiuts <br>";
        echo"nilai Uas: $nilaiuas <br>";
        printf("nilai Akhir: %.2f <br>",$nilai_akhir); 
        


        if ($nilai_akhir >=85) {
            echo "Grade A";
        }elseif ($nilai_akhir >=73) {
            echo "Grade B";
        }elseif ($nilai_akhir >=65) {
            echo "Grade C";
        }elseif ($nilai_akhir >=50) {
            echo "Grade D";
        }else {
            echo "Grade E"; 
        }
        
    ?>




</body>
</thml>