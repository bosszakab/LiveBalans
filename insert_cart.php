<?php
session_start();
include 'condb.php';

$usname = $_POST['us_name'];
$us_ad = $_POST['us_adrs'];
$usphon = $_POST['us_tel'];

$sql = "INSERT INTO tb_order (us_name, address, telephone, total_price, order_status) 
        VALUES ('$usname', '$us_ad', '$usphon', '" . $_SESSION['sum_price'] . "', '1')";
mysqli_query($conn, $sql);

$orderid = mysqli_insert_id($conn);
$_SESSION['order_id'] = $orderid;

for ($i = 0; $i <= (int)$_SESSION["intLine"]; $i++) {
    if (isset($_SESSION["strProductID"][$i]) && isset($_SESSION["strQty"][$i]) && $_SESSION["strProductID"][$i] != "") {
        $pro_id = $_SESSION["strProductID"][$i];
        $qty = $_SESSION["strQty"][$i];

        $sql1 = "SELECT * FROM product WHERE pro_id = ?";
        $stmt = $conn->prepare($sql1);
        $stmt->bind_param("s", $pro_id);
        $stmt->execute();
        $result1 = $stmt->get_result();
        $row_pro = $result1->fetch_assoc();

        if (is_numeric($row_pro['price']) && is_numeric($qty)) {
            $price = $row_pro['price'];
            $total = $qty * $price;
            $sumprice = isset($sumprice) ? $sumprice + $total : $total;
            $_SESSION['sum_price'] = $sumprice;

            // Update order detail
            $sql2 = "INSERT INTO order_detail (order_id, pro_id, orderprice, qtyorder, total) 
                     VALUES (?, ?, ?, ?, ?)";
            $stmt2 = $conn->prepare($sql2);
            $stmt2->bind_param("sssss", $orderid, $pro_id, $price, $qty, $total);
            
            if ($stmt2->execute()) {
                // Update product quantity in the database
                $sql3 = "UPDATE product SET amount = amount - ? WHERE pro_id = ?";
                $stmt3 = $conn->prepare($sql3);
                $stmt3->bind_param("ss", $qty, $pro_id);
                $stmt3->execute();
            }
        }
        echo "<script> window.location='printorder.php' </script>";
    }
}

mysqli_close($conn);
unset($_SESSION["inLine"]);
unset($_SESSION["strProductID"]);
unset($_SESSION["strQty"]);
unset($_SESSION["sum_price"]);
?>
