<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
</head>
<body>
    <h1>Log in</h1>
    <form action="/user/loggedin.php" method="post">
    <label for="email">Email</label><br>
        <input type="email" name="email" >
        <br><br>
        <label for="password">Choose Password</label><br>
        <input type="password" name="password" >
        <br><br>

        <input type="submit" value="Log in">
    </form>
    
</body>
</html>