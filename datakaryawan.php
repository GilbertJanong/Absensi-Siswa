<!DOCTYPE html>
<html>
<head>
    <?php include "header.php"; ?>
    <title>Data Karyawan</title>
</head>
<body>
    <?php include "menu.php"; ?>

    <div class="container-fluid">
    <h3>Data Karyawan</h3>
        <table class="table table-bordered">
            <thead>
                <tr style="background-color: grey; color:white">
                    <th styles="width: 10px; text-align:center">No.</th>
                    <th styles="width: 200px; text-align:center">No. Kartu</th>
                    <th styles="width: 400px; text-align:center">Nama</th>
                    <th styles="text-align:center">Alamat</th>
                    <th styles="width: 100px; text-align:center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    include "koneksi.php";

                    $sql = mysqli_query($konek, "select * from karyawan");
                    $no = 0;
                    while($data = mysqli_fetch_array($sql))
                    {
                        $no++;
                ?>

                <tr>
                    <td> <?php echo $no; ?> </td>
                    <td> <?php echo $data['nokartu']; ?> </td>
                    <td> <?php echo $data['nama']; ?> </td>
                    <td> <?php echo $data['alamat']; ?> </td>
                    <td>
                        <a href="edit.php?id=<?php echo $data['id']; ?>">
                        Edit</a> | <a href="hapus.php?id=<?php echo $data['id']; ?>">Hapus</a>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
    </table>
    <a href="tambah.php"> <button class="btn btn-primary">Tambah Data Karyawan</button></a>
    </div>
    <?php include "footer.php"; ?>
</body>
</html>