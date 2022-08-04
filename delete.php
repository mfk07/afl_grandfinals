<?php

session_start();
require_once 'functions.php';

$id = targetID();

echo '<pre>';
var_dump($id);
echo '</pre>';

/**
 * Removes selected ID from the front-end
 *
 * @param [type] $db
 * @param [type] $getID
 * @return void
 */
function removeData($db, $id) {
    $query = $db->prepare("UPDATE `grandfinals` SET `delete` = `1` WHERE `id`= '$id';");
    $query->execute();

    return $query->fetchAll();
}

echo '<pre>';
var_dump("UPDATE `grandfinals` SET `delete` = `1` WHERE `id`= ':id';");
echo '</pre>';

?>
