
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admincp/css/styleadmincp.css">
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="//cdn.ckeditor.com/4.23.0-lts/standard/ckeditor.js"></script> -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script> -->
    <!-- <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script> -->
    <title>Admincp</title>
</head>
<!-- <?php
session_start();
if(!isset($_SESSION['dangnhap'])){
    header("Location: login.php");
}
?> -->
<body>
    <h3 class="title_admin" >Welcome to AdminCP</h3>
    <div class="wrapper" >
    <?php
    include("./config/config.php");
    // include("../admincp/modules/header.php");
    // include("../admincp/modules/menu.php");
    // include("../admincp/modules/main.php");
    // include("../admincp/modules/footer.php");
    include("modules/header.php");
    include("modules/menu.php");
    include("modules/main.php");
    include("modules/footer.php");
    ?>      
    </div>

    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" ></script> 
    <script src="https://cdn.ckeditor.com/ckeditor5/40.2.0/classic/ckeditor.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" ></script>
    <script src="https://cdn.ckeditor.com/4.22.1/standard/ckeditor.js"></script>
    <script>
        CKEDITOR.replace('noidung');
        CKEDITOR.replace('tomtat');
        // CKEDITOR.replace('thongtinlienhe');
    </script>

</body>
</html>