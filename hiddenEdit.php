<?php

require_once 'functions.php';

$id = targetID();
$db = getDb();
$editSeason = filter_var($_POST['editSeason'], FILTER_VALIDATE_INT);
if (filter_var($_POST['editSeason'], FILTER_VALIDATE_INT)) {
} else {
    header('Location: index.php');
    return;
}
$editPremier = filter_var($_POST['editPremier'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$editRunnersUp = filter_var($_POST['editRunnersUp'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$editScore = filter_var($_POST['editScore'], FILTER_SANITIZE_FULL_SPECIAL_CHARS);
$editData = editData($db, $editSeason, $editPremier, $editRunnersUp, $editScore, $id);

if($editData) {
    header('Location: index.php');
}

?>