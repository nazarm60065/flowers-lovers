<?php
$pageConfig = [
    'metaTitle' => 'Каталог детальная',
    'title' => 'Каталог детальная',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-catalog-detail/bundle-catalog-detail.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-catalog-detail/bundle-catalog-detail.js',
        '/local/assets/local/bundle-form/bundle-form.js',
    ],
    'main_class' => 'catalog-detail',
    'isMainPage' => false,
    'isCatalogPage' => false,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
  <div class="container">
      <?= $mustache->render('breadcrumbs', include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog-detail/breadcrumbs.php'); ?>
  </div>
  <div class="catalog-detail-top">
    <div class="swiper catalog-detail-gallery">
      <div class="swiper-wrapper">
        <div class="swiper-slide catalog-detail-gallery-card">
          <div class="catalog-detail-gallery-card-inner">
            <picture class="catalog-detail-gallery-card__picture">
              <source media="(max-width: 559px)" srcset="/local/assets/images/catalog-detail/image-mobile1.jpg">
              <img src="/local/assets/images/catalog-detail/image1.jpg" alt="Шелк и Кашемир"
                   class="catalog-detail-gallery-card__img" loading="lazy">
            </picture>
          </div>
          <div class="catalog-detail-gallery-card__label">На фото размер L</div>
          <a href="/local/assets/images/catalog-detail/image1.jpg" class="link-as-card" data-fancybox="gallery"></a>
        </div>
        <div class="swiper-slide catalog-detail-gallery-card">
          <div class="catalog-detail-gallery-card-inner">
            <picture class="catalog-detail-gallery-card__picture">
              <source media="(max-width: 559px)" srcset="/local/assets/images/catalog-detail/image-mobile2.jpg">
              <img src="/local/assets/images/catalog-detail/image2.jpg" alt="Шелк и Кашемир"
                   class="catalog-detail-gallery-card__img" loading="lazy">
            </picture>
          </div>
          <div class="catalog-detail-gallery-card__label">На фото размер L</div>
          <a href="/local/assets/images/catalog-detail/image2.jpg" class="link-as-card" data-fancybox="gallery"></a>
        </div>
        <div class="swiper-slide catalog-detail-gallery-card">
          <div class="catalog-detail-gallery-card-inner">
            <picture class="catalog-detail-gallery-card__picture">
              <source media="(max-width: 559px)" srcset="/local/assets/images/catalog-detail/image-mobile3.jpg">
              <img src="/local/assets/images/catalog-detail/image3.jpg" alt="Шелк и Кашемир"
                   class="catalog-detail-gallery-card__img" loading="lazy">
            </picture>
            <a href="/local/assets/images/catalog-detail/image3.jpg" class="link-as-card" data-fancybox="gallery"></a>
          </div>
        </div>
      </div>
      <div class="catalog-detail-gallery-dots slider-dots"></div>
    </div>
    <div class="catalog-detail-card">
      <div class="container catalog-detail-card-container">
        <div class="catalog-detail-card__type">Авторский букет</div>
        <h1 class="catalog-detail-card__title">Шелк и Кашемир</h1>
        <div class="catalog-detail-card-price">
          <div class="catalog-detail-card-price-base">
            <span class="catalog-detail-card-price__value">20 700</span><span
              class="catalog-detail-card-price__currency">₽</span>
          </div>
        </div>
        <div class="catalog-detail-card-sku">
          <div class="catalog-detail-card-sku__title">Размер</div>
          <div class="catalog-detail-card-sku-list">
            <button class="catalog-detail-card-sku-item" type="button">
              <span class="catalog-detail-card-sku-item__value">S</span>
              <span class="catalog-detail-card-sku-item__note">30-35 см</span>
            </button>
            <button class="catalog-detail-card-sku-item catalog-detail-card-sku-item_active" type="button">
              <span class="catalog-detail-card-sku-item__value">M</span>
              <span class="catalog-detail-card-sku-item__note">40-45 см</span>
            </button>
            <button class="catalog-detail-card-sku-item" type="button">
              <span class="catalog-detail-card-sku-item__value">L</span>
              <span class="catalog-detail-card-sku-item__note">50-55 см</span>
            </button>
          </div>
        </div>
        <div class="catalog-detail-card-stock catalog-detail-card-stock__available">
          <div class="catalog-detail-card-stock__icon"></div>
          <div class="catalog-detail-card-stock__text">Доставим сегодня</div>
        </div>
        <div class="catalog-detail-card-stock catalog-detail-card-stock__not-available">
          <div class="catalog-detail-card-stock__icon"></div>
          <div class="catalog-detail-card-stock__text">Доставим под заказ</div>
        </div>
        <div class="catalog-detail-card__message">
          Не все цветы этого букета сейчас в сезоне и доступны к заказу, но при сборке букета мы сохраним общую гамму и
          стилистику.
        </div>
        <div class="catalog-detail-card-button-container">
          <button class="button button_filled-pink catalog-detail-card__to-cart" type="button">В корзину</button>
        </div>
        <div class="catalog-detail-card-composition">
          <div class="catalog-detail-card-composition__title">Состав букета</div>
          <div class="catalog-detail-card-composition__value">Маттиола, Ранункулюс, Стифа</div>
        </div>
        <div class="catalog-detail-card-info">
          <div class="catalog-detail-card-info-item">
            <a href="#delivery" class="catalog-detail-card-info-item__link" data-fancybox>
              <span class="catalog-detail-card-info-item__text">доставка</span>
              <span class="catalog-detail-card-info-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" fill="none" viewBox="0 0 7 12"><path
                    stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5"
                    d="M.867 11.5 5.92 6.2a.29.29 0 0 0 0-.398L.867.501" /></svg>
              </span>
            </a>
          </div>
          <div class="catalog-detail-card-info-item">
            <a href="#care" class="catalog-detail-card-info-item__link" data-fancybox>
              <span class="catalog-detail-card-info-item__text">Уход за букетом</span>
              <span class="catalog-detail-card-info-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" fill="none" viewBox="0 0 7 12"><path
                    stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5"
                    d="M.867 11.5 5.92 6.2a.29.29 0 0 0 0-.398L.867.501" /></svg>
              </span>
            </a>
          </div>
          <div class="catalog-detail-card-info-item">
            <a href="#equip" class="catalog-detail-card-info-item__link" data-fancybox>
              <span class="catalog-detail-card-info-item__text">комплектация</span>
              <span class="catalog-detail-card-info-item__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="7" height="12" fill="none" viewBox="0 0 7 12"><path
                    stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5"
                    d="M.867 11.5 5.92 6.2a.29.29 0 0 0 0-.398L.867.501" /></svg>
              </span>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="homepage-viewed">
    <div class="container homepage-viewed-container">
      <div class="homepage-viewed-top">
        <div class="homepage-viewed-tabs">
          <div class="homepage-viewed-tab">
            <button class="homepage-viewed-tab__button homepage-viewed-tab__button_active" type="button" data-tab="similar">Похожие букеты</button>
          </div>
          <div class="homepage-viewed-tab">
            <button class="homepage-viewed-tab__button" type="button" data-tab="viewed">Вы недавно смотрели</button>
          </div>
        </div>
        <div class="homepage-viewed-toolbar">
          <button
            class="homepage-viewed-slider__arrow homepage-viewed-slider__arrow_prev slider__arrow slider__arrow_prev"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
              <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10"
                    d="M23.073 15.94H9.154M16.47 8.55l-7.225 7.2a.38.38 0 0 0 0 .54l7.225 7.2" />
            </svg>
          </button>
          <button
            class="homepage-viewed-slider__arrow homepage-viewed-slider__arrow_next slider__arrow slider__arrow_next"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
              <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10"
                    d="M8.928 16.06h13.918M15.53 23.45l7.225-7.2a.38.38 0 0 0 0-.54l-7.225-7.2" />
            </svg>
          </button>
        </div>
      </div>
      <div class="swiper homepage-catalog-slider homepage-viewed-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="viewed">
            <div class="catalog-card-image-wrapper">
              <div class="catalog-card-image-inner catalog-card-image-inner_active">
                <div class="catalog-card__available">
                  Только под заказ
                </div>
                <img src="/local/assets/images/catalog/image1.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
                <div class="catalog-card__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="catalog-card-content">
              <div class="catalog-card__title">Дыхание весны</div>
              <div class="catalog-card-price">
                <div class="catalog-card-price-base">
                  <span class="catalog-card-price__value">19 500</span><span
                    class="catalog-card-price__currency">₽</span>
                </div>
              </div>
              <div class="catalog-card-sku">
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">XS</span>
                  <span class="catalog-card-sku-item__note">30 см</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">S</span>
                  <span class="catalog-card-sku-item__note">35 см</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">М</span>
                  <span class="catalog-card-sku-item__note">40 см</span>
                </button>
                <button class="catalog-card-sku-item catalog-card-sku-item_active" type="button">
                  <span class="catalog-card-sku-item__value">L</span>
                  <span class="catalog-card-sku-item__note">45 см</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">XXL</span>
                  <span class="catalog-card-sku-item__note">65 см</span>
                </button>
              </div>
              <div class="catalog-card-button-container">
                <button class="button button_linear catalog-card__to-cart" type="button">собрать похожий
                </button>
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="viewed">
            <div class="catalog-card-image-wrapper">
              <div class="catalog-card-image-inner catalog-card-image-inner_active">
                <img src="/local/assets/images/catalog/image2.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
                <div class="catalog-card__label">
                  На фото 55 шт.
                </div>
              </div>
            </div>
            <div class="catalog-card-content">
              <div class="catalog-card__title">Пионовидные розы O'HARA (розовая) в корзине</div>
              <div class="catalog-card-price">
                <div class="catalog-card-price-base">
                  <span class="catalog-card-price__value">22 400</span><span
                    class="catalog-card-price__currency">₽</span>
                </div>
              </div>
              <div class="catalog-card-sku">
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">35 шт.</span>
                </button>
                <button class="catalog-card-sku-item catalog-card-sku-item_active" type="button">
                  <span class="catalog-card-sku-item__value">55 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">75 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="catalog-card-button-container">
                <button class="button button_linear catalog-card__to-cart" type="button">В корзину</button>
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="similar">
            <div class="catalog-card-image-wrapper">
              <div class="catalog-card-image-inner catalog-card-image-inner_active">
                <img src="/local/assets/images/catalog/image3.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
                <div class="catalog-card__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="catalog-card-content">
              <div class="catalog-card__title">Искушение</div>
              <div class="catalog-card-price">
                <div class="catalog-card-price-base">
                  <span class="catalog-card-price__value">33 900</span><span
                    class="catalog-card-price__currency">₽</span>
                </div>
              </div>
              <div class="catalog-card-sku">
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">S</span>
                  <span class="catalog-card-sku-item__note">35 см</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">М</span>
                  <span class="catalog-card-sku-item__note">40 см</span>
                </button>
                <button class="catalog-card-sku-item catalog-card-sku-item_active" type="button">
                  <span class="catalog-card-sku-item__value">L</span>
                  <span class="catalog-card-sku-item__note">45 см</span>
                </button>
              </div>
              <div class="catalog-card-button-container">
                <button class="button button_linear catalog-card__to-cart" type="button">В корзину</button>
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="viewed">
            <div class="catalog-card-image-wrapper">
              <div class="catalog-card-image-inner catalog-card-image-inner_active">
                <img src="/local/assets/images/catalog/image4.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
                <div class="catalog-card__label">
                  На фото 69 шт.
                </div>
              </div>
            </div>
            <div class="catalog-card-content">
              <div class="catalog-card__title">Розы алые</div>
              <div class="catalog-card-price">
                <div class="catalog-card-price-base">
                  <span class="catalog-card-price__value">22 400</span><span
                    class="catalog-card-price__currency">₽</span>
                </div>
              </div>
              <div class="catalog-card-sku">
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">29 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">39 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">49 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">59 шт.</span>
                </button>
                <button class="catalog-card-sku-item catalog-card-sku-item_active" type="button">
                  <span class="catalog-card-sku-item__value">69 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">79 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">89 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="catalog-card-button-container">
                <button class="button button_linear catalog-card__to-cart" type="button">В корзину</button>
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="viewed">
            <div class="catalog-card-image-wrapper">
              <div class="catalog-card-image-inner catalog-card-image-inner_active">
                <img src="/local/assets/images/catalog/image2.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
                <div class="catalog-card__label">
                  На фото 55 шт.
                </div>
              </div>
            </div>
            <div class="catalog-card-content">
              <div class="catalog-card__title">Пионовидные розы O'HARA (розовая) в корзине</div>
              <div class="catalog-card-price">
                <div class="catalog-card-price-base">
                  <span class="catalog-card-price__value">22 400</span><span
                    class="catalog-card-price__currency">₽</span>
                </div>
              </div>
              <div class="catalog-card-sku">
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">35 шт.</span>
                </button>
                <button class="catalog-card-sku-item catalog-card-sku-item_active" type="button">
                  <span class="catalog-card-sku-item__value">55 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">75 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="catalog-card-button-container">
                <button class="button button_linear catalog-card__to-cart" type="button">В корзину</button>
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="similar">
            <div class="catalog-card-image-wrapper">
              <div class="catalog-card-image-inner catalog-card-image-inner_active">
                <img src="/local/assets/images/catalog/image3.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
                <div class="catalog-card__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="catalog-card-content">
              <div class="catalog-card__title">Искушение</div>
              <div class="catalog-card-price">
                <div class="catalog-card-price-base">
                  <span class="catalog-card-price__value">33 900</span><span
                    class="catalog-card-price__currency">₽</span>
                </div>
              </div>
              <div class="catalog-card-sku">
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">S</span>
                  <span class="catalog-card-sku-item__note">35 см</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">М</span>
                  <span class="catalog-card-sku-item__note">40 см</span>
                </button>
                <button class="catalog-card-sku-item catalog-card-sku-item_active" type="button">
                  <span class="catalog-card-sku-item__value">L</span>
                  <span class="catalog-card-sku-item__note">45 см</span>
                </button>
              </div>
              <div class="catalog-card-button-container">
                <button class="button button_linear catalog-card__to-cart" type="button">В корзину</button>
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="viewed">
            <div class="catalog-card-image-wrapper">
              <div class="catalog-card-image-inner catalog-card-image-inner_active">
                <img src="/local/assets/images/catalog/image4.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
                <div class="catalog-card__label">
                  На фото 69 шт.
                </div>
              </div>
            </div>
            <div class="catalog-card-content">
              <div class="catalog-card__title">Розы алые</div>
              <div class="catalog-card-price">
                <div class="catalog-card-price-base">
                  <span class="catalog-card-price__value">22 400</span><span
                    class="catalog-card-price__currency">₽</span>
                </div>
              </div>
              <div class="catalog-card-sku">
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">29 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">39 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">49 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">59 шт.</span>
                </button>
                <button class="catalog-card-sku-item catalog-card-sku-item_active" type="button">
                  <span class="catalog-card-sku-item__value">69 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">79 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">89 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="catalog-card-button-container">
                <button class="button button_linear catalog-card__to-cart" type="button">В корзину</button>
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="viewed">
            <div class="catalog-card-image-wrapper">
              <div class="catalog-card-image-inner catalog-card-image-inner_active">
                <img src="/local/assets/images/catalog/image2.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
                <div class="catalog-card__label">
                  На фото 55 шт.
                </div>
              </div>
            </div>
            <div class="catalog-card-content">
              <div class="catalog-card__title">Пионовидные розы O'HARA (розовая) в корзине</div>
              <div class="catalog-card-price">
                <div class="catalog-card-price-base">
                  <span class="catalog-card-price__value">22 400</span><span
                    class="catalog-card-price__currency">₽</span>
                </div>
              </div>
              <div class="catalog-card-sku">
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">35 шт.</span>
                </button>
                <button class="catalog-card-sku-item catalog-card-sku-item_active" type="button">
                  <span class="catalog-card-sku-item__value">55 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">75 шт.</span>
                </button>
                <button class="catalog-card-sku-item" type="button">
                  <span class="catalog-card-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="catalog-card-button-container">
                <button class="button button_linear catalog-card__to-cart" type="button">В корзину</button>
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
        </div>
      </div>
    </div>
  </section>
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

