<?php
include ("koneksi.php");

$id=$_GET['id_penerima'];
$sql="DELETE FROM tb_bantuan WHERE id_bantuan='$id'";
$sql="DELETE FROM tb_penerima WHERE id_penerima='$id'";

$query=mysqli_query($db,$sql);

if($query){
    header('location:tampil.php?status=sukses');
} else {
    echo "gagal";
}
?>