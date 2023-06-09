<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("documents");
?>


    <div class="page__b-intro-simple">
        <div class="b-intro-simple"
             style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
            <div class="container">
                <div class="b-intro-simple__row row">
                    <div class="col-md-8">
                        <div class="b-intro-simple__nav">
                            <div class="b-nav">
                                <div class="b-nav__name">Документы
                                </div>
                                <div class="b-nav__items">
                                    <div class="b-nav__item"><a class="b-nav__link" href="/">Главная</a>
                                    </div>
                                    <div class="b-nav__item"><span class="b-nav__link">Документы</span>
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
    <div class="page__b-download-doc">
        <div class="b-download-doc">
            <div class="container">
                <div class="b-download-doc__blocks">
                    <div class="b-download-doc__block">
                        <div class="b-download-doc__title">Документ ГП-1
                        </div>
                        <a class="b-download-doc__item" href="#" download="download">
                            <div class="b-download-doc__text">ГП-1 Разрешение на строительство
                            </div>
                            <div class="b-download-doc__link">Скачать документ
                            </div>
                        </a><a class="b-download-doc__item" href="#" download="download">
                            <div class="b-download-doc__text">ГП-1 Заключение ГУС ТО о соответствии застройщика от
                                03.03.2020
                            </div>
                            <div class="b-download-doc__link">Скачать документ
                            </div>
                        </a><a class="b-download-doc__item" href="#" download="download">
                            <div class="b-download-doc__text">ГП-1 Проект договора участия с использованием кредитных
                                средств банка ГП-1 Проект договора участия с использованием кредитных средств банка
                            </div>
                            <div class="b-download-doc__link">Скачать документ
                            </div>
                        </a><a class="b-download-doc__item" href="#" download="download">
                            <div class="b-download-doc__text">ГП-1 Проект договора участия с оплатой собственными
                                средствами
                            </div>
                            <div class="b-download-doc__link">Скачать документ
                            </div>
                        </a>
                    </div>
                    <div class="b-download-doc__block">
                        <div class="b-download-doc__title">Документ ГП-1
                        </div>
                        <a class="b-download-doc__item" href="#" download="download">
                            <div class="b-download-doc__text">ГП-1 Разрешение на строительство
                            </div>
                            <div class="b-download-doc__link">Скачать документ
                            </div>
                        </a><a class="b-download-doc__item" href="#" download="download">
                            <div class="b-download-doc__text">ГП-1 Заключение ГУС ТО о соответствии застройщика от
                                03.03.2020
                            </div>
                            <div class="b-download-doc__link">Скачать документ
                            </div>
                        </a><a class="b-download-doc__item" href="#" download="download">
                            <div class="b-download-doc__text">ГП-1 Проект договора участия с использованием кредитных
                                средств банка ГП-1 Проект договора участия с использованием кредитных средств банка
                            </div>
                            <div class="b-download-doc__link">Скачать документ
                            </div>
                        </a><a class="b-download-doc__item" href="#" download="download">
                            <div class="b-download-doc__text">ГП-1 Проект договора участия с оплатой собственными
                                средствами
                            </div>
                            <div class="b-download-doc__link">Скачать документ
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-callme">
        <div class="b-callme">
            <div class="container">
                <div class="b-callme__content">
                    <div class="b-callme__text">Узнайте про способы покупки
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