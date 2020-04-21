<?php
//include_once 'DstabasePHPK/dbh.inc.php';
require 'dbh.inc.php'; //conect to file data dbh.inc.php
if (isset($_POST['btn'])) { //Kiểm tra giá trị của method có khởi tạo chưa không $_POST là mảng

    $ID = $_POST['ID'];  //Gọi ID bên form Untitled-3.php 
    $Pass = $_POST['pass']; //Gọi pass bên form Untitled-3.php 
    if ($ID != "" && $Pass != "") //Kiềm tra giá trị nhập vào
    {
        $sql = "SELECT USERNAME, USERPASS FROM account WHERE USERNAME=?";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            echo "Error";
        } else {
            mysqli_stmt_bind_param($stmt, "s", $ID);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);
            //$row = array();
            if ($row = mysqli_fetch_assoc($result)) {
                $pwdCheck  =  $row['USERPASS']; //Lấy username trong database
                $userCheck =  $row['USERNAME']; //lấy password trong database
                if ($ID != $userCheck && $Pass != $pwdCheck) {
                    echo "ERROR: password or user is incorect";
                } else if ($Pass == $pwdCheck) {
                    echo "Success!";
                    print "<li> chào mừng bạn &ensp;" . $ID . "<br>";
                } else {
                    echo "ERROR: password is incorect";
                }
            }else {
                echo "Sai tài khoản";
            }
        }
        mysqli_stmt_close($stmt);
    } else if ($ID == null && $Pass == null) //Kiềm tra giá trị rỗng
    {
        echo "chưa nhập tài khoản mật khẩu";
    } else {
        echo "Fail to Login!";
    }
} else {
    echo "Tài khoản sai!!!!";
}
//Tạo nút back
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <br>
    <form action="back.php" method="POST">
        <input type="submit" value="Back" name="btnBack">
    </form>
</body>

</html>