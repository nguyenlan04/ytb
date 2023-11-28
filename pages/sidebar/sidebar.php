<div class="sidebar" >
                <ul class="list_sidebar" >
                <?php
 
                   $sql_danhmuc="SELECT * FROM tbl_danhmuc ORDER BY id_danhmuc DESC";
                   $query_danhmuc= mysqli_query($mysqli, $sql_danhmuc);
                   while($row= mysqli_fetch_array($query_danhmuc)){


?>
                <li><a href="index.php?quanly=danhmucsanpham&id=<?php echo $row['id_danhmuc'] ?>"><?php echo $row['tendanhmuc'] ?></a></li>
                <!-- <li><a href="index.php?quanly=danhmucsanpham&id=2">Áo thun</a></li> -->
                <!-- <li><a href="index.php?quanly=danhmucsanpham&id=3">Áo khoác</a></li> -->
                <!-- <li><a href="index.php?quanly=danhmucsanpham&id=4">Áo sơ mi</a></li> -->
                <!-- <li><a href="index.php?quanly=danhmucsanpham&id=5">Quần</a></li> -->
                <?php
                   }
                   ?>
            </ul>

            </div>
