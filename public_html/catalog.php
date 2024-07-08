<?php
$pageConfig = [
    'metaTitle' => 'Каталог',
    'title' => 'Каталог',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-catalog/bundle-catalog.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-catalog/bundle-catalog.js',
        '/local/assets/local/bundle-form/bundle-form.js',
    ],
    'main_class' => 'catalog',
    'isMainPage' => false,
    'isCatalogPage' => false,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
  <div class="catalog-bg">
    <div class="catalog-bg-inner">
      <img src="/local/assets/images/catalog/jumbo.jpg" alt="каталог букетов" width="1920" height=""
           class="catalog-bg__img">
    </div>
  </div>
  <div class="catalog-breadcrumbs">
    <div class="container catalog-container">
        <?= $mustache->render('breadcrumbs', include $_SERVER['DOCUMENT_ROOT'] . '/context/catalog/breadcrumbs.php'); ?>
    </div>
  </div>
  <div class="container catalog-container">
    <h1 class="catalog__title">Каталог букетов</h1>
  </div>
  <div class="container" style="margin-bottom: 20px;">
    <a href="#modal-message" data-fancybox>Сообщение в модальном окне</a>
  </div>
  <div class="catalog-sections-wrapper">
    <div class="container catalog-container">
      <div class="swiper catalog-sections">
        <div class="swiper-wrapper">
          <div class="swiper-slide catalog-sections-slide catalog-sections-slide_active">
            <a href="#" class="catalog-sections-slide__link">Все</a>
          </div>
          <div class="swiper-slide catalog-sections-slide">
            <a href="#" class="catalog-sections-slide__link">Express-доставка от 2 часов</a>
          </div>
          <div class="swiper-slide catalog-sections-slide">
            <a href="#" class="catalog-sections-slide__link">Это осень</a>
          </div>
          <div class="swiper-slide catalog-sections-slide">
            <a href="#" class="catalog-sections-slide__link">Авторские</a>
          </div>
          <div class="swiper-slide catalog-sections-slide">
            <a href="#" class="catalog-sections-slide__link">Монобукеты</a>
          </div>
          <div class="swiper-slide catalog-sections-slide">
            <a href="#" class="catalog-sections-slide__link">Пионовидные розы</a>
          </div>
          <div class="swiper-slide catalog-sections-slide">
            <a href="#" class="catalog-sections-slide__link">Наборы для дома</a>
          </div>
          <div class="swiper-slide catalog-sections-slide">
            <a href="#" class="catalog-sections-slide__link">Корзины и шляпные коробки</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container catalog-container">
    <div class="catalog-toolbar">
      <button class="catalog__toggle catalog__filter-toggle" type="button">
        <span class="catalog__toggle-icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="15" height="14" fill="none" viewBox="0 0 15 14"><path
              stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5"
              d="M6.987 10.295H.395M14.605 10.295h-3.15M9.9 11.657c.82 0 1.484-.655 1.484-1.463 0-.807-.664-1.462-1.484-1.462s-1.484.655-1.484 1.462c0 .808.665 1.463 1.484 1.463ZM7.225 4.369h7.381M.395 4.369h2.423M4.31 5.924c.82 0 1.485-.654 1.485-1.462C5.795 3.655 5.13 3 4.31 3c-.82 0-1.484.655-1.484 1.462 0 .808.665 1.462 1.484 1.462Z" /></svg>
        </span>
        <span class="catalog__toggle-text">Фильтр</span>
      </button>
      <div class="dropdown catalog-sort">
        <button class="dropdown__current catalog__toggle catalog__sort-toggle" type="button">
          <span class="catalog__toggle-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="15" fill="none" viewBox="0 0 16 15"><path
                stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".5"
                d="M7 11.29h2M5 8.763h6M3 6h10M1 3h14" /></svg>
          </span>
          <span class="dropdown-current__text catalog__toggle-text ">Сортировка</span>
        </button>
        <div class="dropdown-hidden catalog-sort-hidden">
          <div class="dropdown-list catalog-sort-list" id="sort">
            <div class="catalog-sort-item" data-value="По популярности">
              <a href="#" class="catalog-sort-item__link">По популярности</a>
            </div>
            <div class="catalog-sort-item" data-value="Сначала дешевле">
              <a href="#" class="catalog-sort-item__link">Сначала дешевле</a>
            </div>
            <div class="catalog-sort-item" data-value="Сначала дороже">
              <a href="#" class="catalog-sort-item__link">Сначала дороже</a>
            </div>
            <div class="catalog-sort-item" data-value="По новизне">
              <a href="#" class="catalog-sort-item__link">По новизне</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="catalog-stack">
      <button class="catalog-stack__reset" type="button">Очистить все</button>
      <button class="catalog-stack-item">
        <span class="catalog-stack-item__icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="none" viewBox="0 0 9 9"><path
              stroke="#242424" stroke-linecap="round" stroke-width=".7" d="m1 1.054 7 7M8 .946l-7 7" /></svg>
        </span>
        <span class="catalog-stack-item__text">Яркая</span>
      </button>
      <button class="catalog-stack-item">
        <span class="catalog-stack-item__icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="none" viewBox="0 0 9 9"><path
              stroke="#242424" stroke-linecap="round" stroke-width=".7" d="m1 1.054 7 7M8 .946l-7 7" /></svg>
        </span>
        <span class="catalog-stack-item__text">18 000 – 25 000₽</span>
      </button>
      <button class="catalog-stack-item">
        <span class="catalog-stack-item__icon">
          <svg xmlns="http://www.w3.org/2000/svg" width="9" height="9" fill="none" viewBox="0 0 9 9"><path
              stroke="#242424" stroke-linecap="round" stroke-width=".7" d="m1 1.054 7 7M8 .946l-7 7" /></svg>
        </span>
        <span class="catalog-stack-item__text">Доставка сегодня/в течение недели</span>
      </button>
    </div>
  </div>
  <div class="catalog-list">
    <div class="catalog-card">
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
    <div class="catalog-card">
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
    <div class="catalog-card">
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
    <div class="catalog-card">
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
    <div class="catalog-card">
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
    <div class="catalog-card">
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

    <div class="catalog-card catalog-mega-card">
      <div class="catalog-card-image-wrapper catalog-mega-card-wrapper">
        <div class="catalog-card-image-inner">
          <picture class="catalog-mega-card__picture">
            <source media="(max-width: 767px)" srcset="/local/assets/images/catalog/mega-image-mobile.jpg">
            <source media="(max-width: 1279px)" srcset="/local/assets/images/catalog/mega-image-tablet.jpg">
            <img src="/local/assets/images/catalog/mega-image.jpg" alt="Сливочная глазурь"
                 class="catalog-card-image__img" loading="lazy">
          </picture>
          <div class="catalog-card__label">
            На фото 69 шт.
          </div>
        </div>
      </div>
      <div class="catalog-card-content catalog-mega-card-content">
        <div class="catalog-card__title catalog-mega-card__title">Сливочная глазурь</div>
        <div class="catalog-card-price catalog-mega-card-price">
          <div class="catalog-card-price-base">
            <span class="catalog-card-price__value">27 000</span><span
              class="catalog-card-price__currency">₽</span>
          </div>
        </div>
        <div class="catalog-card-button-container catalog-mega-card-button-container">
          <button class="button button_linear catalog-card__to-cart catalog-mega-card__to-cart" type="button">В
            корзину
          </button>
        </div>
      </div>
      <a href="#" class="link-as-card"></a>
    </div>

    <div class="catalog-card">
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
    <div class="catalog-card">
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
    <div class="catalog-card">
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
    <div class="catalog-card">
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
    <div class="catalog-card">
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
    <div class="catalog-card">
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

    <div class="catalog-card catalog-mega-card catalog-mega-card_reverse">
      <div class="catalog-card-image-wrapper catalog-mega-card-wrapper">
        <div class="catalog-card-image-inner">
          <picture class="catalog-mega-card__picture">
            <source media="(max-width: 767px)" srcset="/local/assets/images/catalog/mega-image-mobile.jpg">
            <source media="(max-width: 1279px)" srcset="/local/assets/images/catalog/mega-image-tablet.jpg">
            <img src="/local/assets/images/catalog/mega-image.jpg" alt="Сливочная глазурь"
                 class="catalog-card-image__img" loading="lazy">
          </picture>
          <div class="catalog-card__label">
            На фото 69 шт.
          </div>
        </div>
      </div>
      <div class="catalog-card-content catalog-mega-card-content">
        <div class="catalog-card__title catalog-mega-card__title">Завтрак у Тиффани (цветочная корзина)</div>
        <div class="catalog-card-price catalog-mega-card-price">
          <div class="catalog-card-price-base">
            <span class="catalog-card-price__value">49 500</span><span
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
        <div class="catalog-card-button-container catalog-mega-card-button-container">
          <button class="button button_linear catalog-card__to-cart catalog-mega-card__to-cart" type="button">В
            корзину
          </button>
        </div>
      </div>
      <a href="#" class="link-as-card"></a>
    </div>

    <div class="catalog-card">
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
    <div class="catalog-card">
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
    <div class="catalog-card">
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

    <div class="pager catalog-pager">
      <div class="pager-infinity-container">
        <button class="button button_filled-pink pager__infinity" type="button">Загрузить еще</button>
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
  <div class="filter-modal-overlay"></div>
  <div class="filter-modal" id="filter">
    <div class="filter-modal-top">
      <div class="container filter-modal-top-container">
        <button class="button button_linear-brown filter-modal__reset" type="button">Очистить все</button>
        <button class="filter-modal__close" type="button">
          <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
            <path stroke="#242424" d="m7.354 6.646 16.97 16.971M6.646 23.646l16.971-16.97" />
          </svg>
        </button>
      </div>
    </div>
    <div class="filter-modal-inner">
      <div class="filter-group">
        <div class="container filter-group-container">
          <div class="filter-group-top">
            <div class="filter-group__title">Цена</div>
            <div class="filter-group__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".6"
                      d="m1 .829 7.229 7.229c.15.15.391.15.542 0L16 .829" />
              </svg>
            </div>
          </div>
          <div class="filter-group-hidden">
            <div class="filter-group-inner">
              <div class="filter-range">
                <div class="filter-range-slider" data-min="6000" data-max="45000" data-step="1"
                     data-start="6000,45000"></div>
                <div class="filter-range-list">
                  <div class="filter-range-item filter-range-min">
                    <input type="text" class="filter-range__control filter-range-min__control" value="6000">
                  </div>
                  —
                  <div class="filter-range-item filter-range-max">
                    <input type="text" class="filter-range__control filter-range-max__control" value="45000">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="filter-group">
        <div class="container filter-group-container">
          <div class="filter-group-top">
            <div class="filter-group__title">Время доставки</div>
            <div class="filter-group__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".6"
                      d="m1 .829 7.229 7.229c.15.15.391.15.542 0L16 .829" />
              </svg>
            </div>
          </div>
          <div class="filter-group-hidden">
            <div class="filter-group-inner">
              <div class="filter-checkbox-list">
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property1">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">Экспресс</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">В течение дня</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property3">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">В течение недели</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property4">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">Под заказ</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="filter-group">
        <div class="container filter-group-container">
          <div class="filter-group-top">
            <div class="filter-group__title">Цветовая гамма</div>
            <div class="filter-group__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".6"
                      d="m1 .829 7.229 7.229c.15.15.391.15.542 0L16 .829" />
              </svg>
            </div>
          </div>
          <div class="filter-group-hidden">
            <div class="filter-group-inner">
              <div class="filter-checkbox-list">
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_1">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">яркая</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_2">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">пастельная</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_3">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">розовая</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_4">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">акварельная</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_5">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">белая</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_6">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">свежая</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_7">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">зеленая</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_8">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">нежная</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_9">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">солнечная</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_10">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">натуральная бежевая</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_11">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">оранжевая</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_12">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">дерзкая</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_13">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">лавандовая цвета неба</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property2_14">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">с мужским характером</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="filter-group">
        <div class="container filter-group-container">
          <div class="filter-group-top">
            <div class="filter-group__title">вид букета</div>
            <div class="filter-group__icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                <path stroke="#242424" stroke-linecap="round" stroke-miterlimit="10" stroke-width=".6"
                      d="m1 .829 7.229 7.229c.15.15.391.15.542 0L16 .829" />
              </svg>
            </div>
          </div>
          <div class="filter-group-hidden">
            <div class="filter-group-inner">
              <div class="filter-checkbox-list">
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property3_1">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">Экспресс</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property3_2">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">В течение дня</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property3_3">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">В течение недели</span>
                  </label>
                </div>
                <div class="filter-checkbox">
                  <label class="filter-checkbox-label">
                    <input type="checkbox" class="form-hidden filter-checkbox__control" name="property3_4">
                    <span class="filter-checkbox__marker"></span>
                    <span class="filter-checkbox__text">Под заказ</span>
                  </label>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="filter-modal-bottom">
      <div class="container filter-modal-bottom-container">
        <button class="button button_filled-pink filter-modal__submit" type="button">Применить фильтр (15)</button>
      </div>
    </div>
  </div>

  <div class="modal-message" id="modal-message">
    <div class="container modal-message-container">
      <div class="modal-message-inner">
        <div class="modal-message__text">
          Не все цветы этого букета сейчас в сезоне и доступны к заказу, но при сборке букета мы сохраним общую гамму и
          стилистику. А после оформления обязательно согласуем изменения с вами.
        </div>
        <div class="modal-message-button-container">
          <button class="button button_filled-pink modal-message__button" type="button" data-fancybox-close>хорошо,
            добавить в корзину
          </button>
        </div>
      </div>
    </div>
    <button class="modal-message__close" type="button" data-fancybox-close>
      <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="none" viewBox="0 0 32 32">
        <path stroke="#242424" d="m7.354 6.646 16.97 16.971M6.646 23.646l16.971-16.97" />
      </svg>
    </button>
  </div>

<? include 'include/footer.php';

