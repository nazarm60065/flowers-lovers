<?php
$pageConfig = [
    'metaTitle' => 'Статический раздел',
    'title' => 'Статический раздел',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-static/bundle-static.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-static/bundle-static.js',
        '/local/assets/local/bundle-form/bundle-form.js',
    ],
    'main_class' => 'static',
    'isMainPage' => false,
    'isCatalogPage' => false,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
  <div class="container">
      <?= $mustache->render('breadcrumbs', include $_SERVER['DOCUMENT_ROOT'] . '/context/about/breadcrumbs.php'); ?>
  </div>
  <div class="container">
    <h1 class="static__title">Статический раздел</h1>
  </div>
  <div class="container">
    <div class="static-content">
      <div class="article">

      </div>
    </div>
  </div>
  <section class="homepage-viewed">
    <div class="container homepage-viewed-container">
      <div class="homepage-viewed-top">
        <div class="homepage-viewed__title">Вы недавно смотрели</div>
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="1">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="2">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="3">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="1">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="2">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="3">
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
        </div>
      </div>
    </div>
  </section>

<? include 'include/footer.php';

