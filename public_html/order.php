<?php
$pageConfig = [
    'metaTitle' => 'Оформление заказа',
    'title' => 'Оформление заказа',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-order/bundle-order.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-order/bundle-order.js',
        '/local/assets/local/bundle-form/bundle-form.js',
    ],
    'main_class' => 'order',
    'isMainPage' => false,
    'isCatalogPage' => false,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
  <div class="container">
    <div class="order-top">
      <h1 class="page__title order__title">Оформление заказа</h1>
    </div>
    <div class="order-wrapper">
      <div class="order-left">
        <div class="order-section order-auth">
          <div class="order-auth-link-container">
            <a href="#" class="order-auth__link">авторизуйтесь</a>
          </div>
          <div class="order-auth__text">если вы уже заказывали букеты у нас.</div>
          <div class="order-auth__text">Вы вошли как Константиновский Александр</div>
          <div class="order-auth__text">+7 906 722 08 30</div>
          <div class="order-auth__text">konstantinoskiy95@mail.ru</div>
          <div class="order-auth-logout-container">
            <a href="#" class="order-auth-logout__link">
              <span class="order-auth-logout__link-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20"><path
                    fill="#DEADA6"
                    d="M8.75 16.875a.625.625 0 0 1-.625.625H3.75a1.25 1.25 0 0 1-1.25-1.25V3.75A1.25 1.25 0 0 1 3.75 2.5h4.375a.625.625 0 0 1 0 1.25H3.75v12.5h4.375a.625.625 0 0 1 .625.625Zm8.567-7.317-3.125-3.125a.625.625 0 0 0-.884.884l2.058 2.058H8.125a.625.625 0 0 0 0 1.25h7.241l-2.058 2.058a.625.625 0 0 0 .884.884l3.125-3.125a.627.627 0 0 0 0-.884Z" /></svg>
              </span>
              <span class="order-auth-logout__link-text">Выйти</span>
            </a>
          </div>
        </div>
        <div class="order-section order-props">
          <div class="order-props-fields">
            <div class="order-props-group order-props-group-DELIVERY_DATE">
              <div class="order-props-group__title">Дата доставки*</div>
              <label class="order-props-label">
                <input type="date" class="order-props__control" placeholder="дд.мм.гггг">
                <span class="order-props-group__icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="18" fill="none" viewBox="0 0 16 18"><path
                      fill="#242424"
                      d="M14.969 1.781h-2.406V.75a.344.344 0 1 0-.688 0v1.031H4.312V.75a.344.344 0 0 0-.687 0v1.031H1.219A1.031 1.031 0 0 0 .187 2.813v13.75a1.031 1.031 0 0 0 1.032 1.03h13.75A1.031 1.031 0 0 0 16 16.564V2.813a1.032 1.032 0 0 0-1.031-1.032Zm-13.75.688h2.406V3.5a.344.344 0 0 0 .688 0V2.469h7.562V3.5a.344.344 0 1 0 .688 0V2.469h2.406a.344.344 0 0 1 .344.344v3.093H.874V2.813a.344.344 0 0 1 .344-.344Zm13.75 14.437H1.219a.344.344 0 0 1-.344-.343v-9.97h14.438v9.97a.344.344 0 0 1-.344.343Z" /></svg>
                </span>
              </label>
            </div>
            <div class="order-props-group order-props-group-DELIVERY_ADDRESS">
              <div class="order-props-group__title">Адрес доставки*</div>
              <label class="order-props-label">
                <input type="text" class="order-props__control" placeholder="Введите адрес">
              </label>
            </div>
            <div class="order-props-group order-props-group-DELIVERY_INTERVAL">
              <div class="order-props-group__title">интервал времени доставки*</div>
              <input type="hidden" class="order-props__control">
              <div class="dropdown order-props-dropdown">
                <button class="dropdown-current order-props-dropdown-current order-props__control" type="button">
                  <span class="dropdown-current__text order-props-dropdown-current__text">Выбрать интервал</span>
                  <span class="dropdown-current__icon order-props-dropdown-current__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" fill="none" viewBox="0 0 14 8"><path
                          stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".7"
                          d="m1 1 5.783 5.908a.3.3 0 0 0 .434 0L13 1" /></svg>
                    </span>
                </button>
                <div class="dropdown-hidden order-props-dropdown-hidden">
                  <ul class="dropdown-list order-props-dropdown-list">
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="1 час"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">1 час</span></button>
                    </li>
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="4 часа"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">4 часа</span></button>
                    </li>
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="К конкретному времени"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">К конкретному времени</span>
                      </button>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="order-props-group order-props-group-DELIVERY_TIME">
              <div class="order-props-group__title">Выберите Время доставки*</div>
              <input type="hidden" class="order-props__control" value="11:00-12:00">
              <div class="dropdown order-props-dropdown">
                <button class="dropdown-current order-props-dropdown-current order-props__control" type="button">
                  <span class="dropdown-current__text order-props-dropdown-current__text">11:00-12:00</span>
                  <span class="dropdown-current__icon order-props-dropdown-current__icon">
                      <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" fill="none" viewBox="0 0 14 8"><path
                          stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".7"
                          d="m1 1 5.783 5.908a.3.3 0 0 0 .434 0L13 1" /></svg>
                    </span>
                </button>
                <div class="dropdown-hidden order-props-dropdown-hidden">
                  <ul class="dropdown-list order-props-dropdown-list">
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value dropdown__value_selected order-props-dropdown-item__value"
                              type="button"
                              data-value="11:00-12:00"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">11:00-12:00</span></button>
                    </li>
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="12:00-13:00"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">12:00-13:00</span></button>
                    </li>
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="14:00-15:00"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">14:00-15:00</span></button>
                    </li>
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="15:00-16:00"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">15:00-16:00</span></button>
                    </li>
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="16:00-17:00"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">16:00-17:00</span></button>
                    </li>
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="17:00-18:00"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">17:00-18:00</span></button>
                    </li>
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="19:00-20:00"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">19:00-20:00</span></button>
                    </li>
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="20:00-21:00"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">20:00-21:00</span></button>
                    </li>
                    <li class="dropdown-item order-props-dropdown-item">
                      <button class="dropdown__value order-props-dropdown-item__value" type="button"
                              data-value="21:00-22:00"><span
                          class="dropdown__value-text order-props-dropdown-item__value-text">21:00-22:00</span></button>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="order-props-group-link-container">
                <a href="#" class="order-props-group__link">Зоны и стоимость доставки</a>
              </div>
            </div>
            <div class="order-props-group order-props-group-RECEIPT">
              <div class="order-props-group__title">Получатель*</div>
              <label class="order-props-label">
                <span class="order-props-checkbox">
                  <input type="checkbox" class="form-hidden order-props__control order-props-checkbox__control">
                  <span class="order-props-checkbox__marker">
                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="9" fill="none" viewBox="0 0 11 9"><path
                        stroke="#707070" stroke-width="1.3" d="M1 4.808 4.288 8 10 1" /></svg>
                  </span>
                  <span class="order-props-checkbox__text">Получатель совпадает с заказчиком</span>
                </span>
              </label>
              <label class="order-props-label">
                <input type="text" class="order-props__control" placeholder="Введите имя получателя">
              </label>
            </div>
            <div class="order-props-group order-props-group-TEL">
              <div class="order-props-group__title">Контактный телефон получателя*</div>
              <label class="order-props-label">
                <input type="tel" class="order-props__control form__control_tel" placeholder="Введите телефон">
              </label>
            </div>
            <div class="order-props-group order-props-group-TEXT">
              <div class="order-props-group__title">Текст для открытки</div>
              <label class="order-props-label">
                <textarea class="order-props__control order-props__control_textarea" placeholder=""></textarea>
              </label>
            </div>
            <div class="order-props-group order-props-group-COMMENT">
              <div class="order-props-group__title">Комментарии к заказу</div>
              <label class="order-props-label">
                <textarea class="order-props__control order-props__control_textarea" placeholder=""></textarea>
              </label>
            </div>
            <div class="order-props-group order-props-group-PAYMENT">
              <div class="order-props-group__title">Способ оплаты*</div>
              <label class="order-props-label">
                <span class="order-props-radio">
                  <input type="radio" name="payment"
                         class="form-hidden order-props__control order-props-radio__control">
                  <span class="order-props-radio__marker"></span>
                  <span class="order-props-radio__text">Онлайн</span>
                </span>
              </label>
              <label class="order-props-label">
                <span class="order-props-radio">
                  <input type="radio" name="payment"
                         class="form-hidden order-props__control order-props-radio__control">
                  <span class="order-props-radio__marker"></span>
                  <span class="order-props-radio__text">Наличными курьеру</span>
                </span>
              </label>
            </div>
          </div>
        </div>
        <div class="order-section order-bottom">
          <button class="button button_filled-pink order__button" type="button">
            подтвердить заказ
          </button>
        </div>
      </div>
      <div class="order-right">
        <div class="order-right-inner">
          <div class="order-section order-section-accordion order-basket">
            <div class="order-section-top">
              <div class="order-section__title">Ваш заказ</div>
              <div class="order-section-top__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="8" fill="none" viewBox="0 0 17 8">
                  <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".6"
                        d="m1 .329 7.229 7.229c.15.15.391.15.542 0L16 .329" />
                </svg>
              </div>
            </div>
            <div class="order-section-hidden">
              <div class="order-basket-list">
                <div class="order-basket-item">
                  <div class="order-basket-item-image">
                    <img src="/local/assets/images/basket/image1.jpg" alt="Дыхание весны"
                         class="order-basket-item-image__img" loading="lazy">
                  </div>
                  <div class="order-basket-item-content">
                    <div class="order-basket-item-info">
                      <div class="order-basket-item__title">Дыхание весны</div>
                      <div class="order-basket-item-props">
                        <div class="order-basket-item-prop">Размер М</div>
                      </div>
                    </div>
                    <div class="order-basket-item-sum">
                      <span class="order-basket-item-sum__quantity">1 х</span>
                      <span class="order-basket-item-sum__value">15 400 ₽</span>
                    </div>
                  </div>
                  <a href="#" class="link-as-card"></a>
                </div>
                <div class="order-basket-item">
                  <div class="order-basket-item-image">
                    <img src="/local/assets/images/basket/image2.jpg" alt="Любовь и ягоды"
                         class="order-basket-item-image__img" loading="lazy">
                  </div>
                  <div class="order-basket-item-content">
                    <div class="order-basket-item-info">
                      <div class="order-basket-item__title">Любовь и ягоды</div>
                      <div class="order-basket-item-props">
                        <div class="order-basket-item-prop">Размер М</div>
                      </div>
                    </div>
                    <div class="order-basket-item-sum">
                      <span class="order-basket-item-sum__quantity">1 х</span>
                      <span class="order-basket-item-sum__value">16 500 ₽</span>
                    </div>
                  </div>
                  <a href="#" class="link-as-card"></a>
                </div>
              </div>
              <div class="order-basket-total">
                <div class="order-basket-total-item">
                  <div class="order-basket-total-item__title">Сумма</div>
                  <div class="order-basket-total-item__value">31 900 ₽</div>
                </div>
                <div class="order-basket-total-item">
                  <div class="order-basket-total-item__title">Стоимость доставки</div>
                  <div class="order-basket-total-item__value">0 ₽</div>
                </div>
                <div class="order-basket-total-item order-basket-total-item_total">
                  <div class="order-basket-total-item__title">Итого:</div>
                  <div class="order-basket-total-item__value">31 900 ₽</div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

<? include 'include/footer.php';
