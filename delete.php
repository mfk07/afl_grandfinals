<?php

session_start();
require_once 'functions.php';

$id = targetID();
$db = getDb();
removeData($db, $id);

?>
