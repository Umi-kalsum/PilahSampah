<form action="admin.php" method="POST" enctype="multipart/form-data">
    <label for="nama">Nama Kategori:</label>
    <input type="text" id="nama" name="nama">
    <label for="gambar">Upload Gambar:</label>
    <input type="file" id="gambar" name="gambar">
    <button type="submit" name="submit_kategori">Tambah</button>
</form>
<?php
if (isset($_POST['submit_kategori'])) {
    $nama = $_POST['nama'];
    $gambar = $_FILES['gambar']['name'];
    $target = "assets/icons/" . basename($gambar);

    move_uploaded_file($_FILES['gambar']['tmp_name'], $target);

    $query = "INSERT INTO kategori (nama, gambar) VALUES ('$nama', '$gambar')";
    $conn->query($query);
}
?>
