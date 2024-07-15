<?php
$pageConfig = [
    'metaTitle' => 'Доставка',
    'title' => 'Доставка',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-delivery/bundle-delivery.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-delivery/bundle-delivery.js',
        '/local/assets/local/bundle-form/bundle-form.js',
    ],
    'main_class' => 'delivery',
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
    <div class="delivery-top">
      <h1 class="delivery__title"><?= $pageConfig['title'] ?></h1>
    </div>
    <div class="delivery-list-wrapper">
      <div class="delivery-list__title">стоимость доставки в&nbsp;пределах мкад, новой москве и&nbsp;в&nbsp;аэропорт
      </div>
      <div class="delivery-list">
        <div class="delivery-item">
          <div class="delivery-item-col delivery-item-col_first">
            <div class="delivery-item__header delivery-item__header_desktop">Место доставки</div>
            <div class="delivery-item__title">В пределах МКАД</div>
          </div>
          <div class="delivery-item-col">
            <div class="delivery-time-table">
              <div class="delivery-time-table-row delivery-time-table-row_headers">
                <div class="delivery-item__header">Время и интервал</div>
                <div class="delivery-item__header">Стоимость</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">8:00-22:00 (в течение 4 часов)</div>
                <div class="delivery-time-table-cell">500 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">9:00-22:00 (в течение 1 часа)</div>
                <div class="delivery-time-table-cell">1 200 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">22:00-00:00 (в течение 2 часов)</div>
                <div class="delivery-time-table-cell">1 500 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">7:00-9:00 (в течение 2 часов)</div>
                <div class="delivery-time-table-cell">1 000 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">6:00-8:00 (в течение 2 часов)</div>
                <div class="delivery-time-table-cell">1 500 ₽</div>
              </div>
            </div>
          </div>
        </div>
        <div class="delivery-item">
          <div class="delivery-item-col delivery-item-col_first">
            <div class="delivery-item__header delivery-item__header_desktop">Место доставки</div>
            <div class="delivery-item__title">
              Новая Москва<br>
              <small>от метро не более 1 км</small>
            </div>
          </div>
          <div class="delivery-item-col">
            <div class="delivery-time-table">
              <div class="delivery-time-table-row">
                <div class="delivery-item__header">Время и интервал</div>
                <div class="delivery-item__header">Стоимость</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">8:00-22:00 (в течение 4 часов)</div>
                <div class="delivery-time-table-cell">800 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">22:00-00:00 (в течение 2 часов)</div>
                <div class="delivery-time-table-cell">1 500 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">6:00-9:00 (в течение 3 часов)</div>
                <div class="delivery-time-table-cell">1 500 ₽</div>
              </div>
            </div>
          </div>
        </div>
        <div class="delivery-item ">
          <div class="delivery-item-col delivery-item-col_first">
            <div class="delivery-item__header delivery-item__header_desktop">Место доставки</div>
            <div class="delivery-item__title">
              Аэропорт
            </div>
          </div>
          <div class="delivery-item-col">
            <div class="delivery-time-table">
              <div class="delivery-time-table-row">
                <div class="delivery-item__header">Время и интервал</div>
                <div class="delivery-item__header">Стоимость</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">Любое время (в течение 4 часов)</div>
                <div class="delivery-time-table-cell">2 500 ₽</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="delivery-list-wrapper">
      <div class="delivery-list__title">стоимость доставки за&nbsp;пределами мкад</div>
      <div class="delivery-list">
        <div class="delivery-item">
          <div class="delivery-item-col delivery-item-col_first">
            <div class="delivery-item__header delivery-item__header_desktop">Место доставки</div>
            <div class="delivery-item__title delivery-item__title_mobile">с 8:00 до 24:00, в течение 4 часов</div>
            <div class="delivery-item__title delivery-item__title_desktop">
              за пределами МКАД<br>
              <small>с 8:00 до 24:00, в течение 4 часов</small>
            </div>
          </div>
          <div class="delivery-item-col">
            <div class="delivery-time-table">
              <div class="delivery-time-table-row">
                <div class="delivery-item__header">Расстояние от МКАД</div>
                <div class="delivery-item__header">Стоимость</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">0-5 км</div>
                <div class="delivery-time-table-cell">1 100 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">6-10 км</div>
                <div class="delivery-time-table-cell">1 400 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">11-20 км</div>
                <div class="delivery-time-table-cell">1 800 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">21-30 км</div>
                <div class="delivery-time-table-cell">2 000 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">31-50 км</div>
                <div class="delivery-time-table-cell">2 600 ₽</div>
              </div>
            </div>
          </div>
        </div>
        <div class="delivery-item">
          <div class="delivery-item-col delivery-item-col_first">
            <div class="delivery-item__header delivery-item__header_desktop">Место доставки</div>
            <div class="delivery-item__title delivery-item__title_mobile">до 8:00, в течение 2 часов</div>
            <div class="delivery-item__title delivery-item__title_desktop">
              за пределами МКАД<br>
              <small>до 8:00, в течение 2 часов</small>
            </div>
          </div>
          <div class="delivery-item-col">
            <div class="delivery-time-table">
              <div class="delivery-time-table-row">
                <div class="delivery-item__header">Расстояние от МКАД</div>
                <div class="delivery-item__header">Стоимость</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">0-5 км</div>
                <div class="delivery-time-table-cell">1 500 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">6-10 км</div>
                <div class="delivery-time-table-cell">1 800 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">11-20 км</div>
                <div class="delivery-time-table-cell">2 100 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">21-30 км</div>
                <div class="delivery-time-table-cell">2 400 ₽</div>
              </div>
              <div class="delivery-time-table-row">
                <div class="delivery-time-table-cell">31-50 км</div>
                <div class="delivery-time-table-cell">3 000 ₽</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="delivery-images">
      <div class="delivery__title delivery-images__title">
        Доставка букетов продумана до&nbsp;мелочей
      </div>
      <div class="delivery-images-list">
        <div class="delivery-images-item">
          <div class="delivery-images-item-wrapper">
            <div class="delivery-images-item-inner">
              <img src="/local/assets/images/delivery/image1.jpg" alt="Доставка букетов продумана до&nbsp;мелочей"
                   class="delivery-images-item__img" loading="lazy">
            </div>
          </div>
          <div class="delivery-images-item__title">
            Стильный брендированный короб
          </div>
        </div>
        <div class="delivery-images-item">
          <div class="delivery-images-item-wrapper">
            <div class="delivery-images-item-inner">
              <img src="/local/assets/images/delivery/image2.jpg" alt="Доставка букетов продумана до&nbsp;мелочей"
                   class="delivery-images-item__img" loading="lazy">
            </div>
          </div>
          <div class="delivery-images-item__title">
            Транспортировочная вазочка с&nbsp;водой, удобрение и&nbsp;рекомендации по&nbsp;уходу
          </div>
        </div>
      </div>
    </div>
  </div>
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
        </div>
      </div>
    </div>
  </section>


<? include 'include/footer.php';

