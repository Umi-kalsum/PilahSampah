<!DOCTYPE html>
<html>
<head>
    <title>Informasi Dompet</title>
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
        <h3>Informasi Dompet</h3>
        <form action="edit_saldo.php" method="GET">
            <select name="bank_name" required>
                <option value="" disabled selected>Pilih Bank</option>
                <option value="BCA">BCA</option>
                <option value="Mandiri">Mandiri</option>
                <option value="BNI">BNI</option>
            </select>
            <input type="text" name="account_number" placeholder="No. Rekening" required>
            <input type="text" name="saldo" placeholder="Saldo" disabled value="0">
            <button type="submit" class="button">Edit</button>
            <a href="index.php" class="button">Back</a>
        </form>
    </div>
</body>
</html>
