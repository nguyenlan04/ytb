<p>Welcome to dashboard</p>
<?php 
           if (isset($_GET['action'])){
            $tam= $_GET['action'];
           }else{
            $tam='';
           }
           
           if($tam == 'quanlydanhmucsanpham'){
            include("../pages/main/danhmuc.php");
            }else{
            // include("../pages/main/index.php");
            //  include("modules/dashboard.php");
            
                // include(dirname(__FILE__) . "../../modules/dashboard.php");
           }
           ?>
           