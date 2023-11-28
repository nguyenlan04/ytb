<?php
  
    $sql_pro="SELECT * FROM  tbl_sanpham WHERE tbl_sanpham.id_danhmuc= '$_GET[id]' ORDER BY id_sanpham DESC";
    $query_pro= mysqli_query($mysqli, $sql_pro);
    //get ten danh muc
    $sql_cate="SELECT * FROM  tbl_danhmuc WHERE tbl_danhmuc.id_danhmuc= '$_GET[id]'  LIMIT 1";
    $query_cate= mysqli_query($mysqli, $sql_cate);
    $row_title= mysqli_fetch_array($query_cate);
  
?>
<h3>Danh mục sản phẩm: <?php echo $row_title['tendanhmuc'] ?></h3>
               <ul class="product_list" >
                <?php
                while($row_pro= mysqli_fetch_array($query_pro)){

                ?>
                <li>
                    <a href="">
                    <img src="admincp/modules/quanlysp/uploads/<?php echo $row_pro['hinhanh'] ?>" >
                    <p class="title_product" >Tên sản phẩm: <?php echo $row_pro['tensp'] ?> </p>
                    <p class="price_product" >Giá sản phẩm: <?php echo number_format($row_pro['giasp'],0,',','.').'vnđ'  ?></p>
                    
                    </a>
                    </li>
                <!-- <li>
                    <img src="../images/002.jpg" >
                    <p class="title_product" >Tên sản phẩm: Đầm tiểu thư dáng xòe tay phồng chiết eo </p>
                    <p class="price_product" >Giá sản phẩm: 180,000 vnđ</p>
                </li>
                <li>
                    <img src="../images/003.jpg" >
                    <p class="title_product" >Tên sản phẩm: Đầm váy gấm dáng xoè </p>
                    <p class="price_product" >Giá sản phẩm: 180,000 vnđ</p>
                </li>
                <li>
                    <img src="../images/004.jpg" >
                    <p class="title_product" >Tên sản phẩm: Đầm cổ tròn tay bồng đính đá </p>
                    <p class="price_product" >Giá sản phẩm: 200,000 vnđ</p>
                </li>
                <li>
                    <img src="../images/005.jpg" >
                    <p class="title_product" >Tên sản phẩm: Đầm dự tiệc cánh tiên sang chảnh  </p>
                    <p class="price_product" >Giá sản phẩm: 180,000 vnđ</p>
                </li>
                <li>
                    <img src="../images/006.jpg" >
                    <p class="title_product" >Tên sản phẩm: Đầm dáng xòe phối voan </p>
                    <p class="price_product" >Giá sản phẩm: 175,000 vnđ</p>
                </li>
                <li>
                    <img src="../images/007.jpg" >
                    <p class="title_product" >Tên sản phẩm: Đầm xòe dự tiệc ren tay bồng </p>
                    <p class="price_product" >Giá sản phẩm: 250,000 vnđ</p>
                </li>
                <li>
                    <img src="../images/008.jpg" >
                    <p class="title_product" >Tên sản phẩm: Váy trắng dự tiệc </p>
                    <p class="price_product" >Giá sản phẩm: 290,000 vnđ</p>
                </li>
                <li>
                    <img src="../images/009.jpg" >
                    <p class="title_product" >Tên sản phẩm: váy trắng dáng xòe tiểu thư </p>
                    <p class="price_product" >Giá sản phẩm: 200,000 vnđ</p>
                </li>
                <li>
                    <img src="../images/010.jpg" >
                    <p class="title_product" >Tên sản phẩm: Seavy Dress dáng xoè siêu xinh </p>
                    <p class="price_product" >Giá sản phẩm: 275,000 vnđ</p>
                </li> -->
                <?php
                }
                ?>
            </ul>
               
