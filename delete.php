<?php

session_start();
require_once 'functions.php';

$id = targetID();
$db = getDb();
$delete = removeData($db, $id);

if($delete) {
    header('Location: index.php');
}

?>
