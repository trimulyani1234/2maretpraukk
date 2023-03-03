<!DOCTYPE html>
<html lang="en">
<head>
    <title>tambah data</title>
</head>
<body>
    <h1>Tambah Data Penerima</h1>
    <table border="0">
    <form action="proses_tambah.php" method="POST">
    <p>
<label for="no_bantuan">No Bantuan :</label>
<input type="number" name="no_bantuan" />
</p>
<p>
<label for="jenis_bantuan">Jenis Bantuan : </label>
<input type="text" name="jenis_bantuan" />
</p>
<p>
<label for="nama_penerima">Nama Penerima :</label>
<input type="text" name="nama_penerima" />
</p>
<p>
<label for="alamat">Alamat : </label>
<input type="text" name="alamat" />
</p>
<p>
    <label for="jenis_kelamin">Jenis Kelamin : </label>
<label><input type="radio" name="jenis_kelamin" value="laki-laki"/>Laki-Laki</label>
<label><input type="radio" name="jenis_kelamin" value="perempuan"/>Perempuan</label>
</p>

<p><input type="submit" value="Tambah" name="tambah" /></p>

</table>
</body>
</html>