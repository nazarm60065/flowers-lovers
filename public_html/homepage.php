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

<? include 'include/footer.php';

