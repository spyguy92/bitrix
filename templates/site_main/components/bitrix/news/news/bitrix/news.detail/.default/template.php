<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
//debug($arResult);
?>



<div class="page__b-intro-simple">
    <div class="b-intro-simple" style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/news-bg.jpg)">
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
                                    <span class="b-nav__link"><?=$arResult['DETAIL_PICTURE']['TITLE']?></span>
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


<div class="page__b-news-inner">
    <div class="b-news-inner">
        <div class="container">
            <div class="b-news-inner__content">
                <div class="b-news-inner__title"><?=$arResult['DETAIL_PICTURE']['TITLE']?>
                </div>
                <div>
                   Author <?=$arResult['PROPERTIES']['author']['VALUE']?>
                </div>
                <div class="b-news-inner__text"><p><?=$arResult['DETAIL_TEXT']?></p>
                </div>
            </div>
        </div>
    </div>
</div>




<div class="page__b-registration">
    <div class="b-registration">
        <div class="container">
            <div class="b-registration__row row">
                <div class="b-registration__col col-lg-6">
                    <div class="b-order">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="b-order__title">Заказать бесплатное такси
                                </div>
                                <div class="b-order__text">Мы с удовольствием привезем Вас на показ
                                </div>
                            </div>
                            <div class="col-md-4"><a class="b-order__btn" href="#order" data-toggle="modal">Заказать</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="order" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content modal-content_beige">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <svg class="icon__close" width="26px" height="26px">
                                        <use xlink:href="svg-symbols.svg#close"></use>
                                    </svg>

                                </button>
                                <div class="b-modal-partner">
                                    <div class="b-modal-partner__container">
                                        <div class="b-modal-partner__form">
                                            <form>
                                                <div class="b-modal-partner__content">
                                                    <div class="b-modal-partner__top">
                                                        <div class="b-modal-partner__title">Стать партнёром
                                                        </div>
                                                        <div class="b-modal-partner__input">
                                                            <label class="b-modal-partner__label"><input class="b-modal-partner__form-control" type="text" placeholder="Ваше имя*"/>
                                                            </label>
                                                        </div>
                                                        <div class="b-modal-partner__input">
                                                            <label class="b-modal-partner__label"><input class="b-modal-partner__form-control" type="tel" placeholder="Телефон*" required="required"/>
                                                            </label>
                                                        </div>
                                                        <div class="b-modal-partner__desc">* - поле, обязательное для заполнения
                                                        </div>
                                                        <div class="b-modal-partner__input">
                                                            <div class="b-checkbox">
                                                                <input class="consent checkbox-input" type="checkbox" id="consent" name="check" style="background-image: url(static/img/general/lay.jpg"/>
                                                                <label class="b-checkbox__label" for="consent">Согласен (-а) на обработку моих персональных данных в целях рассмотрения обращения
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="b-modal-partner__call">
                                                            <button class="b-modal-partner__btn" type="submit">Отправить
                                                            </button>
                                                            <div class="b-modal-partner__btn-text">
                                                                <p>Или позвоните нам!</p><a class="b-modal-partner__tel" href="tel:+7 3452 28 83 14">+7 (3452) 28 83 14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="b-modal-partner__bottom">
                                                        <div class="b-modal-partner__img"> <img src="static/img/general/part.png"/>
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
                <div class="b-registration__col col-lg-6">
                    <div class="b-order">
                        <div class="row">
                            <div class="col-md-8">
                                <div class="b-order__title">Записаться на экскурсию по кварталу
                                </div>
                                <div class="b-order__text">Посетите офис-продаж на строительной площадке
                                </div>
                            </div>
                            <div class="col-md-4"><a class="b-order__btn" href="#order" data-toggle="modal">Записаться</a>
                            </div>
                        </div>
                    </div>
                    <div class="modal fade" id="order" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-sm" role="document">
                            <div class="modal-content modal-content_beige">
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <svg class="icon__close" width="26px" height="26px">
                                        <use xlink:href="svg-symbols.svg#close"></use>
                                    </svg>

                                </button>
                                <div class="b-modal-partner">
                                    <div class="b-modal-partner__container">
                                        <div class="b-modal-partner__form">
                                            <form>
                                                <div class="b-modal-partner__content">
                                                    <div class="b-modal-partner__top">
                                                        <div class="b-modal-partner__title">Стать партнёром
                                                        </div>
                                                        <div class="b-modal-partner__input">
                                                            <label class="b-modal-partner__label"><input class="b-modal-partner__form-control" type="text" placeholder="Ваше имя*"/>
                                                            </label>
                                                        </div>
                                                        <div class="b-modal-partner__input">
                                                            <label class="b-modal-partner__label"><input class="b-modal-partner__form-control" type="tel" placeholder="Телефон*" required="required"/>
                                                            </label>
                                                        </div>
                                                        <div class="b-modal-partner__desc">* - поле, обязательное для заполнения
                                                        </div>
                                                        <div class="b-modal-partner__input">
                                                            <div class="b-checkbox">
                                                                <input class="consent checkbox-input" type="checkbox" id="consent" name="check" style="background-image: url(static/img/general/lay.jpg"/>
                                                                <label class="b-checkbox__label" for="consent">Согласен (-а) на обработку моих персональных данных в целях рассмотрения обращения
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="b-modal-partner__call">
                                                            <button class="b-modal-partner__btn" type="submit">Отправить
                                                            </button>
                                                            <div class="b-modal-partner__btn-text">
                                                                <p>Или позвоните нам!</p><a class="b-modal-partner__tel" href="tel:+7 3452 28 83 14">+7 (3452) 28 83 14</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="b-modal-partner__bottom">
                                                        <div class="b-modal-partner__img"> <img src="static/img/general/part.png"/>
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
            </div>
        </div>
    </div>
</div>



<div class="page__b-news-more">
    <div class="b-news-more">
        <div class="container">
            <div class="b-news-more__title">Похожие новости
            </div>
            <div class="b-news-more__row row">
                <div class="col-md-6">
                    <div class="b-news-more__item"><a class="b-news-item" href="#"><span class="b-news-item__img"><img src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/news.jpg"/></span><span class="b-news-item__desc"><span class="b-news-item__title">Когда есть место для города и для природы</span><span class="b-news-item__text">Тюмень – один из лидеров среди российских городов как по «индексу счастья», так и по инвестиционной привлекательности. Именно здесь, на границе с бескрайними лесными массивами, которые по праву называются «легкими Тюмени», осуществляется грандиозный проект Комарово Парк...</span><span class="b-news-item__btn">Подробнее</span></span></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="b-news-more__item"><a class="b-news-item" href="#"><span class="b-news-item__img"><img src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/news.jpg"/></span><span class="b-news-item__desc"><span class="b-news-item__title">Когда есть место для города и для природы</span><span class="b-news-item__text">Тюмень – один из лидеров среди российских городов как по «индексу счастья», так и по инвестиционной привлекательности. Именно здесь, на границе с бескрайними лесными массивами, которые по праву называются «легкими Тюмени», осуществляется грандиозный проект Комарово Парк...</span><span class="b-news-item__btn">Подробнее</span></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>