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
           }else {
            include("../pages/main/index.php");
           }
           ?>
        </div>
</div>