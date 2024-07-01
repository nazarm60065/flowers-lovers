<?php
$pageConfig = [
    'metaTitle' => 'Главная',
    'title' => 'Главная',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-homepage/bundle-homepage.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-homepage/bundle-homepage.js',
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
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <div class="homepage-catalog-slide__available">
                  Только под заказ
                </div>
                <img src="/local/assets/images/catalog/image1.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Дыхание весны</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">19 500</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">XS</span>
                  <span class="homepage-catalog-slide-sku-item__note">30 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">XXL</span>
                  <span class="homepage-catalog-slide-sku-item__note">65 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image2.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото 55 шт.
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Пионовидные розы O'HARA (розовая) в корзине</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">22 400</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">35 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">55 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">75 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image3.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Искушение</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">33 900</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image4.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото 69 шт.
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Розы алые</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">22 400</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">29 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">39 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">49 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">59 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">69 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">79 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">89 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
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
          <div class="swiper-slide homepage-collection-ta" data-index="8" data-tab="8">
            <button class="homepage-collection-tab__button" type="button">Нежная</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="9" data-tab="9">
            <button class="homepage-collection-tab__button" type="button">Солнечная</button>
          </div>
          <div class="swiper-slide homepage-collection-tab" data-index="10" data-tab="10">
            <button class="homepage-collection-tab__button" type="button">Нату</button>
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
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="1">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <div class="homepage-catalog-slide__available">
                  Только под заказ
                </div>
                <img src="/local/assets/images/catalog/image1.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Дыхание весны</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">19 500</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">XS</span>
                  <span class="homepage-catalog-slide-sku-item__note">30 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">XXL</span>
                  <span class="homepage-catalog-slide-sku-item__note">65 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">собрать похожий</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="2">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image2.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото 55 шт.
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Пионовидные розы O'HARA (розовая) в корзине</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">22 400</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">35 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">55 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">75 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="3">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image3.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Искушение</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">33 900</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="1">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image4.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото 69 шт.
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Розы алые</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">22 400</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">29 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">39 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">49 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">59 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">69 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">79 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">89 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="2">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image2.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото 55 шт.
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Пионовидные розы O'HARA (розовая) в корзине</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">22 400</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">35 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">55 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">75 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="3">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image3.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Искушение</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">33 900</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="3">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <div class="homepage-catalog-slide__available">
                  Только под заказ
                </div>
                <img src="/local/assets/images/catalog/image1.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Дыхание весны</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">19 500</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">XS</span>
                  <span class="homepage-catalog-slide-sku-item__note">30 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">XXL</span>
                  <span class="homepage-catalog-slide-sku-item__note">65 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="1">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image2.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото 55 шт.
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Пионовидные розы O'HARA (розовая) в корзине</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">22 400</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">35 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">55 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">75 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="1">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image3.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Искушение</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">33 900</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="1">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image3.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Искушение</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">33 900</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="4">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <div class="homepage-catalog-slide__available">
                  Только под заказ
                </div>
                <img src="/local/assets/images/catalog/image1.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Дыхание весны</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">19 500</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">XS</span>
                  <span class="homepage-catalog-slide-sku-item__note">30 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">XXL</span>
                  <span class="homepage-catalog-slide-sku-item__note">65 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">собрать похожий</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="5">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image2.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото 55 шт.
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Пионовидные розы O'HARA (розовая) в корзине</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">22 400</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">35 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">55 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">75 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="6">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image3.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Искушение</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">33 900</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="7">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image4.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото 69 шт.
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Розы алые</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">22 400</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">29 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">39 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">49 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">59 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">69 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">79 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">89 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="8">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <div class="homepage-catalog-slide__available">
                  Только под заказ
                </div>
                <img src="/local/assets/images/catalog/image1.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Дыхание весны</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">19 500</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">XS</span>
                  <span class="homepage-catalog-slide-sku-item__note">30 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">XXL</span>
                  <span class="homepage-catalog-slide-sku-item__note">65 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">собрать похожий</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="9">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image2.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото 55 шт.
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Пионовидные розы O'HARA (розовая) в корзине</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">22 400</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">35 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">55 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">75 шт.</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">101 шт.</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
          <div class="swiper-slide homepage-catalog-slide homepage-catalog-card" data-tab="10">
            <div class="homepage-catalog-slide-image-wrapper">
              <div class="homepage-catalog-slide-image-inner homepage-catalog-slide-image-inner_active">
                <img src="/local/assets/images/catalog/image3.jpg" alt="Дыхание весны"
                     class="homepage-catalog-slide-image__img" loading="lazy">
                <div class="homepage-catalog-slide__label">
                  На фото размер L
                </div>
              </div>
            </div>
            <div class="homepage-catalog-slide-content">
              <div class="homepage-catalog-slide__title">Искушение</div>
              <div class="homepage-catalog-slide-price">
                <div class="homepage-catalog-slide-price-base">
                  <span class="homepage-catalog-slide-price__value">33 900</span><span
                    class="homepage-catalog-slide-price__currency">₽</span>
                </div>
              </div>
              <div class="homepage-catalog-slide-sku">
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">S</span>
                  <span class="homepage-catalog-slide-sku-item__note">35 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">М</span>
                  <span class="homepage-catalog-slide-sku-item__note">40 см</span>
                </button>
                <button class="homepage-catalog-slide-sku-item homepage-catalog-slide-sku-item_active" type="button">
                  <span class="homepage-catalog-slide-sku-item__value">L</span>
                  <span class="homepage-catalog-slide-sku-item__note">45 см</span>
                </button>
              </div>
              <div class="homepage-catalog-slide-button-container">
                <button class="button button_linear homepage-catalog-slide__to-cart" type="button">В корзину</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="homepage-collection-button-container">
        <a class="button button_filled-pink homepage-collection__button">перейти в каталог</a>
      </div>
    </div>
  </section>

<? include 'include/footer.php';

