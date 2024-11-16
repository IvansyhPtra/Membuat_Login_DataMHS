<div class="container">
    <h1>Data Mahasiswa Baru</h1>
    <hr>
    <form action="" method="get">
        <div class="row align-items-start">
            <div class="col">
                <select class="form-select" name="filter">
                    <?php
                        $q_alamat = "SELECT alamat FROM biodata group by alamat";
                        $r_alamat = $mysqli->query($q_alamat);
                        while($data_alamat = $r_alamat->fetch_assoc()){
                            ?>
                            <option value="<?= $data_alamat['alamat'];?>"><?php echo $data_alamat['alamat'];?></option>
                            <?php
                        }
                        ?>
                </select>
            </div>
            <div class="col">
                <button class="btn btn-primary">Filter</button>
            </div>
        </div>
    </form>
    <table class="table table-striped mt-2">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Tempat Lahir</th>
            <th>Tanggal Lahir</th>
            <th>Aksi</th>
        </tr>
        <?php
        if(isset($_GET['filter'])){
            $query = "SELECT * FROM biodata WHERE alamat='$_GET[filter]'";
        }else{
            $query = "SELECT * FROM biodata";
        }
        $result = $mysqli->query($query);
        $no=0;
        while($row = $result->fetch_assoc()){
            $no++;
        ?>
            <tr>
                <td><?= $no;?></td>
                <td><?= $row['nama'];?></td>
                <td><?= $row['alamat'];?></td>
                <td><?= $row['tempat_lahir'];?></td>
                <td><?= $row['tgl_lahir'];?></td>
                <td>
                    <a href="<?= 'index.php?modul=edit-data&id='.$row['id'];?>">Edit</a>
                    <a href="<?= 'modul/biodata/proses.php?action=hapus&id='.$row['id'];?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
    <a href="index.php?modul=tambah-data">Tambah Data</a>
</div>