<h1>Form Tambah Data Mahasiswa</h1>
<hr>
<form action="modul/biodata/proses.php?action=tambah" method="post">
    <label for="nama">Nama</label>
    <input class="form-control" type="text" name="nama" />
    <label for="alamat">Alamat</label>
    <textarea class="form-control" name="alamat"></textarea>
    <label for="tmpt_lahir">Tempat Lahir</label>
    <input class="form-control" type="text" name="tmpt_lahir" />
    <label for="tgl_lahir">Tanggal Lahir</label>
    <input class="form-control mb-1" type="date" name="tgl_lahir" />
    <button class="btn btn-primary">Simpan</button>
</form>

