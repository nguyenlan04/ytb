<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <title>Web clothes fashion</title>
</head>
<body>
    <div class="wrapper">
    <?php
    session_start();
    include("../admincp/config/config.php");
    include("../pages/header.php");
    include("../pages/menu.php");
    include("../pages/main.php");
    include("../pages/footer.php");
    ?>      
    </div>
</body>
</html>