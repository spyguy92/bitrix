<? if (!array_key_exists('is_ajax', $_REQUEST) &&
!$_REQUEST['is_ajax'] == 'y'): ?>
<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>


</div>
<div class="page__footer">
    <div class="page-footer">
        <div class="container">
            <div class="page-footer__top">
                <div class="row">
                    <div class="col-xl-2">
                        <div class="page-footer__logo-cont"><a class="page-footer__logo" href="/"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/logo-footer.svg"/></a>
                        </div>
                    </div>
                    <div class="col-lg-6 col-xl-5">
                        <div class="page-footer__menu">
                            <div class="page-footer__menu-row row">
                                <? $APPLICATION->IncludeComponent("bitrix:menu", "fotter-menu", array(
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
                                    "ROOT_MENU_TYPE" => "left",    // Тип меню для первого уровня
                                    "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                                ),
                                    false
                                ); ?>
                                <!--                                <div class="page-footer__menu-col col-md-4 col-4"><a class="page-footer__menu-item" href="#">О Квартале</a><a class="page-footer__menu-item" href="#">Квартиры</a><a class="page-footer__menu-item" href="#">Ритейл</a><a class="page-footer__menu-item" href="#">Как купить</a>-->
                                <!--                                </div>-->
                                <!--                                <div class="page-footer__menu-col col-md-4 col-4"><a class="page-footer__menu-item" href="#">О застройщике</a><a class="page-footer__menu-item" href="#">Галерея</a><a class="page-footer__menu-item" href="#">Экскурсии</a><a class="page-footer__menu-item" href="#">Ремонт</a><a class="page-footer__menu-item" href="#">Ход строительства</a>-->
                                <!--                                </div>-->
                                <!--                                <div class="page-footer__menu-col col-md-4 col-4"><a class="page-footer__menu-item" href="#">Документация</a><a class="page-footer__menu-item" href="#">Новости</a><a class="page-footer__menu-item" href="#">Риелторам</a><a class="page-footer__menu-item" href="#">Контакты</a>-->
                                <!--                                </div>-->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-xl-2">
                        <div class="page-footer__contact">
                            <div class="row">
                                <div class="page-footer__contact-group col-md-6 col-lg-12">
                                    <div class="page-footer__title">Адрес
                                    </div>
                                    <div class="page-footer__address">Тюмень, ул. Республики, 65, офисы 607, 608, 609
                                    </div>
                                </div>
                                <div class="page-footer__contact-group col-md-6 col-lg-12">
                                    <div class="page-footer__title">Контакт
                                    </div>
                                    <div class="page-footer__tel">Tel:<a class="page-footer__tel-link"
                                                                         href="tel:+7 3452 58 53 62">+7 (3452) 58 53
                                            62</a>
                                    </div>
                                    <a class="page-footer__email" href="mailto:info@4development.ru">info@4development.ru</a>
                                    <div class="page-footer__social"><a class="page-footer__social-icon" href="#"
                                                                        target="_blank">
                                            <svg class="icon__inst" width="20.59px" height="21.15px">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#inst"></use>
                                            </svg>
                                        </a><a class="page-footer__social-icon" href="#" target="_blank">
                                            <svg class="icon__fb" width="21.15px" height="21.15px">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#fb"></use>
                                            </svg>
                                        </a><a class="page-footer__social-icon" href="#" target="_blank">
                                            <svg class="icon__telegram" width="21px" height="21px">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#telegram"></use>
                                            </svg>
                                        </a><a class="page-footer__social-icon" href="#" target="_blank">
                                            <svg class="icon__viber" width="455.731px" height="455.731px">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#viber"></use>
                                            </svg>
                                        </a><a class="page-footer__social-icon" href="#" target="_blank">
                                            <svg class="icon__wa" width="455.731px" height="455.731px">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#wa"></use>
                                            </svg>
                                        </a><a class="page-footer__social-icon" href="#" target="_blank">
                                            <svg class="icon__ok" width="25px" height="25px">
                                                <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#ok"></use>
                                            </svg>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="page-footer__about-row row">
                            <div class="col-md-6 col-lg-12">
                                <div class="page-footer__about">
                                    <div class="page-footer__about-right">
                                        <div class="page-footer__about-title">Проектное финансирование
                                        </div>
                                        <div class="page-footer__about-logo"><img
                                                    src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/sberbank.svg?1"/>
                                        </div>
                                    </div>
                                    <div class="page-footer__about-left"><a class="page-footer__site"
                                                                            href="https://4development.ru"
                                                                            target="_blank"><img
                                                    src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/site-logo.svg?1"/></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-12">
                                <div class="page-footer__law">
                                    <p>Любая информация, представленная на данном сайте, носит исключительно
                                        информационный характер и ни при каких условиях не является публичной офертой,
                                        определяемой положениями статьи 437 ГК РФ</p>
                                    <p>Проектная декларация, а также иная обязательная к раскрытию Застройщиком
                                        информация в соответствии с ФЗ №214-ФЗ от 30.12.2004г. «Об участии в долевом
                                        строительстве…» размещена в единой информационной системе жилищного
                                        строительства (<a href='https://xn--80az8a.xn--d1aqf.xn--p1ai/' target='_blank'>наш.дом.рф</a>).
                                    </p>
                                </div>
                                <div class="page-footer__policy"><a class="page-footer__policy-link" href="#">Политика
                                        конфиденциальности</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="page-footer__bottom">
                <div class="page-footer__bottom-row row">
                    <div class="col-md-4 col-lg-6 col-xl-7">
                        <div class="page-footer__copyright">Copyright © Гранд Квартал 2021
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3 col-xl-2">
                        <div class="page-footer__develop"><a class="page-footer__dev-link" href="http://www.mslb.ru/"
                                                             target="_blank">
                                <div class="page-footer__dev-link-text">Designed by
                                </div>
                                <div class="page-footer__dev-link-ico">
                                    <svg class="icon__design" width="107px" height="33px">
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#design"></use>
                                    </svg>

                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-3">
                        <div class="page-footer__develop"><a class="page-footer__dev-link" href="https://aerokod.ru/"
                                                             target="_blank">
                                <div class="page-footer__dev-link-text">Разработка сайта
                                </div>
                                <div class="page-footer__dev-link-ico">
                                    <svg class="icon__aero" width="127px" height="17px">
                                        <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#aero"></use>
                                    </svg>

                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div><a class="page__up">
    <svg class="icon__up" width="45px" height="46px">
        <use xlink:href="<?= SITE_TEMPLATE_PATH; ?>/svg-symbols.svg#up"></use>
    </svg>
</a>
<!--script(src='https://unpkg.com/container-query-polyfill/cqfill.iife.min.js')-->
<script src="<?= SITE_TEMPLATE_PATH; ?>/static/js/vendor.js"></script>
<script src="<?= SITE_TEMPLATE_PATH; ?>/static/js/main.js"></script>
</body>
</html>
<?php endif; ?>

<script>

    $(document).on('click', '.NewShowElement', function(){

        var elementOnClick = $(this);

        $.get($('.NewShowElement').attr('href'), {is_ajax: 'y'}, function(data){

            $('.NewShowElement').after(data);

            elementOnClick.remove();});

        return false;

    })

</script>
