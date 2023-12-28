<?php
include('../../config/config.php');
$tensp=$_POST['tensp'];
$masp=$_POST['masp'];
$giasp=$_POST['giasp'];
$soluong=$_POST['soluong'];

//xuly hinh anh
$hinhanh= $_FILES['hinhanh']['name'];
$hinhanh_tmp= $_FILES['hinhanh']['tmp_name'];
$hinhanh= time().''.$hinhanh;

$tomtat=$_POST['tomtat'];
$noidung=$_POST['noidung'];
$tinhtrang=$_POST['tinhtrang'];
$danhmuc=$_POST['tendanhmuc']; 

if(isset($_POST['themsanpham'])){
    //them

    $sql_them="INSERT INTO tbl_sanpham(tensp, masp, giasp, soluong,hinhanh, tomtat, noidung, tinhtrang, id_danhmuc) VALUE('".$tensp."','".$masp."','".$giasp."','".$soluong."','".$hinhanh."','".$tomtat."','".$noidung."','".$tinhtrang."','".$danhmuc."' ) ";
    mysqli_query($mysqli,$sql_them);
    move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
    header('Location: ../../index.php?action=quanlysanpham&query=them');
}elseif(isset($_POST['suasanpham'])){
    //sua
    if(!empty($hinhanh= $_FILES['hinhanh']['name']    )){
    $sql_update="UPDATE tbl_sanpham SET tensp='".$tensp."', masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',hinhanh='".$hinhanh."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."',id_danhmuc='".$danhmuc."' WHERE id_sanpham='$_GET[idsanpham]'  ";
    move_uploaded_file($hinhanh_tmp, 'uploads/'.$hinhanh);
    $sql="SELECT * FROM tbl_sanpham WHERE id_sanpham = '$_GET[idsanpham]' LIMIT 1";
    $query= mysqli_query($mysqli,$sql);
    while ($row= mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }


    }else{
    $sql_update="UPDATE tbl_sanpham SET tensp='".$tensp."', masp='".$masp."',giasp='".$giasp."',soluong='".$soluong."',tomtat='".$tomtat."',noidung='".$noidung."',tinhtrang='".$tinhtrang."' WHERE id_sanpham='$_GET[idsanpham]'  ";
      
    }
    // $sql_update="UPDATE tbl_danhmuc SET tendanhmuc='".$tenloaisp."', thutu='".$thutu."' WHERE id_danhmuc='$_GET[iddanhmuc]'  ";

    mysqli_query($mysqli,$sql_update);
    header('Location: ../../index.php?action=quanlysanpham&query=them');


}else {//if(isset($_GET['query'])=='xoa'){
    $id=$_GET['idsanpham'];
    $sql="SELECT * FROM tbl_sanpham WHERE id_sanpham = '$id' LIMIT 1";
    $query= mysqli_query($mysqli,$sql);
    while ($row= mysqli_fetch_array($query)){
        unlink('uploads/'.$row['hinhanh']);
    }
  //  $id=$_GET['idsanpham'];
    $sql_xoa="DELETE FROM tbl_sanpham WHERE id_sanpham='".$id."' ";
    mysqli_query($mysqli,$sql_xoa);
    header('Location: ../../index.php?action=quanlysanpham&query=them');
}
?>