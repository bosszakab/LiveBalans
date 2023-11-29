<?php 
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Show Product</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="alert alert-primary h3 text-center" role="alert">
                ข้อมูลสินค้า
         </div>
         <a class="btn btn-outline-success mb-3" href="addproduct.php" role="button">เพิ่มข้อมูลสินค้า</a>
         <a class="btn btn-outline-primary mb-3" href="admin/showproad.php" role="button">กลับหน้าคลังสินค้า</a>
            <table class="table table-bordered border-primary">
            <tr >
                <th>รหัสสินค้า</th>
                <th>ชื่อสินค้า</th>
                <th>ประเภทสินค้า</th>
                <th>ราคา</th>
                <th>จำนวน</th>
                <th>รูปภาพ</th>
                <th>แก้ไขข้อมูล</th>

            </tr>
            <?php 
                $sql="SELECT * FROM product,type where product.type_id = type.type_id";
                $hand = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($hand)){

                
            ?>
            <tr>
                <td class="text-center"><?=$row['pro_id']?></td>
                <td class="text-center"><?=$row['pro_name']?></td>
                <td class="text-center"><?=$row['type_name']?></td>
                <td class="text-end"><?=$row['price']?></td>
                <td class="text-center"><?=$row['amount']?></td>
                <td><img src="image/<?=$row['image']?> "width="150px" hieght="100px" class="rounded mx-auto d-block"></td>
                <td><a class="btn btn-outline-success d-grid gap-2 col-6 mx-auto mt-5" href="editproduct.php?id=<?=$row['pro_id']?>">แก้ไข</a></td>
            </tr>
            <?php 
                 }
                 mysqli_close($conn);
            ?>
        </table>
    </div>
    
</body>
</html>