<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Main");
?>


    <div class="page__b-banners">
        <div class="b-banners">
            <div class="container">
                <div class="b-banners__grid"><a class="b-banners__grid-item b-banners__grid-item_1" href="#">
                        <div class="b-banners__grid-content">
                            <div class="b-banners__top">
                                <div class="b-banners__title-cont">
                                    <div class="b-banners__title">Светло даже зимой
                                    </div>
                                    <div class="b-banners__sub-title">Художественное освещение
                                    </div>
                                </div>
                                <div class="b-banners__btn">Подробнее
                                </div>
                            </div>
                            <div class="b-banners__grid-img">
                            </div>
                        </div>
                        <div class="b-banners__img"
                             style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/banner.png)">
                        </div>
                    </a><a class="b-banners__grid-item b-banners__grid-item_2" href="#">
                        <div class="b-banners__grid-content b-banners__grid-content_h100">
                            <div class="b-banners__title-cont">
                                <div class="b-banners__title">Ипотека от 4,3%
                                </div>
                            </div>
                            <div class="b-banners__btn">Подробнее
                            </div>
                        </div>
                    </a><a class="b-banners__grid-item b-banners__grid-item_3" href="#">
                        <div class="b-banners__grid-content b-banners__grid-content_h100">
                            <div class="b-banners__title-cont">
                                <div class="b-banners__title">Приглашаем на экскурсию
                                </div>
                            </div>
                            <div class="b-banners__btn">Подробнее
                            </div>
                        </div>
                    </a><a class="b-banners__grid-item b-banners__grid-item_4" href="#">
                        <div class="b-banners__grid-content b-banners__grid-content_h100">
                            <div class="b-banners__title-cont">
                                <div class="b-banners__title">3D-тур
                                </div>
                            </div>
                            <div class="b-banners__btn">Подробнее
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-choice">
        <div class="b-choice">
            <div class="container">
                <div class="b-choice__filter">
                    <form>
                        <div class="b-choice__filter-row row">
                            <div class="col-md-6 col-xl-3">
                                <div class="b-choice__group">
                                    <div class="b-choice__label">Комнатность
                                    </div>
                                    <div class="b-choice__input">
                                        <div class="b-checkbox-group">
                                            <div class="b-checkbox-group__items">
                                                <label class="b-checkbox-group__item"><input
                                                            class="b-checkbox-group__input" type="checkbox"
                                                            name="1"/><span class="b-checkbox-group__Label">1</span>
                                                </label>
                                                <label class="b-checkbox-group__item"><input
                                                            class="b-checkbox-group__input" type="checkbox"
                                                            name="2"/><span class="b-checkbox-group__Label">2</span>
                                                </label>
                                                <label class="b-checkbox-group__item"><input
                                                            class="b-checkbox-group__input" type="checkbox"
                                                            name="3"/><span class="b-checkbox-group__Label">3</span>
                                                </label>
                                                <label class="b-checkbox-group__item"><input
                                                            class="b-checkbox-group__input" type="checkbox"
                                                            name="4"/><span class="b-checkbox-group__Label">4</span>
                                                </label>
                                                <label class="b-checkbox-group__item"><input
                                                            class="b-checkbox-group__input" type="checkbox"
                                                            name="5"/><span class="b-checkbox-group__Label">5</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="b-choice__group">
                                    <div class="b-choice__label">Площадь, м2
                                    </div>
                                    <div class="b-choice__input">
                                        <div class="b-range"><input class="b-choice__input js-range" type="text"
                                                                    min="30" max="200" from="30" to="200" step="0.1"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-xl-3">
                                <div class="b-choice__group">
                                    <div class="b-choice__label">Стоимость, млн руб.
                                    </div>
                                    <div class="b-choice__input">
                                        <div class="b-range"><input class="b-choice__input js-range" type="text"
                                                                    min="30" max="200" from="30" to="200" step="0.1"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-choice__col-btn col-md-6 col-xl-3">
                                <div class="b-choice__group b-choice__group_btn">
                                    <div class="b-choice__input">
                                        <button class="b-choice__btn" type="submit">Подобрать квартиру
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-about">
        <div class="b-about">
            <div class="container">
                <div class="b-about__content">
                    <div class="b-about__title">О квартале
                    </div>
                    <div class="b-about__desc">Быть в самом центре событий большого города – или подпитываться энергией
                        леса? Пользоваться новейшими технологиями – или дышать чистейшим воздухом? Вам больше не
                        придется выбирать. Всего в тридцати минутах езды от центра Тюмени уже строится ваш новый дом.
                        Дом, который соединит в себе городской ритм с энергией живой природы. ЖК Гранд Квартал – это
                        новое место силы.  ЖК Гранд Квартал. Грандиозный характер. 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-mort-advantages">
        <div class="b-mort-advantages b-mort-advantages_num">
            <div class="container">
                <div class="b-mort-advantages__content">
                    <div class="b-mort-advantages__row row">
                        <div class="b-mort-advantages__col col-md-6 col-md-4 col-xl-3">
                            <div class="b-advantages">
                                <div class="b-advantages__item">
                                    <div class="b-advantages__item-title">в составе<span> 315 </span>Га
                                    </div>
                                    <div class="b-advantages__item-text">Комарово Парк
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-mort-advantages__col col-md-6 col-md-4 col-xl-3">
                            <div class="b-advantages">
                                <div class="b-advantages__item">
                                    <div class="b-advantages__item-title">более<span> 200 000</span>м2
                                    </div>
                                    <div class="b-advantages__item-text">площадь квартир
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-mort-advantages__col col-md-6 col-md-4 col-xl-3">
                            <div class="b-advantages">
                                <div class="b-advantages__item">
                                    <div class="b-advantages__item-title">более<span> 4000 </span>
                                    </div>
                                    <div class="b-advantages__item-text">квартир
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-mort-advantages__col col-md-6 col-md-4 col-xl-3">
                            <div class="b-advantages">
                                <div class="b-advantages__item">
                                    <div class="b-advantages__item-title"><span> 37 </span>Га
                                    </div>
                                    <div class="b-advantages__item-text">Лесопарк
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-add1 page__gray">
        <div class="b-add">
            <div class="container">
                <div class="b-add__row row">
                    <div class="col-md-5 col-lg-7">
                        <div class="b-add__img"><img src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/place.jpg"/>
                            <div class="b-add__img-text">
                                <div class="b-add__white-text">Место, где город
                                </div>
                                <div class="b-add__yell-text">объединяется с природой
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-5">
                        <div class="b-desc">
                            <div class="container">
                                <div class="b-desc__icon"><img
                                            src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/icon.svg"/>
                                </div>
                                <div class="b-desc__title">Расположение, транспортная доступность
                                </div>
                                <div class="b-desc__text">
                                    <p>Гранд Квартал – флагман новой эры развития Тюмени, сочетающий в себе
                                        экологическую чистоту и близость к деловому центру.  До самого центра города из
                                        вашего нового дома можно будет добраться на автомобиле всего за тридцать минут.
                                        Жители микрорайона также смогут воспользоваться развитой сетью общественного
                                        транспорта: ближайшие остановки расположены всего в 250-500 метрах от
                                        комплекса.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-distance">
        <div class="b-distance">
            <div class="b-distance__top">
                <div class="container">
                    <div class="b-distance__ico"><img src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/icon5.svg"/>
                    </div>
                    <div class="b-distance__title">Инфраструктура
                    </div>
                    <div class="b-distance__text">В ЖК Гранд Квартал реализована современная Inside-концепция, по
                        которой в комплексе запланированы пространства для всего, что может вам понадобиться.
                    </div>
                </div>
            </div>
            <div class="b-distance__content">
                <div class="b-distance__container">
                    <div class="b-distance__white">
                        <div class="b-distance__list">
                            <div class="b-distance__list-item b-distance__list-item_active" data-group="*">Все
                            </div>
                            <div class="b-distance__list-item" data-group="2">
                                <!--тут инлайном свг-->
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#people"></use>
                                </svg>
                                покупать продукты
                            </div>
                            <div class="b-distance__list-item" data-group="3">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#people"></use>
                                </svg>
                                Много покупать
                            </div>
                            <div class="b-distance__list-item" data-group="4">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#people"></use>
                                </svg>
                                Быть в форме
                            </div>
                            <div class="b-distance__list-item" data-group="5">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#people"></use>
                                </svg>
                                Отдыхать от детей
                            </div>
                            <div class="b-distance__list-item" data-group="6">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#people"></use>
                                </svg>
                                Учить наследников
                            </div>
                            <div class="b-distance__list-item" data-group="7">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#people"></use>
                                </svg>
                                Учиться и учить наследников
                            </div>
                            <div class="b-distance__list-item" data-group="8">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#people"></use>
                                </svg>
                                Быть здоровым
                            </div>
                            <div class="b-distance__list-item" data-group="9">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#people"></use>
                                </svg>
                                Культурно отдыхать
                            </div>
                            <div class="b-distance__list-item" data-group="10">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#people"></use>
                                </svg>
                                Просто гулять
                            </div>
                            <div class="b-distance__list-item" data-group="11">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#people"></use>
                                </svg>
                                Изучать историю
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="b-distance__map" id="distance-map">
            </div>
            <script>
                var ExtendedMarkers = //тут json
                    {
                        centerinit: {
                            lat: 57.15936202584249,
                            lng: 65.5561530067805
                        },
                        markers: [
                            {//первый это жк
                                lat: 57.15936202584249,
                                lng: 65.5561530067805,
                                title: 'Marker Title',
                                url: '#',
                                active: true,
                                style: 'flat',
                                html: "<div class='b-distance__marker b-distance__marker_jk'><img class='b-distance__marker-ico' src='<?=SITE_TEMPLATE_PATH;?>/static/img/general/jk.svg' alt=''><div class='b-distance__marker-hidden'><div class='b-distance__marker-title'>Набережная реки Туры</div></div></div>"
                            },
                            {//дальше инфраструктура
                                lat: 57.16208163659686,
                                lng: 65.55126508805233,
                                title: 'Marker Title',
                                url: '#',
                                active: true,
                                style: 'flat',
                                html: "<div data-group='1' class='b-distance__marker b-distance__marker_feature'><img class='b-distance__marker-ico' src='https://grand-kvartal.ru/upload/iblock/c28/c288c0790a90292614393a0d2d2a0557.svg' alt=''><div class='b-distance__marker-hidden'><div class='b-distance__marker-title'>Набережная реки Туры</div><div class='b-distance__marker-text'>Планируемый объект</div></div></div>"
                            },
                            {
                                lat: 57.160499143287474,
                                lng: 65.54497799012142,
                                title: 'Marker Title',
                                url: '#',
                                active: true,
                                style: 'flat',
                                html: "<div data-group='2' class='b-distance__marker'><img class='b-distance__marker-ico' src='https://grand-kvartal.ru/upload/iblock/c28/c288c0790a90292614393a0d2d2a0557.svg' alt=''><div class='b-distance__marker-hidden'><div class='b-distance__marker-title'>Набережная реки Туры</div></div></div>"
                            },
                            {
                                lat: 57.160499143287474,
                                lng: 65.54497799012142,
                                title: 'Marker Title',
                                url: '#',
                                active: true,
                                style: 'flat',
                                html: "<div data-group='2' class='b-distance__marker'><img class='b-distance__marker-ico' src='https://grand-kvartal.ru/upload/iblock/c28/c288c0790a90292614393a0d2d2a0557.svg' alt=''><div class='b-distance__marker-hidden'><div class='b-distance__marker-title'>Набережная реки Туры</div></div></div>"
                            },
                            {
                                lat: 57.15549522622648,
                                lng: 65.54429134461361,
                                title: 'Marker Title',
                                url: '#',
                                active: true,
                                style: 'flat',
                                html: "<div data-group='2' class='b-distance__marker'><img class='b-distance__marker-ico' src='https://grand-kvartal.ru/upload/iblock/c28/c288c0790a90292614393a0d2d2a0557.svg' alt=''><div class='b-distance__marker-hidden'><div class='b-distance__marker-title'>Набережная реки Туры</div></div></div>"
                            },
                            {
                                lat: 57.15486677948944,
                                lng: 65.54536422821957,
                                title: 'Marker Title',
                                url: '#',
                                active: true,
                                style: 'flat',
                                html: "<div data-group='3' class='b-distance__marker'><img class='b-distance__marker-ico' src='https://grand-kvartal.ru/upload/iblock/c28/c288c0790a90292614393a0d2d2a0557.svg' alt=''><div class='b-distance__marker-hidden'><div class='b-distance__marker-title'>Набережная реки Туры</div></div></div>"
                            },
                            {
                                lat: 57.15455384702667,
                                lng: 65.54448098111175,
                                title: 'Marker Title',
                                url: '#',
                                active: true,
                                style: 'flat',
                                html: "<div data-group='1' class='b-distance__marker'><img class='b-distance__marker-ico' src='https://grand-kvartal.ru/upload/iblock/c28/c288c0790a90292614393a0d2d2a0557.svg' alt=''><div class='b-distance__marker-hidden'><div class='b-distance__marker-title'>Набережная реки Туры</div></div></div>"
                            }
                        ]
                    }
            </script>
            <script src="https://api-maps.yandex.ru/2.1.79/?apikey=d92af4de-a756-408d-acce-933c72c3616e&amp;lang=ru_RU"></script>
        </div>
    </div>
    <div class="page__b-advantage">
        <div class="b-advantage">
            <div class="container">
                <div class="b-advantage__row row">
                    <div class="col-md-8 col-lg-6">
                        <div class="b-advantage__desc">
                            <div class="b-desc">
                                <div class="container">
                                    <div class="b-desc__icon"><img
                                                src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/icon3.svg"/>
                                    </div>
                                    <div class="b-desc__title">Архитектура, технологии и природа
                                    </div>
                                    <div class="b-desc__text">
                                        <p>ЖК Гранд Квартал – комплекс от компании 4D, застройщика с яркой историей и
                                            амбициозными проектами. Архитектурный облик решен в современной
                                            северо-европейской манере. Все здания малоэтажные, не выше 7-19 этажей. И из
                                            каждой квартиры открываются потрясающие виды на окружающие комплекс
                                            леса. Внутри квартала, в отдельной лаунж-зоне, расположится современная
                                            урбан-вилла – небольшой малоэтажный дом, рассчитанный на ограниченное
                                            количество квартир повышенной комфортности, с одним общим входом. Все дворы
                                            комплекса будут разбиты на камерные уголки с помощью живых изгородей: это
                                            позволит отгородить шумные спортивные площадки от уютных зон для
                                            отдыха. </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-6">
                        <div class="b-advantage__img-row row">
                            <div class="col-6 col-md-12 col-lg-6">
                                <div class="b-advantage__img"
                                     style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/desc1.jpg)">
                                </div>
                            </div>
                            <div class="col-6 col-md-12 col-lg-6">
                                <div class="b-advantage__img"
                                     style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/desc2.jpg)">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-inves">
        <div class="b-inves">
            <div class="container">
                <div class="b-inves__row row">
                    <div class="col-md-4"><a class="b-inves__img" href="#"><img
                                    src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/inves.jpg"/>
                            <div class="b-inves__img-text"> Экстра-форматы
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4"><a class="b-inves__img" href="#"><img
                                    src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/inves.jpg"/>
                            <div class="b-inves__img-text"> Inside-концепция
                            </div>
                        </a>
                    </div>
                    <div class="col-md-4"><a class="b-inves__img" href="#"><img
                                    src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/inves.jpg"/>
                            <div class="b-inves__img-text"> Квартиры с отделкой
                            </div>
                        </a>
                    </div>
                </div>
                <div class="b-inves__desc">
                    <div class="b-desc">
                        <div class="container">
                            <div class="b-desc__icon"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/icon4.svg"/>
                            </div>
                            <div class="b-desc__title">Инвестиционная привлекательность
                            </div>
                            <div class="b-desc__text">
                                <p>Все проекты 4D – это высочайшая рентабельность и надежность, обеспеченная
                                    непревзойденным качеством строительства, продуманными архитектурными и
                                    технологическими решениями, четким следованием графику и срокам сдачи объектов.
                                    Инвестиция в Гранд Квартал на ранних сроках строительства – это не только вклад в
                                    ваше будущее современное и комфортное жилье, но и выгодная инвестиция. </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-add">
        <div class="b-add">
            <div class="container">
                <div class="b-add__row row">
                    <div class="col-md-5 col-lg-7">
                        <div class="b-add__img"><img src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/lay.jpg"/>
                            <div class="b-add__img-text">
                                <div class="b-add__white-text">Место, где многое
                                </div>
                                <div class="b-add__yell-text">проявляется в малом
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-lg-5">
                        <div class="b-desc">
                            <div class="container">
                                <div class="b-desc__icon"><img
                                            src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/icon2.svg"/>
                                </div>
                                <div class="b-desc__title">Планировки, виды из окна
                                </div>
                                <div class="b-desc__text">
                                    <p>Все квартиры ЖК Гранд Квартал отличаются идеально продуманной планировкой,
                                        которая позволяет максимально комфортно и рационально спланировать больше места
                                        для жизни, распределить зоны для отдыха, сна, работы или занятий с
                                        детьми. Типовая линейка квартир насчитывает 42 варианта: от небольших единичных
                                        студий до четырехкомнатных квартир в один уровень и двухуровневых квартир с
                                        отдельным входом. Вы можете купить квартиру с улучшенной черновой отделкой или
                                        выбрать один из трех вариантов с чистовым ремонтом от застройщика. Виды из окон
                                        вашей будущей квартиры, с просторного балкона, лоджии или даже террасы будут
                                        дополнять пространство внутри, как бы впуская природу в ваш дом.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-purchase">
        <div class="b-purchase">
            <div class="container">
                <div class="b-purchase__title">Купить квартиру
                </div>
                <div class="b-purchase__list-apart">
                    <div class="b-purchase__row row">
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="b-purchase__item"><a class="b-buy" href="#">
                                    <div class="b-buy__content">
                                        <div class="b-buy__top">
                                            <div class="b-buy__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart.jpg"/>
                                            </div>
                                        </div>
                                        <div class="b-buy__bottom">
                                            <div class="b-buy__type">хайфлет
                                            </div>
                                            <div class="b-buy__rooms">
                                                <div class="b-buy__rooms-text">1-комнатная квартира
                                                </div>
                                                <div class="b-buy__rooms-fav">
                                                    <svg class="icon__favourite" width="28px" height="25px">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#favourite"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="b-buy__price-cont">
                                                <div class="b-buy__price">11 977 600 ₽
                                                </div>
                                            </div>
                                            <div class="b-buy__items">
                                                <div class="b-buy__item">Площадь<span>49,6 м2</span>
                                                </div>
                                                <div class="b-buy__item">Дом<span>ГП 4.7</span>
                                                </div>
                                                <div class="b-buy__item">Этаж<span>3 из 16</span>
                                                </div>
                                                <div class="b-buy__item">Цена в ипотеку<span>7 600 ₽</span>
                                                </div>
                                            </div>
                                            <div class="b-buy__btn">Узнать больше
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="b-purchase__item"><a class="b-buy" href="#">
                                    <div class="b-buy__content">
                                        <div class="b-buy__top">
                                            <div class="b-buy__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart.jpg"/>
                                            </div>
                                        </div>
                                        <div class="b-buy__bottom">
                                            <div class="b-buy__type">хайфлет
                                            </div>
                                            <div class="b-buy__rooms">
                                                <div class="b-buy__rooms-text">1-комнатная квартира
                                                </div>
                                                <div class="b-buy__rooms-fav">
                                                    <svg class="icon__favourite" width="28px" height="25px">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#favourite"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="b-buy__price-cont">
                                                <div class="b-buy__price">11 977 600 ₽
                                                </div>
                                            </div>
                                            <div class="b-buy__items">
                                                <div class="b-buy__item">Площадь<span>49,6 м2</span>
                                                </div>
                                                <div class="b-buy__item">Дом<span>ГП 4.7</span>
                                                </div>
                                                <div class="b-buy__item">Этаж<span>3 из 16</span>
                                                </div>
                                                <div class="b-buy__item">Цена в ипотеку<span>7 600 ₽</span>
                                                </div>
                                            </div>
                                            <div class="b-buy__btn">Узнать больше
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="b-purchase__item"><a class="b-buy" href="#">
                                    <div class="b-buy__content">
                                        <div class="b-buy__top">
                                            <div class="b-buy__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart.jpg"/>
                                            </div>
                                        </div>
                                        <div class="b-buy__bottom">
                                            <div class="b-buy__type">хайфлет
                                            </div>
                                            <div class="b-buy__rooms">
                                                <div class="b-buy__rooms-text">1-комнатная квартира
                                                </div>
                                                <div class="b-buy__rooms-fav">
                                                    <svg class="icon__favourite" width="28px" height="25px">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#favourite"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="b-buy__price-cont">
                                                <div class="b-buy__price">11 977 600 ₽
                                                </div>
                                            </div>
                                            <div class="b-buy__items">
                                                <div class="b-buy__item">Площадь<span>49,6 м2</span>
                                                </div>
                                                <div class="b-buy__item">Дом<span>ГП 4.7</span>
                                                </div>
                                                <div class="b-buy__item">Этаж<span>3 из 16</span>
                                                </div>
                                                <div class="b-buy__item">Цена в ипотеку<span>7 600 ₽</span>
                                                </div>
                                            </div>
                                            <div class="b-buy__btn">Узнать больше
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-6 col-md-6 col-lg-3">
                            <div class="b-purchase__item"><a class="b-buy" href="#">
                                    <div class="b-buy__content">
                                        <div class="b-buy__top">
                                            <div class="b-buy__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart.jpg"/>
                                            </div>
                                        </div>
                                        <div class="b-buy__bottom">
                                            <div class="b-buy__type">хайфлет
                                            </div>
                                            <div class="b-buy__rooms">
                                                <div class="b-buy__rooms-text">1-комнатная квартира
                                                </div>
                                                <div class="b-buy__rooms-fav">
                                                    <svg class="icon__favourite" width="28px" height="25px">
                                                        <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#favourite"></use>
                                                    </svg>

                                                </div>
                                            </div>
                                            <div class="b-buy__price-cont">
                                                <div class="b-buy__price">11 977 600 ₽
                                                </div>
                                            </div>
                                            <div class="b-buy__items">
                                                <div class="b-buy__item">Площадь<span>49,6 м2</span>
                                                </div>
                                                <div class="b-buy__item">Дом<span>ГП 4.7</span>
                                                </div>
                                                <div class="b-buy__item">Этаж<span>3 из 16</span>
                                                </div>
                                                <div class="b-buy__item">Цена в ипотеку<span>7 600 ₽</span>
                                                </div>
                                            </div>
                                            <div class="b-buy__btn">Узнать больше
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="b-purchase__more"><a class="b-purchase__more-btn" href="#">Больше квартир</a>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-callme">
        <div class="b-callme">
            <div class="container">
                <div class="b-callme__content">
                    <div class="b-callme__text">В месте силы уже сегодня
                    </div>
                    <a class="b-callme__btn" href="#callme" data-toggle="modal">Заказать звонок</a>
                </div>
            </div>
        </div>
        <!--модалка-->
        <div class="modal fade" id="callme" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content modal-content_beige">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <svg class="icon__close" width="26px" height="26px">
                            <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#close"></use>
                        </svg>

                    </button>
                    <div class="b-modal">
                        <div class="b-modal__container">
                            <div class="b-modal__form">
                                <form>
                                    <div class="b-modal__content">
                                        <div class="b-modal__title">Заказать звонок
                                        </div>
                                        <div class="b-modal__input">
                                            <label class="b-modal__label">Ваше имя<input class="b-modal__form-control"
                                                                                         type="text"/>
                                            </label>
                                        </div>
                                        <div class="b-modal__input">
                                            <label class="b-modal__label">Ваш телефон<input
                                                        class="b-modal__form-control" type="tel" required="required"/>
                                            </label>
                                        </div>
                                        <div class="b-modal__input">
                                            <div class="b-checkbox">
                                                <input class="consent checkbox-input" type="checkbox" id="consent"
                                                       name="check"
                                                       style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/lay.jpg"/>
                                                <label class="b-checkbox__label" for="consent">Согласен (-а) на
                                                    обработку моих персональных данных в целях рассмотрения обращения
                                                </label>
                                            </div>
                                        </div>
                                        <div class="b-modal__call">
                                            <button class="b-modal__btn" type="submit">Заказать
                                            </button>
                                            <div class="b-modal__btn-text">
                                                <p>Или позвоните нам!</p><a class="b-modal__tel"
                                                                            href="tel:+7 3452 28 83 14">+7 (3452) 28 83
                                                    14</a>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>