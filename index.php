<!DOCTYPE html>
<html>

<head>
	<?php
	define("RS","");
	?>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>ЖК "Соната" | Свой дом</title>
	<meta name="author" content="Alvaro Trigo Lopez" />
	<meta name="description" content="fullPage full-screen navigation and sections control menu." />
	<meta name="keywords"  content="fullpage,jquery,demo,screen,fullscreen,navigation,control arrows, dots" />
	<meta name="Resource-type" content="Document" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include("inc/_css.php"); ?>
</head>
<body>

<div class="correctOrientationBlock" style="display: none">
	<p class="correctOrientation">Пожалуйста верните устройство в вертикольное положение</p>
	<div class="orientationPic"></div>
</div>
<div class="allPage">
	<?php include("inc/header.php"); ?>
	<div class="leftNavigationWrap">
		<div class="leftNavigation">
			<a href="#main" class="mainNav active" id="main">Главная</a>
			<a href="#map" class="mainNav" id="map">Карта</a>
			<a href="#dignity" class="mainNav" id="dignity">Преимущества</a>
			<a href="#developer" class="mainNav" id="developer">Застройщик</a>
			<a href="#share" class="mainNav" id="share">Акции</a>
		</div>
	</div>
	<?php include("inc/mobileCall.php"); ?>
	<div id="fullpage">
		<div class="section" id="section0">
			<div class="intro">
				<div class="leftPromo">
					<h2 class="promoName">Свой <br />Дом</h2>
					<span class="separator"></span>
					<span class="promoText">Это больше, <br />чем таунхаус</span>
				</div>
				<div class="day">
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
					<div class="night"></div>
				</div>
			</div>
		</div>
		<div class="section" id="section1">
			<div class="slide" id="slide1">
				<div class="intro">
					<div class="mapCloud"></div>
					<div class="mapWrapper">
						<div class="leftText">
							<a href="planirovka1.php" class="leftTextTitle">Планировки</a>
							<h2 class="mapTitle">Карта комплекса</h2>
						</div>
						<div class="rightText">
							<span class="rightInfoBlock">Перед созданием ЖК «Соната» мы провели анализ основных запросов клиентов рынка недвижимости. И спроектировали жилой комплекс так, чтобы вы могли разместить на своем дворе все атрибуты загородной жизни. О которых житель мегаполиса может только мечтать! </span>
						</div>
						<div class="housesBlock">
							<a class="firstHouse" href="planirovka1.php">
								<h2 class="houseNum">1</h2>
								<span class="separator"></span>
								<p class="houseTitle">дом</p>
							</a>
							<a class="secondHouse" href="planirovka1.php">
								<h2 class="houseNum">2</h2>
								<span class="separator"></span>
								<p class="houseTitle">дом</p>
							</a>
							<a class="thirdHouse" href="planirovka1.php">
								<h2 class="houseNum">3</h2>
								<span class="separator"></span>
								<p class="houseTitle">дом</p>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="section2">
			<div class="intro">
				<div class="mapWrapper">
					<div class="leftText">
						<a href="about.php" class="leftTextTitle">О комплексе</a>
						<h2 class="mapTitle">Наши преимущества</h2>
					</div>
					<div class="dignityWrap">
						<div class="dignityItem">
							<div class="dignityIcons">

							</div>
							<span class="separator"></span>
							<div class="dignityName">
								<p class="dignityTitle">Собственный<br>двор</p>
							</div>
							<span class="bottomSeparator"></span>
						</div>
						<div class="dignityItem">
							<div class="dignityIcons dignityIcons2">

							</div>
							<span class="separator"></span>
							<div class="dignityName">
								<p class="dignityTitle">Свежий<br>воздух</p>
							</div>
							<span class="bottomSeparator"></span>
						</div>
						<div class="dignityItem">
							<div class="dignityIcons dignityIcons3">

							</div>
							<span class="separator"></span>
							<div class="dignityName">
								<p class="dignityTitle">Рядом<br>Лес</p>
							</div>
							<span class="bottomSeparator"></span>
						</div>
						<div class="dignityItem">
							<div class="dignityIcons dignityIcons4">

							</div>
							<span class="separator"></span>
							<div class="dignityName">
								<p class="dignityTitle">Гостевая<br>парковка</p>
							</div>
							<span class="bottomSeparator"></span>
						</div>
						<div class="dignityItem">
							<div class="dignityIcons dignityIcons5">

							</div>
							<span class="separator"></span>
							<div class="dignityName">
								<p class="dignityTitle">Развитая<br>инфраструктура</p>
							</div>
							<span class="bottomSeparator"></span>
						</div>
					</div>
				</div>
				<div class="scene">
					<div data-offset="20" class="grass parallax"></div>
					<div data-offset="50" class="buildings parallax"></div>
				</div>
			</div>
		</div>
		<div class="section" id="section3">
			<div class="intro">
				<div class="mapWrapper">
					<div class="leftText">
						<a href="contacts.php" class="leftTextTitle">Контакты</a>
						<h2 class="mapTitle">Застройщик</h2>
					</div>
					<div class="developerWrapper">
						<div class="developerTextWrapper">
							<p class="developerText">ООО «ИСК «КДС Инвест» опытный участник строительного рынка Украины. Организация реализовывала проекты жилых комплексов и промышленных сооружений различной сложности, у различных девелоперов бизнеса Украины, в том числе государственных проектов.</p>
							<p class="developerText">«Премиаль» - это многофункциональный жилой комплекс со встроено-пристроенными нежилыми помещениями бизнес-класса. На последних этажах располагается двухуровневое панорамное помещение, со стеклянным куполом и выходом на крышу.</p>
							<p class="developerText lastParag">«Премиаль» - это многофункциональный жилой комплекс со встроено-пристроенными нежилыми помещениями бизнес-класса. На последних этажах располагается двухуровневое панорамное помещение, со стеклянным куполом и выходом на крышу. ООО «ИСК «КДС Инвест» опытный участник строительного рынка Украины. </p>
							<div class="signViewWrap"><a href="#" class="signView">Записаться на просмотр</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="section" id="section4">
			<div class="intro">
				<div class="mapWrapper">
					<div class="leftText">
						<a href="planirovka1.php" class="leftTextTitle">Планировки</a>
						<h2 class="mapTitle">Акции</h2>
					</div>
					<div class="shareWrapper">
						<div id="owl-demo" class="owl-carousel owl-theme">
							<div class="item">
								<a href="#">
									<img src="img/slider.png" alt="The Last of us">
									<a href="#" class="moreBtn">Подробнее</a>
								</a>
							</div>
							<div class="item">
								<a href="#">
									<img src="img/slider.png" alt="The Last of us">
									<a href="#" class="moreBtn">Подробнее</a>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php include("inc/preloader.php"); ?>
<?php include("inc/_js.php"); ?>
<!--modal-->
<?php include("modal/modal.php"); ?>
</body>
</html>
