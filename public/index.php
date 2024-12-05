<!DOCTYPE html>
<html>
<head>
    <title>Pilah Sampah</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>Pilah Sampah</h1>
    </header>
    <section class="categories">
        <?php foreach ($kategori as $kat): ?>
        <div class="category">
            <a href="kategori.php?id=<?= $kat['id']; ?>">
                <img src="assets/icons/<?= $kat['gambar']; ?>" alt="<?= $kat['nama']; ?>">
                <p><?= $kat['nama']; ?></p>
            </a>
        </div>
        <?php endforeach; ?>
    </section>
</body>
</html>
<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__.'/../bootstrap/app.php')
    ->handleRequest(Request::capture());
