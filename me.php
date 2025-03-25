<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>registration</h1>
    <form action="me.php" method="post">
        <input type="text" name="name" placeholder="name">
        <input type="text" name="email" placeholder="email">
        <input type="password" name="password" placeholder="password">
        <input type="submit" value="submit">
        <h2>update</h2>
    </form>
    <?php
        $name = $_POST['name'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        echo "name: $name <br> email: $email <br> password: $password";
    ?>
    
</body>
</html>