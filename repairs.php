<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("repairs");
?>


    <div class="page__b-intro-simple">
        <div class="b-intro-simple" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/static/img/general/repai-bg.jpg)">
            <div class="container">
                <div class="b-intro-simple__row row">
                    <div class="col-md-8">
                        <div class="b-intro-simple__nav">
                            <div class="b-nav">
                                <div class="b-nav__name">Ремонт
                                </div>
                                <div class="b-nav__items">
                                    <div class="b-nav__item"><a class="b-nav__link" href="/">Главная</a>
                                    </div>
                                    <div class="b-nav__item"><span class="b-nav__link">Ремонт</span>
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
                                </div><a class="b-sale__button" href="#">Узнать больше</a>
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
                    <div class="b-about__title">Квартиры  с ремонтом
                    </div>
                    <div class="b-about__desc"><p>Департамент по строительству 4D Development разработал несколько вариантов ремонта для жителей квартала “Гранд Квартал”. Это ремонт в формате “заезжай и живи”, который можно включить в ипотеку! Надежные подрядчики застройщика ремонтируют квартиру “под ключ”.<p>Универсальный дизайн в серо-белой цветовой гамме. Удачная база для интерьеров в стиле фьюжн, классическом, скандинавском и средиземноморском стилях. Подойдет для создания минималистичных и функциональных пространств с ощущением изобилия света, а также для экспериментов с яркими цветами и стилями. Ламинат в цвете “дуб хадсон”, в ванной светло-серая керамогранитная плитка, горизонтальная укладка одной из стен и узкого фартука мозаичной плиткой в серых оттенках, межкомнатные двери в цвете “белый ясень”.</p>
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
                                                                    <input class="consent checkbox-input" type="checkbox" id="consent" name="check" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/static/img/general/lay.jpg"/>
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
                                                            <div class="b-modal-partner__img"> <img src="<?=SITE_TEMPLATE_PATH;?>/static/img/general/part.png"/>
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
                                                                    <input class="consent checkbox-input" type="checkbox" id="consent" name="check" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/static/img/general/lay.jpg"/>
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
                                                            <div class="b-modal-partner__img"> <img src="<?=SITE_TEMPLATE_PATH;?>/static/img/general/part.png"/>
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
    <div class="page__b-repairs-slider">
        <div class="b-repairs-slider">
            <div class="container">
                <div class="swiper-container" style="max-height: 350px">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="b-repairs-slider__slide" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/static/img/general/contacts-bg.jpg)">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="b-repairs-slider__slide" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/static/img/general/hb-bg.jpg)">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="b-repairs-slider__slide" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/static/img/general/apart-bg.jpg)">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
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
                <div class="b-repairs-slider__desc">
                    <div class="b-repairs-slider__title">Бежевый дизайн
                    </div>
                    <div class="b-repairs-slider__text">Классический теплый дизайн в бежево-песочной цветовой гамме. Удачный вариант для создания интерьера в таких стилях, как: классика, эко-стиль, рустик, кантри, прованс, минимализм, винтаж. Подойдет для создания минималистичных и функциональных пространств с ощущением изобилия света. Ламинат в цвете “дуб фавор”, горизонтальная укладка плитки с акцентом на одну из стен контрастной керамогранитной плиткой с диагональным рисунком в цветовой гамме “вестанвинд”.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-repairs-items">
        <div class="b-repairs-items">
            <div class="container">
                <div class="b-repairs-items__row row">
                    <div class="b-repairs-items__col col-md-6">
                        <div class="b-repairs-item">
                            <div class="b-repairs-item__img"><img src="<?=SITE_TEMPLATE_PATH;?>/static/img/general/rep1.jpg"/>
                            </div>
                            <div class="b-repairs-item__desc">
                                <div class="b-repairs-item__title">Качественная работа
                                </div>
                                <div class="b-repairs-item__text">Опытные ремонтные бригады, под контролем отдела качества <br> со стороны застройщика.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-repairs-items__col col-md-6">
                        <div class="b-repairs-item">
                            <div class="b-repairs-item__img"><img src="<?=SITE_TEMPLATE_PATH;?>/static/img/general/rep2.jpg"/>
                            </div>
                            <div class="b-repairs-item__desc">
                                <div class="b-repairs-item__title">Обои под покраску
                                </div>
                                <div class="b-repairs-item__text">В основе нашего строительства современные, инновационные подходы и тщательно выбранные материалы: экологичные и негорючие.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-repairs-slider">
        <div class="b-repairs-slider">
            <div class="container">
                <div class="swiper-container" style="max-height: 350px">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="b-repairs-slider__slide" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/static/img/general/contacts-bg.jpg)">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="b-repairs-slider__slide" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/static/img/general/hb-bg.jpg)">
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="b-repairs-slider__slide" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/static/img/general/apart-bg.jpg)">
                            </div>
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
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
                <div class="b-repairs-slider__desc">
                    <div class="b-repairs-slider__title">Темный Дизайн
                    </div>
                    <div class="b-repairs-slider__text">Классический теплый дизайн в бежево-песочной цветовой гамме. Удачный вариант для создания интерьера в таких стилях, как: классика, эко-стиль, рустик, кантри, прованс, минимализм, винтаж. Подойдет для создания минималистичных и функциональных пространств с ощущением изобилия света. Ламинат в цвете “дуб фавор”, горизонтальная укладка плитки с акцентом на одну из стен контрастной керамогранитной плиткой с диагональным рисунком в цветовой гамме “вестанвинд”.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-repairs-items">
        <div class="b-repairs-items">
            <div class="container">
                <div class="b-repairs-items__row row">
                    <div class="b-repairs-items__col col-md-6">
                        <div class="b-repairs-item">
                            <div class="b-repairs-item__img"><img src="<?=SITE_TEMPLATE_PATH;?>/static/img/general/rep1.jpg"/>
                            </div>
                            <div class="b-repairs-item__desc">
                                <div class="b-repairs-item__title">Качественная работа
                                </div>
                                <div class="b-repairs-item__text">Опытные ремонтные бригады, под контролем отдела качества <br> со стороны застройщика.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-repairs-items__col col-md-6">
                        <div class="b-repairs-item">
                            <div class="b-repairs-item__img"><img src="<?=SITE_TEMPLATE_PATH;?>/static/img/general/rep2.jpg"/>
                            </div>
                            <div class="b-repairs-item__desc">
                                <div class="b-repairs-item__title">Обои под покраску
                                </div>
                                <div class="b-repairs-item__text">В основе нашего строительства современные, инновационные подходы и тщательно выбранные материалы: экологичные и негорючие.
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
                    <div class="b-callme__text">Выберите свою квартиру
                    </div><a class="b-callme__btn" href="#callme" data-toggle="modal">Заказать звонок</a>
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
                                            <label class="b-modal__label">Ваше имя<input class="b-modal__form-control" type="text"/>
                                            </label>
                                        </div>
                                        <div class="b-modal__input">
                                            <label class="b-modal__label">Ваш телефон<input class="b-modal__form-control" type="tel" required="required"/>
                                            </label>
                                        </div>
                                        <div class="b-modal__input">
                                            <div class="b-checkbox">
                                                <input class="consent checkbox-input" type="checkbox" id="consent" name="check" style="background-image: url(<?=SITE_TEMPLATE_PATH;?>/static/img/general/lay.jpg"/>
                                                <label class="b-checkbox__label" for="consent">Согласен (-а) на обработку моих персональных данных в целях рассмотрения обращения
                                                </label>
                                            </div>
                                        </div>
                                        <div class="b-modal__call">
                                            <button class="b-modal__btn" type="submit">Заказать
                                            </button>
                                            <div class="b-modal__btn-text">
                                                <p>Или позвоните нам!</p><a class="b-modal__tel" href="tel:+7 3452 28 83 14">+7 (3452) 28 83 14</a>
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


<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>