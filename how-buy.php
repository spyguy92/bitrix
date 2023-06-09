<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("how-buy");
?>


    <div class="page__b-intro-simple">
        <div class="b-intro-simple"
             style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/how-bg.jpg)">
            <div class="container">
                <div class="b-intro-simple__row row">
                    <div class="col-md-8">
                        <div class="b-intro-simple__nav">
                            <div class="b-nav">
                                <div class="b-nav__name">Как купить
                                </div>
                                <div class="b-nav__items">
                                    <div class="b-nav__item"><a class="b-nav__link" href="/">Главная</a>
                                    </div>
                                    <div class="b-nav__item"><span class="b-nav__link">Как купить</span>
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
                    <div class="b-about__title">Выбирайте способ, а мы всё сделаем
                    </div>
                    <div class="b-about__desc">Проконсультируем, подскажем с документами, отправим заявки в<br> банки и
                        поможем безопасно перевести деньги.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-option-section">
        <div class="b-option-section">
            <div class="container">
                <div class="b-option-section__title">Варианты покупки
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
    <div class="page__b-photo-desc-about">
        <div class="b-photo-desc">
            <div class="container">
                <div class="b-photo-desc__img">
                    <picture>
                        <source srcset="static/img/general/min-how.jpg" media="(max-width: 768px)"/>
                        <img src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/hb-bg.jpg"/>
                    </picture>
                    <div class="b-photo-desc__content">
                        <div class="b-photo-desc__title">Рассрочка без <b> % </b>
                        </div>
                        <div class="b-photo-desc__text">
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
                    <div class="b-callme__text">Ещё несколько причин купить квартиру здесь
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