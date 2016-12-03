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
                <h2 class="planTitleText">Планировки</h2>
                <span class="separator"></span>
            </div>
        </div>
    </div>
</div>
<div class="planChoose">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="chooseKv">
                    <p class="kvNum">Дом #3</p>
                    <h2 class="chooseKvTitle">Выбор<br><span>Квартиры</span></h2>
                    <span class="separator"></span>
                    <p class="kvDetails">Дом представляет собой – четыре двухуровневые квартиры. Площадь одной квартиры
                        составляет 85 м2 и 20 м2 антресоль. Два варианта планировок 1 этажа, и единая планировка для 2
                        этажа.</p>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="kvMap">
                    <div class="kvMapTop">
                        <a href="planirovkaShow.php" class="kvMapLeft mapEl1">
                            <div class="homeNumPlan">
                                <span class="homeNumTitle">План</span>
                                <p class="homeNum"><span>№</span> 1.1</p>
                                <span class="separator"></span>
                            </div>
                        </a>
                        <a href="planirovkaShowv2.php" class="kvMapRight mapEl2">
                            <div class="homeNumPlan homeNumPlanRight">
                                <span class="homeNumTitle">План</span>
                                <p class="homeNum"><span>№</span> 1.2</p>
                                <span class="separator"></span>
                            </div>
                        </a>
                    </div>
                    <div class="clearfix"></div>
                    <div class="kvMapBottom">
                        <a href="planirovkaShowv2.php" class="kvMapLeft mapEl3">
                            <div class="homeNumPlan homeNumPlanBot">
                                <span class="homeNumTitle">План</span>
                                <p class="homeNum"><span>№</span> 1.2</p>
                                <span class="separator"></span>
                            </div>
                        </a>
                        <a href="planirovkaShow.php" class="kvMapRight mapEl4">
                            <div class="homeNumPlan homeNumPlanRight homeNumPlanBot">
                                <span class="homeNumTitle">План</span>
                                <p class="homeNum"><span>№</span> 1.1</p>
                                <span class="separator"></span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clearfix"></div>
<?php include("inc/footer.php"); ?>
<?php include("inc/preloader.php"); ?>
<?php include("inc/_js.php"); ?>
<?php include("modal/modal.php"); ?>
</body>
</html>