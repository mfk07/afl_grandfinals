<?php

require_once 'functions.php';

$id = targetID();
$db = getDb();
$editSeason = filter_var($_POST['editSeason'], FILTER_VALIDATE_INT);
if (filter_var($_POST['editSeason'], FILTER_VALIDATE_INT)) {
    echo $editSeason;
} else {
    echo ("You need to enter a year (e.g. 1985). Go back to try again.");
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