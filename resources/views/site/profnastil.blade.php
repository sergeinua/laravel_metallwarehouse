@extends('layouts.main')

@section('content')

    <script type="text/javascript" language="javascript" src="/js/scripts.js"></script>

    <style type="text/css">

        div.HiddenImage_new, div.HiddenImage_new_active {
            position: absolute;
            z-index: 10;
            display: none;
            width: 200px;
            font-size: 11px;
            padding: 3px;
            color: #666;
            background: #FBFBFB;
            border: 1px solid #C3C3C3
        }

        div.HiddenImage_new_active {
            display: block
        }

    </style>


    <style type="text/css">

        table.HiddenImage {
            display: none
        }

        sup.sup_HiddenImage {
            display: none
        }

    </style>

    <!--
      background: #FBFBE5;
      border: 1px solid #C3C3C3
    -->

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="HiddenImage" border="0" cellpadding="0" cellspacing="0" width="100%">
                <tbody>
                <tr>
                    <th style="color: rgb(0, 0, 0);" id="pic_00003" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/n_300_200_57_shema.gif" alt="Н57">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00004" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/n_300_200_60_shema.gif" alt="Н60">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00005" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/n_300_200_75_shema.gif" alt="Н75">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00006" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/n_300_200_114_600_shema.gif" alt="Н114">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00007" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/n_300_200_114_750_shema.gif" alt="Н114">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00023" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/s_300_200_8_shema.gif" alt="С8">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00010_899" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/s_300_200_10_899_shema.gif"
                             alt="профнастил С10">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00010_1000" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/s_300_200_10_1000_shema.gif"
                             alt="профлист С10">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00010_1150" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/s_300_200_10_1150_shema.gif"
                             alt="профлист С10">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00011_800" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/s_300_200_15_800_shema.gif"
                             alt="профнастил С15">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00011_1150" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/s_300_200_15_1150_shema.gif"
                             alt="проф-лист С15">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00012" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/s_300_200_18_1000_shema.gif" alt="С18">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00013" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/s_300_200_21_shema.gif" alt="С21">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00014" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/s_300_200_44_shema.gif" alt="С44">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00018" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/ns_300_200_35_shema.gif" alt="НС35">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00019" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/ns_300_200_44_shema.gif" alt="НС44">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00022" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/v_300_200_18_shema.gif"
                             alt="профнастил волновой">
                    </th>
                    <th style="color: rgb(0, 0, 0);" id="pic_00015" width="99%">
                        <img src="http://www.razda4a.ru/img/profnastil/big/ns_300_200_10_shema.gif" alt="НС 10">
                    </th>

                </tr>
                </tbody>
            </table>
        </div>
    </div>


    <h1>Профнастил</h1>
    <p align="JUSTIFY">Профлист, <a href="/">изделие металлопроката</a>, без которого не обходиться не одно
        строительство. Он участвует в строительстве с самого начала, еще до закладки фундамента объекта. Именно из него,
        чаще всего, сооружают, оградительный забор вокруг строительной площадки. </p>
    <p align="JUSTIFY">А далее – не один этап строительства не обходиться без профилированного листа. Он разнообразен и
        универсален это и делает его неотъемлемой частью строительства и архитектуры. </p>
    <h2>Применение</h2>
    <p align="JUSTIFY">Профлист включается и в структуру конструкции, служа, например, несъемной опалубкой. Так же, он
        может, использоваться для усиления перекрытий и стен. Популярен профнастил и как декоративный элемент – его
        применяют для облицовки внешних и внутренних поверхностей, как элемент интерьера и экстерьера зданий и
        сооружений. Подобранный цветовой оттенок, аккуратная фурнитура и грамотный монтаж – все что нужно для возведения
        красивого и функционального забора из профлиста. Кровля, облицованная этим материалом, выгодно отличается от
        других удобством эксплуатации и долгосрочностью. Использование именно профилированныого листа с полимерным
        покрытием дает дизайнерам богатый выбор цветовых решений. </p>
    <a name="nesushiy"></a><h3>Несущий профлист</h3>
    <img src="/img/profnastil/image002.gif">
    <p align="JUSTIFY">Такой проф-лист маркируется буквой Н. Высота его трапеции, обычно, превышает 50 мм. Конструктивно
        предусмотрены ребра жесткости, проходящее по верхней части трапеции. Это делает такое изделие достаточно
        прочным, для того, что бы использовать его как элемент, способный выдерживать нагрузки. Профлист маркированный
        буквой Н пригоден для возведения стен кровельных работ зданий и сооружений – например ангаров или гаражей,
        постояннборов.</p>
    <p align="JUSTIFY">Согласно ГОСТ 24045-94 несущий профнастил выпускается: </p>
    <ul>
        <li>Н 57
        </li>
        <li>Н 60
        </li>
        <li>Н 75
        </li>
        <li>Н 114
        </li>
    </ul>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption> Профлист Н57</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="3">Н57</td>
                    <td> Н57-750-0,6</td>
                    <td>57</td>
                    <td>750</td>
                    <td>0,6</td>
                    <td>7,5</td>
                    <td rowspan="3"><a onmouseover="return showHiddenImage(event, 'pic_00003')"><img
                                    src="/img/profnastil/image003.gif"></a></td>
                </tr>
                <tr>
                    <td> Н57-750-0,7</td>
                    <td>57</td>
                    <td>750</td>
                    <td>0,7</td>
                    <td>8,7</td>
                </tr>
                <tr>
                    <td> Н57-750-0,8</td>
                    <td>57</td>
                    <td>750</td>
                    <td>0,8</td>
                    <td>9,8</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption> Профлист Н60</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="3"> Н60</td>
                    <td>Н60-845-0,7</td>
                    <td>60</td>
                    <td>845</td>
                    <td>0,7</td>
                    <td>8,8</td>
                    <td rowspan="3"><a onmouseover="return showHiddenImage(event, 'pic_00004')"><img
                                    src="/img/profnastil/image004.gif"></a></td>
                </tr>
                <tr>
                    <td>Н60-845-0,8</td>
                    <td>60</td>
                    <td>845</td>
                    <td>0,8</td>
                    <td>9,9</td>
                </tr>
                <tr>
                    <td>Н60-845-0,9</td>
                    <td>60</td>
                    <td>845</td>
                    <td>0,9</td>
                    <td>11,1</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <p align="JUSTIFY">Профилированный лист с маркировкой Н60 – типичный представитель среди несущих профнастилов. Ничто
        не ограничивает применение Н60 в качестве несъемной опалубки, при возведения перекрытий и монтировке крыш.</p>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption> Профлист Н75</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="3">Н75</td>
                    <td> Н75-750-0,7</td>
                    <td>75</td>
                    <td>750</td>
                    <td>0,7</td>
                    <td>9,8</td>
                    <td rowspan="3"><a onmouseover="return showHiddenImage(event, 'pic_00005')"><img
                                    src="/img/profnastil/image005.gif"></a></td>
                </tr>
                <tr>
                    <td> Н75-750-0,8</td>
                    <td>75</td>
                    <td>750</td>
                    <td>0,8</td>
                    <td>11,2</td>
                </tr>
                <tr>
                    <td> Н75-750-0,9</td>
                    <td>75</td>
                    <td>750</td>
                    <td>0,9</td>
                    <td>12,5</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист Н114 шириной 600 мм</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="3">Н114</td>
                    <td>Н114-600-0,8</td>
                    <td>114</td>
                    <td>600</td>
                    <td>0,8</td>
                    <td>14,0</td>
                    <td rowspan="3"><a onmouseover="return showHiddenImage(event, 'pic_00006')"><img
                                    src="/img/profnastil/image006.gif"></a></td>
                </tr>
                <tr>
                    <td>Н114-600-0,9</td>
                    <td>114</td>
                    <td>600</td>
                    <td>0,9</td>
                    <td>15,6</td>
                </tr>
                <tr>
                    <td>Н114-600-1,0</td>
                    <td>114</td>
                    <td>600</td>
                    <td>1,0</td>
                    <td>17,2</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист Н114 шириной 750 мм</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="3">Н114</td>
                    <td>Н114-750-0,8</td>
                    <td>114</td>
                    <td>750</td>
                    <td>0,8</td>
                    <td>12,5</td>
                    <td rowspan="3"><a onmouseover="return showHiddenImage(event, 'pic_00007')"><img
                                    src="/img/profnastil/image007.gif"></a></td>
                </tr>
                <tr>
                    <td>Н114-750-0,9</td>
                    <td>114</td>
                    <td>750</td>
                    <td>0,9</td>
                    <td>14,0</td>
                </tr>
                <tr>
                    <td>Н114-750-1,0</td>
                    <td>114</td>
                    <td>750</td>
                    <td>1,0</td>
                    <td>15,4</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <p align="JUSTIFY">Рынок металлопроката предлагает несущий профнастил и с другими техническими характеристиками.
        Такие изделия производятся заводами по Техническим Условиям. Маркировка их читается по тому же алгоритму,
        например профлист Н80.</p>
    <a name="stenovoy"></a><h3>Стеновой профлист</h3>
    <img src="/img/profnastil/image009.gif">
    <p align="JUSTIFY">Стеновой профлист маркируется буквой С. Его технические характеристики – соотношение высоты
        трапеции, ее формы и толщины стали не позволяет применять его для возведения высоких и несущих конструкций.
        Основное его назначение – декоративность. Стеновым профлистом обычно облицовывают поверхности: стены, потолок
        или фасады. Подбирая структуру и оттенок лакокрасочного покрытия, дизайнеры и строители добиваются нужного
        визуального эффекта. Стеновой профлист применим как для внутренней, так и для внешней облицовки, и кроме
        декоративности несет, так же, и защитную функцию.</p>
    <p align="JUSTIFY">В России стеновой профнастил выпускается: </p>
    <ul>
        <li>С 8
        </li>
        <li>С 10
        </li>
        <li>С 18
        </li>
        <li>С 15
        </li>
        <li>С 21
        </li>
        <li>С 44
        </li>
    </ul>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист С8</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="5">С8</td>
                    <td>С8-1150-0,4</td>
                    <td>8</td>
                    <td>1150</td>
                    <td>0,4</td>
                    <td>3,87</td>
                    <td rowspan="5"><a onmouseover="return showHiddenImage(event, 'pic_00023')"><img
                                    src="/img/profnastil/image023.gif"></a></td>
                </tr>
                <tr>
                    <td>С8-1150-0,45</td>
                    <td>8</td>
                    <td>1150</td>
                    <td>0,45</td>
                    <td>4,29</td>
                </tr>
                <tr>
                    <td>С8-1150-0,5</td>
                    <td>8</td>
                    <td>1150</td>
                    <td>0,5</td>
                    <td>4,72</td>
                </tr>
                <tr>
                    <td>С8-1150-0,55</td>
                    <td>8</td>
                    <td>1150</td>
                    <td>0,55</td>
                    <td>5,15</td>
                </tr>
                <tr>
                    <td>С8-1150-0,6</td>
                    <td>8</td>
                    <td>1150</td>
                    <td>0,6</td>
                    <td>5,57</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <p align="JUSTIFY">Его дешевизна, легкость и удобство в проведении монтажных работ делают его популярным для
        возведения временных сооружения. Для облицовочных работ применяют профнастил С8 с лакокрасочным или полимерным
        нанесением. Выпускается по ТУ.</p>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист С10 шириной 899 мм</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="2">С10</td>
                    <td>С10-899-0,6</td>
                    <td>10</td>
                    <td>899</td>
                    <td>0,6</td>
                    <td>5,7</td>
                    <td rowspan="2"><a onmouseover="return showHiddenImage(event, 'pic_00010_899')"><img
                                    src="/img/profnastil/image010.gif"></a></td>
                </tr>
                <tr>
                    <td>С10-899-0,7</td>
                    <td>10</td>
                    <td>899</td>
                    <td>0,7</td>
                    <td>6,6</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист С10 шириной 1000 мм</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="2">С10</td>
                    <td>С10-1000-0,6</td>
                    <td>10</td>
                    <td>1000</td>
                    <td>0,6</td>
                    <td>5,6</td>
                    <td rowspan="2"><a onmouseover="return showHiddenImage(event, 'pic_00010_1000')"> <img
                                    src="/img/profnastil/image010.gif"></a></td>
                </tr>
                <tr>
                    <td>С10-1000-0,7</td>
                    <td>10</td>
                    <td>1000</td>
                    <td>0,7</td>
                    <td>6,5</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист С10 с шириной 1150 мм</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="6">С10</td>
                    <td>С10-1150-0,4</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,4</td>
                    <td>4,52</td>
                    <td rowspan="6"><a onmouseover="return showHiddenImage(event, 'pic_00010_1150')"> <img
                                    src="/img/profnastil/image010.gif"></a></td>
                </tr>
                <tr>
                    <td>С10-1150-0,45</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,45</td>
                    <td>4,97</td>
                </tr>
                <tr>
                    <td>С10-1150-0,5</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,5</td>
                    <td>5,42</td>
                </tr>
                <tr>
                    <td>С10-1150-0,55</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,55</td>
                    <td>5,88</td>
                </tr>
                <tr>
                    <td>С10-1150-0,6</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,6</td>
                    <td>6,3</td>
                </tr>
                <tr>
                    <td>С10-1150-0,7</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,7</td>
                    <td>6,78</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист С15 шириной 800 мм</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="2">С15</td>
                    <td> С15-800-0,6</td>
                    <td>15</td>
                    <td>800</td>
                    <td>0,6</td>
                    <td>6,0</td>
                    <td rowspan="2"><a onmouseover="return showHiddenImage(event, 'pic_00011_800')"><img
                                    src="/img/profnastil/image011.gif"></a></td>
                </tr>
                <tr>
                    <td> С15-800-0,7</td>
                    <td>15</td>
                    <td>800</td>
                    <td>0,7</td>
                    <td>6,9</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист С15 с шириной 1150</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="8">С15</td>
                    <td> С15-1150-0,5</td>
                    <td>15</td>
                    <td>1150</td>
                    <td>0,5</td>
                    <td>5,42</td>
                    <td rowspan="8"><a onmouseover="return showHiddenImage(event, 'pic_00011_1150')"><img
                                    src="/img/profnastil/image011.gif"></a></td>
                </tr>
                <tr>
                    <td> С15-1150-0,6</td>
                    <td>15</td>
                    <td>1150</td>
                    <td>0,6</td>
                    <td>6,3</td>
                </tr>
                <tr>
                    <td> С15-1150-0,7</td>
                    <td>15</td>
                    <td>1150</td>
                    <td>0,7</td>
                    <td>6,78</td>
                </tr>
                <tr>
                    <td> С15-1150-0,8</td>
                    <td>15</td>
                    <td>1150</td>
                    <td>0,8</td>
                    <td>8,4</td>
                </tr>
                <tr>
                    <td> С15-1150-0,8</td>
                    <td>15</td>
                    <td>1150</td>
                    <td>0,8</td>
                    <td>8,4</td>
                </tr>
                <tr>
                    <td> С15-1150-0,9</td>
                    <td>15</td>
                    <td>1150</td>
                    <td>0,9</td>
                    <td>9,3</td>
                </tr>
                <tr>
                    <td> С15-1150-1,0</td>
                    <td>15</td>
                    <td>1150</td>
                    <td>1,0</td>
                    <td>10,3</td>
                </tr>
                <tr>
                    <td> С15-1150-1,2</td>
                    <td>15</td>
                    <td>1150</td>
                    <td>1,2</td>
                    <td>12,63</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист С18</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="2">С18</td>
                    <td>С18-1000-0,6</td>
                    <td>18</td>
                    <td>1000</td>
                    <td>0,6</td>
                    <td>6,4</td>
                    <td rowspan="2"><a onmouseover="return showHiddenImage(event, 'pic_00012')"><img
                                    src="/img/profnastil/image012.gif"></a></td>
                </tr>
                <tr>
                    <td> С18-1000-0,7</td>
                    <td>18</td>
                    <td>1000</td>
                    <td>0,7</td>
                    <td>7,4</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист С21</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="2">С21</td>
                    <td>С21-1000-0,6</td>
                    <td>21</td>
                    <td>1000</td>
                    <td>0,6</td>
                    <td>6,4</td>
                    <td rowspan="2"><a onmouseover="return showHiddenImage(event, 'pic_00013')"><img
                                    src="/img/profnastil/image013.gif"></a></td>
                </tr>
                <tr>
                    <td>С21-1000-0,7</td>
                    <td>21</td>
                    <td>1000</td>
                    <td>0,7</td>
                    <td>7,4</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <p align="JUSTIFY">Профилированные листы с маркировкой С21 имеют высоту трапеции 21 мм. Это делает возможным
        применять его не только в качестве декоративно-защитной облицовки, но и в качестве несущей конструкции. Часто
        применяют профнастил С21 для возведения заборов и оградительных сооружений, как временных, так и постоянных.</p>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист С44</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td>С44</td>
                    <td> С44-1000-0,7</td>
                    <td>44</td>
                    <td>1000</td>
                    <td>0,7</td>
                    <td>7,4</td>
                    <td><a onmouseover="return showHiddenImage(event, 'pic_00014')"><img
                                    src="/img/profnastil/image014.gif"></a></td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <a name="smeshanniy"></a><h3>Кровельный (смешанный) профлист</h3>
    <img src="/img/profnastil/image017.gif">
    <p align="JUSTIFY">Профлисты с маркировкой СН – смешанного назначения использования. В зависимости от требований к
        постройке и условий окружающей среды, его можно использовать и в качестве декоративного элемента, и в качестве
        возведения несущих конструкций, но чаще всего - для кровельных работ.</p>
    <p align="JUSTIFY">На рынке металло проката предоставлены профилированные листы трех типов:</p>
    <ul>
        <li>НС 10
        </li>
        <li>НС 35
        </li>
        <li>НС 44
        </li>
    </ul>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист НС10 с шириной 1150</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="7">НС10</td>
                    <td>НС10-1150-0,5</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,5</td>
                    <td>5,42</td>
                    <td rowspan="7"><a onmouseover="return showHiddenImage(event, 'pic_00015')"><img
                                    src="/img/profnastil/image015.gif"></a></td>
                </tr>
                <tr>
                    <td>НС10-1150-0,6</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,6</td>
                    <td>6,3</td>
                </tr>
                <tr>
                    <td>НС10-1150-0,7</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,7</td>
                    <td>6,78</td>
                </tr>
                <tr>
                    <td>НС10-1150-0,8</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,8</td>
                    <td>8,4</td>
                </tr>
                <tr>
                    <td>НС10-1150-0,9</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>0,9</td>
                    <td>9,3</td>
                </tr>
                <tr>
                    <td>НС10-1150-1,0</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>1,0</td>
                    <td>10,3</td>
                </tr>
                <tr>
                    <td>НС10-1150-1,2</td>
                    <td>10</td>
                    <td>1150</td>
                    <td>1,2</td>
                    <td>12,63</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист НС35</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="3"> НС35</td>
                    <td> НС35-1000-0,6</td>
                    <td>35</td>
                    <td>1000</td>
                    <td>0,6</td>
                    <td>6,4</td>
                    <td rowspan="3"><a onmouseover="return showHiddenImage(event, 'pic_00018')"><img
                                    src="/img/profnastil/image018.gif"></a></td>
                </tr>
                <tr>
                    <td>НС35-1000-0,7</td>
                    <td>35</td>
                    <td>1000</td>
                    <td>0,7</td>
                    <td>7,4</td>
                </tr>
                <tr>
                    <td>НС35-1000-0,8</td>
                    <td>35</td>
                    <td>1000</td>
                    <td>0,8</td>
                    <td>8,4</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист НС44</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="2"> НС44</td>
                    <td> НС44-1000-0,7</td>
                    <td>44</td>
                    <td>1000</td>
                    <td>0,7</td>
                    <td>8,3</td>
                    <td rowspan="2"><a onmouseover="return showHiddenImage(event, 'pic_00019')"><img
                                    src="/img/profnastil/image019.gif"></a></td>
                </tr>
                <tr>
                    <td> НС44-1000-0,8</td>
                    <td>44</td>
                    <td>1000</td>
                    <td>0,8</td>
                    <td>9,4</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <a name="volna"></a><h3>Профлист – волна</h3>
    <img src="/img/profnastil/image021.gif">
    <p align="JUSTIFY">Основное отличие такого профлиста в том, что его профиль имеет форму волны, а не трапеции, как
        остальной профилированный прокат. Это делает его пригодным для воплощения дизайнерских решений. Хорошо
        смотреться заборы, фасады и крыши, облицованные В18.</p>

    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table class="bgg" border="1">
                <caption>Профлист волновой В18</caption>
                <tbody>
                <tr>
                    <th width="15%">Тип профлиста</th>
                    <th width="30%">Маркировка профильного листа</th>
                    <th width="10%">Высота h</th>
                    <th width="10%">Ширина b</th>
                    <th width="10%">Толщина t</th>
                    <th width="10%">Масса 1м², кг</th>
                    <th width="15%">Схема профиля</th>
                </tr>
                <tr>
                    <td rowspan="5">В18</td>
                    <td>В18-1100-0,5</td>
                    <td>18</td>
                    <td>1100</td>
                    <td>0,5</td>
                    <td>4,8</td>
                    <td rowspan="5"><a onmouseover="return showHiddenImage(event, 'pic_00022')"><img
                                    src="/img/profnastil/image022.gif"></a></td>
                </tr>
                <tr>
                    <td>В18-1100-0,55</td>
                    <td>18</td>
                    <td>1100</td>
                    <td>0,55</td>
                    <td>5,3</td>
                </tr>
                <tr>
                    <td>В18-1100-0,55</td>
                    <td>18</td>
                    <td>1100</td>
                    <td>0,55</td>
                    <td>5,3</td>
                </tr>
                <tr>
                    <td>В18-1100-0,7</td>
                    <td>18</td>
                    <td>1100</td>
                    <td>0,7</td>
                    <td>6,6</td>
                </tr>
                <tr>
                    <td>В18-1100-0,8</td>
                    <td>18</td>
                    <td>1100</td>
                    <td>0,8</td>
                    <td>7,5</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h2>Изготовление</h2>
    <p align="JUSTIFY">Процесс изготовление профилированного лиса заключается в изгибе тонкого листа стали. Делается это
        холоднокатаным способом на специальном оборудовании. Такая процедура называется профилированием.</p>
    <p align="JUSTIFY">Лист получает изгибистый вид профиля – в виде плавных волн или трапеций. Высота трапеции
        указывается на маркировке, и определяет, вместе с такими параметрами, как ширина и толщина листа стали область
        его применения. Так, покупатель уже по маркировке может судить о том, что профлист с обозначением С8 вряд ли
        подойдет для возведения высокого забора, а профлист с обметкой Н75 не подойдет для внутренней отделки
        помещений.</p>
    <h3>Материал изготовления</h3>
    <p align="JUSTIFY">Есть несколько типов материалов, из которых изготавливают профлисты. Чаще всего это листы стали –
        с оцинкованным, алюмоцинковым или алюмокремниевым покрытием.</p>
    <h2>Покрытие профлиста защитными слоями</h2>
    <p align="JUSTIFY">Мало предать листу стали необходимый профиль. Для предания ему устойчивости к воздействию
        агрессивных сред и достойного внешнего вида, его покрывают несколькими слоями защитных и декоративных веществ.
        Обязательными для оцинкованного профлиста являются слои антикоррозийного материала, грунтовки и защитного
        лака.</p>
    <p align="JUSTIFY">Часто наружная сторона профлиста покрывается полимерным напылением. Используются следующие
        полимеры для нанесения на профлист:</p>
    <ul>
        <li>Пурал и матовый Пурал
        </li>
        <li>Пластизол
        </li>
        <li>Полиэстер и Матовый полиэстер
        </li>
        <li>Полидифторит
        </li>
    </ul>
    <p align="JUSTIFY">Таким образом профлист получает не только цвет и защиту, но и разнообразную текстуру на соей
        поверхности.</p>
    <h3>Пурал</h3>
    <p align="JUSTIFY">Листы, с нанесенным на них Пуралом износостойки и долговечны. Они сохраняют свои эстетические
        свойства до 30 лет. Устойчивость к погодным колебаниям и вредным воздействиям делает профнастил в покрытием
        Pural пригодным для облицовки крыш и стен зданий, монтировки систем водостока.</p>
    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table border="1">
                <tbody>
                <tr>
                    <th colspan="2" width="49%">Характеристики</th>
                    <th rowspan="5" width="2%"></th>
                    <th colspan="2" width="49%">Оценки стойкости по пятибалльной шкале:</th>
                </tr>
                <tr>
                    <td width="35%">Поверхность</td>
                    <td width="14%">гладкая</td>
                    <td width="35%">К коррозиям</td>
                    <td width="14%">5</td>
                </tr>
                <tr>
                    <td>Толщина покрытия, мкм</td>
                    <td>50</td>
                    <td>Цвета</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Температурный диапазон эксплуатации</td>
                    <td>-60°C - +100°C</td>
                    <td>К механическим воздействиям</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Min температура монтажа</td>
                    <td>-15°C</td>
                    <td>Атмосферным воздействиям</td>
                    <td>4</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h3>Матовый пурал</h3>
    <p align="JUSTIFY">Матовый пурал (Pural matt) по техническим свойствам не отличается от Пурала. Профлист, покрытый
        матовым Пуралом не отражает бликов.</p>
    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table border="1">
                <tbody>
                <tr>
                    <th colspan="2" width="49%">Характеристики</th>
                    <th rowspan="5" width="2%"></th>
                    <th colspan="2" width="49%">Оценки стойкости по пятибалльной шкале:</th>
                </tr>
                <tr>
                    <td width="35%">Поверхность</td>
                    <td width="14%">структурная</td>
                    <td width="35%">К коррозиям</td>
                    <td width="14%">5</td>
                </tr>
                <tr>
                    <td>Толщина покрытия, мкм</td>
                    <td>50</td>
                    <td>Цвета</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Температурный диапазон эксплуатации</td>
                    <td>-60°C - +100°C</td>
                    <td>К механическим воздействиям</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Min температура монтажа</td>
                    <td>-15°C</td>
                    <td>Атмосферным воздействиям</td>
                    <td>2</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h3>Пластизол</h3>
    <p align="JUSTIFY">Plastisol PVC – чаще всего применяется для покрытия профлиста для кровельных работ. Устойчив и к
        температурным изменениям, и к механическим повреждениям. Поверхность платизола имеет красивое теснение,
        напоминающее шагрень, или древесную кору.</p>
    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table border="1">
                <tbody>
                <tr>
                    <th colspan="2" width="49%">Характеристики</th>
                    <th rowspan="5" width="2%"></th>
                    <th colspan="2" width="49%">Оценки стойкости по пятибалльной шкале:</th>
                </tr>
                <tr>
                    <td width="35%">Поверхность</td>
                    <td width="14%">тисненая</td>
                    <td width="35%">К коррозиям</td>
                    <td width="14%">5</td>
                </tr>
                <tr>
                    <td>Толщина покрытия, мкм</td>
                    <td>200</td>
                    <td>Цвета</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Температурный диапазон эксплуатации</td>
                    <td>-60°C - +100°C</td>
                    <td>К механическим воздействиям</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Min температура монтажа</td>
                    <td>+10°C</td>
                    <td>Атмосферным воздействиям</td>
                    <td>2</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h3>Полиэстер</h3>
    <p align="JUSTIFY">Или Polyester надежно защищает листы проф-настила от коррозии. Профлисты, покрытые полиэстером
        умерено стойки в воздействию атмосферных явлений, поэтому применять его удобней для внутренней отделки или в
        щадящих условиях. При соблюдении технических требований к эксплуатации, полиэстер не потеряет своих эстетических
        качеств до 20 лет.</p>
    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table border="1">
                <tbody>
                <tr>
                    <th colspan="2" width="49%">Характеристики</th>
                    <th rowspan="5" width="2%"></th>
                    <th colspan="2" width="49%">Оценки стойкости по пятибалльной шкале:</th>
                </tr>
                <tr>
                    <td width="35%">Поверхность</td>
                    <td width="14%">гладкая</td>
                    <td width="35%">К коррозиям</td>
                    <td width="14%">3</td>
                </tr>
                <tr>
                    <td>Толщина покрытия, мкм</td>
                    <td>25</td>
                    <td>Цвета</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Температурный диапазон эксплуатации</td>
                    <td>-60°C - +90°C</td>
                    <td>К механическим воздействиям</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Min температура монтажа</td>
                    <td>0°C</td>
                    <td>Атмосферным воздействиям</td>
                    <td>3</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <h3>Матовый полиэстер</h3>
    <p align="JUSTIFY">Matt polyester. Полиэстер, предающий конструкции благородный матовый цвет.</p>
    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table border="1">
                <tbody>
                <tr>
                    <th colspan="2" width="49%">Характеристики</th>
                    <th rowspan="5" width="2%"></th>
                    <th colspan="2" width="49%">Оценки стойкости по пятибалльной шкале:</th>
                </tr>
                <tr>
                    <td width="35%">Поверхность</td>
                    <td width="14%">гладкая</td>
                    <td width="35%">К коррозиям</td>
                    <td width="14%">4</td>
                </tr>
                <tr>
                    <td>Толщина покрытия, мкм</td>
                    <td>35</td>
                    <td>Цвета</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Температурный диапазон эксплуатации</td>
                    <td>-60°C - +90°C</td>
                    <td>К механическим воздействиям</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Min температура монтажа</td>
                    <td>0°C</td>
                    <td>Атмосферным воздействиям</td>
                    <td>4</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>

    <h3>Полидифторит</h3>
    <p align="JUSTIFY">Профнастил с таким покрытием наиболее эффектно смотрится на фасадах зданий и сооружений.
        Полидифторит (PVDF) выпускают в нескольких вариантах. Полидифторит HB предает профлисту дополнительную
        устойчивость к коррозии. Полидифторит Hiarc содержит перламутровые элементы, что придают профлисту, покрытому
        таким материалом, дополнительную эффектность.</p>
    <div class="table-container-outer">
        <div class="table-container-fade"></div>
        <div class="table-container">
            <table border="1">
                <tbody>
                <tr>
                    <th colspan="2" width="49%">Характеристики</th>
                    <th rowspan="5" width="2%"></th>
                    <th colspan="2" width="49%">Оценки стойкости по пятибалльной шкале:</th>
                </tr>
                <tr>
                    <td width="35%">Поверхность</td>
                    <td width="14%">гладкая</td>
                    <td width="35%">К коррозиям</td>
                    <td width="14%">4</td>
                </tr>
                <tr>
                    <td>Толщина покрытия, мкм</td>
                    <td>27</td>
                    <td>Цвета</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Температурный диапазон эксплуатации</td>
                    <td>до +120°C</td>
                    <td>К механическим воздействиям</td>
                    <td>4</td>
                </tr>
                <tr>
                    <td>Min температура монтажа</td>
                    <td>-10°C</td>
                    <td>Атмосферным воздействиям</td>
                    <td>5</td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <p align="JUSTIFY">Огромный выбор профилированного настила по приемлемым ценам Вам предлагает ООО "Металлоторг". Всегда
        в наличии большой ассортимент, и возможность заказать редкие <a href="/">виды металло проката</a> индивидуально.
        Осуществляется доставка продукции по всем регионам России. Вопросы по сортаменту и условиям доставки вы можете
        задать нашим менеджерам по контактным телефонам.</p>

@stop