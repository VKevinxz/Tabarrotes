<?php
session_start();
$ActionType = $_GET['ActionType'];

if($ActionType == "Edit"){
    $ID = $_GET['id'];
    $Loc = $_GET['Loc'];
}
?>