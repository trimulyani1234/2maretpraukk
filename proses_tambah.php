<?php
include("koneksi.php");
if(isset($_POST['tambah'])){
    $no_bantuan=$_POST['no_bantuan'];
    $jenis_bantuan=$_POST['jenis_bantuan'];
    $nama_penerima=$_POST['nama_penerima'];
    $alamat=$_POST['alamat'];
    $jenis_kelamin=$_POST['jenis_kelamin'];

    $sql="INSERT INTO tb_bantuan(no_bantuan,jenis_bantuan) VALUES ('$no_bantuan', '$jenis_bantuan')";
    $query=mysqli_query($db, $sql);

    $sql="SELECT max(id_bantuan) AS bantuan_id FROM tb_bantuan LIMIT 1";
    $query=mysqli_query($db, $sql);

    $data=mysqli_fetch_array($query);
    $bantuan_id=$data['bantuan_id'];

    $sql="INSERT INTO tb_penerima(id_bantuan, nama_penerima, alamat, jenis_kelamin) VALUES ('$bantuan_id', '$nama_penerima', '$alamat', '$jenis_kelamin')";
    $query = mysqli_query($db, $sql);

    if($query){
        header('location:tampil.php?status=sukses');
    } else {
        header('location:tampil.php?status=gagal');
    }
}
?>