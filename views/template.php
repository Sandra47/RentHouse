<!doctype html>
<html class="no-js" lang="en">

<head>
    <!-- Basic Page Needs
    ================================================== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!-- Specific Meta
    ================================================== -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="description" content="glimmer is a modern presentation HTML5 Blog template.">
    <meta name="keywords" content="HTML5, Template, Design, Development, Blog" />
    <meta name="author" content="">

    <!-- Titles
    ================================================== -->
    <title>House Rent | Home 1</title>

    <!-- Favicons
    ================================================== -->
    <link rel="shortcut icon" href="views/assets/images/house-logo.png">
    <link rel="apple-touch-icon" href="views/assets/images/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="images/apple-touch-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="114x114" href="images/apple-touch-icon-114x114.png">

    <!-- Custom Font
    ================================================== -->
    <link
        href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i%7cPoppins:300,400,500,600,700"
        rel="stylesheet">

    <!-- CSS
    ================================================== -->
    <?php include "./views/modules/css.php"; ?>
</head>

<body>
        
       <!-- ====== Header Area ====== -->
        <?php include "./views/modules/header.php"; ?>

        <!-- content -->
        <?php
                
                require_once "./controllers/ViewsController.php";
                $IV = new ViewsController;

                $viewResult = $IV->views_controller();
                
                if($viewResult == "404"){
                    require_once "./views/content/".$viewResult."-view.php";
                }else{
                include  $viewResult;
                }
        ?>
        
        
        <!-- end content -->

        <!-- ====== Footer Area ====== -->
        <?php include "./views/modules/footer.php"; ?>
        
        <!-- All The JS Files
    ================================================== -->
        <?php include "./views/modules/Script.php"; ?>
</body>