<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("mortgage");
?>


    <div class="page__b-intro-simple">
        <div class="b-intro-simple"
             style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/doc-bg.jpg)">
            <div class="container">
                <div class="b-intro-simple__row row">
                    <div class="col-md-8">
                        <div class="b-intro-simple__nav">
                            <div class="b-nav">
                                <div class="b-nav__name">Ипотека
                                </div>
                                <div class="b-nav__items">
                                    <div class="b-nav__item"><a class="b-nav__link" href="/">Главная</a>
                                    </div>
                                    <div class="b-nav__item"><span class="b-nav__link">Ипотека</span>
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
    <div class="page__b-mort-advantages">
        <div class="b-mort-advantages">
            <div class="container">
                <div class="b-mort-advantages__content">
                    <div class="b-mort-advantages__title">Преимущества покупки
                    </div>
                    <div class="b-mort-advantages__row row">
                        <div class="b-mort-advantages__col col-md-6 col-md-4 col-xl-3">
                            <div class="b-advantages">
                                <div class="b-advantages__item">
                                    <div class="b-advantages__item-title">Более 10 банков-партнёров
                                    </div>
                                    <div class="b-advantages__item-text">Подберем оптимальную программу.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-mort-advantages__col col-md-6 col-md-4 col-xl-3">
                            <div class="b-advantages">
                                <div class="b-advantages__item">
                                    <div class="b-advantages__item-title">Свыше 80% заявлений одобряются
                                    </div>
                                    <div class="b-advantages__item-text">Поможем подать заявку на ипотеку
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-mort-advantages__col col-md-6 col-md-4 col-xl-3">
                            <div class="b-advantages">
                                <div class="b-advantages__item">
                                    <div class="b-advantages__item-title">1 анкета для всех банков-партнёров
                                    </div>
                                    <div class="b-advantages__item-text">Чтобы сэкономить ваше время.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="b-mort-advantages__col col-md-6 col-md-4 col-xl-3">
                            <div class="b-advantages">
                                <div class="b-advantages__item">
                                    <div class="b-advantages__item-title">1 анкета для всех банков-партнёров
                                    </div>
                                    <div class="b-advantages__item-text">Чтобы сэкономить ваше время.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-mort-cards">
        <div class="b-mort-cards">
            <div class="container">
                <div class="b-mort-cards__row row">
                    <div class="col-6 col-lg-3"><a class="b-cards js-anchor" href="#mortgage"
                                                   data-mortgage-set-program="2">
                            <div class="b-cards__item"
                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/cards1.png)">
                                <div class="b-cards__title">Ипотека без первого взноса
                                </div>
                                <div class="b-cards__btn">Узнать больше
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3"><a class="b-cards js-anchor" href="#mortgage"
                                                   data-mortgage-set-program="2">
                            <div class="b-cards__item"
                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/m2.png)">
                                <div class="b-cards__title">Семейная <br> ипотека
                                </div>
                                <div class="b-cards__btn">Узнать больше
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3"><a class="b-cards js-anchor" href="#mortgage"
                                                   data-mortgage-set-program="2">
                            <div class="b-cards__item"
                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/m3.png)">
                                <div class="b-cards__title">Базовая <br> ипотека
                                </div>
                                <div class="b-cards__btn">Узнать больше
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-6 col-lg-3"><a class="b-cards js-anchor" href="#mortgage"
                                                   data-mortgage-set-program="2">
                            <div class="b-cards__item"
                                 style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/cards3.png)">
                                <div class="b-cards__title">Гос. ипотека
                                </div>
                                <div class="b-cards__btn">Узнать больше
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-mortgage">
        <script>
            var mortgageData = `{

                  "filter": [
                      {
                         "type": "radio-group",
                         "label": "",
                         "name": "program",
                         "options": {
                              "1": "Госпрограмма 2020",
                              "2": "Базовая ипотека",
                              "3": "Семейная ипотека",
                              "4": "По двум документам"
                         },
                         "value": "1"
                     },
                      {
                          "type": "range",
                          "label": "Стоимость  квартиры",
                          "name": "apart-price",
                          "min": 800000,
                          "max": 5800000,
                          "value": 2800000,
                          "interval": 20000
                      },
                      {
                          "type": "first-payment",
                          "label": "Первоначальный взнос",
                          "name": "first-payment",
                          "min": 0,
                          "max": 100,
                          "value": 10,
                          "interval": 1
                      },
                      {
                          "type": "range",
                          "label": "Срок, лет",
                          "name": "time",
                          "min": 1,
                          "max": 30,
                          "value": 10,
                          "interval": 1
                      }
                  ],
                   "itemsIdInApartmentPrice": 199,
                  "items": [
                      {
                          "id": 1,
                          "name": "Райффайзен банк",
                          "rate": "8.6 (базовая ставка)",
                          "term": {
                              "min": 1,
                              "max": 30
                          },
                          "apart-price": {
                              "min": 1000000,
                              "max": 3000000
                          },
                          "amount-of-credit": {
                              "min": 1000000,
                              "max": 3000000
                          },
                          "first-payment": {
                              "min": 10,
                              "max": 90
                          },
                          "age": {
                              "min": 20,
                              "max": 35
                          },
                          "programs": [2]
                      },
                      {
                         "id": 2,
                         "name": "ВТБ",
                         "rate": 6,
                         "term": {
                             "min": 1,
                             "max": 30
                         },
                         "apart-price": {
                             "min": 1000000,
                             "max": 3500000
                         },
                         "amount-of-credit": {
                            "min": 1000000,
                            "max": 3500000
                        },
                         "first-payment": {
                             "min": 10,
                             "max": 90
                         },
                         "age": {
                             "min": 20,
                             "max": 35
                         },
                         "programs": [1]
                     },
                     {
                        "id": 3,
                        "name": "Сбербанк",
                        "rate": 4.5,
                        "term": {
                            "min": 1,
                            "max": 30
                        },
                        "apart-price": {
                            "min": 1000000,
                            "max": 4000000
                        },
                        "amount-of-credit": {
                           "min": 1000000,
                           "max": 4000000
                       },
                        "first-payment": {
                            "min": 10,
                            "max": 90
                        },
                        "age": {
                            "min": 20,
                            "max": 35
                        },
                        "programs": [1]
                    },
                    {
                      "id": 4,
                      "name": "Газпромбанк",
                      "rate": 5.5,
                      "term": {
                          "min": 1,
                          "max": 30
                      },
                      "apart-price": {
                          "min": 1000000,
                          "max": 3000000
                      },
                      "amount-of-credit": {
                         "min": 1000000,
                         "max": 3000000
                     },
                      "first-payment": {
                          "min": 10,
                          "max": 90
                      },
                      "age": {
                          "min": 20,
                          "max": 35
                      },
                      "programs": []
                    },
                    {
                    "id": 5,
                    "name": "Промсвязьбанк",
                    "rate": 8.9,
                    "term": {
                        "min": 1,
                        "max": 30
                    },
                    "apart-price": {
                        "min": 1000000,
                        "max": 3000000
                    },
                    "amount-of-credit": {
                       "min": 1000000,
                       "max": 3000000
                   },
                    "first-payment": {
                        "min": 10,
                        "max": 90
                    },
                    "age": {
                        "min": 20,
                        "max": 35
                    },
                    "programs": []
                  }
                  ]
              }`
        </script>
        <div class="b-mortgage" id="mortgage">
            <div class="container" v-cloak="v-cloak">
                <div class="b-mortgage__content">
                    <div class="b-mortgage__title">Рассчитать ипотеку
                    </div>
                    <div class="b-mortgage__row row">
                        <div class="col-lg-3">
                            <div class="b-mortgage__filter">
                                <div class="b-mortgage__filter-items">
                                    <div class="b-mortgage__filter-item" v-for="item in api.filter">
                                        <div class="b-mortgage__filter-label" v-if="item.label">{{item.label}}
                                        </div>
                                        <template v-if="item.type == &quot;checkbox-group&quot;">
                                            <div class="b-mortgage__checkbox"
                                                 v-for="(optionText, optionVal) in item.options">
                                                <label>
                                                    <input type="checkbox"
                                                           style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/&quot;static/img/general/lay.jpg&quot;);"
                                                           :value="optionVal"
                                                           v-model="item.value"/><span>{{optionText}}</span>
                                                </label>
                                            </div>
                                        </template>
                                        <template v-if="item.type == &quot;radio-group&quot;">
                                            <div class="b-mortgage__checkbox"
                                                 v-for="(optionText, optionVal) in item.options">
                                                <label>
                                                    <input type="radio" :name="item.name"
                                                           style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/&quot;static/img/general/lay.jpg&quot;);"
                                                           :value="optionVal"
                                                           v-model="item.value"/><span>{{optionText}}</span>
                                                </label>
                                            </div>
                                        </template>
                                        <template v-if="item.type == &quot;range&quot;">
                                            <div class="b-mortgage__filter-num">{{item.value | priceFormatter}}
                                            </div>
                                            <vue-slider v-model="item.value" :min="item.min" :max="item.max"
                                                        :tooltip="&quot;none&quot;"
                                                        :interval="item.interval"></vue-slider>
                                        </template>
                                        <template v-if="item.type == &quot;first-payment&quot;">
                                            <div class="b-mortgage__filter-num-row row">
                                                <div class="col-7">
                                                    <div class="b-mortgage__filter-num">{{firstPaymentSumm |
                                                        priceFormatter}}
                                                    </div>
                                                </div>
                                                <div class="col-5">
                                                    <div class="b-mortgage__filter-percent">{{item.value |
                                                        priceFormatter}} %
                                                    </div>
                                                </div>
                                            </div>
                                            <vue-slider v-model="item.value" :min="item.min" :max="item.max"
                                                        :tooltip="&quot;none&quot;"
                                                        :interval="item.interval"></vue-slider>
                                        </template>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="b-mortgage__head">
                                <div class="b-mortgage__items-row row">
                                    <div class="b-mortgage__item-col col-md-4 col-4">
                                        <div class="b-mortgage__head-item">Банк
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <div class="b-mortgage__head-item">Процентная ставка
                                        </div>
                                    </div>
                                    <div class="col-md-4 col-4">
                                        <div class="b-mortgage__head-item">Ежемесячный платеж
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-mortgage__items" v-if="filteredItems.length">
                                <div class="b-mortgage__item" v-for="item in filteredItems">
                                    <div class="b-mortgage__items-row row">
                                        <div class="b-mortgage__item-col col-4">
                                            <div class="b-mortgage__info-item"> {{item.name}}
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="b-mortgage__info-item"> {{item.rate}} %
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="b-mortgage__info-item">{{monthPayment(item.rate) |
                                                priceFormatter}} ₽
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="b-mortgage__no-result" v-else>Нет подходящих предложений, оставьте заявку для
                                консультации.
                            </div>
                            <a class="b-mortgage__btn" href="#callme_mortgage" data-toggle="modal">Подать заявку</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Форма со скрытыми полями для значений фильра-->
            <div class="modal fade modal-not-moving" id="callme_mortgage" tabindex="-1" role="dialog"
                 aria-hidden="true">
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
                                        <input type="hidden" name="apart-price"
                                               :value="getFilterValueByName(&quot;apart-price&quot;)"/>
                                        <input type="hidden" name="first-payment"
                                               :value="getFilterValueByName(&quot;first-payment&quot;)"/>
                                        <input type="hidden" name="time"
                                               :value="getFilterValueByName(&quot;time&quot;)"/>
                                        <input type="hidden" name="program"
                                               :value="getFilterValueByName(&quot;program&quot;)"/>
                                        <div class="b-modal__content">
                                            <div class="b-modal__title">Подать заявку</div>
                                            <div class="b-modal__input">
                                                <label class="b-modal__label">Ваше имя
                                                    <input class="b-modal__form-control" type="text"/>
                                                </label>
                                            </div>
                                            <div class="b-modal__input">
                                                <label class="b-modal__label">Ваш телефон
                                                    <input class="b-modal__form-control" type="tel"
                                                           required="required"/>
                                                </label>
                                            </div>
                                            <div class="b-modal__input">
                                                <div class="b-checkbox">
                                                    <input class="consent checkbox-input" type="checkbox" id="consent"
                                                           name="check"
                                                           style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/lay.jpg"/>
                                                    <label class="b-checkbox__label" for="consent">Согласен (-а) на
                                                        обработку моих персональных данных в целях рассмотрения
                                                        обращения
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="b-modal__call">
                                                <button class="b-modal__btn" type="submit">Заказать</button>
                                                <div class="b-modal__btn-text">
                                                    <p>Или позвоните нам!</p><a class="b-modal__tel"
                                                                                href="tel:+7 3452 28 83 14">+7 (3452) 28
                                                        83 14</a>
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
    <div class="page__b-photo-about">
        <div class="b-photo-about">
            <div class="container">
                <div class="b-photo-about__img"
                     style="background-image: url(<?= SITE_TEMPLATE_PATH; ?>/static/img/general/mort.jpg)">
                    <div class="b-photo-about__desc">
                        <div class="b-photo-about__title">Oт вас <strong>толькo документы</strong>
                        </div>
                        <div class="b-photo-about__text">
                            <ul>
                                <li>Копии паспорта заемщика, созаемщиков и поручителей (если есть)</li>
                                <li>Копия свидетельства о заключении брака</li>
                                <li>Справка о заработной плате 2-НДФЛ за 6 месяцев или 1 год</li>
                                <li>Копии всех страниц трудовой книжки</li>
                                <li>Военный билет (для мужчин младше 27 лет)</li>
                                <li>Копия ИНН</li>
                                <li>Копия СНИЛС</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-mort-items">
        <div class="b-mort-items">
            <div class="container">
                <div class="b-mort-items__row row">
                    <div class="b-mort-items__col col-md-6 col-lg-3">
                        <div class="b-developer-item">
                            <div class="b-developer-item__img"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/mort3.jpg"/>
                            </div>
                            <div class="b-developer-item__desc">
                                <div class="b-developer-item__title">Забронируем для вас квартиру.
                                </div>
                                <div class="b-developer-item__text">И сохраним действующую цену или акцию на период
                                    рассмотрения.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-mort-items__col col-md-6 col-lg-3">
                        <div class="b-developer-item">
                            <div class="b-developer-item__img"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/mort3.jpg"/>
                            </div>
                            <div class="b-developer-item__desc">
                                <div class="b-developer-item__title">Подберем выгодную программу.
                                </div>
                                <div class="b-developer-item__text">И предложим уникальные условия от наших партнеров.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-mort-items__col col-md-6 col-lg-3">
                        <div class="b-developer-item">
                            <div class="b-developer-item__img"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/mort3.jpg"/>
                            </div>
                            <div class="b-developer-item__desc">
                                <div class="b-developer-item__title">Подадим за вас все заявки.
                                </div>
                                <div class="b-developer-item__text">И будем отслеживать их результат.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="b-mort-items__col col-md-6 col-lg-3">
                        <div class="b-developer-item">
                            <div class="b-developer-item__img"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/mort3.jpg"/>
                            </div>
                            <div class="b-developer-item__desc">
                                <div class="b-developer-item__title">Планировки
                                </div>
                                <div class="b-developer-item__text">Получим одобрение от банка.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page__b-mort-photo">
        <div class="b-mort-photo">
            <div class="container">
                <div class="b-mort-photo__content">
                    <div class="b-mort-photo__row row no-gutters">
                        <div class="col-lg-5 order-2 order-lg-1">
                            <div class="b-mort-photo__desc">
                                <div class="b-mort-photo__title">Разумная ипотека.
                                </div>
                                <div class="b-mort-photo__text"><p>Застройщик 4D Development с 2008 г. работает с
                                        ипотечными кредитами. Мы знаем все тонкости и неявные преимущества рынка.</p>
                                    <ul>
                                        <li>Личный ипотечный помощник. Это ваш менеджер, который проведет вас по всем
                                            этапам сделки.
                                        </li>
                                        <li>Одобрение ипотеки за 1 сутки. Сегодня мы передаем вашу заявку в банк, а уже
                                            завтра — получим от него ответ.
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-7 order-1 order-lg-2">
                            <div class="b-mort-photo__img"><img
                                        src="<?= SITE_TEMPLATE_PATH; ?>/static/img/general/mort2.jpg"/>
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
                    <div class="b-callme__text">Не откладывайте покупку на завтра
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