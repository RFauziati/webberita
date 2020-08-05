<html>
    <head>
        <title>TUGAS BIODATA METODE POST</title>
        <link rel="stylesheet" href="css/bootstrap.css">
    </head>
<body>

    <form method="POST" action="proses.php">
        <label for =""> Nama: </label>
        <input type="text" name="nama_lengkap">
        <br>

        <label for ="">Tanggal Lahir: </label>
        <input type="date" name="tgl">
        <br>
        
        <label for =""> Tempat Lahir: </label>
        <input type="text" name="tmpt">
        <br>

        <label for =""> Jenis Kelamin: </label>
        <input type="radio" name="gender"> Male
	    <input type="radio" name="gender"> Female 
	    <br>
        
        <label for =""> Hobby: </label>
        <input type="checkbox"> Membaca
	    <input type="checkbox"> Memasak
	    <input type="checkbox"> Main game
	    <input type="checkbox"> Mengcoding
	    <br>

        <label for =""> Alamat: </label>
	    <textarea name="alamat"></textarea>
        <br>

        <label for =""> Kabupaten/kota: </label>
        <select name="kabupaten">
		<option>Banda Aceh</option>
		<option>Aceh Besar</option>
		<option>Pidie</option>
		<option>Lhoksemawe</option>
		<option>Aceh Jaya</option>
		<option>Aceh Tengah</option>
		<option>Simeulue</option>
		<option>Aceh Tamiang</option>
		<option>Meulaboh</option>
	    </select>
        <br>

        <label for =""> Pendidikan: </label>
        <select name="pendidikan">
		<option>SMA</option>
		<option>D3</option>
        <option>S1</option>
        <option>S2</option>
        </select>
        <br>

        <label for =""> Pekerjaan: </label>
        <input type="text" name="pekerjaan">
        <br>

        <label for =""> Agama: </label>
        <select name="agama">
		<option>Islam</option>
		<option>Kristen</option>
        <option>Hindu</option>
        <option>Budha</option>
        </select>
        <br>

        <label for =""> Foto : </label>
        <input type="file" name="foto">
        <br>

        <label for =""> Password: </label>
        <input type="password" name="password" placeholder="masukkan password">
        <br>

        <label for =""> Username: </label>
        <input type="text" name="username" placeholder="masukkan username">
        

        <input type="submit" name="input" value="tampilkan ">
        
    </form>

    <!-- PROSES DALAM SATU FILE -->
    <?php
        if (isset ($_POST["input"])) {
            
            $nama= $_POST["nama_lengkap"];
            $tanggal= $_POST["tgl"];
            $tempatlahir= $_POST["tmpt"];
            $jeniskelamin= $_POST["gender"];
            $hobby= $_POST["hobby"];
            $alamat= $_POST["alamat"];
            $kabupaten= $_POST["kabupaten"];
            $pendidikan= $_POST["pendidikan"];
            $pekerjaan= $_POST["pekerjaan"];
            $agama= $_POST["agame"];
            $foto= $_FILES["foto"]["name"];
            if (move_uploaded_file($_FILES['foto']['tmp_name'], "img/".$_FILES['foto']['name'])) {
                    echo "Gambar berhasil diupload";
            }else {
                    echo "Gambar gagal diupload";
            };

            $password= $_POST["password"];
            $username= $_POST["username"];



            echo"$nama (br> 
                $tanggal <br>
                $tempatlahir <br>
                $jeniskelamin <br>
                $hobby <br>
                $alamat<br>
                $kabupaten <br>
                $pendidikan <br>
                $pekerjaan <br>
                $agama <br>
                <img src='img/$foto'> <br>
                $password <br>
                $username <br>";
        }
    
    ?>

    <script src="js/bootstrap.js"></script>

</body>
</html>