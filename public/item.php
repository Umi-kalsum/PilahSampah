<!DOCTYPE html>
<html>
<head>
    <title><?= $item['nama']; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1><?= $item['nama']; ?></h1>
    </header>
    <section>
        <img src="assets/images/<?= $item['gambar']; ?>" alt="<?= $item['nama']; ?>">
        <p><?= $item['deskripsi']; ?></p>
    </section>
</body>
</html>
<?php
include 'php/db.php';

$item_id = $_GET['id'] ?? 0;
$query_item = "SELECT * FROM item WHERE id = $item_id";
$result_item = $conn->query($query_item);
$item = $result_item->fetch_assoc();
?>
