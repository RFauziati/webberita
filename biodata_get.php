<html>
    <head>
        <title>BIODATA WITH METODE GET</title>
    </head>
<body>

    <form method="GET" action="proses.php">
        <label for =""> Nama: </label>
        <input type="text" name="nama_lengkap">
        <br>
        <label for ="">Tanggal Lahir: </label>
        <input type="date" name="tgl">
        

        <input type="submit" name="input" value="tampilkan ">
        
    </form>

    <!-- PROSES DALAM SATU FILE -->
    <?php
        if (isset ($_GET["input"])) {
            
            $nama= $_GET["nama_lengkap"];
            $tanggal= $_GET["tgl"];



            echo"$nama (br> $tanggal"; 
        }
    
    ?>


</body>
</html>