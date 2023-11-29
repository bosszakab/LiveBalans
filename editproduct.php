<?php 
include 'condb.php';
$idpro = $_GET['id'];
$sql1 = "SELECT * FROM product WHERE pro_id='$idpro'";
$result = mysqli_query($conn,$sql1);
$rs = mysqli_fetch_array($result);
$p_typeid = $rs['type_id'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Product</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-15"> <br>
            <div class="alert alert-primary h3 text-center" role="alert">
                 แก้ไขข้อมูลสินค้า
            </div>
                <form name="form1" method="post" action ="up_product.php" enctype="multipart/form-data">
                    <label>รหัสสินค้า: </label>
                    <input type="text" name="proid" class="form-control" readonly VALUE=<?=$rs['pro_id']?>> <br>
                    <label>ชื่อสินค้า: </label>
                    <input type="text" name="pname" class="form-control" VALUE=<?=$rs['pro_name']?>> <br>
                    <label>ประเภทสินค้า: </label>
                    <select class="form-select" name="typeID">
                        <?php 
                            $sql="SELECT * FROM type order by type_name";
                            $hand=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($hand)){
                                $t_typeid= $row['type_id'];
                            
                        ?>
                        <option value="<?=$row['type_id']?>"<?php if($p_typeid==$t_typeid){echo "selected=selected";} ?>><?=$row['type_name']?>
                        <?php 
                            }
                            mysqli_close($conn);
                        ?>
                    </select>
                    <label class="mt-4">ราคา: </label>
                    <input type="price" name="price" class="form-control"VALUE=<?=$rs['price']?>> <br>
                    <label>จำนวน: </label>
                    <input type="number" name="num" class="form-control" VALUE=<?=$rs['amount']?>> <br>
                    <label>รายละเอียด: </label>
                    <input type="text" name="detail" class="form-control" VALUE=<?=$rs['pro_detail']?>> <br>
                    <div class="mb-3">
                        <label for="file" class="form-label">แก้ไขรูปภาพสินค้าที่ต้องการเพิ่ม</label>
                        <input class="form-control" type="file" name="file" >
                        <input type="text" name="textimage" class="form-control" VALUE=<?=$rs['image']?>>
                    </div> 
                    <button type="submit" class="btn btn-outline-primary">ยืนยันการแก้ไข</button>
                    <a class="btn btn-outline-danger" href="showproduct.php" role="button">ยกเลิก</a>
                </form><br><br>
            </div>
        </div>

    </div>
</body>
</html>