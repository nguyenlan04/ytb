<?php
  
     $sql_pro="SELECT * FROM  tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc ORDER BY tbl_sanpham.id_sanpham DESC LIMIT 25";
     $query_pro= mysqli_query($mysqli, $sql_pro);
 
?>
   <h3>Sản phẩm mới nhất</h3>
        <ul class="product_list" >
            <?php
                while($row= mysqli_fetch_array($query_pro)){
            ?>
            <li>
                <a href="">
                    <img src="../admincp/modules/quanlysp/uploads/<?php echo $row['hinhanh'] ?>" />
                    <!-- <img src="../images/002.jpg" alt=""> -->
                    <p class="title_product" >Tên sản phẩm: <?php echo $row['tensp'] ?> </p>
                    <p class="price_product" >Giá : <?php echo number_format($row['giasp'],0,',','.').'vnđ'  ?></p>   
                    <p style="text-align: center; color: #ddd; " ><?php echo $row['tendanhmuc'] ?></p>             
                </a>
            </li>
            <?php
            }
            ?>
               
        </ul>
               
