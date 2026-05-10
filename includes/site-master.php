<?php



    $page = substr(basename($_SERVER['PHP_SELF']), 0, -4);



    if ($_SERVER['HTTP_HOST'] != 'localhost') {



        $baseurl = "https://herosolutions.com.pk/breera/mor-plastic/";



    } else {



        $baseurl = "http://localhost/mor-plastic/";



    }



?>







<meta charset="utf-8">



<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<meta name="title" content="Plastic Solutions for Food, Industrial, and Factory Use">

<meta name="description" content="Plastic Solutions for Food, Industrial, and Factory Use">

<meta property="og:type" content="website">

<meta property="og:url" content="<?= $baseurl ?>">

<meta property="og:title" content="Plastic Solutions for Food, Industrial, and Factory Use">

<meta property="og:description" content="Plastic Solutions for Food, Industrial, and Factory Use">

<meta property="og:image" content="<?= $baseurl ?>assets/images/logo.png">

<meta property="twitter:card" content="thumbnail">

<meta property="twitter:url" content="<?= $baseurl ?>">

<meta property="twitter:title" content="Plastic Solutions for Food, Industrial, and Factory Use">

<meta property="twitter:description" content="Plastic Solutions for Food, Industrial, and Factory Use">

<meta property="twitter:image" content="<?= $baseurl ?>assets/images/logo.png">

<!-- Css files -->



<!-- Bootstrap Css -->



<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>assets/css/bootstrap.min.css">

<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>assets/css/aos.css">


<!-- Main Css -->



<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>css/App.min.css?v=0.2">



<!-- Media-Query Css -->



<!-- commonCss Css -->



<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>assets/css/commonCss.css?v=0.2">
<link type="text/css" rel="stylesheet" href="<?= $baseurl ?>assets/css/lightgallery.min.css">
<!-- Favicon -->



<!-- <link type="image/png" rel="icon" href="<?= $baseurl ?>images/favicon.png"> -->