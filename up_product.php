<?php 
include 'condb.php';
$pname = $_POST['pname'];
$pid = $_POST['proid'];
$pprice = $_POST['price'];
$type = $_POST['typeID'];
$pnum = $_POST['num'];
$pro_detail = $_POST['detail'];
$pimage = $_POST['textimage'];


if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['file']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "$pimage";
    }
    $sql = "UPDATE product SET pro_name='$pname',type_id='$type',price='$pprice',amount='$pnum',pro_detail='$pro_detail',image='$new_image_name' where pro_id='$pid' ";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"<script> alert('แก้ไขข้อมูลเสร็จสิ้น') </script>";
        echo"<script> window.location='showproduct.php' </script>";
    }else{
        echo"<script> alert('เกิดข้อผิดพลาดไม่สามารถบันทึกข้อมูลได้') </script>";
    }
?>
