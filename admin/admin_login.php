<?php

    require_once('scripts/config.php');

    if(!empty($_POST['username']) && !empty($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

        login($username, $password);
    }

?>


<!doctype html>
<html>
<head>
	<meta charset="utf-8">
	<title>Admin Login</title>
</head>
<body>

    <form action="admin_login.php" method="POST">

        <label for="">Username
            <input type="text" name="username" value="">
        </label>
        <label for="">Password
            <input type="text" name="password">
        </label>
        <button type="submit">Login</button>

    </form>

</body>
</html>