$(document).ready(function() {
    $("#calc-oblast").click(function() {
        if ($(this).is(':checked')) $(".mkad").slideDown();
        else $(".mkad").slideUp();
    });
    $(".car-info-link").click(function() {
        $(".car-info-block").slideToggle();
        return false;
    });
    $("form[name='calc-submit-form']").submit(function() {
        var error = 0;
        $(this).find("input, textarea").each(function() {
            if ($(this).val() == "") error = 1;
        });
        if (error == 1) {
            alert('Пожалуйста, заполните все поля');
            return false;
        }
    });
    if ($("#calc-oblast").is(':checked')) $(".mkad td").show();
});

function calcPost() {
    calculate(); $(".calc1").hide(); $(".calc2").show();
    scrollToResult();
}

var cars = new Array();
/* cars[номер_машины] = new Array('Название автомобиля', 'Работа по мск без пропуска','с пропуском МОЖД','с пропуском 3 транспортное кольцо','с пропуском в Садовое кольцо','цена км за МКАД','ссылка на изображение','грузоподъемность','длина кузова','минимальное кол-во часов работы') */
cars[1] = new Array('Газель - тент',500,500,600,600,15,'/images/cars/car1.jpg',1500,3,4);
cars[2] = new Array('Газель - борт',550,550,650,650,15,'/images/cars/car2.jpg',1500,3,5);
cars[3] = new Array('Газель - борт с длинной базой',650,650,750,750,20,'/images/cars/car3.jpg',1500,4,6);
cars[4] = new Array('Соболь',550,550,650,650,15,'/images/cars/car4.jpg',1500,3,5);
cars[5] = new Array('ЗиЛ - Бычок',650,650,750,-1,20,'/images/cars/car5.jpg',3000,4,6);
cars[6] = new Array('Валдай',650,650,700,-1,20,'/images/cars/car6.jpg',3500,5,6);
cars[7] = new Array('Бортовая а/м, длина 4,8 м',750,750,850,850,22,'/images/cars/car7.jpg',5000,4.8,6);
cars[8] = new Array('Бортовая а/м, длина 6 м',950,1050,1050,-1,30,'/images/cars/car8.jpg',8000,6,7);
cars[9] = new Array('Бортовая а/м, длина 9 м',1000,1000,1100,-1,31,'/images/cars/car9.jpg',14000,9,7);
cars[10] = new Array('Бортовая а/м, длина 12 м',1050,1050,1150,-1,32,'/images/cars/car10.jpg',20000,12,7);
cars[11] = new Array('Низкорамная платформа, 5 тонн',1600,1600,1700,-1,40,'/images/cars/car11.jpg',5000,10,7);
cars[12] = new Array('Манипулятор, 3 тонны',1600,1600,1600,-1,40,'/images/cars/car12.jpg',3000,4,7);

$(document).ready(function() {

    $("#calc-submit").click(function() {
        calculate();
    });

    var nowdate = new Date();
    $("#order-day option[value='"+ nowdate.getDate() + "']").attr('selected','selected');
    $("#order-month option[value='"+ (nowdate.getMonth()+1) + "']").attr('selected','selected');
    $("#order-year option[value='"+ nowdate.getFullYear() + "']").attr('selected','selected');
});

function calculate() {
    var total = 0;
    var car = parseInt($("#calc-auto").val());
    var calctime = parseInt($("#calc-time").val());
    var mintime = cars[car][9];
    mintime++;
    if (calctime < mintime) calctime = mintime;
    var propusk = parseInt($("#calc-propusk").val());
    propusk_txt = "без пропуска в центр.";
    if (propusk == 0) total = calctime*parseInt(cars[car][1]);
    else if (propusk == 1) { total = calctime*parseInt(cars[car][2]); propusk_txt = "с пропуском в МОСЖ."; }
    else if (propusk == 2) { total = calctime*parseInt(cars[car][3]); propusk_txt = "с пропуском в 3 транспортное кольцо."; }
    else if (propusk == 3) {
        if (cars[car][4] == "-1") { alert('Этот автомобиль нельзя отправить в Садовое кольцо'); return false; }
        total = calctime*parseInt(cars[car][4]);
        propusk_txt = "с пропуском в Садовое кольцо.";
    }
    var napr = "Москве";
    if ($("#calc-oblast").is(':checked')) {
        var calcmkad = parseInt($("#calc-mkad").val());
        if (isNaN(calcmkad)) { calcmkad = 0; $("#calc-mkad").val('0'); }
        total += calcmkad*2*cars[car][5];
        napr = "Московской области,<br/>расстояние от МКАД "+calcmkad+" км.";
    }
    if (total > 0) {
        $(".calc1").slideUp(200, function() { $(".car-info-block").hide(); $(".calc2").slideDown(200); });
        $("#calc-txt").html('Автомобиль '+cars[car][0]+',<br/>на '+calctime+' часов по '+napr+'<br/>'+propusk_txt);
        $("#order-calc-data").val('Автомобиль '+cars[car][0]+', на '+calctime+' часов по '+napr+', '+propusk_txt+', стоимость '+total+' руб.');
        $("#calc-total").html(total);
        $(".car-name-inner").html(cars[car][0]);
        $(".car-img-inner img").attr('src',cars[car][6]);
        $(".gp").html(cars[car][7]);
        $(".dlina").html(cars[car][8]);
        $(".cost1").html(cars[car][1]);
        $(".cost2").html(cars[car][2]);
        $(".cost3").html(cars[car][3]);
        if (cars[car][4] == "-1") $(".cost4").html('-');
        else $(".cost4").html(cars[car][4]+' руб./час');
        $(".cost5").html(cars[car][5]);
        $(".cost6").html((mintime*cars[car][1])+' руб. (1 + '+(mintime-1)+') часа');
    }
}

function styledChanged(sname) {
    var car = parseInt($("#calc-auto").val());
    $("#calc-time option").each(function() {
        $(this).attr('disabled',false);
    });
    for (i = 0; i <= cars[car][9]; i++) {
        $("#calc-time option[value='"+ i + "']").attr('disabled',true);
        $("#calc-time").attr("selectedIndex",-1)
    }
    if ($("#calc-time option:selected").attr('disabled') == 'disabled') { $("#calc-time option[value='"+ (cars[car][9]+1) + "']").attr('selected','selected'); $("#selectcalc-time").html($("#calc-time option:selected").text()); }
}

function scrollToResult() {
    $('html, body').animate({
        scrollTop: $("a[name='result']").offset().top-290
    }, 200);
}