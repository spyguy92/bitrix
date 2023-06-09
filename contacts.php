<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("contacts");
?>


    <div class="page__b-intro-simple">
        <div class="b-intro-simple"
             style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/contacts-bg.jpg)">
            <div class="container">
                <div class="b-intro-simple__row row">
                    <div class="col-md-8">
                        <div class="b-intro-simple__nav">
                            <div class="b-nav">
                                <div class="b-nav__name">Контакты
                                </div>
                                <div class="b-nav__items">
                                    <div class="b-nav__item"><a class="b-nav__link" href="/">Главная</a>
                                    </div>
                                    <div class="b-nav__item"><span class="b-nav__link">Контакты</span>
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
    <div class="page__b-office">
        <div class="b-office">
            <div class="b-office__content">
                <div class="container">
                    <div class="b-office__adress">
                        <div class="row">
                            <div class="b-office__address-col col-md-6">
                                <div class="b-adress">
                                    <div class="b-adress__top">
                                        <div class="b-adress__img"><img
                                                    src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/adress.jpg"/>
                                            <script type="text/javascript" charset="utf-8" async
                                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab094b033ceb2fb71e489b60e9df1b9f976bdb25ebb9bea9b58f30fa460174c4f&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                                        </div>
                                    </div>
                                    <div class="b-adress__bottom">
                                        <div class="b-adress__title">Офис продаж на объекте
                                        </div>
                                        <div class="b-adress__text">
                                            <div class="b-adress__city">Тюменский район, д. Дударева
                                            </div>
                                            <div class="b-adress__street">ул. Тюменская, стр. 11
                                            </div>
                                        </div>
                                        <a class="b-adress__email" href="mailto:info@4development.ru">info@4development.ru</a>
                                        <div class="b-adress__time">Пн - Пт: 10.00 - 19.00 Сб: 10.00 - 16.00
                                        </div>
                                        <div class="b-adress__btn">Заказать звонок
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-office__address-col col-md-6">
                                <div class="b-adress">
                                    <div class="b-adress__top">
                                        <div class="b-adress__img"><img
                                                    src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/adress.jpg"/>
                                            <script type="text/javascript" charset="utf-8" async
                                                    src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Ab094b033ceb2fb71e489b60e9df1b9f976bdb25ebb9bea9b58f30fa460174c4f&amp;width=100%25&amp;height=100%&amp;lang=ru_RU&amp;scroll=true"></script>
                                        </div>
                                    </div>
                                    <div class="b-adress__bottom">
                                        <div class="b-adress__title">Центральный офис продаж
                                        </div>
                                        <div class="b-adress__text">
                                            <div class="b-adress__city">Тюмень
                                            </div>
                                            <div class="b-adress__street">ул. Республики, 65, оф. 607
                                            </div>
                                        </div>
                                        <a class="b-adress__email" href="mailto:info@4development.ru">info@4development.ru</a>
                                        <div class="b-adress__time">Пн - Пт: 9.00 - 18.00 Пн - Пт: 9.00 - 18.00
                                        </div>
                                        <div class="b-adress__btn">Заказать звонок
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-office__other">
                        <div class="b-office__other-title">Другие подразделения
                        </div>
                        <div class="b-office__other-row row">
                            <div class="b-office__item col-md-6 col-lg-2">
                                <div class="b-office__other-name">ПТО:
                                </div>
                                <a class="b-office__other-tel" href="tel:8 (3452) 390-601">8 (3452) 390-601</a>
                            </div>
                            <div class="b-office__item col-md-6 col-lg-2">
                                <div class="b-office__other-name">Отдел гарантии:
                                </div>
                                <a class="b-office__other-tel" href="tel:8 (3452) 61-37-75">8 (3452) 61-37-75</a>
                            </div>
                            <div class="b-office__item col-md-6 col-lg-2">
                                <div class="b-office__other-name">Отдел маркетинга:
                                </div>
                                <a class="b-office__other-tel" href="tel:8 (3452) 390-609">8 (3452) 390-609</a>
                            </div>
                            <div class="b-office__item col-md-6">
                                <div class="b-office__other-name">Другие:
                                </div>
                                <a class="b-office__other-tel" href="tel:8 (3452) 56-57-57">8 (3452) 56-57-57
                                    (многоканальный)</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-team">
        <div class="b-team">
            <div class="container">
                <div class="b-team__title">Команда отдела продаж
                </div>
                <div class="b-team__row row">
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="b-team__person">
                            <div class="b-person">
                                <div class="b-person__img-cont">
                                    <div class="b-person__img"
                                         style="background-image: url(https://placekitten.com/408/287)">
                                    </div>
                                </div>
                                <div class="b-person__name">Наталья
                                </div>
                                <div class="b-person__employee">Менеджер по работе с партнерами
                                </div>
                                <a class="b-person__tel" href="tel:60-08-01">60-08-01</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="b-team__person">
                            <div class="b-person">
                                <div class="b-person__img-cont">
                                    <div class="b-person__img"
                                         style="background-image: url(https://placekitten.com/408/287)">
                                    </div>
                                </div>
                                <div class="b-person__name">Наталья
                                </div>
                                <div class="b-person__employee">Менеджер по работе с партнерами
                                </div>
                                <a class="b-person__tel" href="tel:60-08-01">60-08-01</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="b-team__person">
                            <div class="b-person">
                                <div class="b-person__img-cont">
                                    <div class="b-person__img"
                                         style="background-image: url(https://placekitten.com/408/287)">
                                    </div>
                                </div>
                                <div class="b-person__name">Наталья
                                </div>
                                <div class="b-person__employee">Менеджер по работе с партнерами
                                </div>
                                <a class="b-person__tel" href="tel:60-08-01">60-08-01</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="b-team__person">
                            <div class="b-person">
                                <div class="b-person__img-cont">
                                    <div class="b-person__img"
                                         style="background-image: url(https://placekitten.com/408/287)">
                                    </div>
                                </div>
                                <div class="b-person__name">Наталья
                                </div>
                                <div class="b-person__employee">Менеджер по работе с партнерами
                                </div>
                                <a class="b-person__tel" href="tel:60-08-01">60-08-01</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="b-team__person">
                            <div class="b-person">
                                <div class="b-person__img-cont">
                                    <div class="b-person__img"
                                         style="background-image: url(https://placekitten.com/408/287)">
                                    </div>
                                </div>
                                <div class="b-person__name">Наталья
                                </div>
                                <div class="b-person__employee">Менеджер по работе с партнерами
                                </div>
                                <a class="b-person__tel" href="tel:60-08-01">60-08-01</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="b-team__person">
                            <div class="b-person">
                                <div class="b-person__img-cont">
                                    <div class="b-person__img"
                                         style="background-image: url(https://placekitten.com/408/287)">
                                    </div>
                                </div>
                                <div class="b-person__name">Наталья
                                </div>
                                <div class="b-person__employee">Менеджер по работе с партнерами
                                </div>
                                <a class="b-person__tel" href="tel:60-08-01">60-08-01</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="b-team__person">
                            <div class="b-person">
                                <div class="b-person__img-cont">
                                    <div class="b-person__img"
                                         style="background-image: url(https://placekitten.com/408/287)">
                                    </div>
                                </div>
                                <div class="b-person__name">Наталья
                                </div>
                                <div class="b-person__employee">Менеджер по работе с партнерами
                                </div>
                                <a class="b-person__tel" href="tel:60-08-01">60-08-01</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-md-4 col-lg-3">
                        <div class="b-team__person">
                            <div class="b-person">
                                <div class="b-person__img-cont">
                                    <div class="b-person__img"
                                         style="background-image: url(https://placekitten.com/408/287)">
                                    </div>
                                </div>
                                <div class="b-person__name">Наталья
                                </div>
                                <div class="b-person__employee">Менеджер по работе с партнерами
                                </div>
                                <a class="b-person__tel" href="tel:60-08-01">60-08-01</a>
                            </div>
                        </div>
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
                                <div class="col-md-4"><a class="b-order__btn" href="#order"
                                                         data-toggle="modal">Заказать</a>
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
                                                                <label class="b-modal-partner__label"><input
                                                                            class="b-modal-partner__form-control"
                                                                            type="text" placeholder="Ваше имя*"/>
                                                                </label>
                                                            </div>
                                                            <div class="b-modal-partner__input">
                                                                <label class="b-modal-partner__label"><input
                                                                            class="b-modal-partner__form-control"
                                                                            type="tel" placeholder="Телефон*"
                                                                            required="required"/>
                                                                </label>
                                                            </div>
                                                            <div class="b-modal-partner__desc">* - поле, обязательное
                                                                для заполнения
                                                            </div>
                                                            <div class="b-modal-partner__input">
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
                                                            <div class="b-modal-partner__call">
                                                                <button class="b-modal-partner__btn" type="submit">
                                                                    Отправить
                                                                </button>
                                                                <div class="b-modal-partner__btn-text">
                                                                    <p>Или позвоните нам!</p><a
                                                                            class="b-modal-partner__tel"
                                                                            href="tel:+7 3452 28 83 14">+7 (3452) 28 83
                                                                        14</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="b-modal-partner__bottom">
                                                            <div class="b-modal-partner__img"><img
                                                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/part.png"/>
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
                                                                <label class="b-modal-partner__label"><input
                                                                            class="b-modal-partner__form-control"
                                                                            type="text" placeholder="Ваше имя*"/>
                                                                </label>
                                                            </div>
                                                            <div class="b-modal-partner__input">
                                                                <label class="b-modal-partner__label"><input
                                                                            class="b-modal-partner__form-control"
                                                                            type="tel" placeholder="Телефон*"
                                                                            required="required"/>
                                                                </label>
                                                            </div>
                                                            <div class="b-modal-partner__desc">* - поле, обязательное
                                                                для заполнения
                                                            </div>
                                                            <div class="b-modal-partner__input">
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
                                                            <div class="b-modal-partner__call">
                                                                <button class="b-modal-partner__btn" type="submit">
                                                                    Отправить
                                                                </button>
                                                                <div class="b-modal-partner__btn-text">
                                                                    <p>Или позвоните нам!</p><a
                                                                            class="b-modal-partner__tel"
                                                                            href="tel:+7 3452 28 83 14">+7 (3452) 28 83
                                                                        14</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="b-modal-partner__bottom">
                                                            <div class="b-modal-partner__img"><img
                                                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/part.png"/>
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