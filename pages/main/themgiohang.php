<?php
session_start();
include('../../admincp/config/config.php');
//them soluong
if(isset($_GET['cong'])){
    $id= $_GET['cong'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]= array('tensanpham' => $cart_item['tensanpham'],'id'=> $cart_item['id'], 'soluong'=> $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh'=> $cart_item['hinhanh'], 'masp'=> $cart_item['masp']);
        $_SESSION['cart'] = $product;
        }else{
            $tangsoluong= $cart_item['soluong'] +1;
            if($cart_item['soluong']<9){
                $product[]= array('tensanpham' => $cart_item['tensanpham'],'id'=> $cart_item['id'], 'soluong'=> $tangsoluong, 'giasp' => $cart_item['giasp'], 'hinhanh'=> $cart_item['hinhanh'], 'masp'=> $cart_item['masp']);

            }else{
                $product[]= array('tensanpham' => $cart_item['tensanpham'],'id'=> $cart_item['id'], 'soluong'=> $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh'=> $cart_item['hinhanh'], 'masp'=> $cart_item['masp']);

            }
            $_SESSION['cart'] = $product;


    }
    }
    header('Location: ../../pages/index.php?quanly=giohang');

}
//tru so luong
if(isset($_GET['tru'])){
    $id= $_GET['tru'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]= array('tensanpham' => $cart_item['tensanpham'],'id'=> $cart_item['id'], 'soluong'=> $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh'=> $cart_item['hinhanh'], 'masp'=> $cart_item['masp']);
        $_SESSION['cart'] = $product;
        }else{
            $trusoluong= $cart_item['soluong'] - 1;
            if($cart_item['soluong']>1){
                $product[]= array('tensanpham' => $cart_item['tensanpham'],'id'=> $cart_item['id'], 'soluong'=> $trusoluong, 'giasp' => $cart_item['giasp'], 'hinhanh'=> $cart_item['hinhanh'], 'masp'=> $cart_item['masp']);

            }else{
                $product[]= array('tensanpham' => $cart_item['tensanpham'],'id'=> $cart_item['id'], 'soluong'=> $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh'=> $cart_item['hinhanh'], 'masp'=> $cart_item['masp']);

            }
            $_SESSION['cart'] = $product;


    }
    }
    header('Location: ../../pages/index.php?quanly=giohang');

}
//xoa san pham
if(isset($_SESSION['cart']) && isset($_GET['xoa']) ){
    $id= $_GET['xoa'];
    foreach($_SESSION['cart'] as $cart_item){
        if($cart_item['id']!=$id){
            $product[]= array('tensanpham' => $cart_item['tensanpham'],'id'=> $cart_item['id'], 'soluong'=> $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh'=> $cart_item['hinhanh'], 'masp'=> $cart_item['masp']);
        }
        $_SESSION['cart'] = $product;
        header('Location: ../../pages/index.php?quanly=giohang');

    }

}
//xoa tat ca
if(isset($_GET['xoatatca'])&& $_GET['xoatatca']==1){
    unset($_SESSION['cart']);
    header('Location: ../../pages/index.php?quanly=giohang');
}
//them sp vao gio
if(isset($_POST['themgiohang'])){
    // session_destroy();
    $id=$_GET['idsanpham'];
    $soluong=1;
    $sql= "SELECT * FROM  tbl_sanpham WHERE id_sanpham= '".$id."' LIMIT 1 ";
    $query= mysqli_query($mysqli, $sql);
    $row = mysqli_fetch_array($query);
    if($row){
        $new_product= array(array('tensanpham' => $row['tensp'],'id'=> $id, 'soluong'=> $soluong, 'giasp' => $row['giasp'], 'hinhanh'=> $row['hinhanh'], 'masp'=> $row['masp']));
        if(isset($_SESSION['cart'])){
            $found= false;
            foreach($_SESSION['cart'] as $cart_item){
                //neu du lieu trung
                if($cart_item['id']==$id){
                    $product[]= array('tensanpham' => $cart_item['tensanpham'],'id'=> $cart_item['id'], 'soluong'=> $soluong+1, 'giasp' => $cart_item['giasp'], 'hinhanh'=> $cart_item['hinhanh'], 'masp'=> $cart_item['masp']);
                    $found= true;

                }else{
                    //neu du lieu 0 trung
                    $product[]= array('tensanpham' => $cart_item['tensanpham'],'id'=> $cart_item['id'], 'soluong'=> $cart_item['soluong'], 'giasp' => $cart_item['giasp'], 'hinhanh'=> $cart_item['hinhanh'], 'masp'=> $cart_item['masp']);


                }
            }
            if($found== false){
                //lien ket du lieu new__product voi product
                $_SESSION['cart']= array_merge($product, $new_product);
            }else{
                $_SESSION['cart']= $product;
            }

        }else{
            $_SESSION['cart']= $new_product;
        }
    }
    header('Location: ../index.php?quanly=giohang' );
 // print_r($_SESSION['cart']);

}
?>