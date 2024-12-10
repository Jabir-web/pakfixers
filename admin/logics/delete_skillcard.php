<?php

include "common.php";

if (isset($_POST['sid'])) {
    $id=$_POST['sid'];
    $sql="DELETE FROM skillcards WHERE skill_id = '{$id}'";
    if (mysqli_query($connection, $sql)) {
        echo json_encode(["success" => true]);
    } else {
        echo json_encode(["success" => false, "error" => mysqli_error($connection)]);
    }
}


?>