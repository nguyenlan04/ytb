
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../admincp/css/styleadmincp.css">
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

</body>
</html>