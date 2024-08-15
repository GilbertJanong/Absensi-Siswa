<?php
    include "koneksi.php";

    $sql =mysqli_query($konek, "select * from tmprfid");
    $data = mysqli_fetch_array($sql);
?>

<div class="form-group">
    <label>No.Kartu</label>
    <input type="text" name="nokartu" id="nokartu" placeholder="nomor kartu RFID" class="form-control" style="width: 200 px" value="<?php echo $nokartu; ?>">
</div>