<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil Pengguna</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color:rgb(25, 177, 160);;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .profile-container {
            background-color:rgb(15, 109, 98);
            width: 400px;
            border-radius: 10px;
            padding: 20px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        .profile-header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 20px;
        }

        .profile-header .avatar {
            width: 80px;
            height: 80px;
            background-color: white;
            border-radius: 50%;
        }

        .profile-header .balance {
            background-color: white;
            border-radius: 10px;
            padding: 10px 20px;
            text-align: center;
            width: 50%;
        }

        .profile-header .balance h3 {
            margin: 0;
            font-size: 16px;
        }

        .profile-header .balance p {
            margin: 5px 0 0;
            font-size: 12px;
            color: #0000FF;
        }

        .profile-menu {
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .profile-menu .menu-item {
            background-color: white;
            padding: 15px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="profile-header">
            <div class="avatar"></div>
            <div class="balance">
                <h3>Total Saldo</h3>
                <p>Lorem Ipsum</p>
            </div>
        </div>
        <div class="profile-menu">
            <div class="menu-item"></div>
            <div class="menu-item"></div>
            <div class="menu-item"></div>
            <div class="menu-item"></div>
            <div class="menu-item"></div>
        </div>
    </div>
</body>
</html>
