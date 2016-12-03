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
<div class="planChoose planShow">
    <div class="container">
        <div class="row">
            <div class="col-sm-5">
                <div class="backChoose">
                    <a href="planirovka1.php"><span></span>к выбору квартиры</a>
                </div>
                <div class="homeShowInfo">
                    <p class="kvNum">Дом #3</p>
                    <div class="showPlanWrap">
                        <p class="homeShowPlN">План <span># 1.2</span></p>
                        <h2>Просмотр<br> <span>квартиры</span></h2>
                        <span class="separator"></span>
                        <div class="col-sm-8 col-md-6 col-xs-6 listWithOutNum">
                            <ul>
                                <li>Общая площадь</li>
                                <li>Жилая площадь</li>
                                <li>Антресоль</li>
                            </ul>
                        </div>
                        <div class="col-sm-4 col-xs-6 col-md-6">
                            <ul>
                                <li>85 <span>м<span class="sqr2">2</span></span></li>
                                <li>51 <span>м<span class="sqr2">2</span></li>
                                <li>20 <span>м<span class="sqr2">2</span></li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-6 col-sm-8">
                            <span class="separatorGrey"></span>
                            <ul class="listWithNum">
                                <li id="list1"> Холл</li>
                                <li id="list2"> Коридор</li>
                                <li id="list3"> Гостинная</li>
                                <li id="list4"> Кухня-студия</li>
                                <li id="list5"> Ванная комната</li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-6 col-sm-4">
                            <ul class="listMeters">
                                <li id="numList1"><b class="meters">4,41</b> <span>м<span class="sqr2">2</span></span></li>
                                <li id="numList2"><b class="meters">8</b> <span>м<span class="sqr2">2</span></span></li>
                                <li id="numList3"><b class="meters">19</b> <span>м<span class="sqr2">2</span></span></li>
                                <li id="numList4"><b class="meters">10,6</b> <span>м<span class="sqr2">2</span></span></li>
                                <li id="numList5"><b class="meters">4,2</b> <span>м<span class="sqr2">2</span></span></li>
                            </ul>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-sm-7">
                <div class="floorSwitch">
                    <span>Этаж</span>
                    <a class="floor active" id="firstFloor2">1</a>
                    <a class="floor" id="secondFloor2">2</a>
                </div>
                <div class="clearfix"></div>
                <div class="firstFloorMap">
                    <img src="img/map1_2.png" alt="" id="map2">
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