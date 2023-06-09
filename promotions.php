<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("installment");
?>

    <div class="page__b-intro-simple">
        <div class="b-intro-simple"
             style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/retail-bg.jpg)">
            <div class="container">
                <div class="b-intro-simple__row row">
                    <div class="col-md-8">
                        <div class="b-intro-simple__nav">
                            <div class="b-nav">
                                <div class="b-nav__name">Текст акции
                                </div>
                                <div class="b-nav__items">
                                    <div class="b-nav__item"><a class="b-nav__link" href="/">Главная</a>
                                    </div>
                                    <div class="b-nav__item"><span class="b-nav__link">Акции</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-intro-simple__col-sale col-md-4">
                        <div class="b-sale">
                            <div class="b-sale__link">
                                <div class="b-sale__title">Текст акции
                                    <div class="b-sale__text">
                                    </div>
                                </div>
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
                    <div class="b-about__title">Об акции
                    </div>
                    <div class="b-about__desc"><p>Ставку предлагает ПАО Сбербанк в рамках государственной программы
                            «Семейная ипотека». Основное условие участия в ипотечной программе - кредит предоставляется
                            гражданам РФ, у которых в период с 1 января 2018 г. до 31 декабря 2022 г. (включительно)
                            родился ребенок.</p>
                        <p>Ставка от 1,5% действительна для обладателей зарплатного проекта в ПАО Сбербанк, для
                            держателей зарплатных проектов в других банках ставка от 1,8%</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-promotions-slider" style="max-height: 350px">
        <div class="b-promotions-slider b-promotions-slider_reverse">
            <div class="container">
                <div class="b-promotions-slider__content">
                    <div class="b-promotions-slider__nav">
                        <div class="swiper-button-prev">
                            <svg class="icon__build-arr" width="12px" height="12px">
                                <use xlink:href="svg-symbols.svg#build-arr"></use>
                            </svg>

                        </div>
                        <div class="swiper-button-next">
                            <svg class="icon__build-arr" width="12px" height="12px">
                                <use xlink:href="svg-symbols.svg#build-arr"></use>
                            </svg>

                        </div>
                    </div>
                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="b-promotions b-promotions_reverse">
                                    <div class="container">
                                        <div class="b-promotions__content">
                                            <div class="b-promotions__row row">
                                                <div class="col-lg-5 col-xl-4">
                                                    <div class="b-promotions__desc">
                                                        <div class="b-promotions__title">Рассрочки без %
                                                        </div>
                                                        <div class="b-promotions__text"><p>Ставку предлагает ПАО
                                                                Сбербанк в рамках государственной программы «Семейная
                                                                ипотека». Основное условие участия в ипотечной программе
                                                                - кредит предоставляется гражданам РФ, у которых в
                                                                период с 1 января 2018 г. до 31 декабря 2022 г.
                                                                (включительно) родился ребенок.</p>
                                                            <p>Ставка от 1,5% действительна для обладателей зарплатного
                                                                проекта в ПАО Сбербанк, для держателей зарплатных
                                                                проектов в других банках ставка от 1,8%</p>
                                                        </div>
                                                        <a class="b-promotions__btn" href="#callme" data-toggle="modal">Заказать
                                                            звонок</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-xl-8">
                                                    <div class="b-promotions__img"><img
                                                                src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/mort2.jpg"
                                                                style="max-height: 320px"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                                    <label class="b-modal__label">Ваше имя<input
                                                                                class="b-modal__form-control"
                                                                                type="text"/>
                                                                    </label>
                                                                </div>
                                                                <div class="b-modal__input">
                                                                    <label class="b-modal__label">Ваш телефон<input
                                                                                class="b-modal__form-control" type="tel"
                                                                                required="required"/>
                                                                    </label>
                                                                </div>
                                                                <div class="b-modal__input">
                                                                    <div class="b-checkbox">
                                                                        <input class="consent checkbox-input"
                                                                               type="checkbox" id="consent" name="check"
                                                                               style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/lay.jpg"/>
                                                                        <label class="b-checkbox__label" for="consent">Согласен
                                                                            (-а) на обработку моих персональных данных в
                                                                            целях рассмотрения обращения
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="b-modal__call">
                                                                    <button class="b-modal__btn" type="submit">Заказать
                                                                    </button>
                                                                    <div class="b-modal__btn-text">
                                                                        <p>Или позвоните нам!</p><a class="b-modal__tel"
                                                                                                    href="tel:+7 3452 28 83 14">+7
                                                                            (3452) 28 83 14</a>
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
                            <div class="swiper-slide">
                                <div class="b-promotions b-promotions_reverse">
                                    <div class="container">
                                        <div class="b-promotions__content">
                                            <div class="b-promotions__row row">
                                                <div class="col-lg-5 col-xl-4">
                                                    <div class="b-promotions__desc">
                                                        <div class="b-promotions__title">Рассрочки без %
                                                        </div>
                                                        <div class="b-promotions__text"><p>Ставку предлагает ПАО
                                                                Сбербанк в рамках государственной программы «Семейная
                                                                ипотека». Основное условие участия в ипотечной программе
                                                                - кредит предоставляется гражданам РФ, у которых в
                                                                период с 1 января 2018 г. до 31 декабря 2022 г.
                                                                (включительно) родился ребенок.</p>
                                                            <p>Ставка от 1,5% действительна для обладателей зарплатного
                                                                проекта в ПАО Сбербанк, для держателей зарплатных
                                                                проектов в других банках ставка от 1,8%</p>
                                                        </div>
                                                        <a class="b-promotions__btn" href="#callme" data-toggle="modal">Заказать
                                                            звонок</a>
                                                    </div>
                                                </div>
                                                <div class="col-lg-7 col-xl-8">
                                                    <div class="b-promotions__img"><img
                                                                src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/mort2.jpg"
                                                                style="max-height: 320px"/>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
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
                                                                    <label class="b-modal__label">Ваше имя<input
                                                                                class="b-modal__form-control"
                                                                                type="text"/>
                                                                    </label>
                                                                </div>
                                                                <div class="b-modal__input">
                                                                    <label class="b-modal__label">Ваш телефон<input
                                                                                class="b-modal__form-control" type="tel"
                                                                                required="required"/>
                                                                    </label>
                                                                </div>
                                                                <div class="b-modal__input">
                                                                    <div class="b-checkbox">
                                                                        <input class="consent checkbox-input"
                                                                               type="checkbox" id="consent" name="check"
                                                                               style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/lay.jpg"/>
                                                                        <label class="b-checkbox__label" for="consent">Согласен
                                                                            (-а) на обработку моих персональных данных в
                                                                            целях рассмотрения обращения
                                                                        </label>
                                                                    </div>
                                                                </div>
                                                                <div class="b-modal__call">
                                                                    <button class="b-modal__btn" type="submit">Заказать
                                                                    </button>
                                                                    <div class="b-modal__btn-text">
                                                                        <p>Или позвоните нам!</p><a class="b-modal__tel"
                                                                                                    href="tel:+7 3452 28 83 14">+7
                                                                            (3452) 28 83 14</a>
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
        </div>
    </div>
    <div class="page__b-promotions">
        <div class="b-promotions">
            <div class="container">
                <div class="b-promotions__content">
                    <div class="b-promotions__row row">
                        <div class="col-lg-5 col-xl-4">
                            <div class="b-promotions__desc">
                                <div class="b-promotions__title">Лояльная скидка
                                </div>
                                <div class="b-promotions__text"><p>Ставку предлагает ПАО Сбербанк в рамках
                                        государственной программы «Семейная ипотека». Основное условие участия в
                                        ипотечной программе - кредит предоставляется гражданам РФ, у которых в период с
                                        1 января 2018 г. до 31 декабря 2022 г. (включительно) родился ребенок.</p>
                                    <p>Ставка от 1,5% действительна для обладателей зарплатного проекта в ПАО Сбербанк,
                                        для держателей зарплатных проектов в других банках ставка от 1,8%</p>
                                </div>
                                <a class="b-promotions__btn" href="#callme" data-toggle="modal">Заказать звонок</a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-8">
                            <div class="b-promotions__img"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/mort2.jpg"
                                        style="max-height: 320px"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <div class="page__b-promotions">
        <div class="b-promotions b-promotions_reverse">
            <div class="container">
                <div class="b-promotions__content">
                    <div class="b-promotions__row row">
                        <div class="col-lg-5 col-xl-4">
                            <div class="b-promotions__desc">
                                <div class="b-promotions__title">Лояльная скидка
                                </div>
                                <div class="b-promotions__text"><p>Ставку предлагает ПАО Сбербанк в рамках
                                        государственной программы «Семейная ипотека». Основное условие участия в
                                        ипотечной программе - кредит предоставляется гражданам РФ, у которых в период с
                                        1 января 2018 г. до 31 декабря 2022 г. (включительно) родился ребенок.</p>
                                    <p>Ставка от 1,5% действительна для обладателей зарплатного проекта в ПАО Сбербанк,
                                        для держателей зарплатных проектов в других банках ставка от 1,8%</p>
                                </div>
                                <a class="b-promotions__btn" href="#callme" data-toggle="modal">Заказать звонок</a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-xl-8">
                            <div class="b-promotions__img"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/mort2.jpg"
                                        style="max-height: 320px"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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