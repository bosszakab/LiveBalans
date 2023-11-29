<?php
ob_start();
session_start();
include 'condb.php';

if (!isset($_SESSION["intLine"])) {
    $_SESSION["intLine"] = 0;
    $_SESSION["strProductID"][0] = isset($_GET["id"]) ? $_GET["id"] : 0;
    $_SESSION["strQty"][0] = 1;
    header("location:cart.php");
    exit;
} else {
    $productId = isset($_GET["id"]) ? $_GET["id"] : 0;
    $key = array_search($productId, $_SESSION["strProductID"]);

    if ((string)$key !== "") {
        // Decrease quantity, ensuring it doesn't go below 0
        $_SESSION["strQty"][$key] = max(1, $_SESSION["strQty"][$key] - 1);
    } else {
        $_SESSION["intLine"] = $_SESSION["intLine"] + 1;
        $intNewLine = $_SESSION["intLine"];
        $_SESSION["strProductID"][$intNewLine] = $productId;
        $_SESSION["strQty"][$intNewLine] = 1;
    }

    header("location:cart.php");
    exit;
}
?>