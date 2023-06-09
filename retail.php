<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("retail");
?>


    <div class="page__b-intro-simple">
        <div class="b-intro-simple"
             style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/retail-bg.jpg)">
            <div class="container">
                <div class="b-intro-simple__row row">
                    <div class="col-md-8">
                        <div class="b-intro-simple__nav">
                            <div class="b-nav">
                                <div class="b-nav__name">Ритейл
                                </div>
                                <div class="b-nav__items">
                                    <div class="b-nav__item"><a class="b-nav__link" href="/">Главная</a>
                                    </div>
                                    <div class="b-nav__item"><span class="b-nav__link">Ритейл</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-intro-simple__col-sale col-md-4">
                        <div class="b-sale">
                            <div class="b-sale__link">
                                <div class="b-sale__title">Скидка
                                    <div class="b-sale__text">250 000 руб.!
                                    </div>
                                </div>
                                <a class="b-sale__button" href="#">Узнать больше</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-about">
        <div class="b-about">
            <div class="container">
                <div class="b-about__content">
                    <div class="b-about__title">Удачное расположение
                    </div>
                    <div class="b-about__desc">Обеспечен пешеходный и автомобильный трафик.<br> Большая проходимость у
                        одних помещений и тихая зона с видом на лес - у других.
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
                                    <use xlink:href="svg-symbols.svg#people"></use>
                                </svg>
                                покупать продукты
                            </div>
                            <div class="b-distance__list-item" data-group="3">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="svg-symbols.svg#people"></use>
                                </svg>
                                Много покупать
                            </div>
                            <div class="b-distance__list-item" data-group="4">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="svg-symbols.svg#people"></use>
                                </svg>
                                Быть в форме
                            </div>
                            <div class="b-distance__list-item" data-group="5">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="svg-symbols.svg#people"></use>
                                </svg>
                                Отдыхать от детей
                            </div>
                            <div class="b-distance__list-item" data-group="6">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="svg-symbols.svg#people"></use>
                                </svg>
                                Учить наследников
                            </div>
                            <div class="b-distance__list-item" data-group="7">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="svg-symbols.svg#people"></use>
                                </svg>
                                Учиться и учить наследников
                            </div>
                            <div class="b-distance__list-item" data-group="8">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="svg-symbols.svg#people"></use>
                                </svg>
                                Быть здоровым
                            </div>
                            <div class="b-distance__list-item" data-group="9">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="svg-symbols.svg#people"></use>
                                </svg>
                                Культурно отдыхать
                            </div>
                            <div class="b-distance__list-item" data-group="10">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="svg-symbols.svg#people"></use>
                                </svg>
                                Просто гулять
                            </div>
                            <div class="b-distance__list-item" data-group="11">
                                <svg class="icon__people" width="17px" height="17px">
                                    <use xlink:href="svg-symbols.svg#people"></use>
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
    <div class="page__b-benefit">
        <div class="b-benefit">
            <div class="container">
                <div class="b-benefit__content">
                    <div class="b-benefit__row row">
                        <div class="order-2 col-md-6 order-md-2">
                            <div class="b-benefit__col-text">
                                <div class="b-benefit__title">Помещения которые продают
                                </div>
                                <div class="b-benefit__text">
                                    <ul>
                                        <li>Гарантия на окна, двери и коммуникации.</li>
                                        <li>Есть приборы учета воды, тепла и света. Точные и современные.</li>
                                        <li>Горизонтальная разводка труб в стяжке пола.</li>
                                        <li>Качественные материалы отделки</li>
                                        <li>Видеонаблюдение по всему району.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 col-md-6 order-md-2">
                            <div class="b-benefit__img"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/ben.jpg"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-option-section">
        <div class="b-option-section b-option-bg">
            <div class="container">
                <div class="b-option-section__title b-title-bg">Преимущества покупки
                </div>
            </div>
            <div class="b-option-section__options">
                <div class="container">
                    <div class="b-option-section__row row">
                        <div class="b-option-section__col col-md-6 col-lg-6 col-xl-3"><a class="b-options-buy" href="#">
                                <div class="b-options-buy__item">
                                    <div class="b-options-buy__item-name">Ипотека
                                    </div>
                                    <div class="b-options-buy__item-text">
                                        <ul>
                                            <li>От 4,5% по семейной ипотеке;</li>
                                            <li>От 5,85% по гос. программе "Льготная ипотека";</li>
                                            <li>От 7,9% на строящееся жилье;</li>
                                            <li>Подача и мониторинг ваших заявок.</li>
                                        </ul>
                                    </div>
                                    <div class="b-options-buy__btn">Узнать больше
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="b-option-section__col col-md-6 col-lg-6 col-xl-3"><a class="b-options-buy" href="#">
                                <div class="b-options-buy__item">
                                    <div class="b-options-buy__item-name">Рассрочка
                                    </div>
                                    <div class="b-options-buy__item-text">
                                        <ul>
                                            <li>Без процентов и без привлечения банка</li>
                                            <li>Без увеличения стоимости квартиры</li>
                                            <li>На срок до ввода дома в эксплуатацию</li>
                                            <li>Первоначальный взнос 20%</li>
                                        </ul>
                                    </div>
                                    <div class="b-options-buy__btn">Узнать больше
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="b-option-section__col col-md-6 col-lg-6 col-xl-3"><a class="b-options-buy" href="#">
                                <div class="b-options-buy__item">
                                    <div class="b-options-buy__item-name">Материнский капитал
                                    </div>
                                    <div class="b-options-buy__item-text"><p>При оплате наличными или в рассрочку; Как
                                            первый взнос или проценты по ипотеке; Подбор банка для ипотеки; Подробная
                                            консультация по шагам.</p>
                                    </div>
                                    <div class="b-options-buy__btn">Узнать больше
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="b-option-section__col col-md-6 col-lg-6 col-xl-3"><a class="b-options-buy" href="#">
                                <div class="b-options-buy__item">
                                    <div class="b-options-buy__item-name">Планировки
                                    </div>
                                    <div class="b-options-buy__item-text"><p>Не нужно ехать в Тюмень; Удаленная
                                            регистрация договора долевого участия; Надежная оплата через сервис
                                            «Безопасная сделка»; Личный менеджер на всех этапах.</p>
                                    </div>
                                    <div class="b-options-buy__btn">Узнать больше
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-photo-desc">
        <div class="b-photo-desc">
            <div class="container">
                <div class="b-photo-desc__img">
                    <picture>
                        <source srcset="static/img/general/ret-src.jpg" media="(max-width: 768px)"/>
                        <img src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/ret.jpg"/>
                    </picture>
                    <div class="b-photo-desc__content desc-right">
                        <div class="b-photo-desc__title">Kоммерческая недвижимость <b> ипотека от 4,5 % </b>
                        </div>
                        <div class="b-photo-desc__text">
                        </div>
                        <div class="b-photo-desc__btn"><a class="b-photo-desc__btn-link" href="#">Читать больше</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-callme">
        <div class="b-callme callme-bg">
            <div class="container">
                <div class="b-callme__content">
                    <div class="b-callme__text">Нежилые помещения на первой линии жилого квартала
                    </div>
                    <a class="b-callme__btn" href="#callme" data-toggle="modal">Узнать больше</a>
                </div>
            </div>
        </div>
        <!--модалка-->
        <div class="modal fade" id="callme" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content modal-content_beige">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <svg class="icon__close" width="26px" height="26px">
                            <use xlink:href="svg-symbols.svg#close"></use>
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
    <div class="page__b-benefit _2">
        <div class="b-benefit b-benefit_vertical">
            <div class="container">
                <div class="b-benefit__content">
                    <div class="b-benefit__row row">
                        <div class="order-2 col-md-12">
                            <div class="b-benefit__col-text">
                                <div class="b-benefit__title">Новостройка - значит все новое и продуманное
                                </div>
                                <div class="b-benefit__text">
                                    <ul>
                                        <li>Гарантия на окна, двери и коммуникации.</li>
                                        <li>Есть приборы учета воды, тепла и света. Точные и современные.</li>
                                        <li>Горизонтальная разводка труб в стяжке пола.</li>
                                        <li>Качественные материалы отделки</li>
                                        <li>Видеонаблюдение по всему району.</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="order-1 col-md-12">
                            <div class="b-benefit__img"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/ret2.jpg"/>
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
                <div class="b-purchase__title">Актуальные предложения
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
                                                        <use xlink:href="svg-symbols.svg#favourite"></use>
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
                                                        <use xlink:href="svg-symbols.svg#favourite"></use>
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
                                                        <use xlink:href="svg-symbols.svg#favourite"></use>
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
                                                        <use xlink:href="svg-symbols.svg#favourite"></use>
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
                <div class="b-purchase__more">
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-callme">
        <div class="b-callme">
            <div class="container">
                <div class="b-callme__content">
                    <div class="b-callme__text">Стань частью места силы
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
                            <use xlink:href="svg-symbols.svg#close"></use>
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