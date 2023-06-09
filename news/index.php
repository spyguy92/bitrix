<?php
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Новости");
$APPLICATION->SetPageProperty("title", "Новости");
?><? if (!array_key_exists('is_ajax', $_REQUEST) &&
    !$_REQUEST['is_ajax'] == 'y'): ?>
    <?php if ($APPLICATION->getCurPage(false) == '/news/'): ?>
        <div class="page__b-intro-simple">
            <div class="b-intro-simple"
                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/news-bg.jpg)">
                <div class="container">
                    <div class="b-intro-simple__row row">
                        <div class="col-md-8">
                            <div class="b-intro-simple__nav">
                                <div class="b-nav">
                                    <div class="b-nav__name">
                                        Новости
                                    </div>
                                    <div class="b-nav__items">
                                        <div class="b-nav__item">
                                            <a class="b-nav__link" href="/">Главная</a>
                                        </div>
                                        <div class="b-nav__item">
                                            <span class="b-nav__link">Новости</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-intro-simple__col-sale col-md-4">
                            <div class="b-sale">
                                <div class="b-sale__link">
                                    <div class="b-sale__title">
                                        Скидка
                                        <div class="b-sale__text">
                                            250 000 руб.!
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
        <div class="page__b-news">
        <div class="b-news">
        <div class="container">


        <div class="b-news__nav">
<!--            <div class="b-tags">-->
<!--                <div class="b-tags__item"><a class="b-tags__link b-tags__link_current" href="#">Все</a>-->
<!--                </div>-->
<!--                <div class="b-tags__item"><a class="b-tags__link" href="#">Новости</a>-->
<!--                </div>-->
<!--                <div class="b-tags__item"><a class="b-tags__link" href="#">Акции</a>-->
<!--                </div>-->
<!--                <div class="b-tags__item"><a class="b-tags__link" href="#">Статьи</a>-->
<!--                </div>-->
<!--                <div class="b-tags__item"><a class="b-tags__link" href="#">Динамика</a>-->
<!--                </div>-->
                <?php $APPLICATION->IncludeComponent(
	"bitrix:catalog.section.list", 
	"filter", 
	array(
		"ADD_SECTIONS_CHAIN" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"COUNT_ELEMENTS" => "N",
		"COUNT_ELEMENTS_FILTER" => "CNT_ACTIVE",
		"FILTER_NAME" => "sectionsFilter",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"SECTION_CODE" => "",
		"SECTION_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_URL" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"SHOW_PARENT_NAME" => "Y",
		"TOP_DEPTH" => "2",
		"VIEW_MODE" => "LINE",
		"COMPONENT_TEMPLATE" => "filter",
		"HIDE_SECTION_NAME" => "N"
	),
	false
);?>
<!--            </div>-->
        </div>
    <?php endif; ?>


