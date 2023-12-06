<?php
if(isset($_POST['dangky'])){
    $tenkh = $_POST['hovaten'];
    $email = $_POST['email'];
    $sdt = $_POST['sdt'];
    $matkhau = md5($_POST['matkhau']);
    $diachi = $_POST['diachi'];
    $sql_dangky = mysqli_query($mysqli, "INSERT INTO tbl_dangky(tenkh, email, diachi, matkhau, sdt) VALUE ('".$tenkh."','".$email."','".$diachi."','".$matkhau."','".$sdt."') ");
    if($sql_dangky){
        echo '<p style="color:green" >Bạn đã đăng ký thành công</p>';
        $_SESSION['dangky'] = $tenkh;        
        $_SESSION['id_kh'] = mysqli_insert_id($mysqli);

        // header('Location: index.php?quanly=giohang');
        '<script>window.location.href = "index.php?quanly=giohang";</script>'; 
        exit;
    }
   
}
?>
<p>Đăng ký thành viên</p>
<style type="text/css" >
    table.dangky tr td{
        padding: 5px;
    }
</style>
<form action="" method="POST" >
<table class="dangky" border="1" width="50%" style="border-collapse: collapse;" >
    <tr>
        <td>Họ và tên</td>
        <td><input type="text" size="50" name="hovaten" id=""></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="text" size="50" name="email" id=""></td>
    </tr>
    <tr>
        <td>Điện thoại</td>
        <td><input type="text" size="50" name="sdt" id=""></td>
    </tr>
    <tr>
        <td>Địa chỉ</td>
        <td><input type="text" size="50" name="diachi" id=""></td>
    </tr>
    <tr>
        <td>Mật khẩu</td>
        <td><input type="text" size="50" name="matkhau" id=""></td>
    </tr>
    <tr>
        <td  ><input type="submit" name="dangky" value="Đăng ký" id=""></td>
        <td><a href="index.php?quanly=dangnhap"> Đăng nhập</a></td>
    </tr>
</table>
</form>