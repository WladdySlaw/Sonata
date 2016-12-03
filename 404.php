<!DOCTYPE html>
<html>
<head>
    <?php
    define("RS","/jkProject");
    ?>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>ЖК "Соната" | Свой дом</title>
    <meta name="author" content="Alvaro Trigo Lopez"/>
    <meta name="description" content="fullPage full-screen navigation and sections control menu."/>
    <meta name="keywords" content="fullpage,jquery,demo,screen,fullscreen,navigation,control arrows, dots"/>
    <meta name="Resource-type" content="Document"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include("inc/_css.php"); ?>
</head>
<body>
<?php include("inc/header.php"); ?>
<?php include("inc/mobileCall.php"); ?>
<div class="planHead">
    <div class="container">
        <div class="row">
            <div class="planTitleWrapper">
                <h2 class="planTitleText">404</h2>
                <span class="separator"></span>
            </div>
        </div>
    </div>
</div>
<div class="planChoose planShow planInside">
    <div class="container">
        <div class="row">
            <div class="errorBlock">
                <div class="error404">
                    <h2 class="wow fadeInLeft">404</h2>
                    <span class="">ошибка</span>
                    <div class="separator wow fadeInUp"></div>
                </div>
                <div class="errorText">
                    <p class="wow fadeInDown">Извините, страница не найдена</p>
                </div>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
    <?php include("inc/footer.php"); ?>
    <!--modal-->
    <?php include("inc/preloader.php"); ?>
    <?php include("inc/_js.php"); ?>
    <?php include("modal/modal.php"); ?>
</body>
</html>