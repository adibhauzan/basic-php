<?php 

if(isset($_POST["submit"])){

// cek username & password

if($_POST["username"] == "admin" && $_POST["password"] == "123"){
    header("Location: Admin.php");
    exit;
}else {
    $error = true;
}






}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

<h1>Login Admin</h1>

<?php if(isset($error)) : ?>
<p>username/password salah</p>
<?php endif; ?>
    <form action="" method="post">
        <li>
            <label for="username">Username  :</label>
            <input type="text" name="username">
        </li>
        <li>

            <label for="password">Password  :</label>
            <input type="password" name="password">
        </li>
        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>


</body>

</html>