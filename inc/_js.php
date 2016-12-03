<script
    src="https://code.jquery.com/jquery-1.9.1.js"
    integrity="sha256-e9gNBsAcA0DBuRWbm0oZfbiCyhjLrI6bmqAl5o+ZjUA="
    crossorigin="anonymous"></script>
<script src="/libs/waypoints/waypoints.min.js"></script>
<script src="/libs/animate/animate-css.js"></script>
<script src="/libs/plugins-scroll/plugins-scroll.js"></script>
<script src="/js/common.js"></script>
<script src="/js/main.js"></script>
<script src="/js/segment.min.js"></script>
<script src="/js/ease.min.js"></script>
<script src="/js/main.js"></script>
<script src="/js/segment.min.js"></script>
<script src="/js/ease.min.js"></script>
<script src="/libs/modernizr/modernizr.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.1/jquery-ui.min.js"></script>
<script type="text/javascript" src="/libs/fullPage/vendors/scrolloverflow.js"></script>
<script type="text/javascript" src="/libs/fullPage/jquery.fullPage.js"></script>
<script type="text/javascript" src="/libs/fullPage/examples.js"></script>
<script type="text/javascript" src="/js/leftNav.js"></script>
<!-- Include js plugin -->
<script src="/libs/owl.carousel/owl-carousel/owl.carousel.js"></script>
<script src="/js/parallax.js"></script>
<!-- Add mousewheel plugin (this is optional) -->
<script type="text/javascript" src="/libs/fancyBox/lib/jquery.mousewheel.pack.js?v=3.1.3"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAqj40ibrbZgrrofyvoSHgN2dc6XuDCrPI&language=ru"></script>
<!-- Add fancyBox main JS and CSS files -->
<script type="text/javascript" src="/libs/fancyBox/source/jquery.fancybox.pack.js?v=2.1.5"></script>
<script type="text/javascript" src="/libs/fancyBox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5"></script>
<script type="text/javascript" src="/libs/fancyBox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7"></script>
<!-- Add Media helper (this is optional) -->
<script type="text/javascript" src="/libs/fancyBox/source/helpers/jquery.fancybox-media.js?v=1.0.6"></script>
<script src="/js/wow.min.js"></script>
<script>
    new WOW().init();
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script>
<script>
    $(document).ready(function() {

        $("#owl-demo2").owlCarousel({


            navigation: true,
            autoPlay: 2000,
            navigationText: false,
            pagination: false,
            items : 4,
            itemsDesktop : [1199,3],
            itemsDesktopSmall : [979,3]

        });

    });
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#fullpage').fullpage({
            sectionsColor: ['#fffff', '#fffff', '#fffff'],
            anchors: ['main', 'map', 'dignity', 'developer', 'share'],
            menu: '#menu',
            loopTop: true,
            loopBottom: true
        });
    });
</script>
<script>
    $(document).ready(function() {

        $("#owl-demo").owlCarousel({

            navigation : true, // Show next and prev buttons
            slideSpeed : 300,
            paginationSpeed : 400,
            singleItem:true

            // "singleItem:true" is a shortcut for:
            // items : 1,
            // itemsDesktop : false,
            // itemsDesktopSmall : false,
            // itemsTablet: false,
            // itemsMobile : false

        });

    });
</script>
<script src="/js/planirovkaEffect.js"></script>