<?php
include "koneksi.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="row bg-info p-3">
            <div class="col">
                <h2>Aplikasi Data Mahasiswa</h2>
            </div>
        </div>
        <div class="row border p-3 shadow">
            <?php
            if(!isset($_GET['modul'])){
            ?>
                <div class="col">
                    <a class="btn btn-primary" href="index.php?modul=biodata">Biodata</a>
                    <a class="btn btn-warning" href="index.php?modul=nilai">Nilai</a>
                </div>
            <?php
            }elseif($_GET['modul']=="biodata"){
                include "modul/biodata/index.php";
            }elseif($_GET['modul']=="nilai"){
                echo "Ini nilai";
            }elseif($_GET['modul']=="tambah-data"){
                include "modul/biodata/form-data.php";
            }elseif($_GET['modul']=='edit-data'){
                include "modul/biodata/form-edit.php";
            }
            ?>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>