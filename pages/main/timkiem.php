<?php

    if(isset($_POST['timkiem'])){
        $tukhoa= $_POST['tukhoa'];
       }   // }else{
    //     $tukhoa= '';
    // }
     $sql_pro="SELECT * FROM  tbl_sanpham,tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc AND tbl_sanpham.tensp LIKE '%". $tukhoa. "%' ";
     $query_pro= mysqli_query($mysqli, $sql_pro);
 
?>
   <h3>Từ khóa tìm kiếm: <?php $_POST['tukhoa']; ?></h3>
        <ul class="product_list" >
            <?php
                while($row= mysqli_fetch_array($query_pro)){
            ?>
            <li>
                <a href="index.php?quanly=sanpham&id=<?php echo $row['id_sanpham'] ?>">
                    <img src="../admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" />
                    <p class="title_product" >Tên sản phẩm: <?php echo $row['tensp'] ?> </p>
                    <p class="price_product" >Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ'  ?></p>   
                    <p style="text-align: center; color: #ddd; " ><?php echo $row['tendanhmuc'] ?></p>             
                </a>
            </li>
            <?php
            }
            ?>
               
        </ul>
               
