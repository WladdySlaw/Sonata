$(window).scroll(function() {
    blur(".mapEl1", 50, ".kvMapTop .kvMapLeft .homeNumPlan");
    blur(".mapEl2", 200, ".kvMapTop .kvMapRight .homeNumPlan");
    blur(".mapEl3", 400, ".kvMapBottom .kvMapLeft .homeNumPlan");
    blur(".mapEl4", 600, ".kvMapBottom .kvMapRight .homeNumPlan");
    function blur(element, time, plan){
        var imagePos = $(element).offset().top;
        var topOfWindow = $(window).scrollTop();
        if (imagePos < topOfWindow+600) {
            function showHover(){
                $(element).addClass('active');
                $(plan).addClass('active');
            }
            function hideHover(){
                $(element).addClass('activeR');
                $(plan).addClass('activeR');
            }
            setTimeout(showHover, time);
            setTimeout(hideHover, time+600);
        }
    }
});