<?php
include "../../koneksi.php";
if($_GET['action']=="tambah"){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmpt_lahir = $_POST['tmpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $query = "INSERT INTO biodata (nama,alamat,tempat_lahir,tgl_lahir) VALUES('$nama','$alamat','$tmpt_lahir','$tgl_lahir')";
    $mysqli->query($query);
    header('location:../../index.php?modul=biodata');
}elseif($_GET['action']=="update"){
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $tmpt_lahir = $_POST['tmpt_lahir'];
    $tgl_lahir = $_POST['tgl_lahir'];
    $query = "UPDATE biodata set 
        nama='$nama', 
        alamat='$alamat', 
        tempat_lahir='$tmpt_lahir',
        tgl_lahir='$tgl_lahir'
        WHERE id='$_GET[id]'
        ";
    $mysqli->query($query);
    header('location:../../index.php?modul=biodata');
}elseif($_GET['action']=="hapus"){
    $query = "DELETE FROM biodata where id='$_GET[id]'";
    $mysqli->query($query);
    header('location:../../index.php?modul=biodata');
}