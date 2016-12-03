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
                <h2 class="planTitleText">Покупка</h2>
                <span class="separator"></span>
            </div>
        </div>
    </div>
</div>
<div class="planChoose planShow planInside">
    <div class="container">
        <div class="row">
            <div class="buySlideWrapper">
                <div class="buySlideP wow fadeInLeft">
                    <div class="buyOpen">
                        <span class="openSlide"></span>
                        <h2 class="buyTitle"><span>1.</span> Забронировать квартиру</h2>
                    </div>
                    <div class="buySlide">
                        <p class="buySlideText">После внесения авансового платежа, вы можете гарантированно забронировать выбранную вами квартиру на срок от 5 до 7 дней, а также индивидуально оговорить возможность получения скидки с сотрудниками отдела продаж.</p>
                    </div>
                </div>
                <div class="buySlideP wow fadeInLeft">
                    <div class="buyOpen">
                        <span class="openSlide"></span>
                        <h2 class="buyTitle"><span>2.</span> Покупка при 100% предоплате</h2>
                    </div>
                    <div class="buySlide">
                        <p class="buySlideText">Один из вариантов оформления сделки - 100% оплата. После внесения авансового платежа, вы можете гарантированно забронировать выбранную вами квартиру на срок от 5 до 7 дней, а также индивидуально оговорить возможность получения скидки с сотрудниками отдела продаж.
                            <br>
                            <br>
                            Этот вариант приобретения квартиры можно разделить на несколько этапов:<br>
                            - выбор квартиры и её планировки;<br>
                            - внесение авансового платежа для бронирования квартиры;<br>
                            - оформление покупки, подписание договора купли-продажи имущественных прав с застройщиком;<br>
                            - внесение оставшейся части платежа согласно подписанного договора.</p>
                    </div>
                    <div class="buySlideP wow fadeInLeft">
                        <div class="buyOpen">
                            <span class="openSlide"></span>
                            <h2 class="buyTitle"><span>3.</span> ПОКУПКА В РАССРОЧКУ</h2>
                        </div>
                        <div class="buySlide">
                            <p class="buySlideText">Наша компания предлагает приобретение жилья в рассрочку. Рассрочка предоставляется застройщиком на выгодных условиях. Минимальный первоначальный взнос составляет 20% от стоимости выбранной квартиры, а остаток суммы может быть выплачен в срок от 12 до 36 месяцев. Важно отметить, что сумма оставшихся платежей не индексируется и не привязывается к курсу доллара.</p>
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