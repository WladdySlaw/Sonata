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
                <h2 class="planTitleText">Контакты</h2>
                <span class="separator"></span>
            </div>
        </div>
    </div>
</div>
<div class="planChoose planShow planInside">
    <div class="container">
        <div class="row">
            <div class="contactWrapper col-sm-12">
                <div class="col-md-6 wow fadeInLeft">
                    <div class="salesDep">
                        <h2 class="salesName"><span>Отдел</span> продаж</h2>
                        <p class="salesText">Мы всегда рады видеть Вас в нашем отделе продаж ЖК «Соната»!</p>
                        <span class="separator"></span>
                    </div>
                    <div class="contactsPhone">
                        <span class="phoneIc">Телефон</span>
                        <h2 class="phoneName"><span>098</span> 900 90 04</h2>
                        <h2 class="phoneName"><span>096</span> 900 90 04</h2>
                        <span class="separator"></span>
                    </div>
                    <div class="contactsLoaction">
                        <span class="locationIc">Адрес</span>
                        <h2 class="locationName">С. Белогородка</h2>
                        <h2 class="locationName">ул. Шухевича</h2>
                        <span class="separator"></span>
                    </div>
                    <div class="contactsMail">
                        <span class="mailIc">Почта</span>
                        <h2 class="mailName">sonata9009004@gmail.com</h2>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInRight">
                    <div class="answerBlock">
                        <h2 class="answerName"><span>Задать</span> вопрос</h2>
                        <div class="contactsInput">
                            <p>Ваше имя</p>
                            <input type="text">
                        </div>
                        <div class="contactsInput">
                            <p>Email</p>
                            <input type="text">
                        </div>
                        <div class="contactsInput">
                            <p>Ваше сообщение</p>
                            <textarea></textarea>
                        </div>
                        <a href="#" class="send">Отправить</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid wow fadeInUp">
        <div class="row">
            <iframe class="gMap" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2139.6894254529843!2d30.221124629319945!3d50.375245313256265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472b35548cf22d53%3A0xa7b2b10592f7f288!2z0JHRltC70L7Qs9C-0YDQvtC00LrQsCwg0JrQuNGX0LLRgdGM0LrQsCDQvtCx0LvQsNGB0YLRjA!5e0!3m2!1suk!2sua!4v1480423394662" width="100%" height="600px" frameborder="0" style="border:0" allowfullscreen></iframe>
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