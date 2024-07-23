<?php
$pageConfig = [
    'metaTitle' => 'Личный кабинет',
    'title' => 'Личный кабинет',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-lk/bundle-lk.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-lk/bundle-lk.js',
        '/local/assets/local/bundle-form/bundle-form.js',
    ],
    'main_class' => 'lk',
    'isMainPage' => false,
    'isCatalogPage' => false,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
  <div class="container">
    <h1 class="lk__title lk__title_desktop">Личный кабинет</h1>
  </div>
  <div class="container">
    <div class="lk-wrapper">
      <aside class="lk-aside">
        <div class="lk-menu">
          <div class="lk-menu-top">
            <div class="lk-menu-top__title">личный кабинет</div>
            <div class="lk-menu-top__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="14" height="8" fill="none" viewBox="0 0 14 8"><path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".7" d="m1 1 5.783 5.908a.3.3 0 0 0 .434 0L13 1"/></svg>
            </div>
          </div>
          <div class="lk-menu-hidden">
            <div class="lk-menu-list">
              <div class="lk-menu-item lk-menu-item_active">
                <a href="#" class="lk-menu-item__link">История заказов</a>
              </div>
              <div class="lk-menu-item">
                <a href="#" class="lk-menu-item__link">Адреса доставки</a>
              </div>
              <div class="lk-menu-item">
                <a href="#" class="lk-menu-item__link">Скидки и бонусы</a>
              </div>
              <div class="lk-menu-item">
                <a href="#" class="lk-menu-item__link">Контактные данные</a>
              </div>
            </div>
            <div class="lk-menu-logout">
              <a href="#" class="lk-menu-logout__link">
                <span class="lk-menu-logout__link-icon">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" viewBox="0 0 20 20"><path
                      fill="#DEADA6"
                      d="M8.75 16.875a.625.625 0 0 1-.625.625H3.75a1.25 1.25 0 0 1-1.25-1.25V3.75A1.25 1.25 0 0 1 3.75 2.5h4.375a.625.625 0 0 1 0 1.25H3.75v12.5h4.375a.625.625 0 0 1 .625.625Zm8.567-7.317-3.125-3.125a.625.625 0 0 0-.884.884l2.058 2.058H8.125a.625.625 0 0 0 0 1.25h7.241l-2.058 2.058a.625.625 0 0 0 .884.884l3.125-3.125a.627.627 0 0 0 0-.884Z" /></svg>
                </span>
                <span class="lk-menu-logout__link-text">Выйти</span>
              </a>
            </div>
          </div>
        </div>
      </aside>
      <div class="lk-content">
        <div class="lk-block">
          <div class="lk-block__title">История заказов</div>
          <div class="lk-block-table">
            <div class="lk-block-headers">
              <div class="lk-block-header">
                Номер заказа
              </div>
              <div class="lk-block-header">
                Дата оформления
              </div>
              <div class="lk-block-header">
                Статус
              </div>
              <div class="lk-block-header">
                Оплата
              </div>
              <div class="lk-block-header">
                Сумма заказа
              </div>
            </div>
            <div class="lk-block-row">
              <div class="lk-block-item">
                <div class="lk-block-item__title">Номер заказа</div>
                <div class="lk-block-item__value">1230</div>
              </div>
              <div class="lk-block-item">
                <div class="lk-block-item__title">Дата оформления</div>
                <div class="lk-block-item__value">22.09.2023 12:17</div>
              </div>
              <div class="lk-block-item">
                <div class="lk-block-item__title">Статус</div>
                <div class="lk-block-item__value">Доставлен</div>
              </div>
              <div class="lk-block-item">
                <div class="lk-block-item__title">Оплата</div>
                <div class="lk-block-item__value">Оплачен</div>
              </div>
              <div class="lk-block-item">
                <div class="lk-block-item__title">Сумма заказа</div>
                <div class="lk-block-item__value">31 900 ₽</div>
              </div>
            </div>
            <div class="lk-block-row">
              <div class="lk-block-item">
                <div class="lk-block-item__title">Номер заказа</div>
                <div class="lk-block-item__value">1022</div>
              </div>
              <div class="lk-block-item">
                <div class="lk-block-item__title">Дата оформления</div>
                <div class="lk-block-item__value">20.09.2023 22:53</div>
              </div>
              <div class="lk-block-item">
                <div class="lk-block-item__title">Статус</div>
                <div class="lk-block-item__value">Доставлен</div>
              </div>
              <div class="lk-block-item">
                <div class="lk-block-item__title">Оплата</div>
                <div class="lk-block-item__value">Оплачен</div>
              </div>
              <div class="lk-block-item">
                <div class="lk-block-item__title">Сумма заказа</div>
                <div class="lk-block-item__value">13 500 ₽</div>
              </div>
            </div>
          </div>
          <div class="lk-block-total">
            <div class="lk-block-total__title">Сумма выполненных заказов</div>
            <div class="lk-block-total__value">31 900 ₽</div>
          </div>
        </div>
      </div>
    </div>
  </div>

<? include 'include/footer.php';

