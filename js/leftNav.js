$(document).ready(function() {
    $(window).on('hashchange', function() {
        if(location.hash == '#main') {
            $(".leftNavigation").removeClass("active");
            $(".leftNavigationWrap").removeClass("active");
        }
        else{
            $(".leftNavigation").addClass("active");
            $(".leftNavigationWrap").addClass("active");
        }
    });
});

$(document).ready(function(){
    if(location.hash == '#main') {
        $(".day").addClass("active");
        $("#fullpage").addClass("active");
        setTimeout(mozilaFix, 800);
        function mozilaFix(){
            $(".night").addClass("mozilaFix");
        }
        setTimeout(nightStart, 900);
        function nightStart(){
            $(".night").addClass("active");
        }
        $(".leftNavigation").removeClass("active");
        $(".leftNavigationWrap").removeClass("active");
    }
    else if (location.hash == ''){
        $("#fullpage").addClass("active");
        $(".day").addClass("active");
        setTimeout(mozilaFix, 800);
        function mozilaFix(){
            $(".night").addClass("mozilaFix");
        }
        setTimeout(nightStart, 900);
        function nightStart(){
            $(".night").addClass("active");
        }
        $(".leftNavigation").removeClass("active");
        $(".leftNavigationWrap").removeClass("active");
    }
    else if  (location.hash == '#map'){
        $("#fullpage").removeClass("active");
        $(".night").removeClass("active");
        $(".night").removeClass("mozilaFix");
        $(".mainNav").removeClass("active");
        $("#map").addClass("active");
    }
    else if  (location.hash == '#dignity'){
        $("#fullpage").removeClass("active");
        $(".night").removeClass("active");
        $(".night").removeClass("mozilaFix");
        $(".mainNav").removeClass("active");
        $("#dignity").addClass("active");
    }
    else if  (location.hash == '#developer'){
        $("#fullpage").removeClass("active");
        $(".night").removeClass("active");
        $(".night").removeClass("mozilaFix");
        $(".mainNav").removeClass("active");
        $("#developer").addClass("active");
    }
    else if  (location.hash == '#share'){
        $("#fullpage").removeClass("active");
        $(".night").removeClass("active");
        $(".night").removeClass("mozilaFix");
        $(".mainNav").removeClass("active");
        $("#share").addClass("active");
    }
});
$(window).on('hashchange', function() {

    console.log(location.hash);
    if(location.hash == '#main') {
        setTimeout(dayStart, 900);
        function dayStart(){
            $(".day").addClass("active");
        }
        $("#fullpage").addClass("active");
        setTimeout(mozilaFix, 800);
        function mozilaFix(){
            $(".night").addClass("mozilaFix");
        }
        setTimeout(nightStart, 900);
        $(".mainNav").removeClass("active");
        $("#main").addClass("active");
        function nightStart(){
            $(".night").addClass("active");
        }
    }
    else if  (location.hash == '#map'){
        $(".night").removeClass("active");
        $(".day").removeClass("active");
        $(".night").removeClass("mozilaFix");
        $("#fullpage").removeClass("active");
        $(".mainNav").removeClass("active");
        $("#map").addClass("active");
    }
    else if  (location.hash == '#dignity'){
        $(".night").removeClass("active");
        $(".day").removeClass("active");
        $(".night").removeClass("mozilaFix");
        $("#fullpage").removeClass("active");
        $(".mainNav").removeClass("active");
        $("#dignity").addClass("active");
    }
    else if  (location.hash == '#developer'){
        $(".night").removeClass("active");
        $(".day").removeClass("active");
        $(".night").removeClass("mozilaFix");
        $("#fullpage").removeClass("active");
        $(".mainNav").removeClass("active");
        $("#developer").addClass("active");
    }
    else if  (location.hash == '#share'){
        $(".night").removeClass("active");
        $(".day").removeClass("active");
        $(".night").removeClass("mozilaFix");
        $("#fullpage").removeClass("active");
        $(".mainNav").removeClass("active");
        $("#share").addClass("active");
    }
});

