<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="plugin/bs5/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/body.css">
    <title>Makhen Studio</title>
</head>
<body>
    
    <!-- Begin Card Header -->
    <?php include_once 'template/header.php' ?>
    <!-- End Card Header -->

    <!-- Begin Navbar -->
    <?php include_once 'template/navbar.php' ?>
    <!-- End Navbar -->

    <!-- Begin Content -->
    <?php
        $page = isset($_GET["page"]);
        if ($page == "about") {
            include_once 'content/about.php';
        } else if ($page == "paketwedding") {
            include_once 'content/paketwedding.php';
        }
    ?>
    <!-- End Content -->

    <!-- Begin Navbar -->
    <?php include_once 'template/footer.php' ?>
    <!-- End Navbar -->

    <script src="plugin/bs5/dist/js/bootstrap.min.js"></script>
</body>
</html>