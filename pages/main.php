<div id="main" >
    <?php include("../pages/sidebar/sidebar.php") ?>

        <div class="maincontent" >
           <?php 
           if (isset($_GET['quanly'])){
            $tam= $_GET['quanly'];
           }else{
            $tam='';
           }
           
           if($tam == 'danhmucsanpham'){
            include("../pages/main/danhmuc.php");
           }elseif($tam == 'giohang'){
            include("../pages/main/giohang.php");
           }elseif($tam == 'tintuc'){
            include("../pages/main/tintuc.php");
           }elseif($tam == 'lienhe'){
            include("../pages/main/lienhe.php");
           }elseif($tam == 'sanpham'){
            include("../pages/main/sanpham.php");
           }elseif($tam == 'dangky'){
            include("../pages/main/dangky.php");
           }elseif($tam == 'thanhtoan'){
            include("../pages/main/thanhtoan.php");
           }elseif($tam == 'dangnhap'){
            include("../pages/main/dangnhap.php");
           }elseif($tam == 'timkiem'){
            include("../pages/main/timkiem.php");
           }elseif($tam == 'camon'){
            include("../pages/main/camon.php");
           }elseif($tam == 'doimatkhau'){
            include("../pages/main/doimatkhau.php");
           }
           else {
            include("../pages/main/index.php");
           }
           ?>
        </div>
</div>