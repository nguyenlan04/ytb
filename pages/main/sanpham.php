<p>Chi tiết sản phẩm</p>
<?php
  
     $sql_chitiet="SELECT * FROM  tbl_sanpham, tbl_danhmuc WHERE tbl_sanpham.id_danhmuc= tbl_danhmuc.id_danhmuc AND tbl_sanpham.id_sanpham= '$_GET[id]'  LIMIT 1";
     $query_chitiet= mysqli_query($mysqli, $sql_chitiet);
     while($row_chitiet= mysqli_fetch_array($query_chitiet)){
 
?>
<div class="wrapper_chitiet" >
<div class="hinhanh_sanpham" >
    <img width="100%" src="../admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>"  alt="">
</div>
<form method="POST" action="../pages/main/themgiohang.php?idsanpham=<?php echo $row_chitiet['id_sanpham'] ?>">
  <div  class="chitiet_sanpham">
    <h3 style="margin: 0;" ><?php echo $row_chitiet['tensp'] ?></h3>
    <p>Mã sp: <?php echo $row_chitiet['masp'] ?></p>
    <p>Giá: <?php echo number_format($row_chitiet['giasp'],0,',','.').'vnđ'  ?></p>
    <p>Số lượng: <?php echo $row_chitiet['soluong'] ?></p>
    <p>Danh mục: <?php echo $row_chitiet['tendanhmuc'] ?></p>
    <!-- <p>Thông tin sản phẩm : <?php echo $row_chitiet['noidung'] ?></p> -->
    <p><input class="themgiohang" type="submit" value="Thêm giỏ hàng  " name="themgiohang" id=""></p>
 
</div>      
</form>

</div>
<div class="clear" ></div>
<div class="tabs">
  <ul id="tabs-nav">
    <li><a href="#tab1">Thông tin  chi tiết</a></li>
    <!-- <li><a href="#tab2">Hình ảnh</a></li> -->
    <!-- <li><a href="#tab3">Randall</a></li>
    <li><a href="#tab4">Jay</a></li> -->
  </ul> <!-- END tabs-nav -->
  <div id="tabs-content">
    <div id="tab1" class="tab-content">
    <?php echo $row_chitiet['noidung'] ?>
   </div>
    <!-- <div id="tab2" class="tab-content">
    <img width="100%" src="../admincp/modules/quanlysp/uploads/<?php echo $row_chitiet['hinhanh'] ?>"  alt="">

    </div> -->
    <!-- <div id="tab3" class="tab-content">
      <h2>Randall Graves</h2>
      <p>"In light of this lurid tale, I don't even see how you can romanticize your relationship with Caitlin. She broke your heart and inadvertently drove men to deviant lifestyles."</p>
    </div>
    <div id="tab4" class="tab-content">
      <h2>Jay</h2>
      <p>"I don't care if she's my cousin or not, I'm gonna knock those boots again tonight."</p>
    </div> -->
  </div> <!-- END tabs-content -->
</div> <!-- END tabs -->

<?php
     }
?>