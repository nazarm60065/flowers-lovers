<?php
$pageConfig = [
    'metaTitle' => 'Главная',
    'title' => 'Главная',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-homepage/bundle-homepage.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-homepage/bundle-homepage.js',
        '/local/assets/local/bundle-form/bundle-form.js',
    ],
    'main_class' => 'homepage',
    'isMainPage' => true,
    'isCatalogPage' => false,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>

  <section class="homepage-top">
    <div class="swiper homepage-top-slider">
      <button class="homepage-top-slider__arrow homepage-top-slider__arrow_prev slider__arrow slider__arrow_prev"
              type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
          <path stroke="#FFFAED" stroke-linecap="round" stroke-miterlimit="10"
                d="M23.073 15.94H9.154M16.47 8.55l-7.225 7.2a.38.38 0 0 0 0 .54l7.225 7.2" />
        </svg>
      </button>
      <div class="swiper-wrapper">
        <div class="swiper-slide homepage-top-slide">
          <picture class="homepage-top-slide__picture">
            <source srcset="/local/assets/images/homepage/top/top-slide-mobile.jpg" media="(max-width: 767px)">
            <source srcset="/local/assets/images/homepage/top/top-slide-tablet.jpg" media="(max-width: 1279px)">
            <img src="/local/assets/images/homepage/top/top-slide-desktop.jpg" alt="ваш цветочный консьерж"
                 class="homepage-top-slide__img" loading="lazy">
          </picture>
        </div>
        <div class="swiper-slide homepage-top-slide" style="background: #000">

        </div>
        <div class="swiper-slide homepage-top-slide">
          <picture class="homepage-top-slide__picture">
            <source srcset="/local/assets/images/homepage/top/top-slide-mobile.jpg" media="(max-width: 767px)">
            <source srcset="/local/assets/images/homepage/top/top-slide-tablet.jpg" media="(max-width: 1279px)">
            <img src="/local/assets/images/homepage/top/top-slide-desktop.jpg" alt="ваш цветочный консьерж"
                 class="homepage-top-slide__img" loading="lazy">
          </picture>
        </div>
      </div>
      <button class="homepage-top-slider__arrow homepage-top-slider__arrow_next slider__arrow slider__arrow_next"
              type="button">
        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
          <path stroke="#FFFAED" stroke-linecap="round" stroke-miterlimit="10"
                d="M8.928 16.06h13.918M15.53 23.45l7.225-7.2a.38.38 0 0 0 0-.54l-7.225-7.2" />
        </svg>
      </button>
    </div>
    <div class="homepage-top-cards-wrapper">
      <div class="container homepage-top-cards-container">
        <div class="swiper homepage-top-cards">
          <button class="homepage-top-cards__arrow homepage-top-cards__arrow_prev slider__arrow slider__arrow_prev"
                  type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
              <path stroke="#D2B9AE" stroke-linecap="round" stroke-miterlimit="10"
                    d="M23.073 15.94H9.154M16.47 8.55l-7.225 7.2a.38.38 0 0 0 0 .54l7.225 7.2" />
            </svg>
          </button>
          <div class="swiper-wrapper">
            <div class="swiper-slide homepage-top-card">
              <div class="homepage-top-card-container">
                <div class="homepage-top-card__suptitle">Flowers Lovers</div>
                <div class="homepage-top-card__title">Ваш цветочный консьерж</div>
                <div class="homepage-top-card-link-container">
                  <a href="#" class="homepage-top-card__link">выбрать цветы</a>
                </div>
              </div>
            </div>
            <div class="swiper-slide homepage-top-card">
              <div class="homepage-top-card-container">
                <div class="homepage-top-card__suptitle">Flowers Lovers</div>
                <div class="homepage-top-card__title">Ваш цветочный консьерж</div>
              </div>
            </div>
            <div class="swiper-slide homepage-top-card">
              <div class="homepage-top-card-container">
                <div class="homepage-top-card__suptitle">Flowers Lovers</div>
                <div class="homepage-top-card__title">Ваш цветочный консьерж</div>
                <div class="homepage-top-card-link-container">
                  <a href="#" class="homepage-top-card__link">выбрать цветы</a>
                </div>
              </div>
            </div>
          </div>
          <div class="slider__dots homepage-top-cards-dots"></div>
          <button class="homepage-top-cards__arrow homepage-top-cards__arrow_next slider__arrow slider__arrow_next"
                  type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
              <path stroke="#D2B9AE" stroke-linecap="round" stroke-miterlimit="10"
                    d="M8.928 16.06h13.918M15.53 23.45l7.225-7.2a.38.38 0 0 0 0-.54l-7.225-7.2" />
            </svg>
          </button>
        </div>
      </div>
    </div>
  </section>
  <section class="homepage-catalog">
    <div class="container homepage-catalog-container">
      <div class="homepage-catalog-top">
        <div class="homepage__title homepage-catalog__title">Весеннее настроение</div>
        <div class="homepage-catalog-toolbar">
          <button
            class="homepage-catalog-slider__arrow homepage-catalog-slider__arrow_prev slider__arrow slider__arrow_prev"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
              <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10"
                    d="M23.073 15.94H9.154M16.47 8.55l-7.225 7.2a.38.38 0 0 0 0 .54l7.225 7.2" />
            </svg>
          </button>
          <button
            class="homepage-catalog-slider__arrow homepage-catalog-slider__arrow_next slider__arrow slider__arrow_next"
            type="button">
            <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
              <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10"
                    d="M8.928 16.06h13.918M15.53 23.45l7.225-7.2a.38.38 0 0 0 0-.54l-7.225-7.2" />
            </svg>
          </button>
        </div>
      </div>
      <div class="swiper homepage-catalog-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide catalog-card catalog-card_back homepage-catalog-slide">
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
              <div class="catalog-card-image-inner catalog-card-image-inner_back">
                <img src="/local/assets/images/catalog/image2.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
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
                <button class="button button_linear catalog-card__to-cart" type="button">В корзину</button>
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
          <div class="swiper-slide catalog-card homepage-catalog-slide">
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
          <div class="swiper-slide catalog-card catalog-card_back homepage-catalog-slide">
            <div class="catalog-card-image-wrapper">
              <div class="catalog-card-image-inner catalog-card-image-inner_active">
                <img src="/local/assets/images/catalog/image3.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
                <div class="catalog-card__label">
                  На фото размер L
                </div>
              </div>
              <div class="catalog-card-image-inner catalog-card-image-inner_back">
                <img src="/local/assets/images/catalog/image1.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
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
          <div class="swiper-slide catalog-card catalog-card_back homepage-catalog-slide">
            <div class="catalog-card-image-wrapper">
              <div class="catalog-card-image-inner catalog-card-image-inner_active">
                <img src="/local/assets/images/catalog/image4.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
                <div class="catalog-card__label">
                  На фото 69 шт.
                </div>
              </div>
              <div class="catalog-card-image-inner catalog-card-image-inner_back">
                <img src="/local/assets/images/catalog/image1.jpg" alt="Дыхание весны"
                     class="catalog-card-image__img" loading="lazy">
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
        </div>
      </div>
    </div>
  </section>
  <section class="homepage-jumbo">
    <div class="homepage-jumbo-images">
      <div class="homepage-jumbo-image">
        <img src="/local/assets/images/homepage/jumbo/jumbo1.jpg" alt="за букетами" loading="lazy"
             class="homepage-jumbo-image__img">
      </div>
      <div class="homepage-jumbo-image">
        <img src="/local/assets/images/homepage/jumbo/jumbo2.jpg" alt="за букетами" loading="lazy"
             class="homepage-jumbo-image__img">
      </div>
    </div>
    <div class="homepage-jumbo-button-container">
      <a href="#" class="button button_filled-pink homepage-jumbo__button">за букетами</a>
    </div>
  </section>
  <section class="homepage-jumbo">
    <div class="homepage-jumbo-video-container">
      <video src="/local/assets/videos/jumbo.mp4" class="homepage-jumbo__video" autoplay loop muted playsinline
             poster="/local/assets/images/homepage/jumbo/jumbo1.jpg" />
    </div>
    <div class="homepage-jumbo-button-container">
      <a href="#" class="button button_filled-pink homepage-jumbo__button">за букетами</a>
    </div>
  </section>
  <section class="homepage-sections">
    <div class="container homepage-sections-container">
      <div class="homepage-sections-top">
        <div class="homepage-sections__suptitle">популярные</div>
        <div class="homepage__title homepage-sections__title">разделы каталога</div>
      </div>
    </div>
    <div class="homepage-sections-list">
      <div class="homepage-section">
        <div class="homepage-section-image">
          <picture class="homepage-section-image__picture">
            <source srcset="/local/assets/images/homepage/sections/image1-mobile.jpg" media="(max-width: 767px)">
            <img src="/local/assets/images/homepage/sections/image1.jpg" alt="Эспресс-доставка от 2 часов"
                 class="homepage-section-image__img" loading="lazy">
          </picture>
        </div>
        <div class="homepage-section-content">
          <div class="homepage-section__title">Эспресс-доставка от&nbsp;2&nbsp;часов</div>
          <div class="homepage-section__subtitle">всегда вовремя</div>
        </div>
        <a href="#" class="link-as-card"></a>
      </div>
      <div class="homepage-section">
        <div class="homepage-section-image">
          <img src="/local/assets/images/homepage/sections/image2.jpg" alt="Пионовидные розы"
               class="homepage-section-image__img" loading="lazy">
        </div>
        <div class="homepage-section-content">
          <div class="homepage-section__title">Пионовидные розы</div>
          <div class="homepage-section__subtitle">вневременной бестселлер</div>
        </div>
        <a href="#" class="link-as-card"></a>
      </div>
      <div class="homepage-section">
        <div class="homepage-section-image">
          <img src="/local/assets/images/homepage/sections/image3.jpg" alt="Авторские"
               class="homepage-section-image__img" loading="lazy">
        </div>
        <div class="homepage-section-content">
          <div class="homepage-section__title">Авторские</div>
          <div class="homepage-section__subtitle">искусство флористов</div>
        </div>
        <a href="#" class="link-as-card"></a>
      </div>
      <div class="homepage-section">
        <div class="homepage-section-image">
          <img src="/local/assets/images/homepage/sections/image4.jpg" alt="монобукеты"
               class="homepage-section-image__img" loading="lazy">
        </div>
        <div class="homepage-section-content">
          <div class="homepage-section__title">монобукеты</div>
          <div class="homepage-section__subtitle">прекрасный минимализм</div>
        </div>
        <a href="#" class="link-as-card"></a>
      </div>
      <div class="homepage-section">
        <div class="homepage-section-image">
          <img src="/local/assets/images/homepage/sections/image5.jpg" alt="Это осень"
               class="homepage-section-image__img" loading="lazy">
        </div>
        <div class="homepage-section-content">
          <div class="homepage-section__title">Это осень</div>
          <div class="homepage-section__subtitle">сезонные букеты</div>
        </div>
        <a href="#" class="link-as-card"></a>
      </div>
    </div>
  </section>
  <section class="homepage-collection">
    <div class="container homepage-collection-container">
      <div class="homepage-collection-top">
        <div class="homepage__title homepage-collection__title">подобрать по гамме</div>
      </div>
      <div class="swiper homepage-collection-tabs">
        <button
          class="homepage-collection-tabs__arrow homepage-collection-tabs__arrow_prev slider__arrow slider__arrow_prev"
          type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" viewBox="0 0 576 1024">
            <path fill="none" stroke="#d2b9ae" stroke-linecap="round" stroke-miterlimit="10" stroke-width="64"
                  d="M541.76 963.968 100.672 530.24c-4.243-4.122-6.875-9.882-6.875-16.256s2.633-12.134 6.87-16.251l.005-.005L541.76 64" />
          </svg>
        </button>
        <div class="swiper-wrapper">
          <div class="swiper-slide homepage-collection-tab homepage-collection-tab_active" data-index="1" data-tab="1">
            <button class="homepage-collection-tab__button" type="button">Яркая</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="2" data-tab="2">
            <button class="homepage-collection-tab__button" type="button">Пастельная</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="3" data-tab="3">
            <button class="homepage-collection-tab__button" type="button">Розовая</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="4" data-tab="4">
            <button class="homepage-collection-tab__button" type="button">Акварельная</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="5" data-tab="5">
            <button class="homepage-collection-tab__button" type="button">Белая</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="6" data-tab="6">
            <button class="homepage-collection-tab__button" type="button">Свежая</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="7" data-tab="7">
            <button class="homepage-collection-tab__button" type="button">Зеленая</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="8" data-tab="8">
            <button class="homepage-collection-tab__button" type="button">Нежная</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="9" data-tab="9">
            <button class="homepage-collection-tab__button" type="button">Солнечная</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="10" data-tab="10">
            <button class="homepage-collection-tab__button" type="button">Нату</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="11" data-tab="11">
            <button class="homepage-collection-tab__button" type="button">Длинная категория для демонстрации стрелок</button>
          </div>
        </div>
        <button
          class="homepage-collection-tabs__arrow homepage-collection-tabs__arrow_next slider__arrow slider__arrow_next"
          type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="16" fill="none" viewBox="0 0 9 16">
            <path stroke="#D2B9AE" stroke-linecap="round" stroke-miterlimit="10"
                  d="m.535 15.062 6.892-6.777a.354.354 0 0 0 0-.508L.535 1" />
          </svg>
        </button>
      </div>
      <div class="swiper homepage-catalog-slider homepage-collection-slider">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="3">
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
                <button class="button button_linear catalog-card__to-cart" type="button">В корзину</button>
              </div>
            </div>
            <a href="#" class="link-as-card"></a>
          </div>
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="1">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="1">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="4">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="5">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="6">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="7">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="8">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="9">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="10">
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
          <div class="swiper-slide catalog-card homepage-catalog-slide" data-tab="11">
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
      <div class="homepage-collection-button-container">
        <a class="button button_filled-pink homepage-collection__button">перейти в каталог</a>
      </div>
    </div>
  </section>
  <section class="homepage-about">
    <div class="homepage-about-image-wrapper">
      <img src="/local/assets/images/homepage/about/image.jpg" alt="О Flowers Lovers"
           class="homepage-about-image__img" loading="lazy">
    </div>
    <div class="homepage-about-card">
      <div class="container homepage-about-container">
        <div class="homepage-about-card__suptitle">О Flowers Lovers</div>
        <div class="homepage__title homepage-about-card__title">красота, уют, сервис</div>
        <div class="homepage-about-card__text">Текст о бренде. Раскрыть главные ценности: прежде всего мы с искренней
          заботой относимся ко всем своим клиентам. Главное, чего мы хотим — дарить теплые искренние чувства — через
          красоту, женственность
          и безупречный сервис.
        </div>
        <div class="homepage-about-card-button-container">
          <a href="#" class="button button_filled-pink homepage-about-card__button">о бренде</a>
        </div>
      </div>
    </div>
  </section>
  <section class="homepage-features">
    <div class="container homepage-features-container">
      <div class="homepage-features-top">
        <div class="homepage__title homepage-features__title">Качество и сервис</div>
        <div class="homepage-features__subtitle">Наши клиенты доверяют нам самое ценное – эмоции своих близких, поэтому
          мы ответственно подходим к каждому заказу.
        </div>
      </div>
      <div class="homepage-features-list">
        <div class="homepage-features-item">
          <div class="homepage-features-item__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="60" height="85" fill="none" viewBox="0 0 60 85">
              <path fill="#242424"
                    d="M24.563 11.63c-.073.148-.146.37 0 .518.145.148.29 0 .508 0 .363-.148.581-.444.8-.667.944-1.037 1.67-2.148 1.888-3.555.145-.74.145-1.482.145-2.296 0-1.186-.58-2.074-1.38-2.741-.218-.148-.29-.074-.29.148 0 .222-.073.444-.146.667-.218.444-.218.963-.218 1.481.073.815 0 1.63-.218 2.519-.072-1.408-.726-2.593-1.307-3.778-.145 0-.145.148-.145.296 0 .74 0 1.556.072 2.296.145 1.038-.072 2-.581 2.89-.872 1.48-1.38 3.11-1.961 4.666-.291.815-.509 1.778-.291 2.667.145.592.073 1.11.145 1.703.073.741 0 1.556 0 2.297 0 .963-.145 1.926-.29 2.963-.146.963-.436 1.851-.509 2.814 0 .223-.145.297-.29.37-.364.223-.727.371-1.09.593-1.38.963-2.76 1.926-3.923 3.111-.363.37-.799.445-1.235.445.073-.222.218-.296.29-.37.291-.297.582-.519.872-.815.945-.963 1.817-2 2.906-2.815.363-.296.654-.74.872-1.111.436-.815.654-1.778.872-2.74.29-1.186.29-2.371.29-3.63a26.681 26.681 0 0 1 0-3.408c.073-1.111.146-2.148.29-3.185.073-.667 0-.889-.653-1.037-.218-.074-.363-.445-.654-.222-.218.148-.218-.074-.218-.223V9.704c0-.519.146-1.111-.58-1.26 0 0-.073 0-.073-.074-.218-.296-.364-.148-.582.074a.679.679 0 0 0-.218.519c-.072.593-.218 1.185-.363 1.778-.218.889-.436 1.777-.726 2.666-.073.149-.073.297-.218.297-.218 0-.145-.149-.218-.297-.145-.444-.29-.889.073-1.259 0 0 0-.074.072-.148.146 0 .073.222.218.148.073-.074.073-.148.073-.222-.073-.222.072-.445.072-.667.073-.963.146-1.852.291-2.815.145-1.333.654-2.592 1.017-3.851.073-.149.145-.297.363-.223.073 0 .218.074.363.074-.363-.592-.799-.666-1.452-.296a9.402 9.402 0 0 0-1.744 3.26 30.262 30.262 0 0 0-1.162 5.555c-.218 1.63-.218 3.333-.364 4.963-.072 1.407-.217 2.815-.508 4.148-.073.37-.218.74-.29 1.111-.073.222-.146.296-.364.148-.29-.222-.508-.074-.654.074-.508.445-.799 1.111-1.09 1.704-.29.519-.508 1.037-.798 1.63 0-.445.145-.667.218-.963.072-.297.217-.593.29-.815.073-.296.218-.593-.072-.815-.218.222-.218.445-.364.74.073-.444.146-.962.29-1.407.146-.518.146-1.037-.144-1.555-.218.148-.291.444-.291.667-.145 1.259-.436 2.444-.654 3.63-.29 1.925-.508 3.851-1.09 5.703-.508 1.555-.58 3.26-1.307 4.74l-.218.445c-.581.593-1.017 1.408-1.598 2.074-.218.296-.218.667-.146 1.037 0 .297.291.297.509.37 0 0 .073 0 .073.075.58.074 1.235 0 1.816 0 1.09 0 2.18-.223 3.269-.519.436-.296.944-.593 1.307-1.037l.8-.815c0-.074.072-.074.072-.148.436-.815 1.09-1.63 1.453-2.518 0-.519 0-1.038.145-1.556 0-.148 0-.222-.072-.296a.804.804 0 0 1 .508-1.037c.29-.074.654-.148.872-.445.073-.074.145-.148.218-.148.944.148 1.67-.444 2.47-.889 1.162-.74 2.397-1.555 3.632-2.296.29-.222.654-.296 1.017-.296.945 0 1.889-.149 2.833-.297.218 0 .436-.074.436-.296 0-.222-.218-.37-.436-.444-.072 0-.218-.075-.29-.075-.509-.148-1.017-.296-1.526-.37-.218-.074-.29-.148-.218-.37.146-.297.146-.667.218-.963.29-.89.218-1.778-.072-2.667-.291-1.185-.654-2.296-1.235-3.407-.291-.519-.436-1.185-.654-1.778-.218-.519-.29-.889-.073-1.482.436-1.185 1.09-2.37 1.67-3.481.582-1.111 1.526-2 1.89-3.26-.073.371-.146.742-.29 1.112-.582-.074-.8.296-.945.74ZM13.739 25.037c.29-.74.58-1.407.944-2.074.726-1.26 1.235-2.667 1.38-4.148.146-1.111.364-2.148.872-3.26-.145.741-.218 1.408-.436 2-.218.741-.218 1.482-.29 2.297 0 .37.145.74.508.963.218.148.29.296.218.592-.29.89-.508 1.778-.944 2.667.145-.444.218-.889.363-1.333.145-.37-.145-.445-.363-.593-.218-.148-.364 0-.436.148-.364.445-.727.89-1.017 1.408-.218.444-.436.889-.8 1.333Z" />
              <path fill="#DEADA6"
                    d="M6.91 40.889c-.654 0-1.38.074-2.034-.074-.581.74-1.163 1.481-1.671 2.296-.509.963-.8 1.926-.509 3.037.218.815.291 1.704.146 2.593-.218 1.777-.364 3.63-.581 5.407-.291 2.148-.727 4.222-1.38 6.296C.516 62-.21 63.481-.5 65.185v1.111C.081 67.481.081 68.741.154 70c.145 1.926.072 3.926.145 5.852.073 2.148-.073 4.296-.29 6.37 0 .37 0 .74.217 1.037.073.148.291.222.436.148.073 0 .146-.074.146-.222 0-.519 0-1.111-.073-1.63a16.341 16.341 0 0 1 0-2.666c.145-2.222.29-4.445.363-6.741.073-1.778.145-3.63-.072-5.407-.073-.37-.218-.815-.146-1.186.146-.889.581-1.703 1.017-2.37.654-1.037 1.235-2.074 1.598-3.185a19.83 19.83 0 0 0 1.09-4.074c.218-1.111.509-2.222.581-3.408 0-.74.218-1.481.218-2.222 0-.815.218-1.555.218-2.296 0-.963-.072-1.926-.363-2.815-.073-.148-.145-.296 0-.519.29-.592.726-1.11 1.09-1.63M14.102 36.593c-.218.37-.508.814-.726 1.185 0 .889.072 1.778-.218 2.666-.364 1.26-.364 2.667-1.09 3.852-.073.074-.073.223-.073.37-.072.89-.145 1.778-.218 2.593-.072.815-.072 1.704-.218 2.519-.217.815-.435 1.63-.58 2.444-.146.815-.146 1.63-.51 2.37-.508 1.112-.944 2.223-1.38 3.334-.363 1.037-.944 1.926-1.38 2.963-.58 1.555-1.017 3.185-1.743 4.74-.218.52-.363 1.038-.363 1.556.072 1.334.363 2.667.508 4 0 .222.073.593.29.593.291 0 .291-.37.291-.593.073-.74.073-1.407.146-2.148.072-.667.145-1.333.363-1.926.508-1.556 1.235-3.037 1.743-4.593.581-2 1.38-3.925 1.962-5.851.29-.963.58-1.852.726-2.89.073-.814.145-1.629.363-2.444.436-1.777.654-3.555.654-5.407 0-.593-.072-1.185.363-1.704.146-.148.29-.37.436-.592.29-.297.436-.741.509-1.111.072-.815.145-1.556.145-2.37 0-1.26-.073-2.371 0-3.556Z" />
              <path fill="#242424"
                    d="M29.502 0c.872.296 1.67.815 2.397 1.407 1.09.815 2.18 1.482 3.197 2.297 1.453 1.185 2.034 2.74 2.034 4.592 0 .815-.509 1.334-1.163 1.704-.29.148-.58 0-.726-.296-.073-.148-.145-.37-.363-.37-.073 0-.145-.149-.145-.223v-.444c0-.593-.146-1.111-.872-1.26-.29-.074-.436-.37-.581-.592-.436-.74-.872-1.482-1.38-2.148-.073-.148-.291-.297-.146-.445.145-.148.363.074.436.222.581.593 1.09 1.26 1.526 2 .217.37.363.741.726 1.037 0-.74-.29-1.333-.654-1.851-.363-.593-.944-1.037-1.453-1.482l-1.743-1.555c-.727-.667-1.453-1.408-2.543-1.63-.145 0-.29-.074-.29-.222-.073-.148.072-.222.218-.297.217-.148.363-.222.58-.37.364-.074.655-.074.945-.074Z" />
              <path fill="#DEADA6"
                    d="M53.548 66.148c-.218-.074-.364-.222-.581-.296-.364-.222-.8-.445-1.235-.445-1.163.075-2.398.148-3.56.445-1.961.518-3.777 1.333-5.739 1.852-2.325.74-4.794 1.185-7.192 1.852-.944.296-1.961.518-2.906.37-.871-.074-1.67-.074-2.542-.074-.363 0-.727.148-1.09.074-.436-.074-.944-.148-1.38-.222-.218 0-.29-.148-.218-.37.073-.297.218-.593.218-.89-.145-.814-.073-1.555.072-2.37.364-2.148.872-4.296 1.599-6.37.58-1.704 1.453-3.408 1.816-5.185.218-1.038.654-2.075 1.017-3.112.436-1.259.726-2.518 1.09-3.703.508-1.63 1.09-3.185 1.816-4.667.654-1.481 1.162-2.963 1.67-4.518.218-.667.436-1.408.582-2.075a12.16 12.16 0 0 0 .435-3.259c0-.518.073-1.037 0-1.555-.508-.297-1.017-.519-1.598-.519l-.218 1.111c-.363 1.556-.871 3.111-1.598 4.593-.508 1.11-1.017 2.222-1.38 3.407l-1.961 5.111c-.582 1.63-.872 3.26-1.308 4.89-.218.814-.363 1.703-.581 2.592-.145.666-.363 1.333-.436 2.074-.29 1.63-.436 3.333-.654 4.963-.218 1.852-.508 3.704-.436 5.63 0 .296 0 .666-.145.962-.218.593-.29 1.186-.218 1.778v1.037c-.073.37-.218.519-.581.519-.654 0-1.235.074-1.889.148-1.09.074-2.18.148-3.269-.148-.29-.074-.508.074-.799.296-.363.37-.654.815-1.162.963-.364.148-.654.296-1.017.444-.146.075-.436.149-.364.37.073.223.291.075.509 0 .363-.073.654-.221.944-.296v.075c-.363 1.851-.29 3.777-.218 5.703 0 .37.218.593.509.593.436.074.872.222 1.308-.148.217-.148.363-.148.58-.148.582.074.945-.223 1.09-.741.146-.667.436-1.26.29-2.074-.144-.815-.072-1.63 0-2.445 0-.222.146-.296.364-.222h.29c.945 0 1.89-.074 2.834-.296.944-.222 1.961-.222 2.906-.37 1.235-.149 2.397-.52 3.632-.445.29 0 .654-.074.944-.148 1.308-.37 2.616-.74 3.923-1.037 2.252-.593 4.431-1.26 6.61-2.148 1.672-.667 3.343-1.334 5.159-1.482.58-.074 1.162-.222 1.67.148.509.37.945.667 1.599.815.363.074.653 0 .944-.222.363-.074.29-.593-.145-.815Z" />
              <path fill="#DEADA6"
                    d="M60.449 70.889c-.218-1.111-.436-2.222-.727-3.333-1.017-4-1.743-8.075-2.397-12.148-.436-2.519-.944-4.964-1.453-7.408-.218-.963-.363-1.926-.363-2.963.072-1.63-.145-3.26-.436-4.889-.145-.963-.436-1.926-.726-2.815-.146-.444-.291-.963-.582-1.333-1.09-1.556-2.397-2.519-4.358-2.593-.581 0-1.163 0-1.671-.222-.581-.222-1.09-.444-1.671-.666-1.235-.593-2.47-1.037-3.487-2.074-.654-.741-1.598-1.038-2.543-1.186-1.09-.222-2.179-.222-3.268-.296-.945-.074-1.744-.444-2.398-1.26a6.036 6.036 0 0 0 1.671-.888c.436-.296.654-.74.727-1.334.072-.592-.073-1.11-.291-1.63-.8-1.85-.872-3.777-.654-5.777.218-1.63-.145-3.111-.872-4.593-.218-.444-.363-.888-.363-1.407 0-.666-.073-1.333-.073-2 0-.222 0-.444-.217-.667.072.593-.291.963-.436 1.482-.146.519-.218 1.111-.146 1.704.073.592.364 1.11.582 1.703.508 1.334.944 2.667.726 4.074v.445c.073.296 0 .666 0 .963-.073 1.481-.145 2.963.073 4.444.072.297.072.519.072.815a.409.409 0 0 1-.218.37c-.363.223-.799.445-1.235.519-1.017.148-1.961.37-2.978.296-.654 0-1.162.223-1.526.815-.145.222-.217.445-.072.593.145.222.363.074.508 0 .073 0 .073-.074.146-.074.653-.223 1.09.148 1.017.814-.146 1.037-.146 2-.073 3.037.073 1.556.8 2.815 1.598 4.074l.218.223c.073.074.145.148.29.074.073-.074 0-.222-.072-.297-.508-.74-.8-1.555-.944-2.444-.146-.889-.364-1.778-.509-2.667-.145-.814-.073-1.703-.363-2.444-.073-.222-.073-.296.218-.222.581.148 1.235.148 1.816.074.363-.074.436 0 .363.37-.145.963.363 1.926 1.235 2.297.29.074.509.222.8.296.58 0 1.089.148 1.597.444h.146c1.09.148 2.252 0 3.341 0 .8 0 1.526.223 2.18.667.29.148.508.37.799.444.726.223 1.307.593 1.961.815 1.09.445 2.107 1.037 3.27 1.334.435.074.798.296 1.162.444.799.444 1.307 1.111 1.598 2 .218.667.29 1.407.508 2.148.509 1.704.654 3.556.872 5.333.145.963.073 1.926.363 2.89.509 1.703.872 3.48 1.453 5.11.363 1.186.654 2.445.944 3.63.436 1.778.8 3.481 1.235 5.185.436 1.556.8 3.037 1.235 4.593.291 1.333.582 2.592.945 3.926.145.518.29 1.037.581 1.555.073.148.218.297.436.222.581-.296.508-.444.436-.592ZM21.075 35.185c.364 1.037.582 2.074.509 3.185-.145 1.852-.581 3.482-2.107 4.593-.436.296-.799.74-1.235 1.111-.581.519-.726 1.334-.872 2.074-.218 1.63-.435 3.26-.363 4.89 0 .221.073.37.073.592.218 1.852.508 3.63.726 5.481.146 1.26.073 2.519.073 3.778 0 1.26.29 2.593.218 3.852-.073 1.63-.145 3.26-.509 4.815-.508 2.148-1.09 4.296-2.179 6.296-.436.74-1.09 1.26-1.67 1.852-.364.37-.8.667-1.236.963-.436.222-.871.296-1.307.148-.218-.074-.436-.148-.436-.444 0-.297 0-.519.29-.593a1.52 1.52 0 0 0 .436-.296c1.38-1.63 2.688-3.26 3.342-5.334.436-1.407.944-2.74 1.017-4.222.073-1.407.073-2.815-.073-4.222-.145-1.037-.072-2.148.073-3.185.073-.593.073-1.185.145-1.778.073-1.852.218-3.704.436-5.482.073-.592.073-1.11.073-1.703.072-1.852.145-3.704.363-5.556.073-1.037.363-2 1.09-2.74 1.38-1.556 1.961-3.556 2.324-5.63.218-1.037.364-1.778.8-2.445Z" />
              <path fill="#DEADA6"
                    d="M38.947 31.481c.436.074.726.37 1.017.667a7.079 7.079 0 0 1 1.525 2.815c.436 1.556.8 3.111 1.09 4.74.073.371.29.741.218 1.112 0 .37-.145.592-.509.74-.871.519-1.888.593-2.76 1.112-.363.148-.727.296-1.017.592-.218.148-.218.297 0 .519.218.222.436.444.654.592 1.235.963 2.106 2.37 3.123 3.556.364.444.218 1.111-.29 1.63-.29.222-.509.518-.727.814-1.09 1.334-2.179 2.667-3.196 4.074-.8 1.111-1.598 2.223-2.397 3.408-.872 1.333-1.816 2.444-2.76 3.704-.945 1.333-1.817 2.666-2.761 4-.073.074-.146.296-.29.222-.146-.074-.073-.297 0-.445a.566.566 0 0 0 .144-.296c.872-1.407 1.817-2.889 2.543-4.37.944-1.852 2.107-3.482 3.269-5.186 1.09-1.481 2.18-3.037 3.051-4.592.436-.74 1.017-1.334 1.598-2 .218-.222.218-.37.073-.667-.581-.963-1.38-1.778-2.18-2.444-.58-.519-1.234-.963-1.816-1.482-.653-.518-.508-1.481.291-1.852 1.308-.518 2.615-1.037 3.995-1.333.291-.074.364-.148.291-.518l-.654-3.334c-.218-1.11-.218-2.37-.726-3.407-.073-.148-.146-.37-.146-.519-.072-.666-.435-1.185-.653-1.852Z" />
              <path fill="#242424"
                    d="M10.18 21.407c-.146-.814 0-1.555.29-2.296.58-1.63.726-3.259.799-4.963.072-1.333.145-2.666.072-4.074 0-.444.146-.815.364-1.185.072-.074.145-.148.072-.222-.072-.667.29-1.185.581-1.704.654-1.333 1.526-2.444 2.47-3.481 1.163-1.408 2.616-2.297 4.432-2.519.871-.148 1.67-.37 2.542-.518.8-.075 1.453.222 2.252.37-.218.222-.363.148-.508.222-1.163.37-2.252.815-3.415 1.185-.653.223-1.38.445-1.961.815-.363.222-.726.445-1.017.74-.218.075-.29.223-.436.371-.799.89-1.525 1.852-2.252 2.815-.363.519-.436 1.185-1.017 1.556.073.37-.218.592-.363.963.072 0 .145-.149.218-.074.072.074.072.148 0 .296-.073.444-.146.889-.146 1.333-.072.593 0 1.111-.145 1.704-.145.667-.145 1.333-.29 2-.218 1.037-.218 2.074-.8 3.037-.072.074-.072.148-.072.296.072.37-.145.74-.218 1.037-.29.667-.436 1.26-.8 1.926-.072.148 0 .593-.435.296-.073 0-.145.075-.218.075ZM28.994 3.481c.073.445.218.741.508 1.037.582.593.872 1.334 1.163 2.075.145.37.218.814.726.888.436.075.654.519.8.963 0 .149.072.297.217.445.073-.37.218-.667.29-.963.146-.37.291-.445.582-.148.145.222.218.444.145.666 0 .89-.145 1.778-.508 2.593-.218.518-.509.667-1.09.444-.218-.074-.363-.074-.509.149-.218.37-.58.444-.871.296-.218-.074-.363-.222-.363-.519V9.333c-.073-1.407-.218-2.74-.8-4.074-.217-.37-.29-.815-.435-1.259 0-.148-.073-.296.145-.519Z" />
              <path fill="#DEADA6"
                    d="M20.64 30.148c.581.222 1.308.222 1.961.37.364.075.582.37.872.593.363.296.436.667.363 1.185-.072.297.073.593.218.815.364.74.654 1.482.872 2.297.073.222.073.37-.073.592-.072.148 0 .222.073.37.073.37.218.741.363 1.111 0 .149.073.297-.145.37-.145.075-.218-.073-.29-.221-.146-.223-.218-.37-.364-.593-.145-.222-.218-.518-.508-.518-.146 0-.218-.297-.363-.445-.364-.593-.654-1.185-1.018-1.778-.072-.148-.217-.296-.363-.444-.363-.444-.218-1.037-.508-1.482-.073-.148-.146-.296-.364-.37-.871-.222-1.598-.74-2.324-1.037-.145-.074-.218-.148 0-.296.508-.223.944-.445 1.598-.519ZM27.759 51.333c-.146.074 0 .37-.218.37-.146.075-.29-.073-.436-.147-.727-.667-1.38-1.408-2.034-2.149-.218-.222-.436-.518-.654-.74-.073-.074-.218-.223-.218-.37 0-.075 0-.149-.073-.149-.363-.148-.58-.518-.944-.74l-.218-.223c-.072-.37-.363-.666-.581-.963-.29-.296-.509-.592-.8-.889-.508-.518-.653-1.185-.798-1.852-.073-.37.145-.37.363-.296.581.222 1.09.445 1.453.963 1.09 1.26 2.107 2.667 3.051 4.074.508.741 1.09 1.408 1.598 2.148.29.297.436.593.509.963ZM8.58 78.963c.073.444.437.74.727 1.037.436.444.581.889.727 1.481.145.519.435.89.944 1.112.509.222 1.017.666 1.453 1.037.218.148.218.296.145.518-.29.74-.363.667-1.235.815-.653.148-1.017-.222-1.453-.593-.363-.296-.871-.518-1.235-.889a1.776 1.776 0 0 1-.435-.814 7.034 7.034 0 0 1 .145-3.26c0-.222.072-.37.218-.444ZM4.949 73.556c.145.963-.146 1.703-.654 2.444-.29.445-.29.815-.073 1.26.436.814.8 1.703.945 2.666.072.445 0 .889 0 1.333 0 .297 0 .667.145.963.145.297-.218.667-.581.667-.654 0-1.09-.444-1.09-1.111 0-.519.073-1.111 0-1.63 0-.74-.29-1.481-.508-2.148-.146-.444-.146-.963-.364-1.407-.072-.222 0-.445.073-.667.581-1.037 1.38-1.704 2.107-2.37ZM6.184 79.778c.944.963 1.38 2.222 1.67 3.481l.218.89c.073.296.073.518-.145.666-.218.148-.436-.074-.581-.222-.363-.37-.581-.89-.8-1.334-.362-1.037-.58-2.074-.508-3.185.073-.148 0-.222.146-.296Z" />
            </svg>
          </div>
          <div class="homepage-features-item__title">Персональный<br class="mobile-hide desktop-show"> менеджер</div>
          <div class="homepage-features-item__text">
            Каждый заказ обрабатывает персональный менеджер, который будет с вами на связи до момента получения букета.
          </div>
        </div>
        <div class="homepage-features-item">
          <div class="homepage-features-item__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="49" height="89" fill="none" viewBox="0 0 49 89">
              <path fill="#DEADA6"
                    d="M37.39 0c.24.115.466.243.712.35.945.412 1.219.998.972 2.003-.055.236-.301.486-.048.728.295.283.582.074.87-.027.273-.094.54-.195.821-.263.808-.209 1.451.04 1.862.708.37.607.315 1.335-.246 1.908-.507.52-.98 1.113-1.835 1.153-.356.014-.63.324-.897.573-.178.17-.28.459-.602.445.061-.829.8-1.61 1.608-1.712.733-.088 1.732-1.16 1.746-1.868 0-.384-.589-.843-1.068-.755-.493.088-.979.216-1.383.566-.595.52-1.642.52-2.258.04-.59-.458-.623-.808-.151-1.53.527-.802.486-.87-.486-.964-1.356-.135-2.307.661-3.32 1.355-.308.21-.418.412-.24.77-.74-.304-.89-.709-.486-1.343C33.605 1.126 34.55.492 35.68.128c.137-.047.274-.08.417-.115h1.301L37.39 0Z" />
              <path fill="#242424"
                    d="M.5 75.138c.144-.425.486-.695.774-1.019 1.197-1.368 1.889-3.027 2.69-4.625.643-1.281 1.341-2.528 2.033-3.79.219-.397.527-.727.951-1.125-.048.634-.28 1.085-.506 1.53-1.314 2.57-2.718 5.098-3.724 7.822-.15.404-.267.809-.329 1.24-.15 1.045-.903 1.416-1.896.971v-1.004H.5ZM39.266 26.801c-.165-.141-.315-.04-.452.068-1.376 1.099-2.71 2.231-3.19 4.025-.103.384-.356.667-.657.917-1.595 1.301-3.033 2.73-3.8 4.693-.034.087-.04.25-.239.195 0-.91.068-1.82-.02-2.724-.09-.91.088-1.638.855-2.198.178-.135.294-.377.39-.593 1.157-2.582 2.964-4.666 5.066-6.527.267-.236.589-.425.712-.809-1.533.917-3.087 1.753-4.723 2.44-.13.055-.226.176-.343.264-.808.593-1.177 1.524-1.82 2.434v-.715c0-3.054 0-6.115.02-9.17 0-.222-.02-.445-.034-.667-.014-.007-.028-.02-.048-.027l-.041-.02h-.014c-.014 0-.034-.014-.048-.014-.055-.013-.11-.027-.171-.04h-.164c-.103.586-.15 1.186-.158 1.78-.027 3.155.02 6.304-.11 9.46-.054 1.368-.136 2.737-.314 4.112-.473-.843-.883-1.692-1.089-2.63-.24-1.112-.102-2.238-.143-3.357a2.986 2.986 0 0 0-.644-1.78c-.383-.499-.595-.357-.897.074-.315.452-.445.958-.492 1.477-.117 1.308-.336 2.656.355 3.856.726 1.261 1.506 2.509 2.643 3.473a.665.665 0 0 1 .246.566c-.04 1.207.144 2.427-.178 3.668-.034-.573-.205-1.059-.465-1.53-1.205-2.178-2.465-4.322-3.868-6.379-.575-.836-.938-1.679-.93-2.717 0-.587-.076-1.187-.124-1.78-.062-.762-.137-1.524-.431-2.239-.103-.242-.247-.539-.555-.478-.287.06-.226.377-.232.613-.014.742.054 1.49-.055 2.219-.418 2.818-.404 5.602.321 8.374.267 1.004.664 1.894 1.534 2.515.328.236.37.424.061.734-1.204 1.2-2.218 2.57-3.409 3.783-1.307 1.328-2.546 2.737-3.771 4.147-1.41 1.618-3.033 3.074-3.93 5.097-.219.492-.602.917-.93 1.362-1.294 1.746-2.746 3.391-3.478 5.495-.493 1.423-1.047 2.818-1.575 4.234-.102.277-.232.56-.095.924.328-.142.445-.405.56-.654.562-1.194 1.165-2.36 1.664-3.58.74-1.794 1.493-3.574 2.725-5.111 1.034-1.295 1.82-2.751 2.697-4.147.876-1.402 2.006-2.616 3.3-3.668 1.724-1.416 3.497-2.77 5.188-4.227.904-.776 1.718-1.706 1.876-2.96.103-.863.178-.937.938-.445.424.276.828.593 1.109 1.018.417.634 1 1.1 1.553 1.585.33.29.507.606.678.97.26.547.117.729-.486.681-1.26-.1-2.492 0-3.676.526a4.045 4.045 0 0 1-1.69.33c-.466 0-1-.094-1.247.48-.314.741-.198 1.517.309 1.989 1.547 1.47 4.531 1.989 6.482 1.132.158-.067.315-.155.308-.35-.007-.129-.123-.196-.253-.223-1.41-.276-2.752-.91-4.244-.701-.787.108-1.273-.256-1.575-.964-.294-.675-.24-.803.486-.83.65-.027 1.301-.1 1.924-.283.91-.27 1.835-.35 2.78-.39.656-.028 1.218.269 1.834.363 1.109.175 2.21 0 3.313.014 1.136.013 1.937.863 1.78 1.888-.144.903-.534 1.766-.384 2.791-.725-.398-1.369-.438-2.019-.452-1.848-.04-3.71.088-5.552-.162a3.64 3.64 0 0 0-2.608.614c-.677.458-1.403.836-2.101 1.267-.603.371-1.11.85-1.643 1.356.349.195.61.108.87.087 1.129-.094 2.128-.566 3.127-1.038.63-.297 1.198-.742 1.904-.85a46.172 46.172 0 0 1 6.688-.519c.56 0 .718.196.643.796-.246 1.895-.828 3.722-1 5.63-.068.755.09 1.55-.219 2.3-.027-.972-.328-1.882-.52-2.813-.137-.68-.575-.964-1.211-1.146-.993-.29-2.034-.047-2.992-.229-2.389-.459-3.874.748-5.175 2.434-.226.297-.5.614-.561 1.126 1.068-.499 1.89-1.146 2.519-2.01.636-.876 1.287-1.193 2.252-.667 1.205.654 2.437.668 3.71.614.507-.02.733.168.876.627.322 1.032.295 2.097.172 3.128-.117.978.02 2.03-.808 2.886-.986 1.032-2.41 1.362-3.43 2.313-.287.27-.417-.074-.342-.337.356-1.22.171-2.475.267-3.709.034-.485.075-1.018-.35-1.409-.211-.195-.184-.35.07-.499.369-.222.732-.445 1.204-.425.233.014.52.068.733-.256-.493-.108-.918-.242-1.383-.121-1.595.404-3.204.607-4.854.445-.287-.027-.657-.317-.855.047-.213.384.095.728.3 1.045.22.337.555.553.952.593.897.081 1.78.04 2.54-.546.178-.141.301-.39.61-.33.013.067.04.135.04.202-.102 2.003-.623 3.945-.903 5.927-.062.411-.336.607-.685.755-1.17.499-2.348.991-3.512 1.504-.896.397-1.772.822-2.655 1.24v.014c2.094-.378 4.01-1.16 5.962-1.841.5-.175.74-.128.602.479-.089.398-.15.795-.185 1.2-.164 1.969-.602 3.93-.43 5.913.143 1.632.437 3.25.492 4.895.007.29.192.418.424.52.124.053.343-.062.39.107.316 1.099 1 .438 1.54.303.309-.074.562-.35.514-.694-.048-.317-.397-.479-.657-.479-.951.007-.992-.68-1.068-1.315-.096-.782-.212-1.564-.438-2.319-.267-.917-.342-1.874-.096-2.764.582-2.057.945-4.14 1.212-6.244.048-.39.24-.573.554-.748 1.027-.58 2.02-1.214 2.684-2.232.089-.135.157-.29.383-.256 1.047.155 1.657-.607 2.355-1.153.233-.182.328-.513.157-.85-.691-1.395-.246-2.744.288-4.038.5-1.214 1.198-2.34 1.718-3.547.466-1.086.623-2.3.028-3.324-.452-.775-.151-.978.397-1.342.985-.654 1.3-2.717.657-3.688-.459-.688-1.178-.789-1.87-.924-1.416-.276-2.84-.505-4.264-.748-.568-.101-1.246-1.133-.917-1.49.61-.668 1.211-1.376 2.163-1.895-.28 1.167.288 2.03.582 2.954.15.471.534.782 1.054.66.377-.087.623-.458.493-.843-.35-1.078-.185-2.245-.561-3.303-.172-.472-.076-.749.28-1.045 1.705-1.41 2.574-3.284 3.074-5.38.418-1.767.897-3.527 1.937-5.064.055-.081.09-.169.123-.257.082-.222-.061-.364-.205-.492l.014-.027ZM29.01 40.178c-.26-.418-.547-.728-.664-1.085-.287-.863-.794-1.565-1.424-2.205-1.033-1.052-1.355-2.448-1.78-3.783-.28-.883-.472-1.793-.698-2.69 1.027 1.888 2.472 3.52 3.361 5.489.178.39.39.768.617 1.132.554.904.753 1.956.588 3.149v-.007Zm3.396-2.542c1.601-2.623 2.998-5.414 4.545-8.124-.986 3.027-1.746 6.169-4.545 8.124Z" />
              <path fill="#DEADA6"
                    d="M30.052 17.598c.09.02.164.047.233.074a1.94 1.94 0 0 1 .835.067c.014-.04.014-.074.027-.114.117-.284-.102-.371-.314-.452-1.24-.452-2.246-1.268-3.28-2.057-.444-.337-.69-.89-1.28-1.146.007.135 0 .21.021.27.746 1.679 1.869 2.953 3.758 3.364v-.006Z" />
              <path fill="#DEADA6"
                    d="M41.573 11.03c-.24-.728-.753-.613-1.185-.29-1.184.877-2.498 1.046-3.902.877-.212-.027-.314.02-.37.223-.163.6-.67.809-1.19.917-.91.195-1.814.458-2.78.357-.718-.074-1.45.047-2.142.243-1.273.357-2.143-.344-2.964-1.059-.698-.607-1.664-.876-2.424-.458-.164.094-.246.202-.219.398.055.41-.02.815-.458.943-.486.142-1.02.196-1.451-.155-.48-.397-.959-.816-1.055-1.49-.027-.222-.082-.397-.349-.29a34.68 34.68 0 0 0-1.786.769c-.363.168-.315.33-.041.634.937 1.031 1.855 2.063 3.073 2.784.199.115.438.304.295.573-.13.257-.404.19-.65.135-.802-.168-1.473-.58-2.089-1.085-.294-.243-.547-.533-.924-.674-.349-.135-.5-.466-.52-.796-.02-.357.287-.513.602-.614-.93-.68-.938-.964-.013-1.631.63-.459 1.39-.661 2.122-.877.588-.175.924.189.93.769.008.553.302.944.624 1.335.246.296.575.364.917.27.322-.088.561-.29.157-.587-.568-.418-.451-.863-.116-1.362 1.047-1.564 2.813-1.767 4.183-.452.294.283.657.533.841.877.576 1.112 1.575.998 2.588 1.045 1.37.067 2.58-.465 3.847-.816.02 0 .055-.007.069-.02.561-.924 1.314-.33 2.005-.256.952.1 1.87.074 2.615-.675.267-.27.637-.438 1.02-.505.637-.115 1 .35.78.984l-.034-.034-.006-.006Z" />
              <path fill="#DEADA6"
                    d="M26.033 8.57c-.39-1.726.952-3.958 2.478-4.208.753-.128 1.13.27.89.978-.11.33-.253.398.288.459 1.375.155 2.717-.129 4.073-.088 1.081.027 2.402 1.187 2.67 2.225.15.573-.33.836-.672 1.274.617-.02 1.055-.25 1.48-.472.677-.35 1.293-.37 1.984 0 .938.506 1.725.391 2.581-.553 1.034-1.14 2.334-1.085 3.635-.99 1.198.087 2.088.802 2.765 1.759.309.432.452.877.083 1.382-.363.5-.808.722-1.424.607-.972-.182-.986-.182-1.253.789-.116.431-.342.701-.787.836-.842.243-1.718.364-2.54.694.206-.573.705-.694 1.157-.856.404-.141.835-.23 1.246-.35.39-.115.67-.365.589-.776-.09-.479.11-.768.451-1.045.199-.168.343-.404.534-.58.411-.384.267-.708-.068-1.031-.507-.48-1.116-.735-1.807-.823-.945-.121-1.794-.148-2.526.708-.788.917-1.896.95-2.985.566-.602-.215-1.13-.1-1.547.277-.958.856-1.992.418-3.012.263-.431-.068-.582-.607-.308-.95.274-.345.74-.628.418-1.167-.343-.58-.808-.985-1.554-.998-1.061-.02-2.116-.095-3.177-.149-.739-.033-.924-.296-.684-.984.055-.162.137-.324.014-.472-.13-.155-.308-.094-.473-.054-.568.142-1.02.438-1.266.978-.418.897-.822 1.807-1.253 2.757V8.57Z" />
              <path fill="#242424"
                    d="M19.058 68.726c-.39 1.01-1.102 1.59-1.527 2.366-.842 1.564-1.547 3.162-2.02 4.882-.738 2.663-1.58 5.3-2.327 7.962-.362 1.302-.349 2.69-.841 3.972-.165.425-.158 1.119-.726 1.092-.596-.027-.685-.721-.842-1.207a1.604 1.604 0 0 1 .027-1.058c1.24-3.237 1.89-6.655 3.115-9.891.951-2.536 2.41-4.767 4.032-6.911.294-.385.458-.89 1.116-1.207h-.007Z" />
              <path fill="#DEADA6"
                    d="M41.606 11.057c-.383.513-.698 1.093-1.157 1.531-.848.816-1.095 2.016-1.916 2.832-.965.95-2.06 1.638-3.47 1.713-.138.006-.275.074-.473.134 1.52.607 2.19 1.861 2.793 3.183.096.202.123.411-.082.586-.233.203-.486.21-.733.068-.712-.398-1.458-.769-1.944-1.443-.342-.486-.794-.755-1.321-.937a5.549 5.549 0 0 1-1.28-.648c-.13-.087-.363-.08-.356-.296.007-.203.226-.223.363-.304.123-.067.253-.114.465-.215-.657-.445-1.342-.641-2.115-.863.67-.486 1.294-.614 2.02-.526 2.046.25 4.024.06 5.797-1.12.411-.27.664-.674.938-1.065.698-.991 1.355-2.023 2.437-2.67l.034.034v.006Z" />
              <path fill="#242424"
                    d="M23.596 39.335c-.732-.364-1.218-.809-1.595-1.409-.746-1.187-1.82-2.01-3.087-2.61-.096-.046-.212-.134-.342-.026.096.404.63.512.67.964-.225.128-.328-.067-.41-.175-.774-.95-1.8-1.558-2.882-2.09-.5-.243-.856-.62-1.095-1.1-.171-.337-.171-.7.054-1.024.24-.344.637-.29.925-.169 1.328.573 2.772.816 4.08 1.423 1.601.742 2.635 1.881 2.498 3.79-.048.667.198 1.26.719 1.725.17.155.383.297.472.701h-.007Z" />
              <path fill="#DEADA6"
                    d="M14.731 6.837c.774 1.025.74 1.254-.308 1.989-.02.013-.04.02-.061.04-.37.344-.644.749-.39 1.255.15.29 1.177.256 1.471-.02.959-.911 2.136-1.444 3.368-1.848.863-.283 2.608.701 2.855 1.564.034.108.102.243-.02.324-.117.08-.227 0-.33-.061-.143-.08-.287-.169-.438-.256-.82-.486-1.65-.64-2.512-.108-.226.135-.479.216-.725.324-1.061.478-1.02.472-.863 1.598.096.687.048 1.395-.493 1.935-.828.815-.842.809.02 1.638-.875-.04-1.334-.823-1.033-1.76.205-.634.404-1.26.623-1.935-.48 0-.924.02-1.362 0-.863-.047-1.616-.586-1.711-1.187-.103-.667.533-1.651 1.239-1.935.69-.276.883-.761.575-1.463.034-.027.068-.06.102-.087l-.007-.007ZM19.968 5.67c-1.04-2.245-1.136-3.108.596-4.591.725-.62 1.56-.614 2.272 0 .254.222.439.216.692.04.397-.276.856-.418 1.314-.566 1.116-.35 1.479-.196 1.89.863.116.303.143.681.609.688.479 0 1.026.08 1.3-.412.356-.647.918-.647 1.493-.552.917.155 1.697 1.402 1.499 2.312-.062.27-.212.479-.438.634-.473.33-.685.243-.76-.317-.055-.404.034-.809.096-1.207.075-.492-.192-.789-.637-.89-.39-.087-.773-.162-1.034.358-.335.667-1.465 1.004-2.15.721-.396-.162-.465-.492-.512-.863-.144-1.079-.363-1.22-1.404-.971-.616.148-1.232.29-1.533.937-.075.155-.206.149-.363.108-1.342-.303-2.423.425-2.65 1.787-.095.586-.164 1.173-.273 1.921h-.007ZM27.861 17.584h.144c.418.04 1-.067 1.136.364.15.479-.294.87-.67 1.18-.637.526-1.445.66-2.212.816-1.382.276-2.717.614-3.813 1.558-.143.12-.335.276-.513.114-.198-.175-.061-.398.027-.593.78-1.68 2.116-2.677 3.923-3.055.657-.134 1.273-.458 1.971-.384h.007ZM17.456 15.932c.52.371.788.85.671 1.463-.048.263-.15.52.213.654.355.129.711.203.985-.148.206-.263.37-.56.582-.816.561-.667 1.753-.68 2.307-.02.356.425-.007.66-.329.701-.725.088-1.211.479-1.69.978-.596.627-2.294.404-2.807-.31a.63.63 0 0 1-.103-.607c.11-.31.308-.614.336-.93.027-.31-.103-.641-.165-.965Z" />
              <path fill="#242424"
                    d="M23.535 54.337c-.164.769-.459 1.24-.924 1.544-2.211 1.463-4.593 2.603-6.996 3.722-.13.06-.274.101-.48-.101 2.732-1.733 5.6-3.216 8.393-5.165h.007Z" />
              <path fill="#DEADA6"
                    d="M14.629 6.931c-.295-.108-.59-.202-.877-.317-.54-.215-.746-.768-.486-1.294.904-1.827 4.19-2.063 5.34-.378.034.047.02.128.034.189-.192.115-.274-.06-.383-.128-1.349-.802-2.992-.64-4.142.398-.363.33-.383.58.069.816.267.134.486.31.554.62-.034.027-.068.06-.103.088l-.006.006ZM23.26 3.62c.049 2.077.774 3.945 1.917 5.806-1.553-.418-2.655-3.965-1.916-5.805Z" />
            </svg>
          </div>
          <div class="homepage-features-item__title">Правило самого<br class="mobile-hide desktop-show"> свежего цветка
          </div>
          <div class="homepage-features-item__text">
            Ежедневный отбор и закупка самых свежих цветов по всей Москве
          </div>
        </div>
        <div class="homepage-features-item">
          <div class="homepage-features-item__icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="52" height="88" fill="none" viewBox="0 0 52 88">
              <path fill="#DEADA6"
                    d="M50.207 25.849c-.458-.784-1.403-1.096-2.16-.631-.57.35-1.09.81-1.266 1.492-.142.554-.386.909-.986 1.113-.706.24-.99 1.181-.603 1.633.11.128.235.23.414.176.115-.035.133-.128.131-.25-.015-.887.456-1.18 1.298-.788.364.17.684.431 1.117.41.35-.016.783.018.813-.445.031-.46-.305-.63-.753-.607-.158.008-.322-.027-.48-.055-.61-.106-.765-.431-.46-.963.104-.185.206-.375.337-.543.336-.43.723-.894 1.327-.712.644.195.923.736 1.002 1.408.233 1.969-1.721 3.356-3.517 3.03-.933-.17-1.81-.51-2.706-.79-.59-.184-.733-.495-.584-1.074.501-1.96.94-3.926.913-5.97-.025-1.826-.81-3.182-2.41-4.083-.12-.067-.231-.11-.249-.273-.056-.546.923-1.676 1.478-1.737 1.282-.137 2.478-.381 3.089-1.752.256-.574.535-1.12.099-1.627-.461-.535-1.101-.578-1.764-.252-.77.378-1.575.688-2.338 1.077-.578.296-.95.296-1.094-.436-.094-.48-.35-.886-.724-1.218-.943-.84-1.71-.662-2.123.522-.165.476-.24.98-.386 1.464-.285.944.113 1.836.186 2.752.085 1.08.908 1.507 1.783 1.868-.165.262-.39.302-.59.356-.936.252-1.733-.214-2.563-.508-.198-.07-.412-.237-.564.02-.12.202.086.325.21.463.902.988 2.556 1.155 3.83.383.994-.602 1.73-.404 2.208.622.156.336.264.7.345 1.06.55 2.495-.088 4.914-.516 7.344-.042.236-.199.413-.453.344-1.09-.295-2.066-.145-2.99.945.07-.718-.31-1.146.003-1.578.402-.559.205-1.012-.209-1.415a67.005 67.005 0 0 0-2.517-2.353c-.48-.42-1.104-.191-1.207.44-.241 1.466-.417 2.945-.652 4.413-.464 2.888.175 5.72.427 8.571.047.524.223 1.036.35 1.552.03.126.082.271.256.246.178-.026.163-.186.175-.312a2.354 2.354 0 0 0 0-.399c-.146-1.64-.272-3.282-.448-4.92-.162-1.507-.213-3.006.039-4.553.57.64 1.123 1.242 1.838 1.657.705.41 1.073.904.595 1.721-.115.198-.142.46-.162.696-.195 2.278-.326 4.56-.066 6.84 0 .01 0 .018.002.026.132.008.266.015.399.018a2.083 2.083 0 0 1-.07-.377 7.645 7.645 0 0 1-.042-1.036c.049-1.462.214-2.928.146-4.383-.088-1.83 1.209-3.013 1.907-4.472.084-.176.294-.32.479-.417.577-.3 1.159-.145 1.71.082.285.116.19.404.155.637-.456 2.966-.734 5.959-1.45 8.884-.106.434-.46 1.178-.02 1.286.599.149.605-.665.73-1.108.774-2.742 1.301-5.536 1.717-8.35.132-.896.29-.945 1.167-.636 1.06.376 2.127.728 3.283.695 1.164-.034 2.136-.351 2.789-1.413.758-1.23 1.165-2.455.372-3.815l.003.005Zm-9.381-8.63c-.404.707-.7.764-1.326.279-1.285-.995-1.794-3.333-1.026-4.703.173-.31.355-.615.779-.586.41.029.587.338.737.656.246.524.267 1.075.165 1.636-.044.24-.094.503.24.578.256.058.466.047.717-.175.981-.867 2.155-1.424 3.393-1.84.356-.119.57-.007.587.472.047 1.483-.537 1.973-2.478 1.96-.215 0-.43.01-.645-.002-.4-.024-.671.053-.686.545-.013.43-.244.81-.456 1.18h-.001ZM37.683 30.66c-.231.146-.477-.003-.664-.142-.668-.493-1.096-1.146-1.546-1.853-.648-1.023-.278-1.927-.165-2.894.022-.177-.01-.404.222-.457.178-.04.26.155.388.243 1.621 1.101 1.59 2.869 1.875 4.48-.01.236.097.491-.11.622v.002Z" />
              <path fill="#242424"
                    d="M45.412 42.138c-.346-.034-.69-.104-1.034-.157-.152-.023-.396.02-.408-.167-.064-1.105-.87-.885-1.564-.892-1.367-.016-2.733-.083-4.095-.04h-.057c-.766.067-1.534-.01-2.312-.06a.317.317 0 0 1-.087-.017c-1.091-.053-2.184-.123-3.269-.054-3.315.206-6.632.064-9.948.121a.783.783 0 0 1-.477.147c-.76-.003-1.518-.038-2.276-.058a1.055 1.055 0 0 1-.416.069c-3.335.045-6.673.041-9.975.613-.216.037-.442.043-.612-.123-.527-.516-.679-.096-.797.321-.093.33-.148.674-.187 1.015-.052.45.218.67.63.605.802-.123 1.596.078 2.41-.043.727-.108 1.405.149 1.876.83.635.917 1.09 1.884 1.232 2.995.297 2.32.37 4.65.438 6.983.053 1.839-.045 3.68.089 5.56-.24-1.585-1.412-2.045-2.732-2.35-.412-.096-.665.104-.737.425-.083.359.284.295.5.332.869.147 1.478.622 1.803 1.424.29.715.57 1.436.805 2.17.53 1.656.298 1.892-1.43 1.567-.48-.091-.723-.22-.524-.784.341-.961.325-1.889-.545-2.626a.533.533 0 0 1-.17-.265c-.166-.71-.464-.715-.944-.222-.226.231-.56.345-.884.121-.388-.266-.217-.605-.099-.93.175-.483.545-.807.954-1.113-.789-.168-1.028.386-1.264.897-.254.55-.396 1.124.1 1.63.178.182.453.26.673.118.742-.479.984.093 1.233.57.265.51.303 1.052.134 1.623-.331 1.128-.313 1.13.776 1.326.291.052.577.13.868.181.561.098 1.12.119 1.677-.054.29-.09.417-.198.417-.552.003-2.226.048-4.45.08-6.676.006-.471 0-.942 0-1.413.324.616.246 1.27.305 1.9.226 2.457.397 4.92.591 7.38.033.405-.097.61-.551.517-.5-.104-.999-.216-1.505-.268-.737-.077-.965.246-.734.915.155.45.265.917.372 1.382.043.192.302.492-.154.535-.3.028-.496-.069-.5-.446-.009-.662-.289-1.232-.728-1.73-.322-.364-.637-.74.029-1.223-.503-.069-.724.102-.946.24-.459.284-.766.472-.102 1.008.666.538 1.208 1.29.909 2.312-.165.567.011.923.705.613.156-.07.321-.081.464.016.803.55 1.81.803 2.413 1.644.317.44.771.738 1.206 1.05 1.547 1.108 3.291 1.8 5.107 2.331.474.14.723.35.525.851-.239.607-.047.937.606 1.07.42.084.681.15.809.806.45 2.353-.747 3.906-2.36 5.222-.815.665-1.838 1.119-3.05.935-.52-.08-.667.605-.905 1.003-.192.322.04.488.31.6.313.13.339.39.313.664-.07.74-.146 1.478-.225 2.217-.035.334-.055.692.382.738 1.87.196 3.742.487 5.617.517 3.646.06 7.293-.07 10.938.018.456.01.663-.174.65-.68-.03-1.218-.015-2.44.02-3.66.025-.91-.385-1.465-1.308-1.431-1.227.046-2.16-.41-3.033-1.223-1.38-1.283-2.286-2.803-2.632-4.636-.108-.578-.095-1.108.77-1.146.554-.024 1.136-.067 1.653-.323.207-.102.564-.225.44-.482-.252-.522.149-.485.409-.56 1.025-.295 2.048-.54 3.044-.982 1.841-.817 2.41-2.93 4.187-3.758.166-.951 1.107-1.077 1.712-1.56.745-.595.884-1.268.364-2.067-.345-.526-.343-1.044-.047-1.578.555-1.006.87-2.008.947-3.006.003-.043.058-.082.092-.128.236.05.175.445.52.4.494-.063 1.77-.984 1.933-1.444.28-.8.037-1.411-.99-2.178-.45-.336-.78-.946-1.592-.606-1.901.798-3.338 2.843-3.338 4.885 0 .694.207 1.213.997 1.286.479.045.6.277.45.701-.078.219-.141.444-.214.677-.83-.637-.844-.643-1.322.278-.154.295-.387.316-.658.353-1.125.158-2.255-.037-3.389.075-1.79.175-3.574.483-5.388.404-.446-.02-.666-.06-.637-.618.241-4.729.453-9.459.075-14.189-.1-1.243-.31-2.476-.707-3.668-.168-.506-.614-.805-1.044-.68-.527.151-.036.562.002.855.029.237.14.465.156.7.128 1.904.494 3.783.521 5.7.052 3.697.052 7.393.024 11.089-.003.439-.098.758-.638.84-1.145.178-1.117.2-1.098-.943.03-1.78.023-3.56.032-5.34.018-3.804.076-7.606-.158-11.407-.047-.77-.13-1.539-.422-2.262-.073-.179-.104-.49-.37-.442-.233.041-.378.295-.437.53-.035.148.007.316.017.474.066 1.246.218 2.485.179 3.74-.089 2.888.037 5.777.063 8.664.02 2.147-.032 4.299.071 6.446.02.41-.061.675-.554.656-1.989-.077-3.977-.15-5.966-.21-.842-.026-1.138-.425-1.147-1.257-.057-4.229-.479-8.432-.957-12.63-.122-1.058-.22-2.164-.734-3.087-.34-.61-.589-1.176-.652-1.856-.09-1-.386-1.913-1.107-2.676-.338-.359-.28-.705.323-.708 2.566-.013 5.121-.269 7.692-.24 2.886.032 5.773-.05 8.66-.094 3.277-.051 6.554-.208 9.83.014.723.05 1.446.027 2.171.126.904.123 1.824.142 2.737.187.366.018.63-.14.647-.547.016-.374-.13-.605-.542-.645v.003Zm-6 19.72c.328-1.879 1.04-3.261 2.656-4.072.483-.243.802-.174 1.096.239.2.281.42.55.61.837.169.253.652.51.163.826-.254.165-.597.77-.988.021-.159-.305-.474-.008-.661.171-.574.544-.76 1.264-.877 2.003-.103.66-.543.553-.966.422-.392-.12-1.06.136-1.035-.449l.002.002ZM23.88 74.872c-.327-.087-.57-.19-.439-.588.112-.34.194-.624.71-.532 1.313.238 2.638.406 4.113.625-.902.059-1.6.325-2.317.54-.677.202-1.377.135-2.066-.047l-.002.001Zm1.642 7.068c-.183.007-.41 0-.542-.099-.252-.19.002-.38.094-.547.56-1.031.665-2.176.85-3.3.043-.254.012-.522.269-.782.34.927.052 1.781-.088 2.621-.088.546-.29 1.073-.277 1.641.004.214-.004.46-.304.47l-.002-.004Zm-.692-6.48c.634.013.962.277.831.848-.343 1.498-.618 3.019-1.394 4.385-.795 1.405-.788 1.409-2.444 1.308 1.95-1.73 3.901-3.461 3.007-6.54Zm-2.454 7.168c.199.039.6-.139.525.25-.061.319-.037.904-.497.879-1.282-.07-2.624.09-3.778-.744 1.283.09 2.47-.632 3.75-.385Zm10.513 1.613c.532-.067 1.203-.273 1.578-.043.442.27.063.962.069 1.467.018 1.605.309 1.473-1.494 1.478h-.553c-2.327-.161-4.715.065-7.106.118-2.013.043-4.029-.174-6.044-.265-.382-.018-.539-.192-.508-.55.02-.239.058-.475.082-.714.165-1.723.162-1.702 1.905-1.498 4.022.47 8.047.511 12.072.008l-.001-.001Zm-9.897-.476c.823-.54 1.326-1.094 2.244-1.049 2.012.1 3.964.532 5.934.878-2.65.032-5.29.367-8.178.17Zm6.822-2.52c.373.38.74.769 1.248 1.295-1.463-.186-2.764-.35-4.066-.518-.334-.043-.423-.265-.436-.565-.028-.62.187-1.185.364-1.78.855 1.808 1.168 2.067 2.243 1.861-.003-.051.007-.137-.016-.147-1.495-.623-1.327-2.117-1.728-3.29-.27-.789-.234-1.687-1.186-2.115-.267-.12-.233-.38.113-.502.876-.304 1.24-.015 1.296.928.112 1.868.847 3.482 2.166 4.83l.002.002Zm1.544-14.91c1.886-.314 3.794-.291 5.698-.336 1.753-.042 1.732-.054 1.067 1.601-.386.963-.724 1.943-1.322 2.81-.529.764-1.179 1.374-2.244 1.7.89-1.314 1.702-2.51 2.51-3.712.301-.447.495-.945.638-1.456.063-.228.205-.546-.186-.667-.353-.11-.43.144-.57.394-.407.73-.772 1.503-1.58 2.074-.148-.64.148-1.125.179-1.635.016-.261.097-.568-.273-.648-.343-.075-.46.165-.545.446-.472 1.575-1.114 3.097-1.521 4.695-.155.608-.345 1.33-1.358 1.317.246-.68.474-1.313.705-1.942.399-1.09.569-2.21.452-3.366-.022-.227-.01-.546-.34-.537-.292.008-.24.33-.251.511-.107 1.644-.914 3.105-1.25 4.687a1.941 1.941 0 0 1-.34.714.637.637 0 0 1-.795.218c-.317-.145-.098-.426-.052-.633.432-1.892.699-3.805.718-5.746.005-.496.354-.439.661-.49h-.001Zm-7.855.19a.445.445 0 0 1 .394.234c.74 1.382 1.093 2.884 1.405 4.409-1.563-1.248-2.496-2.912-3.393-4.719.593.029 1.094.053 1.595.075h-.001Zm-4.346-.022c.133-.324.53-.102.804-.167 1.067-.256 1.316.546 1.59 1.242.69 1.743 1.777 3.208 3.119 4.506.171.166.362.332.577.426.307.133.635.334.981.055.351-.281.49-.636.362-1.062-.394-1.323-.701-2.674-1.323-3.925-.44-.886-.348-1.03.66-1.092a33.684 33.684 0 0 1 3.767-.048c.39.019.505.069.41.498-.374 1.657-.688 3.328-1.051 4.989-.05.226-.219.368.072.587.228.17.033.452-.124.63-.155.175-.406.17-.606.114-.377-.104-.073-.343-.063-.514.122-2.023-.468-3.884-1.297-5.693a.525.525 0 0 0-.16-.177c-.06-.046-.136-.072-.391-.201.486 1.983.564 3.865.845 5.72.099.656-.136.784-.732.724-1.02-.099-1.935-.392-2.72-1.074-1.645-1.425-3.195-2.934-4.398-4.754-.158-.24-.431-.517-.323-.782l.001-.002Zm-1.603-.2c.456-.202.905.071 1.107.697.453 1.397 1.536 2.4 2.456 3.5.098.117.26.199.242.516-1.66-.88-3.228-1.717-4.09-3.418-.286-.561-.148-1.101.286-1.293l-.001-.001Zm.981 3.845c.99.832 2.216 1.293 3.287 2.003.085.058.176.109.43.265-2.673-.737-4.924-1.815-6.691-3.735-.33-.358-.59-.744-.66-1.249-.1-.728-.242-1.45-.375-2.22.309.164.49.453.803.458.524.006.647.38.796.76.55 1.398 1.225 2.723 2.407 3.718h.003ZM9.115 42.37a3.506 3.506 0 0 1 1.607-.453 347.794 347.794 0 0 1 18.652-.149c-6.862.238-13.56.224-20.259.602Z" />
              <path fill="#DEADA6"
                    d="M16.223 23.238c1.609 1.222 2.855 2.7 3.626 4.568-.506-.302-.98-.633-1.426-.996-.371-.305-1.535-.4-1.833-.045-.296.354-.453.187-.713-.006-.74-.551-1.1-.471-1.494.306a.74.74 0 0 1-.242.286c-.833.606-1.21 1.441-.944 2.423.598 2.197 1.704 4.072 3.794 5.217.307.168.501.404.664.669.73 1.186 1.33 2.434 1.887 3.703.38.007.76.018 1.14.03a19.892 19.892 0 0 0-1.678-4.107c-.164-.303-.167-.56.077-.87.446-.565.726-1.213.938-1.919.302-1.015.32-2.073.587-3.24.156.353.274.56.342.782.974 3.146 2.183 6.242 2.146 9.61-.004.27-.02.695.35.693.329-.002.25-.417.275-.658.207-2.067-.01-4.104-.705-6.053-.677-1.897-1.052-3.898-2.048-5.688-.868-1.56-1.757-3.102-3.147-4.275-.965-.813-1.979-1.568-3.081-2.435.543-.04.796-.22 1.062-.534 1.04-1.24 1.435-2.727 1.773-4.234.166-.74-.024-1.492-.336-2.176-.495-1.087-1.644-1.317-2.613-.603-.569.42-.861 1.052-1.283 1.579-.223-.144-.206-.353-.262-.522-.264-.784-.542-1.563-1.033-2.242-.472-.653-1.164-.748-1.879-.586-.696.16-.607.772-.641 1.302-.169 2.688 1.219 4.78 2.714 6.808 1.033 1.4 2.62 2.18 3.98 3.213h.003Zm2.469 10.075c-.075.192-.16.423-.414.436-.243.013-.256-.233-.348-.383-.663-1.089-1.325-2.173-2.192-3.124-.409-.449.007-1.601.598-1.753.25-.064.306.16.432.28.162.156.309.464.574.252.213-.17-.028-.38-.117-.56-.105-.21-.326-.408-.242-.649.108-.306.314-.581.718-.43.874.325 1.834 1.677 1.82 2.665-.194 1.026-.41 2.171-.833 3.265l.004.001Zm-8.289-19.846c.052-.38.115-.785.561-.867.455-.081.639.268.804.63.368.8.61 1.639.837 2.486.075.28.159.562.278.826.094.206.191.493.492.445.26-.041.228-.32.289-.517.25-.805.69-1.49 1.345-2.037.812-.679 1.36-.537 1.79.439.168.383.135.777.161 1.33a7.05 7.05 0 0 1-1.143 3.441c-.625.958-1.477 1.145-2.27.33-1.136-1.17-2.246-2.371-2.694-4.04-.22-.82-.57-1.591-.451-2.466h.001ZM23.764 4.355c1.979-.002 3.859-.045 5.734-.198.45-.037.99-.091 1.162.466.152.484-.02.966-.4 1.308-.99.887-1.954 1.845-3.463 1.724-.131-.012-.288.071-.393.025-1.03-.456-2.108-.749-3.288-.92.247-.405.52-.363.814-.288.624.16 1.252.311 1.877.463 1.533.372 2.88-.178 3.667-1.493.079-.134.224-.268.126-.431-.107-.176-.283-.07-.437-.048-2.274.327-4.565.155-6.848.233-.317.011-.711.035-.808-.354-.097-.388.247-.553.546-.685.615-.271 1.23-.544 1.855-.789.396-.155.506-.421.473-.814-.103-1.253-1.417-2.233-2.65-1.96-.584.13-.916.525-1.1 1.063-.451 1.317-.348 2.615.152 3.895.545 1.394 1.3 2.684 2.024 3.99.213.384 2.216.849 2.583.641.181-.102.149-.262.149-.416 0-.24-.012-.48-.003-.719.014-.436.23-.73.685-.718.47.011.519.381.525.747.036 2.182-.189 4.35-.39 6.52-.222 2.372-.428 4.746-.55 7.148.509-.813.848-1.698 1.445-2.44.09-.11.066-.378 0-.535-.434-1.056-.134-1.97.404-2.915.4-.704.907-1.316 1.413-1.923.845-1.013 2.048-1.088 3.243-.92.656.092.898.732 1.102 1.276.68 1.825-.145 3.584-1.977 4.27a1.284 1.284 0 0 1-.47.085c-1.043-.03-1.064-.028-2.099.736.977.342 1.914.741 2.892.988.95.241 1.669.842 2.48 1.298.156.088.375.18.25.42-.106.206-.313.176-.499.121-.333-.097-.66-.204-1.076-.335.111.85.195 1.629.321 2.401.093.562-.076.995-.646 1.09-.539.091-.697-.336-.82-.788-.213-.786-.27-1.65-1.005-2.206a.808.808 0 0 0-.385-.155c1.962 3.226 2.035 6.954 2.989 10.44.516 1.884.666 3.814.918 5.733.021.154.1.322-.115.399-.147.052-.257-.039-.355-.131-.204-.192-.343-.434-.341-.704.003-1.154-.243-2.309-.59-3.356-.287-.86-.34-1.794-.83-2.647-.344-.601-.255-1.532-.433-2.302-.514-2.223-1.059-4.442-2.134-6.487-.073-.137-.162-.267-.385-.63-.105.857-.186 1.486-.257 2.116-.056.501-.076 1.007-.15 1.506-.178 1.187-.711 1.909-1.554 1.98-1.046.092-1.291-.76-1.705-1.692-.307 4.253-.142 8.297.199 12.35-.424-.02-.42-.223-.456-.404a42.031 42.031 0 0 1-.755-9.835c.089-2.174.074-4.352.268-6.524.31-3.46.53-6.926.813-10.386.054-.646-.3-1.32.253-1.946-.613-.068-1.117-.107-1.615-.18-.885-.13-1.066-.012-.76.778.574 1.48.008 2.682-.862 3.768-.695.866-1.684 1.326-2.855 1.157-1.09-.158-1.58-1.044-1.193-2.061.285-.747.85-1.295 1.395-1.836.702-.694 1.46-1.336 2.23-1.957.286-.231.24-.386.108-.662-.713-1.48-1.53-2.907-2.061-4.478-.517-1.528-.445-2.984.278-4.384.541-1.05 2.684-1.114 3.571-.187.661.693.874 1.571 1.094 2.446.097.388-.084.662-.475.808-.268.099-.58.12-.844.448l-.006.002ZM32.64 15.78c.037-.787-.484-1.261-1.271-1.066-1.707.423-2.808 1.572-3.58 3.068-.224.437-.037.875.104 1.307.183.57.424.708.967.309.378-.278.711-.815 1.306-.596.427.157.73-.01 1.04-.223.98-.679 1.377-1.654 1.432-2.8l.002.001Zm-9.524-3.6c.008-.209-.166-.603-.262-1.017-.132-.574-.452-.53-.802-.263-1.218.928-2.386 1.91-3.144 3.268-.38.68-.25 1.055.43 1.432.453.25.928.266 1.405.11 1.356-.444 2.381-1.878 2.375-3.53h-.002ZM28.36 23c-.078-.571-.105-1.085-.382-1.527-.221-.353-.488-.537-.758-.03-.551 1.032-1.174 2.043-1.256 3.25-.076 1.122-.08 2.241.517 3.255.209.354.539.66.983.568.454-.094.572-.504.62-.924.182-1.55-.116-3.128.277-4.593L28.36 23ZM4.663 48.332c.254 1.074.429 2.097.78 3.078.106.298.263.664-.078.87-.351.212-.747.071-1.043-.184-.197-.17-.322-.42-.483-.63-.133-.175-.254-.334-.526-.17-.722.442-1.243.21-1.374-.627-.061-.391-.02-.797-.047-1.194-.01-.16.078-.364-.23-.417-.879-.147-1.24-.498-1.147-1.293.103-.89.19-1.802.582-2.628.205-.43.082-.897.26-1.318.115-.275.036-.677.511-.695.45-.016.58.31.72.636.229.538.45 1.079.703 1.607.171.358.41.675.8.965.197-.735.044-1.423.032-2.085-.048-2.607.922-4.874 2.208-7.058.013-.022.033-.043.042-.069.385-1.012 1.033-1.58 2.218-1.529 1.11.048 2.003.431 2.614 1.322.666.97 1.114 2.058 1.517 3.16.082.226.171.504-.133.618-.281.106-.344-.19-.438-.36-.438-.794-.88-1.586-1.287-2.393-.368-.733-.926-1.209-1.705-1.483-1.038-.364-1.657-.158-2.231.764-1.854 2.986-2.418 6.209-1.854 9.644.034.208.094.413.165.613.271.758.274.758-.574.856h-.002Zm-.423 2.437c-.143-.941-.396-1.79-.809-2.602-.211-.415-.827-.859-.04-1.328.029-.017.003-.22-.057-.271-.572-.508-.818-1.236-1.324-1.911-.216 1.3-.798 2.455-.612 3.809.42-.184.48-.484.595-.742.106-.24.295-.414.55-.403.316.015.353.33.366.541.032.527.015 1.059-.008 1.587-.026.612-.158 1.274.863 1.076.12-.024.277.139.474.246l.002-.002ZM6.776 21.128c.326-.215.326-.572.49-.837.321-.52 1.222-.954 1.72-.755.65.26.69.818.612 1.405-.205 1.573-.187 3.22-.696 4.689-.36 1.04.302 1.587.577 2.201.557 1.245.884 2.56 1.377 3.816.689 1.76 1.466 3.475 2.232 5.2.248.558.439 1.14.634 1.72.084.249.176.566-.137.704-.37.161-.429-.201-.54-.425-1.442-2.908-2.789-5.852-3.781-8.95-.33-1.029-.886-1.991-1.392-2.957-.37-.707-.952-1.248-1.762-1.415-1.872-.383-2.501-2.14-2.558-3.469-.027-.627.083-1.26.058-1.89-.019-.504.222-.819.613-1.03.438-.237.802.052 1.074.325.522.523.984 1.104 1.476 1.666l.003.002Zm1.447-.292c-.14.611-.25 1.232-.43 1.833-.088.287-.22.683-.529.739-.375.067-.477-.356-.632-.625-.241-.415-.448-.85-.705-1.254a16.595 16.595 0 0 0-1.05-1.507c-.179-.222-.503-.447-.623.08-.277 1.226-.241 2.442.341 3.577.493.963 2.006 1.76 2.992 1.427.684-.23.461-1.143.718-1.722.095-.216.14-.46.17-.696.077-.62.166-1.244-.254-1.852h.002ZM49.544 51.584c-.045.795-.56 1.084-1.236.646-.418-.27-.55-.258-.831.176-.447.69-1.465.571-1.855-.173-.569-1.084-.405-2.265-.136-3.346.174-.694.366-1.433.7-2.102.241-.482.523-.883 1.158-.755.323.065.522-.082.645-.348 1.04-2.259.812-4.448-.51-6.502-.736-1.148-2.571-1.226-3.567-.28-.532.505-.852 1.137-1.114 1.792-.259-.07-.267-.225-.244-.392.157-1.155 1.217-2.298 2.37-2.554 1.127-.249 2.541.313 3.2 1.255 1.19 1.697 1.646 3.549 1.257 5.592-.053.28-.138.568.13.82.586.553.83 1.303 1.078 2.028.333.98.638 1.976.86 2.987.239 1.095-.355 1.6-1.462 1.33-.149-.037-.288-.114-.441-.176l-.002.002Zm.68-.708.229-.124c-.4-1.312-.663-2.67-1.352-3.886-.092-.163-.194-.502-.444-.335-.443.297-.881.126-1.324.112-.238-.008-.429.045-.527.274-.608 1.407-1.129 2.83-.653 4.392.09.295.135.763.481.742.345-.02.314-.485.354-.785.059-.42.034-.856.133-1.264.116-.484.72-.684.88-.323.214.476.389.557.817.257.243-.169.529-.067.73.149.235.254.45.526.673.791h.004Z" />
              <path fill="#242424"
                    d="M33.89 64.155c.361-1.472.395-2.958.207-4.44-.345-2.742-.179-5.481.044-8.213.173-2.115.564-4.21 1.07-6.277.055-.223.038-.53.375-.514a.604.604 0 0 1 .578.484c.051.227.066.479.024.707a61.413 61.413 0 0 0-1.01 9.741c-.03 1.327.053 2.657.113 3.985.056 1.253-.11 2.493-.193 3.737-.022.335-.189.66-.281.991a.636.636 0 0 1-.67.474c-.38-.05-.1-.451-.255-.673l-.001-.002ZM31.792 45.054a13.95 13.95 0 0 1 .422 2.98c.217 4.948-.223 9.862-.825 14.764-.022.184-.084.362-.114.546-.059.35-.194.626-.615.581-.404-.043-.43-.367-.41-.66.093-1.535.198-3.069.312-4.603.187-2.538.331-5.08.481-7.621.097-1.64.004-3.293.298-4.92.058-.32.055-.675.453-1.067h-.002ZM36.985 57.937c-.335-2.766-.142-5.522.155-8.274.165-1.535.448-3.058 1-4.498.329-.856 1.103-1.413 1.946-1.822.198-.097.375-.062.498.112.12.172-.01.33-.127.413-2.177 1.573-1.89 4.038-2.235 6.228-.624 3.948-.123 7.892.294 11.827.04.382.044.712-.41.808-.423.091-.565-.22-.67-.535-.467-1.389-.176-2.854-.451-4.26v.001ZM20.762 62.54c-.085.376-.182.842-.3 1.304-.043.16-.162.29-.351.271-.207-.02-.233-.195-.25-.356-.198-2.112-.534-4.21-.657-6.333-.209-3.588-.737-7.128-1.97-10.533-.235-.648-.494-1.297-1.061-1.762-.115-.094-.293-.206-.167-.388.117-.168.31-.198.508-.15.385.096.658.348.905.635.59.685.902 1.512 1.167 2.347.87 2.723 1.316 5.522 1.523 8.367.142 1.958.374 3.91.566 5.865.021.21.048.421.084.73l.003.002ZM23.09 62.935c-.176-4.38-.55-8.741-1.207-13.08-.23-1.517-.715-2.936-1.224-4.363a2.213 2.213 0 0 1-.118-.538c-.014-.165.044-.322.223-.383.198-.066.31.065.382.21.21.43.436.856.598 1.305.823 2.292 1.145 4.695 1.503 7.083.523 3.467.888 6.95.841 10.464-.005.402-.042.797-.176 1.178-.09.256-.264.4-.548.369-.319-.035-.267-.292-.27-.49-.012-.584-.003-1.169-.003-1.755Z" />
            </svg>
          </div>
          <div class="homepage-features-item__title">стильный<br class="mobile-hide desktop-show"> брендированный короб
          </div>
          <div class="homepage-features-item__text">
            Эффектно вручать, удобно перевозить, безопасно доставлять
          </div>
        </div>
      </div>
    </div>
  </section>
  <section class="homepage-faq">
    <div class="container homepage-faq-container">
      <div class="homepage__title homepage-faq__title">Часто задаваемые вопросы</div>
      <div class="homepage-faq-list">
        <div class="homepage-faq-item">
          <div class="homepage-faq-item-top">
            <div class="homepage-faq-item-top__title">Будет ли мой букет точно таким же как на фото?</div>
            <div class="homepage-faq-item-top__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5"
                      d="m1.06 1.01 7.2 7.2c.15.15.39.15.54 0l7.2-7.2" />
              </svg>
            </div>
          </div>
          <div class="homepage-faq-item-hidden">
            <div class="homepage-faq-item__text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquid blanditiis cumque
              debitis distinctio doloribus eaque earum eligendi et fugiat illo ipsa itaque laborum molestiae nemo
              numquam obcaecati porro, quas qui quia quis, reiciendis repellat sapiente sit soluta tempore voluptatum!
              Deserunt dicta, et eveniet expedita explicabo facilis fugit incidunt, labore laborum nemo nesciunt nisi
              odio perferendis perspiciatis quaerat quibusdam recusandae sit voluptates. Assumenda cumque dolor facere
              impedit maiores nobis optio sequi sint velit! Ab alias dolore eaque, et eum explicabo iure totam. A
              accusamus aliquam amet corporis culpa, delectus dolorum ea eligendi enim eos eum facilis inventore libero
              maiores modi molestias mollitia nihil nostrum nulla obcaecati omnis optio pariatur perferendis placeat
              porro quisquam sapiente tempora tenetur ullam voluptatum. Blanditiis eveniet labore perspiciatis vel.
              Eaque et eveniet expedita fuga illo magni maiores modi molestias officia optio perspiciatis praesentium
              quasi quia quos repellat similique sint soluta tenetur, ut veritatis! Cum, inventore?
            </div>
          </div>
        </div>
        <div class="homepage-faq-item">
          <div class="homepage-faq-item-top">
            <div class="homepage-faq-item-top__title">Что делать, если букет мне не понравился?</div>
            <div class="homepage-faq-item-top__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5"
                      d="m1.06 1.01 7.2 7.2c.15.15.39.15.54 0l7.2-7.2" />
              </svg>
            </div>
          </div>
          <div class="homepage-faq-item-hidden">
            <div class="homepage-faq-item__text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
          </div>
        </div>
        <div class="homepage-faq-item">
          <div class="homepage-faq-item-top">
            <div class="homepage-faq-item-top__title">Вы можете приложить открытку к букету?</div>
            <div class="homepage-faq-item-top__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5"
                      d="m1.06 1.01 7.2 7.2c.15.15.39.15.54 0l7.2-7.2" />
              </svg>
            </div>
          </div>
          <div class="homepage-faq-item-hidden">
            <div class="homepage-faq-item__text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci aliquid blanditiis cumque
              debitis distinctio doloribus eaque earum eligendi et fugiat illo ipsa itaque laborum molestiae nemo
              numquam obcaecati porro, quas qui quia quis, reiciendis repellat sapiente sit soluta tempore voluptatum!
              Deserunt dicta, et eveniet expedita explicabo facilis fugit incidunt, labore laborum nemo nesciunt nisi
              odio perferendis perspiciatis quaerat quibusdam recusandae sit voluptates. Assumenda cumque dolor facere
              impedit maiores nobis optio sequi sint velit! Ab alias dolore eaque, et eum explicabo iure totam. A
              accusamus aliquam amet corporis culpa, delectus dolorum ea eligendi enim eos eum facilis inventore libero
              maiores modi molestias mollitia nihil nostrum nulla obcaecati omnis optio pariatur perferendis placeat
              porro quisquam sapiente tempora tenetur ullam voluptatum. Blanditiis eveniet labore perspiciatis vel.
              Eaque et eveniet expedita fuga illo magni maiores modi molestias officia optio perspiciatis praesentium
              quasi quia quos repellat similique sint soluta tenetur, ut veritatis! Cum, inventore?
            </div>
          </div>
        </div>
        <div class="homepage-faq-item">
          <div class="homepage-faq-item-top">
            <div class="homepage-faq-item-top__title">Это ваши фотографии на сайте?</div>
            <div class="homepage-faq-item-top__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5"
                      d="m1.06 1.01 7.2 7.2c.15.15.39.15.54 0l7.2-7.2" />
              </svg>
            </div>
          </div>
          <div class="homepage-faq-item-hidden">
            <div class="homepage-faq-item__text">
              Lorem ipsum dolor sit amet, consectetur adipisicing elit.
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
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

