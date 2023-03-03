<?php
include("koneksi.php");
if(!isset($_GET['id_penerima'])){
    header("location:tampil.php");
}

$id = $_GET['id_penerima'];

$sql="SELECT * FROM tb_penerima INNER JOIN tb_bantuan ON tb_penerima.id_bantuan=tb_bantuan.id_bantuan WHERE tb_penerima.id_penerima='$id'";

$query=mysqli_query($db,$sql);

$tb_penerima=mysqli_fetch_assoc($query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Edit Data</h1>
    <table border="1">
        <form action="proses_edit.php" method="POST">
            <input type="hidden" name="id_penerima" value="<?php echo $tb_penerima['id_penerima']?>"/>
            <p>
<label for="no_bantuan">No Bantuan :</label>
<input type="number" name="no_bantuan" value="<?php echo $tb_penerima['no_bantuan']?>"/>
</p>
<p>
<label for="jenis_bantuan">Jenis Bantuan : </label>
<input type="text" name="jenis_bantuan" value="<?php echo $tb_penerima['jenis_bantuan']?>"/>
</p>
<p>
<label for="nama_penerima">Nama Penerima :</label>
<input type="text" name="nama_penerima" value="<?php echo $tb_penerima['nama_penerima']?>"/>
</p>
<p>
<label for="alamat">Alamat : </label>
<input type="text" name="alamat" value="<?php echo $tb_penerima['alamat']?>"/>
</p>
<p>
    <label for="jenis_kelamin">Jenis Kelamin : </label>
<label><input type="radio" name="jenis_kelamin" value="laki-laki"/>Laki-Laki</label>
<label><input type="radio" name="jenis_kelamin" value="perempuan"/>Perempuan</label>
</p>
<p><input type="submit" value="Tambah" name="tambah" /></p>
</from>
</table>
</body>
</html>