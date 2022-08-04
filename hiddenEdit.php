<?php

session_start();
require_once 'functions.php';

$id = targetID();
$db = getDb();
$edit = editData($db, $editSeason, $editPremier, $editRunnersUp, $editScore, $id);
$editSeason = filter_var($_POST['editSeason'], FILTER_VALIDATE_INT);
$editPremier = filter_var($_POST['editPremier'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$editRunnersUp = filter_var($_POST['editRunnersUp'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$editScore = filter_var($_POST['editScore'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
editData($db, $editSeason, $editPremier, $editRunnersUp, $editScore, $id) 

if($edit) {
    header('Location: index.php');
}


?>