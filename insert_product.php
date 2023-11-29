<?php
include 'condb.php';
$pro_name = $_POST['pname'];
$typeID = $_POST['typeID'];
$price = $_POST['price'];
$num = $_POST['num'];
$pro_detail = $_POST['detail'];
//อัพภาพ
if (is_uploaded_file($_FILES['file']['tmp_name'])) {
    $new_image_name = 'pro_'.uniqid().".".pathinfo(basename($_FILES['file']['name']), PATHINFO_EXTENSION);
    $image_upload_path = "./image/".$new_image_name;
    move_uploaded_file($_FILES['file']['tmp_name'],$image_upload_path);
    } else {
    $new_image_name = "";
    }

    //เพิ่มข้อมูล
    $sql="INSERT INTO product(pro_name,type_id,price,amount,pro_detail,image) VALUES('$pro_name','$typeID','$price','$num','$pro_detail','$new_image_name')";
    $result=mysqli_query($conn,$sql);
    if($result){
        echo"<script> alert('บันทึกข้อมูลเรียบร้อย') </script>";
        echo"<script> window.location='addproduct.php' </script>";
    }else{
        echo"<script> alert('เกิดข้อผิดพลาดไม่สามารถบันทึกข้อมูลได้') </script>";
    }

?>