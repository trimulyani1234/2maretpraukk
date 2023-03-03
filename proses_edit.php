<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $id=$_POST['id_penerima'];
    $no_bantuan=$_POST['no_bantuan'];
    $jenis_bantuan=$_POST['jenis_bantuan'];
    $nama_penerima=$_POST['nama_penerima'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];

    $sql = "UPDATE tb_penerima set nama_penerima='$nama_penerima', alamat='$alamat', jenis_kelamin='$jenis_kelamin' WHERE id_penerima='$id'";
    $query = mysqli_query($db, $sql);

    $sql = "UPDATE tb_bantuan set no_bantuan='$no_bantuan', jenis_bantuan='$jenis_bantuan' WHERE id_bantuan='$id'";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    } else {
        header('location:tampil.php?status=gagal');
    }
}
?>