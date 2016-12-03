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
<div class="planChoose planShow planInside">
    <div class="container">
        <div class="row">
            <div class="backChoose">
                <a href="news.php"><span></span>к списку новостей</a>
            </div>
            <div class="postsBlock postsBlockInside col-md-12">
                <div class="col-md-12 post">
                    <div class="col-md-4 wow fadeInLeft">
                        <a class="postPic">
                            <img src="img/blogPic.png" alt="">
                        </a>
                    </div>
                    <div class="col-md-8 wow fadeInRight">
                        <div class="postInfo">
                            <p class="postData wow fadeInUp">21.11.16</p>
                            <div class="postTitleWr">
                                <div class="elementsArrow">
                                    <span class="ar1 wow fadeInLeft"></span>
                                    <span class="ar2 wow fadeInUp"></span>
                                    <span class="ar3 wow fadeInRight"></span>
                                </div>
                                <h2 class="postTitle">Очередной дом в ЖК «соната» сдан в эксплуатацию!</h2>
                            </div>
                            <span class="separator"></span>
                            <p class="postInsText">ООО «ИСК «КДС Инвест» опытный участник строительного рынка Украины. Организация реализовывала проекты жилых комплексов и промышленных сооружений различной сложности, у различных девелоперов бизнеса Украины, в том числе государственных проектов.<br><br>

                                «Премиаль» - это многофункциональный жилой комплекс со встроено-пристроенными нежилыми помещениями бизнес-класса. На последних этажах располагается двухуровневое панорамное помещение, со стеклянным куполом и выходом на крышу.<br><br>

                                «Премиаль» - это многофункциональный жилой комплекс со встроено-пристроенными нежилыми помещениями бизнес-класса. На последних этажах располагается двухуровневое панорамное помещение, со стеклянным куполом и выходом на крышу. ООО «ИСК «КДС Инвест» опытный участник строительного рынка Украины.<br><br>

                                ООО «ИСК «КДС Инвест» опытный участник строительного рынка Украины. Организация реализовывала проекты жилых комплексов и промышленных сооружений различной сложности, у различных девелоперов бизнеса Украины, в том числе государственных проектов.<br><br>

                                «Премиаль» - это многофункциональный жилой комплекс со встроено-пристроенными нежилыми помещениями бизнес-класса. На последних этажах располагается двухуровневое панорамное помещение, со стеклянным куполом и выходом на крышу.</p
                        </div>
                    </div>
                </div>

            </div>
            <div class="socAndBack">
                <div class="backChoose wow fadeInLeft">
                    <a href="news.php"><span></span>к списку новостей</a>
                </div>
                <div class="socBtn wow fadeInRight">
                    <div class="socBtnWr">
                        <a href="#" class="fb"></a>
                        <a href="#" class="vk"></a>
                        <a href="#" class="tw"></a>
                        <a href="#" class="gp"></a>
                    </div>
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