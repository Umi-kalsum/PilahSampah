<!DOCTYPE html>
<html>
<head>
    <title>Edit Profil</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { width: 300px; margin: 0 auto; text-align: center; padding: 20px; background-color: #f0f0f0; }
        input[type="text"], input[type="email"], input[type="password"] {
            width: 100%; padding: 8px; margin: 8px 0; border: 1px solid #ccc; border-radius: 4px;
        }
        .button { padding: 10px; background-color: #007BFF; color: white; border: none; cursor: pointer; text-decoration: none; display: inline-block; }
    </style>
</head>
<body>
    <div class="container">
        <h3>Edit Profil</h3>
        <form action="save_profile.php" method="POST">
            <input type="text" name="first_name" placeholder="First name" required>
            <input type="text" name="last_name" placeholder="Last name" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="text" name="phone" placeholder="No. Phone" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit" class="button">Save</button>
        </form>
    </div>
</body>
</html>
