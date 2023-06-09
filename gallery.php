<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("gallery");
?>


    <div class="page__b-intro-simple">
        <div class="b-intro-simple"
             style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
            <div class="container">
                <div class="b-intro-simple__row row">
                    <div class="col-md-8">
                        <div class="b-intro-simple__nav">
                            <div class="b-nav">
                                <div class="b-nav__name">Галерея
                                </div>
                                <div class="b-nav__items">
                                    <div class="b-nav__item"><a class="b-nav__link" href="/">Главная</a>
                                    </div>
                                    <div class="b-nav__item"><span class="b-nav__link">Галерея</span>
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
    <div class="page__b-photo-slider">
        <div class="b-photo-slider">
            <div class="container">
                <div class="b-photo-slider__nav">
                    <ul class="nav nav-pills">
                        <li class="nav-item" role="presentation"><a class="nav-link active" data-toggle="tab"
                                                                    href="#tab1" aria-selected="true">Все</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tab2"
                                                                    aria-selected="false">Экстерьеры</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tab3"
                                                                    aria-selected="false">Интерьеры</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tab4"
                                                                    aria-selected="false">МОПы</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tab5"
                                                                    aria-selected="false">Входные группы</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tab6"
                                                                    aria-selected="false">Архитектура</a></li>
                        <li class="nav-item" role="presentation"><a class="nav-link" data-toggle="tab" href="#tab7"
                                                                    aria-selected="false">Инженерные решения</a></li>
                    </ul>
                </div>
                <div class="tab-content">
                    <div class="tab-pane fade  show active " id="tab1">
                        <div class="b-photo-slider__slider">
                            <div class="b-photo-slider__slider-top">
                                <div class="swiper-container swiper-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-photo-slider__navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class="b-photo-slider__slider-thumbs">
                                <div class="swiper-container swiper-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab2">
                        <div class="b-photo-slider__slider">
                            <div class="b-photo-slider__slider-top">
                                <div class="swiper-container swiper-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-photo-slider__navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class="b-photo-slider__slider-thumbs">
                                <div class="swiper-container swiper-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab3">
                        <div class="b-photo-slider__slider">
                            <div class="b-photo-slider__slider-top">
                                <div class="swiper-container swiper-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-photo-slider__navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class="b-photo-slider__slider-thumbs">
                                <div class="swiper-container swiper-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab4">
                        <div class="b-photo-slider__slider">
                            <div class="b-photo-slider__slider-top">
                                <div class="swiper-container swiper-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-photo-slider__navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class="b-photo-slider__slider-thumbs">
                                <div class="swiper-container swiper-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab5">
                        <div class="b-photo-slider__slider">
                            <div class="b-photo-slider__slider-top">
                                <div class="swiper-container swiper-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-photo-slider__navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class="b-photo-slider__slider-thumbs">
                                <div class="swiper-container swiper-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab6">
                        <div class="b-photo-slider__slider">
                            <div class="b-photo-slider__slider-top">
                                <div class="swiper-container swiper-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-photo-slider__navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class="b-photo-slider__slider-thumbs">
                                <div class="swiper-container swiper-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="tab7">
                        <div class="b-photo-slider__slider">
                            <div class="b-photo-slider__slider-top">
                                <div class="swiper-container swiper-top">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="b-photo-slider__navigation">
                                    <div class="swiper-button-prev">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                    <div class="swiper-button-next">
                                        <svg class="icon__arrow-slide" width="9px" height="18px">
                                            <use xlink:href="svg-symbols.svg#arrow-slide"></use>
                                        </svg>

                                    </div>
                                </div>
                            </div>
                            <div class="b-photo-slider__slider-thumbs">
                                <div class="swiper-container swiper-thumbs">
                                    <div class="swiper-wrapper">
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="b-photo-slider__slide"
                                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/quarter-bg.jpg)">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
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