<?php

include 'classes/Db.class.php';
include 'inc/config.inc.php';

$db = new Db(DBASE);
echo $db->escape('kutasidlo');


?>
