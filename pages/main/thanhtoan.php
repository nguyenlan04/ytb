<?php
     session_start();
     include("../../admincp/config/config.php");
    //  require('../../mail/sendmail.php');
     $id_kh= $_SESSION['id_kh'];
     $code_order= rand(0,9999);
     $insert_cart = "INSERT INTO tbl_cart(id_kh, code_cart, cart_status) VALUE('".$id_kh."','".$code_order."',1)  ";
     $cart_query= mysqli_query($mysqli,$insert_cart);
     if($cart_query){
        //them gio hang chi tiet
        foreach($_SESSION['cart'] as $key => $value){
            $id_sp= $value['id'];
            $soluong= $value['soluong'];
            $insert_order_details= "INSERT INTO tbl_cart_details (id_sp, code_cart, soluongmua) VALUE('".$id_sp."','".$code_order."','".$soluong."')  ";
            mysqli_query($mysqli, $insert_order_details);
        }
        // $tieude= "Đặt hàng website clothes fashion thành công!";
        // $noidung= "  <div >
        //                <p> Cảm ơn quý khách đã đặt hàng. Mã đơn hàng là: ".$code_order."</p>
        //                <p></p>
        //                <p></p>
        //                <p></p>   
        //                </div>
        //                ";
        // $maildathang= $_SESSION['email'];
        // $mail = new Mailer();
        // $mail -> dathangmail($tieude, $noidung, $maildathang);
     }
     unset($_SESSION['cart']);
    header("Location: ../index.php?quanly=camon");
    // header('Location: ../../pages/main/camon.php')


     
?>