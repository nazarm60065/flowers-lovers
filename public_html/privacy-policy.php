<?php
$pageConfig = [
    'metaTitle' => 'Политика обработки персональных данных',
    'title' => 'Политика обработки персональных данных',
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
    <h1 class="static__title">Политика обработки персональных данных</h1>
  </div>
  <div class="container">
    <div class="static-content">
      <div class="article">
        <p>
          г. Москва «23» мая 2024 г.<br>
          Настоящая Политика конфиденциальности персональных данных (далее – Политика конфиденциальности) действует в
          отношении всей информации, которую Интернет-магазин «Leto Flowers», расположенный на доменном
          имени www.flowerslovers.ru адрес магазина, может получить о Пользователе во время использования сайта Интернет
          магазина, программ и продуктов Интернет-магазина.
        </p>
        <h2>1. ОПРЕДЕЛЕНИЕ ТЕРМИНОВ</h2>
        <p>1.1. В настоящей Политике конфиденциальности используются следующие термины:</p>
        <p>1.1.1. «Администрация сайта
          Интернет-магазина (далее – Администрация сайта) » – уполномоченные сотрудники на управления
          сайтом www.flowerslovers.ru, действующие от имени Название организации, которые организуют и (или)
          осуществляет
          обработку персональных данных, а также определяет цели обработки персональных данных, состав персональных
          данных,
          подлежащих обработке, действия (операции), совершаемые с персональными данными. </p>
        <p>1.1.2. «Персональные данные» - любая информация, относящаяся к прямо или косвенно определенному или
          определяемому
          физическому лицу (субъекту персональных данных).</p>
        <p>1.1.3. «Обработка персональных данных» - любое действие
          (операция) или совокупность действий (операций), совершаемых с использованием средств автоматизации или без
          использования таких средств с персональными данными, включая сбор, запись, систематизацию, накопление, хранение,
          уточнение (обновление, изменение), извлечение, использование, передачу (распространение, предоставление,
          доступ),
          обезличивание, блокирование, удаление, уничтожение персональных данных. </p>
        <p>1.1.4. «Конфиденциальность персональных данных» - обязательное для соблюдения Оператором или иным получившим
          доступ к персональным данным лицом требование не допускать их распространения без согласия субъекта персональных
          данных или наличия иного законного основания. </p>
        <p>1.1.5. «Пользователь сайта Интернет-магазина (далее ‐ Пользователь)» – лицо, имеющее доступ к Сайту,
          посредством сети Интернет и использующее Сайт интернет-магазина.</p>
        <p>1.1.6. «Cookies» — небольшой фрагмент данных,
          отправленный веб-сервером и хранимый на компьютере пользователя, который веб-клиент или веб- браузер каждый
          раз пересылает веб-серверу в HTTP-запросе при попытке открыть страницу соответствующего сайта. </p>
        <p>1.1.7. «IP-адрес» — уникальный сетевой адрес узла в компьютерной сети, построенной по протоколу IP.</p>

        <h2>2. ОБЩИЕ ПОЛОЖЕНИЯ </h2>
        <p>2.1. Использование Пользователем сайта Интернет-магазина означает согласие с настоящей Политикой
          конфиденциальности и условиями обработки персональных данных Пользователя.</p>
        <p>2.2. В случае несогласия с условиями
          Политики конфиденциальности Пользователь должен прекратить использование сайта Интернет-магазина.</p>
        <p>2.3. Настоящая Политика конфиденциальности применяется только к сайту Интернет-магазина Leto Flowers.
          Интернет-магазин не контролирует и не несет ответственность за сайты третьих лиц, на которые Пользователь может
          перейти по ссылкам, доступным на сайте Интернет-магазина. </p>
        <p>2.4. Администрация сайта не проверяет достоверность персональных данных, предоставляемых Пользователем сайта
          Интернет-магазина.</p>

        <h2>3. ПРЕДМЕТ ПОЛИТИКИ КОНФИДЕНЦИАЛЬНОСТИ </h2>
        <p>3.1. Настоящая Политика конфиденциальности устанавливает обязательства Администрации сайта интернет-магазина
          по
          неразглашению и обеспечению режима защиты конфиденциальности персональных данных, которые Пользователь
          предоставляет по запросу Администрации сайта при регистрации на сайте интернет-магазина или при оформлении
          заказа для приобретения Товара. 
        <p>3.2. Персональные данные, разрешённые к обработке в рамках настоящей Политики конфиденциальности,
          предоставляются Пользователем путём заполнения регистрационной формы на Сайте интернет-магазина Название
          магазина в разделе Название раздела и включают в себя следующую информацию:<br>
          3.2.1. фамилию, имя, отчество Пользователя;<br>
          3.2.2. контактный телефон Пользователя; <br>
          3.2.3. адрес электронной почты (e-mail); <br>
          3.2.4. адрес доставки Товара; <br>
          3.2.5. место жительство Пользователя.</p>
        <p>3.3. Интернет-магазин защищает Данные, которые автоматически передаются в процессе просмотра рекламных блоков и
          при посещении страниц, на которых установлен статистический скрипт системы ("пиксель"):<br>
          IP адрес;<br>
          – информация из cookies;<br>
          – информация о браузере (или иной программе, которая осуществляет доступ к показу рекламы);<br>
          – время доступа;<br>
          – адрес страницы, на которой расположен рекламный блок;<br>
          – реферер (адрес предыдущей страницы). </p>
        <p>3.3.1. Отключение cookies может повлечь невозможность доступа к частям сайта Интернет-магазина, требующим
          авторизации. </p>
        <p>3.3.2. Интернет-магазин осуществляет сбор статистики об IP-адресах своих посетителей. Данная информация
          используется с целью выявления и решения технических проблем, для контроля законности проводимых финансовых
          платежей. </p>
        <p> 3.4. Любая иная персональная информация неоговоренная выше (история покупок, используемые браузеры и
          операционные системы и т.д.) подлежит надежному хранению и нераспространению, за исключением случаев,
          предусмотренных в п.п. 5.2. и 5.3. настоящей Политики конфиденциальности.  </p>

        <h2>4. ЦЕЛИ СБОРА ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ ПОЛЬЗОВАТЕЛЯ </h2>
        <p>4.1. Персональные данные Пользователя Администрация сайта интернет-магазина может использовать в целях:<br>
          4.1.1. Идентификации Пользователя, зарегистрированного на сайте Интернет-магазина, для оформления заказа и
          (или)
          заключения Договора купли-продажи товара дистанционным способом с Название интернет-магазина.<br>
          4.1.2. Предоставления Пользователю доступа к персонализированным ресурсам Сайта интернет-магазина.<br>
          4.1.3. Установления с Пользователем обратной связи, включая направление уведомлений, запросов, касающихся
          использования Сайта интернет-магазина, оказания услуг, обработка запросов и заявок от Пользователя.<br>
          4.1.4. Определения места нахождения Пользователя для обеспечения безопасности, предотвращения мошенничества.<br>
          4.1.5. Подтверждения достоверности и полноты персональных данных, предоставленных Пользователем.<br>
          4.1.6. Создания учетной записи для совершения покупок, если Пользователь дал согласие на создание учетной
          записи.<br>
          4.1.7. Уведомления Пользователя Сайта интернет-магазина о состоянии Заказа.<br>
          4.1.8. Обработки и получения платежей, подтверждения налога или налоговых льгот, оспаривания платежа,
          определения
          права на получение кредитной линии Пользователем.<br>
          4.1.9. Предоставления Пользователю эффективной клиентской и технической поддержки при возникновении проблем
          связанных с использованием Сайта интернет-магазина.<br>
          4.1.10. Предоставления Пользователю с его согласия, обновлений продукции, специальных предложений, информации
          о
          ценах, новостной рассылки и иных сведений от имени Интернет-магазина или от имени партнеров Интернет-
          магазина.<br>
          4.1.11. Осуществления рекламной деятельности с согласия Пользователя.<br>
          4.1.12. Предоставления доступа Пользователю на сайты или сервисы партнеров Интернет-магазина с целью получения
          продуктов, обновлений и услуг.</p>

        <h2>5. СПОСОБЫ И СРОКИ ОБРАБОТКИ ПЕРСОНАЛЬНОЙ ИНФОРМАЦИИ</h2>
        <p>5.1. Обработка персональных данных Пользователя осуществляется без ограничения срока, любым законным способом,
          в
          том числе в информационных системах персональных данных с использованием средств автоматизации или без
          использования таких средств.</p>
        <p>5.2. Пользователь соглашается с тем, что Администрация сайта вправе передавать персональные данные третьим
          лицам, в частности, курьерским службам, организациями почтовой связи, операторам электросвязи, исключительно в
          целях выполнения заказа Пользователя, оформленного на Сайте интернет-магазина www.flowerslovers.ru, включая
          доставку Товара.</p>
        <p>5.3. Персональные данные Пользователя могут быть переданы уполномоченным органам государственной власти
          Российской Федерации только по основаниям и в порядке, установленным законодательством Российской
          Федерации. </p>
        <p>5.4. При утрате или разглашении персональных данных Администрация сайта информирует Пользователя об утрате или
          разглашении персональных данных.  5.5. Администрация сайта принимает необходимые организационные и технические
          меры для защиты персональной информации Пользователя от неправомерного или случайного доступа, уничтожения,
          изменения, блокирования, копирования, распространения, а также от иных неправомерных действий третьих
          лиц. </p>
        <p>5.6. Администрация сайта совместно с Пользователем принимает все необходимые меры по предотвращению убытков
          или
          иных отрицательных последствий, вызванных утратой или разглашением персональных данных Пользователя.</p>

        <h2>6. ОБЯЗАТЕЛЬСТВА СТОРОН</h2>
        <p>6.1. Пользователь обязан:<br>
          6.1.1. Предоставить информацию о персональных данных, необходимую для пользования Сайтом интернет-магазина.<br>
          6.1.2. Обновить, дополнить предоставленную информацию о персональных данных в случае изменения данной
          информации.
        </p>
        <p>6.2. Администрация сайта обязана:<br>
          6.2.1. Использовать полученную информацию исключительно для целей, указанных в п. 4 настоящей Политики
          конфиденциальности.<br>
          6.2.2. Обеспечить хранение конфиденциальной информации в тайне, не разглашать без предварительного письменного
          разрешения Пользователя, а также не осуществлять продажу, обмен, опубликование, либо разглашение иными
          возможными
          способами переданных персональных данных Пользователя, за исключением п.п. 5.2. и 5.3. настоящей Политики
          Конфиденциальности.<br>
          6.2.3. Принимать меры предосторожности для защиты конфиденциальности персональных данных Пользователя согласно
          порядку, обычно используемого для защиты такого рода информации в существующем деловом обороте. 6.2.4.
          Осуществить
          блокирование персональных данных, относящихся к соответствующему Пользователю, с момента обращения или запроса
          Пользователя или его законного представителя либо уполномоченного органа по защите прав субъектов персональных
          данных на период проверки, в случае выявления недостоверных персональных данных или неправомерных действий.
        </p>

        <h2>7. ОТВЕТСТВЕННОСТЬ СТОРОН</h2>
        <p>7.1. Администрация сайта, не исполнившая свои обязательства, несёт ответственность за убытки, понесённые
          Пользователем в связи с неправомерным использованием персональных данных, в соответствии с законодательством
          Российской Федерации, за исключением случаев, предусмотренных п.п. 5.2., 5.3. и 7.2. настоящей Политики
          Конфиденциальности. </p>
        <p>7.2. В случае утраты или разглашения Конфиденциальной информации Администрация сайта не несёт
          ответственность,
          если данная конфиденциальная информация:<br>
          7.2.1. Стала публичным достоянием до её утраты или разглашения.<br>
          7.2.2. Была получена от третьей стороны до момента её получения Администрацией сайта.<br>
          7.2.3. Была разглашена с согласия Пользователя.</p>

        <h2>8. РАЗРЕШЕНИЕ СПОРОВ</h2>
        <p>8.1. До обращения в суд с иском по спорам, возникающим из отношений между Пользователем сайта
          Интернет-магазина
          и
          Администрацией сайта, обязательным является предъявление претензии (письменного предложения о добровольном
          урегулировании спора).</p>
        <p>8.2 Получатель претензии в течение 30 календарных дней со дня получения претензии, письменно уведомляет
          заявителя
          претензии о результатах рассмотрения претензии.</p>
        <p>8.3. При не достижении соглашения спор будет передан на рассмотрение в судебный орган в соответствии с
          действующим законодательством Российской Федерации.</p>
        <p>8.4. К настоящей Политике конфиденциальности и отношениям между Пользователем и Администрацией сайта
          применяется
          действующее законодательство Российской Федерации.</p>

        <h2>9. ДОПОЛНИТЕЛЬНЫЕ УСЛОВИЯ </h2>
        <p>9.1. Администрация сайта вправе вносить изменения в настоящую Политику конфиденциальности без согласия
          Пользователя.</p>
        <p>9.2. Новая Политика конфиденциальности вступает в силу с момента ее размещения на Сайте
          интернет-магазина, если иное не предусмотрено новой редакцией Политики конфиденциальности.</p>
        <p>9.3. Все предложения или вопросы по настоящей Политике конфиденциальности следует сообщать
          на hello@flowerslovers.ru</p>
        <p>9.4. Действующая Политика конфиденциальности размещена на странице по адресу
          www.flowerslovers.ru<br>
          Обновлено «23» мая 2024г.</p>
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

