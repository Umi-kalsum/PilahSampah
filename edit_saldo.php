<!DOCTYPE html>
<html>
<head>
    <title>Edit Saldo</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 0 auto; text-align: center; padding: 20px; background-color: #f0f0f0; }
        input[type="text"] {
            width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;
        }
        .button { margin: 5px; padding: 10px; background-color: #007BFF; color: white; border: none; cursor: pointer; text-decoration: none; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <h3>Edit Saldo</h3>
        <form action="save_saldo.php" method="POST">
            <input type="text" name="bank_name" placeholder="Bank" required>
            <input type="text" name="account_number" placeholder="No. Rekening" required>
            <button type="submit" class="button">Save</button>
            <a href="informasi_dompet.php" class="button">Back</a>
        </form>
    </div>
</body>
</html>
