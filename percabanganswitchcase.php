<html>
    <head>
        <title>percabanganswitchcase</title>
    </head>
<body>

    <h1>MENENTUKAN NAMA BULAN</h1>
    <?php
        $bulan=1;
        switch ($bulan) {
            case '1':
                echo "Anda memilih bulan Januari";
                break;
            case '2':
                echo "Anda memilih bulan Februari";
                break;
            default:
                echo "Anda belum memilih";
                break;
        }
    ?>
<hr>

    <?php
        $username="admin";
        $password="1234";

        switch ($username) {
            case 'admin':
                echo "Selamat Datang Admin";
                break;
            case 'operator':
                echo "Selamat Datang Operator";
                break;

            default:
                # code...
                break;
        }
    ?>
<hr>

        



</body>
</html>