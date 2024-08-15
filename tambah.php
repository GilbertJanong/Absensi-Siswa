<?php
    include "koneksi.php";

    if(isset($_POST['btnSimpan']))
    {
        $nokartu = $_POST['nokartu'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];

        $simpan = mysqli_query($konek, "insert into karyawan(nokartu, nama, alamat)values('$nokartu', '$nama', '$alamat')");
        if($simpan)
        {
            echo "
                <script>
                    alert('Tersimpan');
                    location.replace('datakaryawan.php);
                </script>
            ";
        }
        else{
            echo "
                <script>
                    alert('GagalTersimpan');
                    location.replace('datakaryawan.php);
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html>
<head>
    <?php include "header.php"; ?>
    <title>Tambah Data Karyawan</title>

    <script type="text/javascript">
        $(document).ready(function(){
            setInterval(function(){
                $("#norfrid").load('nokartu.php')
            }, 0);
        });
    </script>
</head>
<body>

    <?php include "menu.php"; ?>

    <div class="container-fluid">
        <h3>Tambah Data Karyawan</h3>

        <form method="POST">
            <div id="norfid"></div>

            <div class="form-group">
                <label>Nama</label>
                <input type="text" name="nama" id="nama" placeholder="nama karyawan" class="form-control" style="width: 400 px">
            </div>
            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control" name="alamat" id="alamat" placeholder="alamat" style="width: 400 px"></textarea>
            </div>

            <button class="btn btn-primary" name="btnSimpan" id="btnSimpan">Simpan</button>
        </form>
    </div>
    <?php include "footer.php"; ?>

</body>
</html>