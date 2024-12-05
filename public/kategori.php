<!DOCTYPE html>
<html>
<head>
    <title><?= $kategori['nama']; ?></title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Kategori: <?= $kategori['nama']; ?></h1>
    </header>
    <section class="items">
        <?php foreach ($items as $item): ?>
        <div class="item">
            <a href="item.php?id=<?= $item['id']; ?>">
                <img src="assets/images/<?= $item['gambar']; ?>" alt="<?= $item['nama']; ?>">
                <p><?= $item['nama']; ?></p>
            </a>
        </div>
        <?php endforeach; ?>
    </section>
</body>
</html>
<?php
include 'php/db.php';

$kategori_id = $_GET['id'] ?? 0;
$query_kategori = "SELECT * FROM kategori WHERE id = $kategori_id";
$result_kategori = $conn->query($query_kategori);
$kategori = $result_kategori->fetch_assoc();

$query_items = "SELECT * FROM item WHERE kategori_id = $kategori_id";
$result_items = $conn->query($query_items);

$items = [];
while ($row = $result_items->fetch_assoc()) {
    $items[] = $row;
}
?>
