<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>DATA PENERIMA BANTUAN</h1>
    <a href="tambah.php"><input type="submit" value="tambah" /></a>
    <table border = "1">
        <tr>
            <td>No</td>
            <td>No Bantuan</td>
            <td>Jenis Bantuan</td>
            <td>Nama Penerima</td>
            <td>Alamat</td>
            <td>Jenis Kelamin</td>
            <td>Aksi</td>
</tr>

<?php
include ("koneksi.php");
$query = mysqli_query($db, "SELECT * FROM tb_bantuan INNER JOIN tb_penerima ON tb_bantuan.id_bantuan=tb_penerima.id_bantuan");
$no = 1;
foreach ($query as $row):

?>
<tr>
<td><?= $no++;?></td>
<td><?= $row['no_bantuan'];?></td>
<td><?= $row['jenis_bantuan'];?></td>
<td><?= $row['nama_penerima'];?></td>
<td><?= $row['alamat'];?></td>
<td><?= $row['jenis_kelamin'];?></td>
<td>
    <a href="hapus.php?id_penerima=<?=$row['id_penerima']; ?>">Hapus</a>
    <a href="edit.php?id_penerima=<?=$row['id_penerima']; ?>">Edit</a>
</td>
</tr>
<?php endforeach ?>
</table>
</body>
</html>