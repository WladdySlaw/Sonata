$(function() {

	//SVG Fallback
	if(!Modernizr.svg) {
		$("img[src*='svg']").attr("src", function() {
			return $(this).attr("src").replace(".svg", ".png");
		});
	};

	//E-mail Ajax Send
	//Documentation & Example: https://github.com/agragregra/uniMail
	$("form").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Thank you!");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});

	//Chrome Smooth Scroll
	try {
		$.browserSelector();
		if($("html").hasClass("chrome")) {
			$.smoothScroll();
		}
	} catch(err) {

	};

	$("img, a").on("dragstart", function(event) { event.preventDefault(); });

});

$(window).load(function() {

	$(".loader_inner").fadeOut();
	$(".loader").delay(400).fadeOut("slow");

});
$(".openMenuBtn").on("click", function(){
		$(".openMenuBtn").addClass("active");
		$(".menuTitle").addClass("active");
		$(".dropMobileMenu").addClass("active");
		$(".closeMenuBtn").addClass("active");
});
$(".closeMenuBtn").on("click", function(){
		$(".dropMobileMenu").removeClass("active");
		$(".openMenuBtn").removeClass("active");
		$(".closeMenuBtn").removeClass("active");
		$(".menuTitle").removeClass("active");
});
$(".leftPromo").hover(
	function() {
		$(".night").addClass("focus");
	}, function () {
		$(".night").removeClass("focus");
	}
);
// $( ".leftPromo" )
// 	.mouseenter(function() {
// 		$(".night").addClass("active");
// 	})
// 	.mouseleave(function() {
// 		$("night").removeClass("active");
// 	});

$(".leftNavigation").hover(
	function() {
		$(".night").addClass("focus");
	}, function () {
		$(".night").removeClass("focus");
	}
);
$(".headerCenter").hover(
	function() {
		$(".night").addClass("focus");
	}, function () {
		$(".night").removeClass("focus");
	}
);
$(".mainNav").on("click", function(){
	$(".mainNav").removeClass("active");
	$(this).addClass("active");
});
$(".buyOpen").on("click", function() {
	if ($(this).hasClass("open")){
		$(this).removeClass("open");
		$(this).children(".buyTitle").removeClass("active");
		$(this).removeClass("active");
		$(this).children(".openSlide").removeClass("active");
	}
	else {
		$(this).addClass("open");
		$(this).children(".buyTitle").addClass("active");
		$(this).addClass("active");
		$(this).children(".openSlide").addClass("active");
	}
	$(this).parent().children(".buySlide").slideToggle("fast");
});
$(".foldOpenBox").on("click", function() {
	if ($(this).hasClass("open")){
		$(this).removeClass("open");
		$(this).children(".foldBtn").removeClass("active");
		$(this).removeClass("active");
	}
	else {
		$(this).addClass("open");
		$(this).children(".foldBtn").addClass("active");
		$(this).addClass("active");
	}
	$(this).parent().children(".hiddenItems").slideToggle("fast");
});
$("#secondFloor").on("click", function(){
	$("#map1").animate({
		left: '800px',
		opacity: '0'
	}, 150);
	$("#map1").attr("src","img/map2_1.png");
	$("#map1").animate({
		left: '0px',
		opacity: '1'
	}, 150);
	$("#secondFloor").addClass("active");
	$("#firstFloor").removeClass("active");
	var KvName = ["Коридор ", "Спальня ", "Спальня ", "Санузел "];
	$("#list1").text(KvName[0]);
	$("#list2").text(KvName[1]);
	$("#list3").text(KvName[2]);
	$("#list4").text(KvName[3]);
	var NumList = ["7,2 ", "19,34 ", "12,68 ", "4,2 "];
	$("#numList1 .meters").text(NumList[0]);
	$("#numList2 .meters").text(NumList[1]);
	$("#numList3 .meters").text(NumList[2]);
	$("#numList4 .meters").text(NumList[3]);
});
$("#firstFloor").on("click", function(){
	$("#map1").animate({
		left: '800px',
		opacity: '0'
	}, 150);
	$("#map1").attr("src","img/map1_1.png");
	$("#map1").animate({
		left: '0px',
		opacity: '1'
	}, 150);
	$("#firstFloor").addClass("active");
	$("#secondFloor").removeClass("active");
	var KvName = ["Холл ", "Гостинная ", "Кухня-студия ", "Ванная комната "];
	$("#list1").text(KvName[0]);
	$("#list2").text(KvName[1]);
	$("#list3").text(KvName[2]);
	$("#list4").text(KvName[3]);
	var NumList = ["4,41 ", "8 ", "29,6 ", "4,2 "];
	$("#numList1 .meters").text(NumList[0]);
	$("#numList2 .meters").text(NumList[1]);
	$("#numList3 .meters").text(NumList[2]);
	$("#numList4 .meters").text(NumList[3]);
});
$("#secondFloor2").on("click", function(){
	$("#map2").animate({
		left: '800px',
		opacity: '0'
	}, 150);
	$("#map2").attr("src","img/map2_2.png");
	$("#map2").animate({
		left: '0px',
		opacity: '1'
	}, 150);
	$("#secondFloor2").addClass("active");
	$("#firstFloor2").removeClass("active");
	var KvName = ["Коридор ", "Спальня ", "Спальня ", "Санузел "];
	$("#list1").text(KvName[0]);
	$("#list2").text(KvName[1]);
	$("#list3").text(KvName[2]);
	$("#list4").text(KvName[3]);
	$("#list5").css("visibility", "hidden");
	var NumList = ["7,2 ", "19,34 ", "12,68 ", "4,2 "];
	$("#numList1 .meters").text(NumList[0]);
	$("#numList2 .meters").text(NumList[1]);
	$("#numList3 .meters").text(NumList[2]);
	$("#numList4 .meters").text(NumList[3]);
	$("#numList5").css("visibility", "hidden");
});
$("#firstFloor2").on("click", function(){
	$("#map2").animate({
		left: '800px',
		opacity: '0'
	}, 150);
	$("#map2").attr("src","img/map1_2.png");
	$("#map2").animate({
		left: '0px',
		opacity: '1'
	}, 150);
	$("#firstFloor2").addClass("active");
	$("#secondFloor2").removeClass("active");
	var KvName = ["Холл ", "Коридор ", "Гостинная ", "Кухня-студия "];
	$("#list1").text(KvName[0]);
	$("#list2").text(KvName[1]);
	$("#list3").text(KvName[2]);
	$("#list4").text(KvName[3]);
	$("#list5").css("visibility", "visible");
	var NumList = ["4,41 ", "8 ", "19 ", "10,6 "];
	$("#numList1 .meters").text(NumList[0]);
	$("#numList2 .meters").text(NumList[1]);
	$("#numList3 .meters").text(NumList[2]);
	$("#numList4 .meters").text(NumList[3]);
	$("#numList5").css("visibility", "visible");
});
