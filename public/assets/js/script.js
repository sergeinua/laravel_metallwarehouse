jQuery(window).resize(function(){

    if(jQuery(window).width()<960){
        $(".l_col .badclients").appendTo(".r_col");
    } else {
        $(".r_col .badclients").appendTo(".l_col");
    }

});

(function($) {

    jQuery(document).ready(function(){

        jQuery('.slider .wrap > div').flexslider({
            animation: "slide"
        });

        console.log(window.location.pathname);
        if (window.location.pathname != "/" && window.location.hash != "#result") {
            var topof = 480;
            if($(window).width() < 980) { topof = 560; }
            if($(window).width() < 635) { topof = 600; }
            if($(window).width() < 350) { topof = 650; }
            console.log(topof);
            $('html,body').animate({
                    scrollTop: topof},
                'slow');
        }

        function scroll_menu(){
            jQuery(window).bind('scroll', function(){
                if(jQuery(this).scrollTop() > 150) {
                    jQuery(".fixed_bar").addClass("open");}
                else{
                    jQuery(".fixed_bar").removeClass("open");}
            });
        }
        scroll_menu();


        $('.openmenu').click(function(){
            $(this).toggleClass('open');
            $('.nav_fixed').toggleClass('open');
            $('body').toggleClass('fixed');
            return false;
        })

        /*$(".catalog li").click(function() {
         if ($(this).children("ul:visible").size() == 0) {
         var parent = $(this).parents(".parent");
         $(".catalog > .parent").not(parent).removeClass("act").find("ul").slideUp();
         $(this).parents(".catalog").find("li").not(".act").find("ul").slideUp();
         $(this).children("ul").addClass("act").slideDown().parents("li").addClass("act");
         if ($(this).find("ul").size() != 0) return false;
         }
         });*/
        $(".catalog .parent > span").click(function() {
            if ($(this).parens("li").children("ul:visible").size() == 0) $(this).html('-');
            else $(this).html('+');
            $(this).parens("li").children("ul").slideToggle();
        });



        $(".form-recall form").submit(function() {
            $.ajax({
                type    : "POST",
                cache   : false,
                url     : $(this).attr('action'),
                data    : $(this).serialize(),
                success: function(rez) {
                    if (rez != "ok") { alert(rez); }
                    else {
                        $('.form-recall form').hide();
                        $('.form-recall .mess').show();
                        $(".form-recall form").trigger('reset');
                    }
                }
            });
            return false;
        });



        $(".content table").each(function() {
            if ($(this).hasClass("no-border") == false ) {
                $(this).find("tr:first").children('td').replaceWith(function(i, html) {
                    $th = $("<th>", {html: $(this).html()});
                    $.each(this.attributes, function(i, attribute){
                        $th.attr(attribute.name, attribute.value);
                    });
                    $th.css('color','#000');
                    return $th;
                    /*return '<th>' + html + '</th>';*/
                });
            }
            $(this).wrap('<div class=table-container-outer><div class=table-container></div></div>');
            $(this).parent().parent().prepend('<div class=table-container-fade></div>');
        });

        $('div[data-type="background"]').each(function(){
            var $bgobj = $(this); // Назначаем объект

            var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
            // Собираем значение координат фона вместе
            var coords = '50% '+ yPos + 'px';
            // Смещаем фон
            $bgobj.css({ backgroundPosition: coords });

            $(window).scroll(function() {
                var yPos = -($(window).scrollTop() / $bgobj.data('speed'));
                // Собираем значение координат фона вместе
                var coords = '50% '+ yPos + 'px';
                // Смещаем фон
                $bgobj.css({ backgroundPosition: coords });
            });
        });

        setEqualHeight($(".best .item > div"));
        setEqualHeight($(".news .item .intro"));

        if(jQuery(window).width()<960){
            $(".badclients").appendTo(".r_col");
        }
        $(".top .cont p em").append("<i><br>"+$(".bar p.worktime").text()+"</i>");
        $("body").append("<div class='nav_fixed'><ul class='main'>"+$(".top .menu ul").html()+"</ul><ul class='catalog'>"+$(".content .l_col .catalog").html()+"</ul></div>");
        $(".nav_fixed li.parent > a").each(function(){
            if ($(this).find("ul:visible").size() == 0) $(this).append("<span>+</span>");
            else $(this).append("<span>-</span>");
        })
        $('.nav_fixed li.parent > a > span').on('click', function(){
            $(this).parent().parent().find("> ul").slideToggle();
            if($(this).hasClass('open')){
                $(this).text("+");
            } else {
                $(this).text("-");
            }
            $(this).toggleClass('open')
            return false;
        })
        $(".content .l_col .catalog li.parent > a").each(function(){
            $(this).append("<span>+</span>");
        })

        $(".catalog").find(".active").addClass("act").children("ul").show();
        $(".catalog").find(".active").children("a").children("span").addClass('open').html('-');
        $(".catalog").find(".active").parents("ul").show().parent("li").addClass("act").children("a").children("span").addClass('open').html('-').parents("ul").addClass("act").show().parent("li").addClass("act").children("a").children("span").addClass('open').html('-');

        $('.content .l_col .catalog li.parent > a > span').on('click', function(){
            $(this).parent().parent().find("> ul").slideToggle();
            if($(this).hasClass('open')){
                $(this).text("+");
            } else {
                $(this).text("-");
            }
            $(this).toggleClass('open')
            return false;
        })
        $('a.search').on('click', function(){
            $('.overlay').fadeIn();
            $('.popup.form-search').fadeIn();
        });
        $('a.recall').on('click', function(){
            $('.overlay').fadeIn();
            $('.popup.form-recall').fadeIn().find("form").show();
            $('.popup.form-recall').find('.mess').hide();
        });
        $('a.order').on('click', function(){
            $('.overlay').fadeIn();
            $('.popup.form-order').fadeIn().find("form").show();;
            $('.popup.form-order').find('.mess').hide();
        });
        $('.popup .title .close').on('click', function(){
            $('.overlay').fadeOut();
            $('.popup').fadeOut();
        });
        $('.overlay').on('click', function(){
            $(this).fadeOut();
            $('.popup').fadeOut();
        });
        jQuery(document).keypress(function(e) {

            if(e.which == 0){
                $('.overlay').fadeOut();
                $('.popup').fadeOut();
            } //клавиша A
        });



    });

    /*jQuery(window).load(function(){
     jQuery('.slider .wrap > div').flexslider({
     animation: "slide"
     });
     })*/


//header position init


    function setEqualHeight(columns)
    {
        var tallestcolumn = 0;
        columns.each(
            function()
            {
                currentHeight = $(this).height();
                if(currentHeight > tallestcolumn)
                {
                    tallestcolumn = currentHeight;
                }
            }
        );
        columns.height(tallestcolumn);
    }

})(jQuery);


function getName (str){
    if (str.lastIndexOf('\\')){
        var i = str.lastIndexOf('\\')+1;
    }
    else{
        var i = str.lastIndexOf('/')+1;
    }
    var filename = str.slice(i);
    var uploaded = document.getElementById("fileformlabel");
    uploaded.innerHTML = filename;
}