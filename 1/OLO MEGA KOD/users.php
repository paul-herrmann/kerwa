<?php

include_once('classes/Users.class.php');

$users = new Users;

if(isset($_GET['adduser'])){
    $users->addUser($_POST['username'], md5($_POST['password']), $_POST['email'], $_POST['avatar'], $_POST['admin'], $_POST['kolor']);
}

echo '<pre>';
print_r($users->getUsers());
echo '</pre>';
?>


<form method="post" action="users.php?adduser">

    Username:<br />
    <input type="text" name="username" /><br />
    Password:<br />
    <input type="text" name="password" /><br />
    Email:<br />
    <input type="text" name="email" /><br />
    avatar:<br />
    <input type="text" name="avatar" /><br />
    admin?:<br />
    <input type="radio" name="admin" value="1" /> Tak<br />
    <input type="radio" name="admin" value="0" /> Nie<br />
    kolor (hex):<br />
    <input type="text" name="kolor" /><br />


    <input type="submit" value="dopierdol" />

</form>
