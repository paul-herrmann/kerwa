<?php
include_once 'classes/Users.class.php';
$usr = new Users;
$usr->checkLogin();


?>

<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>wylęgarnia dupy</title>

</head>
<body>


<form method="post" action="login.php">
        <fieldset>
    <legend>Login</legend>
    Login: <input type="text" name="user" placeholder="Login"/><br />
    Hasło: <input type="password" name="pass" placeholder="Hasło" /><br />
    <input type="submit" value="dopierdol" /><br />
    
    <?=$usr->logError()?>
    
        </fieldset>
</form>

</body>
</html>


