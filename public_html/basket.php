<?php
$pageConfig = [
    'metaTitle' => 'Корзина',
    'title' => 'Корзина',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-basket/bundle-basket.css',
        '/local/assets/basket/default-style.css',
        '/local/assets/basket/style.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-basket/bundle-basket.js',
        '/local/assets/local/bundle-form/bundle-form.js',
    ],
    'main_class' => 'basket-page',
    'isMainPage' => false,
    'isCatalogPage' => false,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
  <div class="basket">
    <div class="container">
      <h1 class="page__title basket__title">Корзина</h1>
    </div>
    <div class="container">
      <div id="basket-root" class="bx-basket bx-blue bx-step-opacity">
        <div class="alert alert-warning alert-dismissable" id="basket-warning" style="display: none;">
          <span class="close" data-entity="basket-items-warning-notification-close">&times;</span>
          <div data-entity="basket-general-warnings"></div>
          <div data-entity="basket-item-warnings">
            В вашей корзине <a href="javascript:void(0)"
                               data-entity="basket-items-warning-count"></a> требует внимания.
          </div>
        </div>
        <div
          class="basket-items-list-wrapper basket-items-list-wrapper-height-fixed basket-items-list-wrapper-light"
          id="basket-items-list-wrapper">
          <div class="basket-items-list-header" data-entity="basket-items-list-header">
            <div class="basket-items-search-field" data-entity="basket-filter">
              <div class="form has-feedback">
                <input type="text" class="form-control"
                       placeholder="Фильтр"
                       data-entity="basket-filter-input">
                <span class="form-control-feedback basket-clear"
                      data-entity="basket-filter-clear-btn"></span>
              </div>
            </div>
            <div class="basket-items-list-header-filter">
              <a href="javascript:void(0)" class="basket-items-list-header-filter-item active"
                 data-entity="basket-items-count" data-filter="all" style="display: none;"></a>
              <a href="javascript:void(0)" class="basket-items-list-header-filter-item"
                 data-entity="basket-items-count" data-filter="similar"
                 style="display: none;"></a>
              <a href="javascript:void(0)" class="basket-items-list-header-filter-item"
                 data-entity="basket-items-count" data-filter="warning"
                 style="display: none;"></a>
              <a href="javascript:void(0)" class="basket-items-list-header-filter-item"
                 data-entity="basket-items-count" data-filter="delayed"
                 style="display: none;"></a>
              <a href="javascript:void(0)" class="basket-items-list-header-filter-item"
                 data-entity="basket-items-count" data-filter="not-available"
                 style="display: none;"></a>
            </div>
          </div>
          <div class="basket-items-list-container" id="basket-items-list-container">
            <div class="basket-items-list-overlay" id="basket-items-list-overlay" style="display: none;"></div>
            <div class="basket-items-list" id="basket-item-list">
              <div class="basket-search-not-found" id="basket-item-list-empty-result" style="display: none;">
                <div class="basket-search-not-found-icon"></div>
                <div class="basket-search-not-found-text">
                  По данному запросу товаров не найдено
                </div>
              </div>
              <div class="basket-items-list-table" id="basket-item-table">
                <div class="basket-items-list-item-container" id="basket-item-6637" data-entity="basket-item"
                     data-id="6637">
                  <div class="basket-items-list-item-descriptions">
                    <div class="basket-item-block-image">
                      <a href="#" class="basket-item-image-link">

                        <img class="basket-item-image"
                             alt="Пептидный омолаживающий крем для кожи вокруг глаз против морщин и отеков"
                             src="/local/assets/images/basket/image1.jpg">


                      </a>
                    </div>
                    <div class="basket-items-list-item-descriptions-inner" id="basket-item-height-aligner-6637">
                      <div class="basket-item-block-info">
                        <h2 class="basket-item-info-name">
                          <a href="#" class="basket-item-info-name-link">

                            <span data-entity="basket-item-name">Дыхание весны</span>

                          </a>
                        </h2>
                        <div class="basket-item-block-properties">


                          <div class="basket-item-property-custom basket-item-property-custom-text
														hidden-xs" data-entity="basket-item-property">
                            <div class="basket-item-property-custom-name">Размер:</div>
                            <div class="basket-item-property-custom-value" data-column-property-code="SIZE"
                                 data-entity="basket-item-property-column-value">
                              М
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="basket-items-list-item-sum basket-items-list-item-price">
                        <div class="basket-item-block-price">
                          <div class="basket-item-price-current">
                                                        <span class="basket-item-price-current-text"
                                                              id="basket-item-sum-price-6637">
                                                            15 759 ₽
                                                        </span>
                          </div>

                          <div class="basket-item-price-old">
                                                        <span class="basket-item-price-old-text"
                                                              id="basket-item-sum-price-old-6637">
									18 540 ₽
								</span>
                          </div>

                          <div class="basket-item-price-difference">
                            -15%
                          </div>
                        </div>
                      </div>
                      <div class="basket-items-list-item-amount">
                        <div class="basket-item-block-amount" data-entity="basket-item-quantity-block">
                              <span class="basket-item-amount-btn-minus"
                                    data-entity="basket-item-quantity-minus">-</span>
                          <div class="basket-item-amount-filed-block">
                            <input type="text" class="basket-item-amount-filed" value="3" data-value="3"
                                   data-entity="basket-item-quantity-field" id="basket-item-quantity-6637">
                          </div>
                          <span class="basket-item-amount-btn-plus" data-entity="basket-item-quantity-plus">+</span>
                          <div class="basket-item-amount-field-description">
                            шт
                          </div>
                        </div>
                        <button class="basket-item-actions-remove" data-entity="basket-item-delete">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                               viewBox="0 0 20 20">
                            <path fill="#DEADA6"
                                  d="M16.875 4.063h-3.438v-.938a1.563 1.563 0 0 0-1.562-1.563h-3.75a1.562 1.562 0 0 0-1.563 1.563v.938H3.126a.312.312 0 1 0 0 .625h.938V16.25a.937.937 0 0 0 .937.938h10a.938.938 0 0 0 .938-.938V4.687h.937a.313.313 0 1 0 0-.625Zm-9.688-.938a.937.937 0 0 1 .938-.938h3.75a.937.937 0 0 1 .938.938v.938H7.186v-.938Zm8.125 13.125a.313.313 0 0 1-.312.313H5a.312.312 0 0 1-.313-.313V4.687h10.625V16.25ZM8.439 8.125v5a.313.313 0 1 1-.626 0v-5a.312.312 0 1 1 .625 0Zm3.75 0v5a.313.313 0 1 1-.626 0v-5a.312.312 0 1 1 .626 0Z" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                  <div class="basket-items-list-item-note">
                    Не все цветы этого букета сейчас в сезоне и доступны к заказу, но при сборке букета мы сохраним
                    общую гамму и стилистику.
                  </div>
                </div>
                <div class="basket-items-list-item-container" id="basket-item-6637" data-entity="basket-item"
                     data-id="6637">
                  <div class="basket-items-list-item-descriptions">
                    <div class="basket-item-block-image">
                      <a href="#" class="basket-item-image-link">

                        <img class="basket-item-image"
                             alt="Пептидный омолаживающий крем для кожи вокруг глаз против морщин и отеков"
                             src="/local/assets/images/basket/image2.jpg">


                      </a>
                    </div>
                    <div class="basket-items-list-item-descriptions-inner" id="basket-item-height-aligner-6637">
                      <div class="basket-item-block-info">
                        <h2 class="basket-item-info-name">
                          <a href="#" class="basket-item-info-name-link">

                            <span data-entity="basket-item-name">Любовь и ягоды</span>

                          </a>
                        </h2>
                        <div class="basket-item-block-properties">


                          <div class="basket-item-property-custom basket-item-property-custom-text
														hidden-xs" data-entity="basket-item-property">
                            <div class="basket-item-property-custom-name">Размер:</div>
                            <div class="basket-item-property-custom-value" data-column-property-code="SIZE"
                                 data-entity="basket-item-property-column-value">
                              М
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="basket-items-list-item-sum basket-items-list-item-price">
                        <div class="basket-item-block-price">
                          <div class="basket-item-price-current">
                                                        <span class="basket-item-price-current-text"
                                                              id="basket-item-sum-price-6637">
                                                            15 759 ₽
                                                        </span>
                          </div>

                          <div class="basket-item-price-old">
                                                        <span class="basket-item-price-old-text"
                                                              id="basket-item-sum-price-old-6637">
									18 540 ₽
								</span>
                          </div>

                          <div class="basket-item-price-difference">
                            -15%
                          </div>
                        </div>
                      </div>
                      <div class="basket-items-list-item-amount">
                        <div class="basket-item-block-amount" data-entity="basket-item-quantity-block">
                              <span class="basket-item-amount-btn-minus"
                                    data-entity="basket-item-quantity-minus">-</span>
                          <div class="basket-item-amount-filed-block">
                            <input type="text" class="basket-item-amount-filed" value="3" data-value="3"
                                   data-entity="basket-item-quantity-field" id="basket-item-quantity-6637">
                          </div>
                          <span class="basket-item-amount-btn-plus" data-entity="basket-item-quantity-plus">+</span>
                          <div class="basket-item-amount-field-description">
                            шт
                          </div>
                        </div>
                        <button class="basket-item-actions-remove" data-entity="basket-item-delete">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                               viewBox="0 0 20 20">
                            <path fill="#DEADA6"
                                  d="M16.875 4.063h-3.438v-.938a1.563 1.563 0 0 0-1.562-1.563h-3.75a1.562 1.562 0 0 0-1.563 1.563v.938H3.126a.312.312 0 1 0 0 .625h.938V16.25a.937.937 0 0 0 .937.938h10a.938.938 0 0 0 .938-.938V4.687h.937a.313.313 0 1 0 0-.625Zm-9.688-.938a.937.937 0 0 1 .938-.938h3.75a.937.937 0 0 1 .938.938v.938H7.186v-.938Zm8.125 13.125a.313.313 0 0 1-.312.313H5a.312.312 0 0 1-.313-.313V4.687h10.625V16.25ZM8.439 8.125v5a.313.313 0 1 1-.626 0v-5a.312.312 0 1 1 .625 0Zm3.75 0v5a.313.313 0 1 1-.626 0v-5a.312.312 0 1 1 .626 0Z" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="basket-items-list-item-container" id="basket-item-6637" data-entity="basket-item"
                     data-id="6637">
                  <div class="basket-items-list-item-descriptions">
                    <div class="basket-item-block-image">
                    </div>
                    <div class="basket-items-list-item-descriptions-inner" id="basket-item-height-aligner-6637">
                      <div class="basket-item-block-info">
                        <h2 class="basket-item-info-name">
                          <a href="#" class="basket-item-info-name-link">

                            <span data-entity="basket-item-name">Любовь и ягоды</span>

                          </a>
                        </h2>
                        <div class="basket-item-block-properties">


                          <div class="basket-item-property-custom basket-item-property-custom-text
														hidden-xs" data-entity="basket-item-property">
                            <div class="basket-item-property-custom-name">Размер:</div>
                            <div class="basket-item-property-custom-value" data-column-property-code="SIZE"
                                 data-entity="basket-item-property-column-value">
                              М
                            </div>
                          </div>

                        </div>
                      </div>
                      <div class="basket-items-list-item-sum basket-items-list-item-price">
                        <div class="basket-item-block-price">
                          <div class="basket-item-price-current">
                                                        <span class="basket-item-price-current-text"
                                                              id="basket-item-sum-price-6637">
                                                            15 759 ₽
                                                        </span>
                          </div>

                          <div class="basket-item-price-old">
                                                        <span class="basket-item-price-old-text"
                                                              id="basket-item-sum-price-old-6637">
									18 540 ₽
								</span>
                          </div>

                          <div class="basket-item-price-difference">
                            -15%
                          </div>
                        </div>
                      </div>
                      <div class="basket-items-list-item-amount">
                        <div class="basket-item-block-amount" data-entity="basket-item-quantity-block">
                              <span class="basket-item-amount-btn-minus"
                                    data-entity="basket-item-quantity-minus">-</span>
                          <div class="basket-item-amount-filed-block">
                            <input type="text" class="basket-item-amount-filed" value="3" data-value="3"
                                   data-entity="basket-item-quantity-field" id="basket-item-quantity-6637">
                          </div>
                          <span class="basket-item-amount-btn-plus" data-entity="basket-item-quantity-plus">+</span>
                          <div class="basket-item-amount-field-description">
                            шт
                          </div>
                        </div>
                        <button class="basket-item-actions-remove" data-entity="basket-item-delete">
                          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"
                               viewBox="0 0 20 20">
                            <path fill="#DEADA6"
                                  d="M16.875 4.063h-3.438v-.938a1.563 1.563 0 0 0-1.562-1.563h-3.75a1.562 1.562 0 0 0-1.563 1.563v.938H3.126a.312.312 0 1 0 0 .625h.938V16.25a.937.937 0 0 0 .937.938h10a.938.938 0 0 0 .938-.938V4.687h.937a.313.313 0 1 0 0-.625Zm-9.688-.938a.937.937 0 0 1 .938-.938h3.75a.937.937 0 0 1 .938.938v.938H7.186v-.938Zm8.125 13.125a.313.313 0 0 1-.312.313H5a.312.312 0 0 1-.313-.313V4.687h10.625V16.25ZM8.439 8.125v5a.313.313 0 1 1-.626 0v-5a.312.312 0 1 1 .625 0Zm3.75 0v5a.313.313 0 1 1-.626 0v-5a.312.312 0 1 1 .626 0Z" />
                          </svg>
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="basket-checkout-container" data-entity="basket-total-block">
          <div class="basket-count-section">
            В корзине товаров: 2
          </div>
          <div class="basket-coupon-section">
            <div class="basket-coupon-block-field">
              <div class="form">
                <div class="basket-coupon-group" style="position: relative;">
                  <input type="text" class="basket-coupon-control" id="" placeholder="Введите промокод"
                         data-entity="basket-coupon-input">
                </div>
              </div>
            </div>
            <div class="basket-coupon-alert-section">
              <div class="basket-coupon-alert-inner">
                <div class="basket-coupon-alert text-danger">
						<span class="basket-coupon-text">
							<strong>test</strong> - купон не найден

						</span>
                  <span class="close-link" data-entity="basket-coupon-delete" data-coupon="test">
							Удалить						</span>
                </div>
              </div>
            </div>
          </div>
          <div class="basket-checkout-section">
            <div class="basket-checkout-section-inner">
              <div class="basket-checkout-block basket-checkout-block-total-price">
                <div class="basket-checkout-block-total-price-inner">
                  <div class="basket-coupon-block-total-price-current" data-entity="basket-total-price">
                    24 085 ₽
                  </div>

                  <div class="basket-coupon-block-total-price-old">
                    26 866 ₽
                  </div>
                </div>
              </div>
            </div>
            <div class="basket-checkout-block basket-checkout-block-btn">
              <button class="button button_filled-pink basket-btn-checkout"
                      data-entity="basket-checkout-button">
                Оформить
              </button>
            </div>
          </div>
        </div>
    </div>
  </div>

  <div class="container">
    <div class="catalog-detail-card-info">
      <div class="catalog-detail-card-info-item">
        <a href="#delivery" class="catalog-detail-card-info-item__link" data-fancybox-slide>
          <span class="catalog-detail-card-info-item__text">курьерская доставка</span>
          <span class="catalog-detail-card-info-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" fill="none" viewBox="0 0 7 12"><path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5" d="M.867 11.5 5.92 6.2a.29.29 0 0 0 0-.398L.867.501"></path></svg>
              </span>
        </a>
      </div>
      <div class="catalog-detail-card-info-item">
        <a href="#care" class="catalog-detail-card-info-item__link" data-fancybox-slide>
          <span class="catalog-detail-card-info-item__text">фирменная Упаковка</span>
          <span class="catalog-detail-card-info-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" fill="none" viewBox="0 0 7 12"><path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5" d="M.867 11.5 5.92 6.2a.29.29 0 0 0 0-.398L.867.501"></path></svg>
              </span>
        </a>
      </div>
      <div class="catalog-detail-card-info-item">
        <a href="#equip" class="catalog-detail-card-info-item__link" data-fancybox-slide>
          <span class="catalog-detail-card-info-item__text">заботливый Сервис</span>
          <span class="catalog-detail-card-info-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" fill="none" viewBox="0 0 7 12"><path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5" d="M.867 11.5 5.92 6.2a.29.29 0 0 0 0-.398L.867.501"></path></svg>
              </span>
        </a>
      </div>
    </div>
  </div>

  <div class="catalog-modal" id="delivery">
    <div class="catalog-modal-top">
      <div class="container catalog-modal-top-container">
        <div class="catalog-modal__title">Доставка</div>
        <button class="catalog-modal__close" type="button" data-fancybox-close>
          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" fill="none" viewBox="0 0 27 26">
            <path stroke="#242424" stroke-linecap="round" stroke-width=".7"
                  d="M3.707 4.04 23 23.335M23 3.743 3.707 23.036" />
          </svg>
        </button>
      </div>
    </div>
    <div class="catalog-modal-inner">
      <div class="container catalog-modal-container">
        <div class="catalog-modal__text">
          Дорогие клиенты, при заказе букета после 21:00 ближайшее доступное время доставки букета — на следующий день с
          12:00 и в более поздние интервалы времени.
        </div>
      </div>
      <div class="catalog-delivery">
        <div class="catalog-delivery-item">
          <div class="container catalog-delivery-item-container">
            <div class="catalog-delivery-item-top">
              <div class="catalog-delivery-item-top-content">
                <div class="catalog-delivery-item-top__title">в пределах мкад</div>
              </div>
              <div class="catalog-delivery-item-top__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="8" fill="none" viewBox="0 0 16 8">
                  <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".6"
                        d="m.51.329 7.228 7.229c.151.15.392.15.543 0L15.509.329" />
                </svg>
              </div>
            </div>
            <div class="catalog-delivery-item-hidden">
              <div class="catalog-delivery-item-inner">
                <div class="catalog-delivery-table">
                  <div class="catalog-delivery-table-headers">
                    <div class="catalog-delivery-table__header">Время</div>
                    <div class="catalog-delivery-table__header">стоимость и интервал</div>
                  </div>
                  <div class="catalog-delivery-table-body">
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">8:00-22:00</div>
                      <div class="catalog-delivery-table-cell">500₽ (4 часа)</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">22:00-00:00</div>
                      <div class="catalog-delivery-table-cell">1 500₽ (2 часа)</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">7:00-9:00</div>
                      <div class="catalog-delivery-table-cell">1 000₽</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">6:00-8:00</div>
                      <div class="catalog-delivery-table-cell">1 500₽ (2 часа)</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">9:00-22:00</div>
                      <div class="catalog-delivery-table-cell">1 200₽ (любой)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="catalog-delivery-item">
          <div class="container catalog-delivery-item-container">
            <div class="catalog-delivery-item-top">
              <div class="catalog-delivery-item-top-content">
                <div class="catalog-delivery-item-top__title">За пределами мкад</div>
                <div class="catalog-delivery-item-top__note">с 8:00 до 24:00</div>
              </div>
              <div class="catalog-delivery-item-top__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="8" fill="none" viewBox="0 0 16 8">
                  <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".6"
                        d="m.51.329 7.228 7.229c.151.15.392.15.543 0L15.509.329" />
                </svg>
              </div>
            </div>
            <div class="catalog-delivery-item-hidden">
              <div class="catalog-delivery-item-inner">
                <div class="catalog-delivery-table">
                  <div class="catalog-delivery-table-headers">
                    <div class="catalog-delivery-table__header">Время</div>
                    <div class="catalog-delivery-table__header">стоимость и интервал</div>
                  </div>
                  <div class="catalog-delivery-table-body">
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">8:00-22:00</div>
                      <div class="catalog-delivery-table-cell">500₽ (4 часа)</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">22:00-00:00</div>
                      <div class="catalog-delivery-table-cell">1 500₽ (2 часа)</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">7:00-9:00</div>
                      <div class="catalog-delivery-table-cell">1 000₽</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">6:00-8:00</div>
                      <div class="catalog-delivery-table-cell">1 500₽ (2 часа)</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">9:00-22:00</div>
                      <div class="catalog-delivery-table-cell">1 200₽ (любой)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="catalog-delivery-item">
          <div class="container catalog-delivery-item-container">
            <div class="catalog-delivery-item-top">
              <div class="catalog-delivery-item-top-content">
                <div class="catalog-delivery-item-top__title">За пределами мкад</div>
                <div class="catalog-delivery-item-top__note">утренняя доставка до 8:00</div>
              </div>
              <div class="catalog-delivery-item-top__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="8" fill="none" viewBox="0 0 16 8">
                  <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".6"
                        d="m.51.329 7.228 7.229c.151.15.392.15.543 0L15.509.329" />
                </svg>
              </div>
            </div>
            <div class="catalog-delivery-item-hidden">
              <div class="catalog-delivery-item-inner">
                <div class="catalog-delivery-table">
                  <div class="catalog-delivery-table-headers">
                    <div class="catalog-delivery-table__header">Время</div>
                    <div class="catalog-delivery-table__header">стоимость и интервал</div>
                  </div>
                  <div class="catalog-delivery-table-body">
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">6:00-8:00</div>
                      <div class="catalog-delivery-table-cell">1 000₽ (2 часа)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="catalog-delivery-item">
          <div class="container catalog-delivery-item-container">
            <div class="catalog-delivery-item-top">
              <div class="catalog-delivery-item-top-content">
                <div class="catalog-delivery-item-top__title">новая москва</div>
                <div class="catalog-delivery-item-top__note">от метро не более 1 км</div>
              </div>
              <div class="catalog-delivery-item-top__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="8" fill="none" viewBox="0 0 16 8">
                  <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".6"
                        d="m.51.329 7.228 7.229c.151.15.392.15.543 0L15.509.329" />
                </svg>
              </div>
            </div>
            <div class="catalog-delivery-item-hidden">
              <div class="catalog-delivery-item-inner">
                <div class="catalog-delivery-table">
                  <div class="catalog-delivery-table-headers">
                    <div class="catalog-delivery-table__header">Время</div>
                    <div class="catalog-delivery-table__header">стоимость и интервал</div>
                  </div>
                  <div class="catalog-delivery-table-body">
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">8:00-22:00</div>
                      <div class="catalog-delivery-table-cell">500₽ (4 часа)</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">22:00-00:00</div>
                      <div class="catalog-delivery-table-cell">1 500₽ (2 часа)</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">7:00-9:00</div>
                      <div class="catalog-delivery-table-cell">1 000₽</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">6:00-8:00</div>
                      <div class="catalog-delivery-table-cell">1 500₽ (2 часа)</div>
                    </div>
                    <div class="catalog-delivery-table-row">
                      <div class="catalog-delivery-table-cell">9:00-22:00</div>
                      <div class="catalog-delivery-table-cell">1 200₽ (любой)</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="container catalog-modal-link-container">
        <a href="#" class="catalog-modal__link">Всё о доставке</a>
      </div>
    </div>
  </div>
  <div class="catalog-modal" id="equip">
    <div class="catalog-modal-top">
      <div class="container catalog-modal-top-container">
        <div class="catalog-modal__title">Комплектация</div>
        <button class="catalog-modal__close" type="button" data-fancybox-close>
          <svg xmlns="http://www.w3.org/2000/svg" width="27" height="26" fill="none" viewBox="0 0 27 26">
            <path stroke="#242424" stroke-linecap="round" stroke-width=".7"
                  d="M3.707 4.04 23 23.335M23 3.743 3.707 23.036" />
          </svg>
        </button>
      </div>
    </div>
    <div class="catalog-modal-inner">
      <div class="container catalog-modal-container">
        <div class="catalog-modal-list">
          <div class="catalog-modal-item">
            <div class="catalog-modal-item-image-wrapper">
              <img src="/local/assets/images/catalog-detail/equip/image1.jpg" alt="стильный брендированный короб"
                   class="catalog-modal-item-image__img" loading="lazy">
            </div>
            <div class="catalog-modal-item-content">
              <div class="catalog-modal-item__title">стильный брендированный короб</div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
          <div class="catalog-modal-item">
            <div class="catalog-modal-item-image-wrapper">
              <img src="/local/assets/images/catalog-detail/equip/image2.jpg"
                   alt="Транспортировочная вазочка с водой, удобрение и рекомендации по уходу"
                   class="catalog-modal-item-image__img" loading="lazy">
            </div>
            <div class="catalog-modal-item-content">
              <div class="catalog-modal-item__title">Транспортировочная вазочка с водой, удобрение и рекомендации по
                уходу
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
        </div>
      </div>
    </div>
  </div>

<? include 'include/footer.php';

