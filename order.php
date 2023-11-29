<?php
ob_start();
session_start();
include 'condb.php';

// Check if $_SESSION["intLine"] is not set
if (!isset($_SESSION["intLine"])) {
    $_SESSION["intLine"] = 0;
}

// Check if $_SESSION["strProductID"] is not set or is not an array
if (!isset($_SESSION["strProductID"]) || !is_array($_SESSION["strProductID"])) {
    $_SESSION["strProductID"] = array();
}

// Check if $_SESSION["strQty"] is not set or is not an array
if (!isset($_SESSION["strQty"]) || !is_array($_SESSION["strQty"])) {
    $_SESSION["strQty"] = array();
}

// Your existing logic
$key = array_search($_GET["id"], $_SESSION["strProductID"]);
if ((string)$key != "") {
    $_SESSION["strQty"][$key] = $_SESSION["strQty"][$key] + 1;
} else {
    $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
    $intNewLine = $_SESSION["intLine"];
    $_SESSION["strProductID"][$intNewLine] = $_GET["id"];
    $_SESSION["strQty"][$intNewLine] = 1;
}

header("location:cart.php");
?>
