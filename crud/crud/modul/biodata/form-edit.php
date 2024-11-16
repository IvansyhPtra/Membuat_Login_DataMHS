<?php
$query = "SELECT * FROM biodata WHERE id='$_GET[id]'";
$result = $mysqli->query($query);
$row = $result->fetch_assoc();
?>
<h1>Form Edit Data Mahasiswa</h1>
<form action="<?= 'modul/biodata/proses.php?action=update&id='.$row['id'];?>" method="post">
    <label for="nama">Nama</label>
    <input class="form-control" type="text" name="nama" value="<?= $row['nama'];?>" />
    <label for="alamat">Alamat</label>
    <textarea class="form-control" name="alamat"><?= $row['alamat'];?></textarea>
    <label for="tmpt_lahir">Tempat Lahir</label>
    <input class="form-control" type="text" name="tmpt_lahir" value="<?= $row['tempat_lahir'];?>" />
    <label for="tgl_lahir">Tanggal Lahir</label>
    <input class="form-control mb-1" type="date" name="tgl_lahir" value="<?= $row['tgl_lahir'];?>" />
    <button class="btn btn-primary">Update</button>
</form>


