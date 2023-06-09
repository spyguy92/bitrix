<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("apartments");
?>


    <div class="page__b-intro-simple">
        <div class="b-intro-simple"
             style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart-bg.jpg)">
            <div class="container">
                <div class="b-intro-simple__row row">
                    <div class="col-md-8">
                        <div class="b-intro-simple__nav">
                            <div class="b-nav">
                                <div class="b-nav__name">Квартиры
                                </div>
                                <div class="b-nav__items">
                                    <div class="b-nav__item"><a class="b-nav__link" href="/">Главная</a>
                                    </div>
                                    <div class="b-nav__item"><span class="b-nav__link">Квартиры</span>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-choice-apart">
        <div class="b-choice-apart">
            <div class="container">
                <div class="b-choice-apart__filter">
                    <form>
                        <div class="b-choice-apart__row row">
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="b-choice-apart__group">
                                    <div class="b-choice-apart__label">Комнатность
                                    </div>
                                    <div class="b-choice-apart__input">
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
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="b-choice-apart__group">
                                    <div class="b-choice-apart__input-text">Особенные
                                    </div>
                                    <select class="selectric" value="">
                                        <option value="">Выбор</option>
                                        <option value="1">Выбор 1</option>
                                        <option value="2">Выбор 2</option>
                                        <option value="3">Выбор 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="b-choice-apart__group">
                                    <div class="b-choice-apart__input-text">Срок ввода
                                    </div>
                                    <select class="selectric" value="">
                                        <option value="">Выбор</option>
                                        <option value="1">Выбор 1</option>
                                        <option value="2">Выбор 2</option>
                                        <option value="3">Выбор 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="b-choice-apart__group">
                                    <div class="b-choice-apart__input-text b-choice-apart__input-text_hidden">Доп
                                    </div>
                                    <div class="b-choice-apart__checkbox-list">
                                        <div class="b-choice-apart__checkbox">
                                            <div class="b-checkbox">
                                                <input class="com checkbox-input" type="checkbox" id="com" name="check"
                                                       style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/lay.jpg"/>
                                                <label class="b-checkbox__label" for="com">Коммерция
                                                </label>
                                            </div>
                                        </div>
                                        <div class="b-choice-apart__checkbox">
                                            <div class="b-checkbox">
                                                <input class="sale checkbox-input" type="checkbox" id="sale"
                                                       name="check"
                                                       style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/lay.jpg"/>
                                                <label class="b-checkbox__label" for="sale">Акция
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="b-choice-apart__group">
                                    <div class="b-choice-apart__label">Этаж
                                    </div>
                                    <div class="b-choice-apart__input">
                                        <div class="b-range"><input class="b-choice-apart__input js-range" type="text"
                                                                    min="30" max="200" from="30" to="200" step="0.1"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="b-choice-apart__group">
                                    <div class="b-choice-apart__label">Площадь, м2
                                    </div>
                                    <div class="b-choice-apart__input">
                                        <div class="b-range"><input class="b-choice-apart__input js-range" type="text"
                                                                    min="30" max="200" from="30" to="200" step="0.1"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="b-choice-apart__group">
                                    <div class="b-choice-apart__label">Стоимость, млн руб.
                                    </div>
                                    <div class="b-choice-apart__input">
                                        <div class="b-range"><input class="b-choice-apart__input js-range" type="text"
                                                                    min="30" max="200" from="30" to="200" step="0.1"/>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 col-lg-4 col-xl-3">
                                <div class="b-choice-apart__group">
                                    <div class="b-choice-apart__input">
                                        <div class="b-choice-apart__input-text b-choice-apart__input-text_hidden">Доп
                                        </div>
                                        <button class="b-choice-apart__btn" type="submit">Показать
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
    <div class="page__b-options-apart">
        <div class="b-options-apart">
            <div class="container">
                <div class="b-options-apart__top">
                    <div class="b-options-apart__logo"><img
                                src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/logo.svg"/>
                    </div>
                    <div class="b-options-apart__title">Квартиры
                    </div>
                    <div class="b-options-apart__link-content js-print">
                        <div class="b-options-apart__link">Выбор на плане
                        </div>
                    </div>
                </div>
                <div class="b-options-apart__content">
                    <div class="b-options-apart__row row">
                        <div class="b-options-apart__col col-6 col-md-6 col-lg-3">
                            <div class="b-options-apart__item"><a class="b-buy b-buy_disabled">
                                    <div class="b-buy__content">
                                        <div class="b-buy__top">
                                            <div class="b-buy__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart.jpg"/>
                                                <div class="b-buy__img-mask">
                                                    <div class="b-buy__mask-text">Бронь
                                                    </div>
                                                </div>
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
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="b-options-apart__col col-6 col-md-6 col-lg-3">
                            <div class="b-options-apart__item"><a class="b-buy" href="#">
                                    <div class="b-buy__content">
                                        <div class="b-buy__top">
                                            <div class="b-buy__img"><img
                                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/apart.jpg"/>
                                                <div class="b-buy__sale-ico">%
                                                </div>
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
                                                <div class="b-buy__price b-buy__price_primary">11 977 600 ₽
                                                </div>
                                                <div class="b-buy__price-old">11 977 600 ₽
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
                        <div class="b-options-apart__col col-6 col-md-6 col-lg-3">
                            <div class="b-options-apart__item"><a class="b-buy" href="#">
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
                        <div class="b-options-apart__col col-6 col-md-6 col-lg-3">
                            <div class="b-options-apart__item"><a class="b-buy" href="#">
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
                        <div class="b-options-apart__col col-6 col-md-6 col-lg-3">
                            <div class="b-options-apart__item"><a class="b-buy" href="#">
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
                        <div class="b-options-apart__col col-6 col-md-6 col-lg-3">
                            <div class="b-options-apart__item"><a class="b-buy" href="#">
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
                        <div class="b-options-apart__col col-6 col-md-6 col-lg-3">
                            <div class="b-options-apart__item"><a class="b-buy" href="#">
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
                        <div class="b-options-apart__col col-6 col-md-6 col-lg-3">
                            <div class="b-options-apart__item"><a class="b-buy" href="#">
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
                    <div class="b-options-apart__more">Больше квартир
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-callme">
        <div class="b-callme">
            <div class="container">
                <div class="b-callme__content">
                    <div class="b-callme__text">Забронируй свое место силы
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