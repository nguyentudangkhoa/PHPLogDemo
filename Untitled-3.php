<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LOGIN</title>
</head>
<body>
    <h1>Đăng nhập</h1>
    <form action="xulyform.php" method="POST">
        <label for="User Name"> User Name:</label><input type="text" name="ID"/><br><br>
        <label for ="password">Password:</label>&ensp;<input type="password" name="pass"/><br><br>
        <input type="submit" name="btn" value="submit" /> <br>
    </form><br>
    <input type="submit" name="res" value="register" onClick="parent.open('Regis.php')" /> &ensp;
</body>
</html>