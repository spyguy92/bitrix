    <?php

    use Bitrix\Main\Page\Asset;

    $APPLICATION->showHead();
    ?>
<? if (!array_key_exists('is_ajax', $_REQUEST) &&
!$_REQUEST['is_ajax'] == 'y'): ?>
<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


<!DOCTYPE html>
<html class="no-js" lang="ru">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title><?php $APPLICATION->showTitle('Главная'); ?></title>

    <?php
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . "/static/css/main.css?1");
    Asset::getInstance()->addString('<meta name="viewport" content="width=device-width, initial-scale=1.0">');
    Asset::getInstance()->addString('<link rel="shortcut icon" href="' . SITE_TEMPLATE_PATH . '/favicon.ico">');
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . "/static/js/script.js");
    ?>

    <link rel="shortcut icon" href="fav.svg" type="image/svg">
    <script>(function (H) {
            H.className = H.className.replace(/\bno-js\b/, 'js')
        })(document.documentElement)</script>
</head>
<body class="page">
<div id="panel"><?php $APPLICATION->showPanel(); ?></div>
<div class="page__header">
    <div class="page-header"><a class="page-header__top" href="#">
            <div class="container"><span class="page-header__top-text">Скидки до 250 000 ₽</span>
            </div>
        </a>
        <div class="page-header__content">
            <div class="container">
                <div class="page-header__row">
                    <div class="page-header__left-row">
                        <div class="page-header__col-burger">
                            <div class="page-header__burger">
                                <div class="gamburger js-menu"><span class="gamburger-line1"></span><span
                                            class="gamburger-line2"></span><span class="gamburger-line3"></span></div>
                                <div class="page-header__burger-text">Меню
                                </div>
                            </div>
                        </div>
                        <a class="page-header__logo" href="/"><img
                                    src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/logo.svg"/></a>
                        <div class="page-header__menu-row">


                            <?php $APPLICATION->IncludeComponent("bitrix:menu", "template", array(
                                "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                                "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                                "DELAY" => "N",    // Откладывать выполнение шаблона меню
                                "MAX_LEVEL" => "1",    // Уровень вложенности меню
                                "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                                    0 => "",
                                ),
                                "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                                "MENU_CACHE_TYPE" => "N",    // Тип кеширования
                                "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                                "ROOT_MENU_TYPE" => "main-menu",    // Тип меню для первого уровня
                                "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                            ),
                                false
                            ); ?>
                            <!--                            <div class="page-header__menu"><a class="page-header__menu-link" href="quarter.php">О Квартале</a><a class="page-header__menu-link" href="apartments.php">Квартиры</a><a class="page-header__menu-link" href="retail.php">Ритейл</a><a class="page-header__menu-link" href="how-buy.php">Как купить</a><a class="page-header__menu-link" href="promotions.php">Акции</a>-->
                            <!--                            </div>-->
                        </div>
                        <div class="page-header__more"><a class="page-header__more-img js-menu-desctop" href="/"><span
                                        class="page-header__icon-more">
            <svg class="icon__more" width="20px" height="20px">
                <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#more"></use>
            </svg>
        </span><span class="page-header__icon-more-open">
            <svg class="icon__more-open" width="21px" height="20px">
                <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#more-open"></use>
            </svg>
        </span></a>
                            <div class="page-header__more-text">Больше
                            </div>
                        </div>
                    </div>
                    <div class="page-header__right-row">
                        <div class="page-header__contacts"><a class="page-header__tel" href="tel:+7 3452 58 53 62">+7
                                (3452) 58 53 62</a>
                        </div>
                        <a class="page-header__site" href="https://4development.ru" target="_blank"><img
                                    src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/site-logo.svg?1"/></a>
                        <div class="page-header__fav">
                            <svg class="icon__favourite" width="28px" height="25px">
                                <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#favourite"></use>
                            </svg>

                        </div>
                    </div>
                    <div class="page-header__call">
                        <div class="page-header__call-btn">Заказать звонок
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header__mobile-menu">
            <div class="container">
                <div class="page-header__burger-mobile">
                    <div class="gamburger open js-menu"><span class="gamburger-line1"></span><span
                                class="gamburger-line2"></span><span class="gamburger-line3"></span></div>
                    <div class="page-header__burger-text">Меню
                    </div>
                </div>
                <div class="page-header__items">
                    <div class="container">
                        <div class="page-header__burger-menu"><a class="page-header__burger-link" href="#">О
                                Квартале</a><a class="page-header__burger-link" href="#">Квартиры</a><a
                                    class="page-header__burger-link" href="retail.php">Ритейл</a><a
                                    class="page-header__burger-link" href="#">Как купить</a>
                        </div>
                        <div class="page-header__burger-about-menu"><a class="page-header__burger-about-link" href="#">О
                                застройщике</a><a class="page-header__burger-about-link" href="#">Галерея</a><a
                                    class="page-header__burger-about-link" href="#">Экскурсии</a><a
                                    class="page-header__burger-about-link" href="#">Ремонт</a><a
                                    class="page-header__burger-about-link" href="#">Ход строительства</a><a
                                    class="page-header__burger-about-link" href="#">Документация</a><a
                                    class="page-header__burger-about-link" href="#">Новости</a><a
                                    class="page-header__burger-about-link" href="#">Риелторам</a><a
                                    class="page-header__burger-about-link" href="#">Контакты</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-header__dropdown-menu">
            <div class="container">
                <div class="page-header__dropdown-item">
                    <div class="row">
                        <div class="page-header__dropdown-col col-md-2"><a class="page-header__dropdown-link"
                                                                           href="developer.php">О застройщике</a><a
                                    class="page-header__dropdown-link" href="gallery.php">Галерея</a><a
                                    class="page-header__dropdown-link" href="tour.php">Экскурсии</a>
                        </div>
                        <div class="page-header__dropdown-col col-md-2"><a class="page-header__dropdown-link"
                                                                           href="repairs.php">Ремонт</a><a
                                    class="page-header__dropdown-link" href="building.php">Ход строительства</a><a
                                    class="page-header__dropdown-link" href="documents.php">Документация</a>
                        </div>
                        <div class="page-header__dropdown-col col-md-2"><a class="page-header__dropdown-link"
                                                                           href="news/">Новости</a><a
                                    class="page-header__dropdown-link" href="realtors.php">Риелторам</a><a
                                    class="page-header__dropdown-link" href="contacts.php">Контакты</a>
                        </div>
                        <div class="page-header__dropdown-col col-md-6"><a class="page-header__dropdown-link"
                                                                           href="mortgage.php">Гос ипотека</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="page__wrapper">
    <? endif; ?>