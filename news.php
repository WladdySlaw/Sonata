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
                <h2 class="planTitleText">Новости</h2>
                <span class="separator"></span>
            </div>
        </div>
    </div>
</div>
<div class="planChoose planShow">
    <div class="container">
        <div class="row">
            <div class="postsBlock col-md-12">
                <div class="col-md-12 post wow fadeInUp">
                    <div class="col-md-4">
                        <a class="postPic">
                            <img src="img/blogPic.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="postInfo">
                            <p class="postData">21.11.16</p>
                            <div class="postTitleWr">
                                <div class="elementsArrow">
                                    <span class="ar1 wow fadeInLeft"></span>
                                    <span class="ar2 wow fadeInUp"></span>
                                    <span class="ar3 wow fadeInRight"></span>
                                </div>
                                <h2 class="postTitle">Очередной дом в ЖК «соната» сдан в эксплуатацию!</h2>
                            </div>
                            <span class="separator"></span>
                            <p class="postText">Поздравляем всех владельцев квартир и наших инвесторов, и напоминаем,
                                что Вы можете ознакомится с декларацией об окончании строительства №КС142162731730,
                                которая находится в юридическом отделе...</p>
                            <a href="newsInside.php" class="postMore">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 post wow fadeInUp">
                    <div class="col-md-4">
                        <a class="postPic">
                            <img src="img/blogPic.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="postInfo">
                            <p class="postData">21.11.16</p>
                            <div class="postTitleWr">
                                <div class="elementsArrow">
                                    <span class="ar1 wow fadeInLeft"></span>
                                    <span class="ar2 wow fadeInUp"></span>
                                    <span class="ar3 wow fadeInRight"></span>
                                </div>
                                <h2 class="postTitle">Очередной дом в ЖК «соната» сдан в эксплуатацию!</h2>
                            </div>
                            <span class="separator"></span>
                            <p class="postText">Поздравляем всех владельцев квартир и наших инвесторов, и напоминаем,
                                что Вы можете ознакомится с декларацией об окончании строительства №КС142162731730,
                                которая находится в юридическом отделе...</p>
                            <a href="#" class="postMore">Подробнее</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 post wow fadeInUp">
                    <div class="col-md-4">
                        <a class="postPic">
                            <img src="img/blogPic.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-8">
                        <div class="postInfo">
                            <p class="postData">21.11.16</p>
                            <div class="postTitleWr">
                                <div class="elementsArrow">
                                    <span class="ar1 wow fadeInLeft"></span>
                                    <span class="ar2 wow fadeInUp"></span>
                                    <span class="ar3 wow fadeInRight"></span>
                                </div>
                                <h2 class="postTitle">Очередной дом в ЖК «соната» сдан в эксплуатацию!</h2>
                            </div>
                            <span class="separator"></span>
                            <p class="postText">Поздравляем всех владельцев квартир и наших инвесторов, и напоминаем,
                                что Вы можете ознакомится с декларацией об окончании строительства №КС142162731730,
                                которая находится в юридическом отделе...</p>
                            <a href="#" class="postMore">Подробнее</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="paginationBlock col-sm-12 wow fadeInUp">
                <div class="paginationWrap">
                    <a href="#" class="pagination">1</a>
                    <a href="#" class="pagination">...</a>
                    <a href="#" class="pagination">8</a>
                    <a href="#" class="pagination">9</a>
                    <a href="#" class="pagination">10</a>
                    <a href="#" class="pagination">...</a>
                    <a href="#" class="pagination">20</a>
                </div>
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