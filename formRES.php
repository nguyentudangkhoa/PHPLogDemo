<?php
    if(isset($_POST['resr'])){ // kiểm kởi tạo của method có tồn tại chưa
        $iD=$_POST ['IDr']; //Gọi id ID bên Regis.php
        $Pass=$_POST['passr']; //Gọi id PASS bên Regis.php
        $Passr=$_POST['rpassr']; //Gọi id RePASS bên Regis.php
        if($iD!=null && $Pass!=null&&$Passr!=null&&$Pass==$Passr) //Kiêm tra giá trị nhập vào
        {
            echo "Success!";
            print "<li>chào mừng bạn &ensp;". $iD."<br>";
        }
        else if($Pass!=$Passr) //Kiểm tra giá trị của RePASS và PASS có giống nhau không
        {
            echo "mật khẩu nhập lại không khớp!!!!!!";
        }
        else if($iD ==null && $Pass ==null&&$Passr==null) //Kiểm tra giá trị rỗng
        {
            echo "chưa nhập tài khoản mật khẩu và mật khẩu nhập lại";
        }
        else
        {
                echo "Fail to regis!";
        }
    }else
    {
        echo "";
    }
?>