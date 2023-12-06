<?php
if(isset($_POST['dangnhap'])){
    $email= $_POST['email'];
    $matkhau= md5($_POST['password']);
    $sql= "SELECT * FROM tbl_dangky WHERE email='".$email."' AND matkhau='".$matkhau."' LIMIT 1  ";
    $row= mysqli_query($mysqli,$sql);
    $count= mysqli_num_rows($row);
    if($count>0){
        $row_data= mysqli_fetch_array($row);
        $_SESSION['dangky']= $row_data['tenkh'];
        $_SESSION['id_kh']= $row_data['id_dangky'];
        // header("Location: index.php?quanly=giohang ");
        echo '<script>window.location.href = "index.php?quanly=giohang";</script>';
        exit;
    }else{
        echo '<p style="color:red">Email hoặc Mật khẩu không đúng, vui lòng nhập lại</p>';
    
    }
}
?>
        <form action="" autocomplete="off" method="POST" >
        <table border="1" class="table-login" style="text-align: center; border-collapse: collapse; " >
        <tr>
            <td colspan="2" ><h3>Đăng nhập</h3></td>
        </tr>
        <tr>
            <td>Tài khoản</td>
            <td><input type="text" value="" name="email" placeholder="Email" id=""></td>
        </tr>
        <tr>
            <td>Mật khẩu</td>
            <td><input type="password" value="" name="password" placeholder="Mật khẩu" id=""></td>
        </tr>
        <tr>
            <td colspan="2" ><input type="submit" name="dangnhap" value="Đăng nhập" id=""></td>
        </tr>
    </table>
        
        </form>

