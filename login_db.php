<?php 
    session_start();
    include('server.php');

    $errors = array();

    if (isset($_POST['login_user'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);

        if (empty($username)) {
            array_push($errors, "ต้องระบุชื่อผู้ใช้");
        }

        if (empty($password)) {
            array_push($errors, "ต้องใส่รหัสผ่าน");
        }

        if (count($errors) == 0) {
            $password = md5($password);
            $query = "SELECT * FROM user WHERE username = '$username' AND PASSWORD = '$password'";
            $result = mysqli_query($conn, $query);
            
            if (mysqli_num_rows($result) == 1) {
                $_SESSION['username'] = $username;
                $_SESSION['success'] = "คุณเข้าสู่ระบบแล้ว!";
                header("location: index_logout.php");
            } else {
                array_push($errors, "ชื่อ ผู้ใช้/รหัสผ่าน ไม่ถูกต้อง");
                $_SESSION['error'] = "ชื่อ ผู้ใช้/รหัสผ่าน ไม่ถูกต้องโปรดลองอีกครั้ง";
                header("location: login.php");
            }    
        }
    }

?>