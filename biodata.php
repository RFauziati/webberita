<html>
    <head>
        <title>BIODATA WITH METODE POST</title>
    </head>
<body>

    <form method="POST" action="proses.php">
        <label for =""> Nama: </label>
        <input type="text" name="nama_lengkap">
        <br>
        <label for ="">Tanggal Lahir: </label>
        <input type="date" name="tgl">
        

        <input type="submit" name="input" value="tampilkan ">
        
    </form>

    <!-- PROSES DALAM SATU FILE -->
    <?php
        if (isset ($_POST["input"])) {
            
            $nama= $_POST["nama_lengkap"];
            $tanggal= $_POST["tgl"];



            echo"$nama (br> $tanggal"; 
        }
    
    ?>


</body>
</html>