<?php
     session_start();
     include("../../admincp/config/config.php");
     $id_kh= $_SESSION['id_kh'];
     $code_order= rand(0,9999);
     $insert_cart = "INSERT INTO tbl_cart(id_kh, code_cart, cart_status) VALUE('".$id_kh."','".$code_order."',1)  ";
     $cart_query= mysqli_query($mysqli,$insert_cart);
     if($cart_query){
        //them gio hang chi tiet
        foreach($_SESSION['cart'] as $key => $value){
            $id_sp= $value['id'];
            $soluong= $value['soluong'];
            $insert_order_details= "INSERT INTO tbl_cart_details (id_sp, code_cart, soluong) VALUE('".$id_sp."','".$code_order."','".$soluong."')  ";
            mysqli_query($mysqli, $insert_order_details);
        }
     }
     unset($_SESSION['cart']);
    header("Location: ../index.php?quanly=camon");
    // header('Location: ../../pages/main/camon.php')


     
?>