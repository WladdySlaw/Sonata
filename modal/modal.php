<!-- Double Modal -->
<div id="dm" class="anime">
    <div class="dmLeft"></div>
    <div class="dmRight">
        <button class="close" onClick="closeDoubleModal();"></button>
        <div class="formHeader">
            <span class="el-1 fastAnime"></span>
            <span class="el-2 middleAnime"></span>
            <span class="el-3 normalAnime"></span>
            <h3>Записаться <br/> <span>на просмотр</span></h3>
        </div>
        <div class="form">
            <form name="contact-form" id="contact-form" action="#" method="POST">
                <input type="hidden" name="action" value="contact" />
                <label><span>Ваше имя</span>
                    <input name="name" id="dm-name" />
                </label>
                <label><span>Ваш телефон</span>
                    <input class="phone_number" name="phone" id="dm-phone" placeholder="+38(090)000-00-00" />
                </label>
                <div class="submitWrap">
                    <button type="button" name="submit" onclick="sendContactForm();">ОТПРАВИТЬ</button>
                </div>
                <div class="response"></div>
            </form>
        </div>
    </div>
    <div class="nightFade" onClick="closeDoubleModal();"></div>
</div>
<!-- Scroll js -->
<script type="text/javascript" language="javascript" src="modal/js/jquery.scrollTo.min.js"></script>
<!-- jQuery inputmask -->
<script type="text/javascript" src="modal/js/jquery.inputmask.js"></script>
<script>
    $(document).ready(function() {
        $(".phone_number").inputmask({mask: "+38(099)999-99-99"});
    });
    function openDoubleModal(){
        $('.nightFade').fadeIn(300);

        $('#dm').show(0);

        scrollToTagID('promoutionMotto');

        $('#dm .dmLeft').css('left','50%');
        $('#dm .dmRight').css('right','50%');

        setTimeout(function(){
            $('#dm .formHeader .el-1').css('left','0px');
            $('#dm .formHeader .el-2').css('left','32px');
            $('#dm .formHeader .el-3').css('left','63px');
            $('#dm').css('position','fixed');
        },800);
    }
    function closeDoubleModal(){
        $('#dm').hide(200);

        $('.nightFade').fadeOut(500);

        $('#dm .formHeader .el-1').css('left','-1000px');
        $('#dm .formHeader .el-2').css('left','-1000px');
        $('#dm .formHeader .el-3').css('left','-1000px');

        $('#dm .dmLeft').css('left','-1000px');
        $('#dm .dmRight').css('right','-1000px');
        setTimeout(function(){
            //$('#dm').hide(0);
            $('#dm').css('position','fixed');
        },800);
    }
    // Scroll to Top

    function scrollToTop(){
        $('body,html').stop().animate({scrollTop:0},400);
    }

    // Scroll to ID

    function scrollToTagID(tagID){
        $('body,html').scrollTo(document.getElementById(tagID), 400);
    }
    // Contact form

    function sendContactForm(){
        $('#contact-form .response').html("Обработка...");
        $.post("contact-heandler.php",$('#contact-form').serialize(),function(data,status){
            if(status=='success'){
                $('#contact-form .response').html(data.message);
                if(data.status=='success'){
                    $('form#contact-form')[0].reset();
                }
            }
        },"json");
    }
</script>