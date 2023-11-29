<?php 
include 'condb.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Product</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-sm-15"> <br>
            <div class="alert alert-primary h3 text-center" role="alert">
                 เพิ่มข้อมูลสินค้า
            </div>
                <form name="form1" method="post" action ="insert_product.php" enctype="multipart/form-data">
                    <label>ชื่อสินค้า: </label>
                    <input type="text" name="pname" class="form-control" placeholder="ใส่ชื่อสินค้า" require> <br>
                    <label>ประเภทสินค้า: </label>
                    <select class="form-select" name="typeID">
                        <?php 
                            $sql="SELECT * FROM type order by type_name";
                            $hand=mysqli_query($conn,$sql);
                            while($row=mysqli_fetch_array($hand)){

                            
                        ?>
                        <option value="<?=$row['type_id']?>"><?=$row['type_name']?>
                        <?php 
                            }
                            mysqli_close($conn);
                        ?>
                    </select>
                    <label class="mt-4">ราคา: </label>
                    <input type="price" name="price" class="form-control" placeholder="ใส่ราคา" require> <br>
                    <label>จำนวน: </label>
                    <input type="number" name="num" class="form-control" placeholder="ใสจำนวนสินค้า" require> <br>
                    <div class="mb-3">
                        <label for="file" class="form-label">เลือกรูปภาพสินค้าที่ต้องการเพิ่ม</label>
                        <input class="form-control" type="file" name="file" required>
                    </div> <br>
                    <button type="submit" class="btn btn-outline-primary">ยืนยัน</button>
                    <a class="btn btn-outline-danger" href="showproduct.php" role="button">ยกเลิก</a>
                </form>
            </div>
        </div>

    </div>
</body>
</html>