<?php endif; ?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news", 
	"news", 
	array(
		"ADD_ELEMENT_CHAIN" => "N",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"BROWSER_TITLE" => "-",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "news",
		"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",
		"DETAIL_DISPLAY_TOP_PAGER" => "N",
		"DETAIL_FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"DETAIL_PAGER_SHOW_ALL" => "Y",
		"DETAIL_PAGER_TEMPLATE" => "",
		"DETAIL_PAGER_TITLE" => "Больше",
		"DETAIL_PROPERTY_CODE" => array(
			0 => "author",
			1 => "",
		),
		"DETAIL_SET_CANONICAL_URL" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "news",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",
		"LIST_FIELD_CODE" => array(
			0 => "NAME",
			1 => "DETAIL_PICTURE",
			2 => "",
		),
		"LIST_PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"MESSAGE_404" => "",
		"META_DESCRIPTION" => "-",
		"META_KEYWORDS" => "-",
		"NEWS_COUNT" => "4",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Новости",
		"PREVIEW_TRUNCATE_LEN" => "",
		"SEF_FOLDER" => "/news/",
		"SEF_MODE" => "Y",
		"SET_LAST_MODIFIED" => "Y",
		"SET_STATUS_404" => "Y",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N",
		"USE_CATEGORIES" => "N",
		"USE_FILTER" => "N",
		"USE_PERMISSIONS" => "N",
		"USE_RATING" => "N",
		"USE_REVIEW" => "N",
		"USE_RSS" => "N",
		"USE_SEARCH" => "N",
		"USE_SHARE" => "N",
		"SEF_URL_TEMPLATES" => array(
			"news" => "",
			"section" => "#SECTION_CODE_PATH#/",
			"detail" => "#SECTION_CODE_PATH#/#ELEMENT_CODE#",
		)
	),
	false
); ?><? if (!array_key_exists('is_ajax', $_REQUEST) &&
    !$_REQUEST['is_ajax'] == 'y'): ?>
    <!--                <div class="b-news__list">--> <!--                    <div class="b-news__row row">--> <!--                        <div class="b-news__col col-md-6">--> <!--                            <div class="b-news__item"><a class="b-news-item" href="#"><span class="b-news-item__img"><img src="--> <?php //=SITE_TEMPLATE_PATH;?><!--/static/img/general/news.jpg"/></span><span class="b-news-item__desc"><span class="b-news-item__title">Когда есть место для города и для природы</span><span class="b-news-item__text">Тюмень – один из лидеров среди российских городов как по «индексу счастья», так и по инвестиционной привлекательности. Именно здесь, на границе с бескрайними лесными массивами, которые по праву называются «легкими Тюмени», осуществляется грандиозный проект Комарово Парк...</span><span class="b-news-item__btn">Подробнее</span></span></a>--> <!--                            </div>--> <!--                        </div>--> <!--                        <div class="b-news__col col-md-6">--> <!--                            <div class="b-news__item"><a class="b-news-item" href="#"><span class="b-news-item__img"><img src="--> <?php //=SITE_TEMPLATE_PATH;?><!--/static/img/general/news.jpg"/></span><span class="b-news-item__desc"><span class="b-news-item__title">Когда есть место для города и для природы</span><span class="b-news-item__text">Тюмень – один из лидеров среди российских городов как по «индексу счастья», так и по инвестиционной привлекательности. Именно здесь, на границе с бескрайними лесными массивами, которые по праву называются «легкими Тюмени», осуществляется грандиозный проект Комарово Парк...</span><span class="b-news-item__btn">Подробнее</span></span></a>--> <!--                            </div>--> <!--                        </div>--> <!--                        <div class="b-news__col col-md-6">--> <!--                            <div class="b-news__item"><a class="b-news-item" href="#"><span class="b-news-item__img"><img src="--> <?php //=SITE_TEMPLATE_PATH;?><!--/static/img/general/news.jpg"/></span><span class="b-news-item__desc"><span class="b-news-item__title">Когда есть место для города и для природы</span><span class="b-news-item__text">Тюмень – один из лидеров среди российских городов как по «индексу счастья», так и по инвестиционной привлекательности. Именно здесь, на границе с бескрайними лесными массивами, которые по праву называются «легкими Тюмени», осуществляется грандиозный проект Комарово Парк...</span><span class="b-news-item__btn">Подробнее</span></span></a>--> <!--                            </div>--> <!--                        </div>--> <!--                        <div class="b-news__col col-md-6">--> <!--                            <div class="b-news__item"><a class="b-news-item" href="#"><span class="b-news-item__img"><img src="--> <?php //=SITE_TEMPLATE_PATH;?><!--/static/img/general/news.jpg"/></span><span class="b-news-item__desc"><span class="b-news-item__title">Когда есть место для города и для природы</span><span class="b-news-item__text">Тюмень – один из лидеров среди российских городов как по «индексу счастья», так и по инвестиционной привлекательности. Именно здесь, на границе с бескрайними лесными массивами, которые по праву называются «легкими Тюмени», осуществляется грандиозный проект Комарово Парк...</span><span class="b-news-item__btn">Подробнее</span></span></a>--> <!--                            </div>--> <!--                        </div>--> <!--                    </div>--> <!--                </div>--> <!--                <div class="b-news__more">Больше--> <!--                </div>-->
    </div>
    </div>
    </div>
    <div class="page__b-callme">
        <div class="b-callme">
            <div class="container">
                <div class="b-callme__content">
                    <div class="b-callme__text">
                        Узнайте про способы покупки
                    </div>
                    <a class="b-callme__btn" href="#callme" data-toggle="modal">Заказать звонок</a>
                </div>
            </div>
        </div>
        <!--модалка-->
        <div class="modal fade" id="callme" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog modal-sm" role="document">
                <div class="modal-content modal-content_beige">
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"></button>
                    <div class="b-modal">
                        <div class="b-modal__container">
                            <div class="b-modal__form">
                                <form>
                                    <div class="b-modal__content">
                                        <div class="b-modal__title">
                                            Заказать звонок
                                        </div>
                                        <div class="b-modal__input">
                                            <label class="b-modal__label">Ваше имя<input class="b-modal__form-control"
                                                                                         type="text"> </label>
                                        </div>
                                        <div class="b-modal__input">
                                            <label class="b-modal__label">Ваш телефон<input
                                                        class="b-modal__form-control" type="tel" required="required">
                                            </label>
                                        </div>
                                        <div class="b-modal__input">
                                            <div class="b-checkbox">
                                                <input class="consent checkbox-input" type="checkbox" id="consent"
                                                       name="check"
                                                       title="Код PHP: &lt;?= SITE_TEMPLATE_PATH; ?&gt;"><?= SITE_TEMPLATE_PATH; ?>
                                                <span class="bxhtmled-surrogate-inner"><span
                                                            class="bxhtmled-right-side-item-icon"></span><span
                                                            class="bxhtmled-comp-lable" unselectable="on"
                                                            spellcheck="false">Код PHP</span></span>/static/img/general/lay.jpg"/&gt;
                                                <label class="b-checkbox__label" for="consent">Согласен (-а) на
                                                    обработку моих персональных данных в целях рассмотрения
                                                    обращения </label>
                                            </div>
                                        </div>
                                        <div class="b-modal__call">
                                            <button class="b-modal__btn" type="submit">Заказать</button>
                                            <div class="b-modal__btn-text">
                                                <p>
                                                    Или позвоните нам!
                                                </p>
                                                <a class="b-modal__tel" href="tel:+7 3452 28 83 14">+7 (3452) 28 83
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
<?php endif; ?><?php require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>