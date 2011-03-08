<?php

include_once 'classes/Users.class.php';
include_once 'classes/Posts.class.php';
$post = new Posts;
$user = new Users;
$user->checkIfLogged();


$u = $_SESSION['user'];

//$db = new Db(DBASE);
//$db->exec("UPDATE ".USER_TBL." SET last_visit=datetime() WHERE username='".$_SESSION['user']['username']."' AND password='".$_SESSION['user']['password']."'");

?>



<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="utf-8" />
<title>wylęgarnia dupy</title>

</head>
<body>

<pre>
<? print_r($_SESSION)?>
</pre>

<p style="color: #<?=$u['kolor']?>; font-weight: bold;">
<?=$u['username']?></p><br />

<a href=logout.php>Wyloguj</a><br />

<form action="post.php<?=$post->getReply_To();?>" method="POST" enctype="multipart/form-data">
    
    <textarea name="txt" rows="4" cols="20"></textarea>
    <input type="submit" value="dopierdol" />
</form><br />


Posty:<br />

<?

foreach($user->getUsers() as $k => $v){
    $usrArr[$v['id']] = $v['username'];
}


echo '<br /><br /><br />';

$replies = $post->getReplies();
foreach($post->getPosts() as $v){ ?>

<?=$v['postID']?> | <?=$usrArr[$v['userID']]?> | <?=$v['timestamp']?><br />
<?=$v['txt']?><br />
<a href="index.php?reply_to=<?=$v['timestamp']?>">Odpowiedz</a><br />

odpowiedzi:<br />

<?foreach($replies as $z){ 
    if($v['timestamp'] == $z['reply_to']){
    ?>
<?=$z['postID']?> | <?=$usrArr[$z['userID']]?> | <?=$z['timestamp']?><br />
<?=$z['txt']?><br />


<? }}?>
<hr />
 <? }?>



</body>
</html>