<?php
/** @var array $pageConfig */

$mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/assets/mustache/'),
));
?>

</main>

<footer class="footer">
  <div class="container footer-container">
    <div class="footer-inner">
      <div class="footer-logo-container">
        <div class="footer-logo">
          <svg xmlns="http://www.w3.org/2000/svg" width="90" height="37" fill="none" viewBox="0 0 90 37">
            <path fill="#fff"
                  d="M0 .256h7.781V1.63H1.543v5.495h6.013V8.5H1.543v6.966H0V.255ZM10.61.256h1.512v35.019h6.335v1.406H10.61V.256ZM31.768 7.828c0 1.438-.353 2.748-1.093 3.962s-1.704 2.173-2.958 2.876a8.121 8.121 0 0 1-4.02 1.054 8.003 8.003 0 0 1-3.986-1.054c-1.254-.703-2.251-1.63-2.99-2.844a7.247 7.247 0 0 1-1.126-3.898c0-1.406.353-2.78 1.093-3.962.74-1.214 1.704-2.173 2.958-2.876C20.9.383 22.251 0 23.698 0a7.83 7.83 0 0 1 3.987 1.054c1.254.703 2.25 1.63 2.99 2.844a7.275 7.275 0 0 1 1.126 3.93h-.032Zm-8.07-6.358c-1.19 0-2.283.287-3.28.862a6.815 6.815 0 0 0-2.412 2.365 6.313 6.313 0 0 0-.868 3.227c0 1.15.29 2.205.9 3.163a6.742 6.742 0 0 0 2.444 2.3c1.03.576 2.09.863 3.216.863a6.18 6.18 0 0 0 2.508-.51 6.246 6.246 0 0 0 2.09-1.375c.61-.575 1.06-1.278 1.415-2.045.321-.798.514-1.63.514-2.492 0-1.15-.29-2.205-.9-3.163a6.387 6.387 0 0 0-2.412-2.3 6.385 6.385 0 0 0-3.215-.863V1.47ZM32.797.256h1.576l3.762 13.26L41.801.255h1.447l3.665 13.228L50.675.256h1.576L47.91 15.465h-2.026L42.54 2.97l-3.376 12.494h-2.026L32.798.255ZM55.37.256h8.36V1.63h-6.817v5.463h6.592v1.374h-6.592v5.624h6.817v1.374h-8.36V.255ZM67.814.256h3.633c.965 0 1.8.032 2.476.127.675.096 1.318.288 1.865.608.772.447 1.35 1.022 1.768 1.757.418.735.611 1.565.611 2.46 0 .799-.193 1.566-.61 2.269a4.79 4.79 0 0 1-1.64 1.661 4.746 4.746 0 0 1-2.284.671l4.31 5.688h-1.898l-5.209-6.902h.45c.74 0 1.383 0 1.897-.064.515-.032.997-.16 1.447-.351a3.335 3.335 0 0 0 1.48-1.246c.353-.544.514-1.15.514-1.854 0-.543-.129-1.054-.386-1.533a3.358 3.358 0 0 0-1.029-1.183 3.594 3.594 0 0 0-1.447-.607 16 16 0 0 0-1.993-.127h-2.412v13.835h-1.543V.255ZM82.219 11.183c0 .543.16 1.055.418 1.534.257.479.643.83 1.093 1.118.45.288.965.415 1.543.415a3.41 3.41 0 0 0 1.608-.383 2.902 2.902 0 0 0 1.158-1.086c.289-.448.418-.959.418-1.534 0-.415-.097-.799-.29-1.182a2.833 2.833 0 0 0-.772-.959 4.827 4.827 0 0 0-1.028-.607 11.631 11.631 0 0 0-1.35-.415c-.644-.16-1.19-.352-1.576-.48a4.037 4.037 0 0 1-1.126-.67c-.868-.735-1.286-1.662-1.286-2.844 0-.799.193-1.502.579-2.141.386-.607.9-1.118 1.575-1.438C83.858.16 84.566 0 85.37 0c.804 0 1.479.192 2.122.543a4.083 4.083 0 0 1 1.543 1.502c.386.639.58 1.31.58 2.077h-1.609a2.87 2.87 0 0 0-.418-1.374 2.6 2.6 0 0 0-.996-.959 2.864 2.864 0 0 0-1.383-.351 2.62 2.62 0 0 0-1.318.351c-.418.256-.708.575-.965.959a2.762 2.762 0 0 0-.354 1.31c0 .575.129 1.022.418 1.374.29.351.611.607 1.03.799.417.16.932.351 1.575.51.804.224 1.415.416 1.8.544.386.16.772.383 1.158.735.45.383.804.863 1.061 1.438.257.575.386 1.15.386 1.757 0 .83-.225 1.566-.643 2.237a4.537 4.537 0 0 1-1.704 1.597 4.78 4.78 0 0 1-2.315.575c-.836 0-1.64-.191-2.38-.575-.74-.383-1.286-.926-1.736-1.63a4.464 4.464 0 0 1-.643-2.332h1.64v.096ZM37.813 29.108c0 1.438-.353 2.748-1.093 3.962s-1.704 2.173-2.958 2.876A8.033 8.033 0 0 1 29.742 37c-1.446 0-2.732-.351-3.986-1.054-1.254-.703-2.251-1.63-2.99-2.844a7.247 7.247 0 0 1-1.126-3.898c0-1.406.354-2.78 1.093-3.962.74-1.214 1.704-2.173 2.958-2.876a8.12 8.12 0 0 1 4.02-1.054c1.414 0 2.765.351 3.987 1.054 1.254.703 2.25 1.63 2.99 2.844.74 1.214 1.125 2.492 1.125 3.93v-.032Zm-8.07-6.358c-1.19 0-2.283.287-3.28.862a6.814 6.814 0 0 0-2.412 2.365 6.313 6.313 0 0 0-.868 3.227c0 1.15.29 2.204.9 3.163a6.743 6.743 0 0 0 2.444 2.3c1.03.576 2.09.863 3.216.863a6.18 6.18 0 0 0 2.508-.511 6.244 6.244 0 0 0 2.09-1.374c.61-.575 1.06-1.278 1.415-2.077.321-.799.514-1.63.514-2.492 0-1.15-.29-2.205-.9-3.163-.611-.959-1.415-1.758-2.412-2.3a6.385 6.385 0 0 0-3.215-.863ZM38.553 21.535h1.672l5.37 13.292 5.402-13.292h1.672l-6.335 15.21h-1.479l-6.302-15.21ZM55.37 21.535h8.392v1.374h-6.849v5.464h6.592v1.374h-6.592v5.623h6.85v1.374H55.37V21.535ZM67.814 21.535h3.633c.965 0 1.8.032 2.476.128.675.096 1.318.288 1.865.607.772.448 1.35 1.023 1.768 1.758.418.735.611 1.565.611 2.46 0 .799-.193 1.566-.61 2.268a4.79 4.79 0 0 1-1.64 1.662 4.746 4.746 0 0 1-2.284.67l4.31 5.688h-1.898l-5.209-6.901h.45c.74 0 1.383 0 1.897-.064.515-.064.997-.16 1.447-.352a3.335 3.335 0 0 0 1.48-1.246c.353-.543.514-1.15.514-1.853 0-.543-.129-1.054-.386-1.534a3.358 3.358 0 0 0-1.029-1.182 3.595 3.595 0 0 0-1.447-.607 16 16 0 0 0-1.993-.128h-2.412v13.835h-1.543V21.535ZM82.219 32.463c0 .543.16 1.054.418 1.533.257.48.643.831 1.093 1.119.45.287.965.415 1.543.415a3.41 3.41 0 0 0 1.608-.383 2.901 2.901 0 0 0 1.158-1.087c.289-.447.418-.99.418-1.533 0-.416-.097-.799-.29-1.182a2.832 2.832 0 0 0-.772-.959 4.83 4.83 0 0 0-1.028-.607 11.652 11.652 0 0 0-1.35-.416c-.644-.16-1.19-.35-1.576-.479a4.037 4.037 0 0 1-1.126-.67c-.868-.736-1.286-1.662-1.286-2.844 0-.8.193-1.502.579-2.141.386-.607.9-1.119 1.575-1.438.675-.352 1.383-.511 2.187-.511.804 0 1.479.191 2.122.543a4.083 4.083 0 0 1 1.543 1.502c.386.639.58 1.31.58 2.076h-1.609a2.87 2.87 0 0 0-.418-1.373 2.6 2.6 0 0 0-.996-.959 2.864 2.864 0 0 0-1.383-.351c-.482 0-.933.127-1.318.351-.418.256-.708.575-.965.959a2.762 2.762 0 0 0-.354 1.31c0 .575.129 1.022.418 1.374.29.351.611.607 1.03.798.417.16.932.352 1.575.512.804.223 1.415.415 1.8.543.386.16.772.383 1.158.735.45.383.804.862 1.061 1.438.257.575.386 1.15.386 1.757 0 .83-.225 1.565-.643 2.236a4.537 4.537 0 0 1-1.704 1.598 4.78 4.78 0 0 1-2.315.575c-.836 0-1.64-.192-2.38-.575-.74-.383-1.286-.927-1.736-1.63a4.464 4.464 0 0 1-.643-2.332h1.64v.096Z" />
          </svg>
            <? if (!$pageConfig['isMainPage']) : ?>
              <a href="/" class="link-as-card"></a>
            <? endif; ?>
        </div>
      </div>
      <div class="footer-content">
        <div class="footer-menu">
          <div class="footer-menu-section">
            <div class="footer-menu-section-top">
              <div class="footer-menu-section-top__text">Клиентам</div>
              <div class="footer-menu-section-top__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                  <path stroke="#FFFAED" stroke-linecap="round" stroke-miterlimit="10"
                        d="m1.06.51 7.2 7.2c.15.15.39.15.54 0L16 .51" />
                </svg>
              </div>
            </div>
            <div class="footer-menu-section-hidden">
              <ul class="footer-menu-list">
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-item__link">Программа лояльности</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-item__link">Доставка и упаковка</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-item__link">Уход за букетом</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-item__link">Подарочные сертификаты</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-menu-section">
            <div class="footer-menu-section-top">
              <div class="footer-menu-section-top__text">Компания</div>
              <div class="footer-menu-section-top__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                  <path stroke="#FFFAED" stroke-linecap="round" stroke-miterlimit="10"
                        d="m1.06.51 7.2 7.2c.15.15.39.15.54 0L16 .51" />
                </svg>
              </div>
            </div>
            <div class="footer-menu-section-hidden">
              <ul class="footer-menu-list">
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-item__link">О Flowers Lovers</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-item__link">Контакты</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="footer-menu-section">
            <div class="footer-menu-section-top">
              <div class="footer-menu-section-top__text">Документы</div>
              <div class="footer-menu-section-top__icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="9" fill="none" viewBox="0 0 17 9">
                  <path stroke="#FFFAED" stroke-linecap="round" stroke-miterlimit="10"
                        d="m1.06.51 7.2 7.2c.15.15.39.15.54 0L16 .51" />
                </svg>
              </div>
            </div>
            <div class="footer-menu-section-hidden">
              <ul class="footer-menu-list">
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-item__link">Условия возврата</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-item__link">Политика обработки персональных данных</a>
                </li>
                <li class="footer-menu-item">
                  <a href="#" class="footer-menu-item__link">Оплата и обработка заказов</a>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-contacts-and-social">
          <div class="footer-contacts">
            <div class="footer-contact">
              <a href="tel:+79859115749" class="footer-contact__link">+7 985 911-57-49</a>
            </div>
          </div>
          <div class="footer-socials">
            <div class="footer-socials-item">
              <!--noindex-->
              <a href="#" class="footer-socials-item__link">
              <span class="footer-socials-item__link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="21" fill="none" viewBox="0 0 20 21"><path
                    stroke="#FFFAED" stroke-linecap="round" stroke-linejoin="round" stroke-width=".7"
                    d="M10 1.082a9.583 9.583 0 0 0-7.95 14.933L.417 20.25l4.358-1.559A9.583 9.583 0 1 0 10 1.082Z"></path><path
                    stroke="#FFFAED" stroke-linecap="round" stroke-linejoin="round" stroke-width=".7"
                    d="M7.917 12.749c1.083 1.083 3.475 2.5 4.583 2.5a2.109 2.109 0 0 0 2.084-1.667v-.833s-1.025-.5-1.667-.834c-.642-.333-1.667.834-1.667.834a5.433 5.433 0 0 1-2.083-1.25 5.433 5.433 0 0 1-1.25-2.084S9.084 8.39 8.75 7.75c-.333-.642-.833-1.667-.833-1.667h-.833a2.108 2.108 0 0 0-1.667 2.083c0 1.109 1.417 3.5 2.5 4.584Z"></path></svg></span>
                <span class="footer-socials-item__link-text">WhatsApp</span>
              </a>
              <!--/noindex-->
            </div>
            <div class="footer-socials-item">
              <!--noindex-->
              <a href="#" class="footer-socials-item__link">
              <span class="footer-socials-item__link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="21" fill="none" viewBox="0 0 20 21"><path
                    fill="#FFFAED"
                    d="M18.302 2.948a.39.39 0 0 0-.398-.068L2.07 9.076a.798.798 0 0 0 .137 1.528l4.354.855v4.831a.937.937 0 0 0 1.611.65l2.188-2.265 3.36 2.946a.937.937 0 0 0 1.533-.493L18.427 3.33a.39.39 0 0 0-.125-.383ZM2.187 9.836a.166.166 0 0 1 .111-.178l13.645-5.34-9.14 6.551-4.474-.878a.166.166 0 0 1-.142-.155Zm5.537 6.67a.313.313 0 0 1-.537-.216v-4.398l2.702 2.367-2.165 2.247Zm6.92.48a.312.312 0 0 1-.513.163l-6.754-5.923 10.29-7.373-3.023 13.133Z"></path></svg></span>
                <span class="footer-socials-item__link-text">Telegram</span>
              </a>
              <!--/noindex-->
            </div>
            <div class="footer-socials-item">
              <!--noindex-->
              <a href="#" class="footer-socials-item__link">
              <span class="footer-socials-item__link-icon"><svg xmlns="http://www.w3.org/2000/svg" width="20"
                                                                height="21" fill="none" viewBox="0 0 20 21"><path
                    stroke="#FFFAED" stroke-miterlimit="10" stroke-width=".75"
                    d="M13.69 2.666H6.31A4.31 4.31 0 0 0 2 6.976v7.379a4.31 4.31 0 0 0 4.311 4.31h7.378A4.31 4.31 0 0 0 18 14.356V6.976a4.31 4.31 0 0 0-4.31-4.31Z" /><path
                    stroke="#FFFAED" stroke-miterlimit="10" stroke-width=".75"
                    d="M10 14.528a3.862 3.862 0 1 0 0-7.724 3.862 3.862 0 0 0 0 7.724Z" /><path fill="#FFFAED"
                                                                                                d="M14.69 6.803a.828.828 0 1 0 0-1.655.828.828 0 0 0 0 1.655Z" /></svg></span>
                <span class="footer-socials-item__link-text">instagram</span>
              </a>
              <!--/noindex-->
            </div>
          </div>
        </div>
        <div class="footer-dev">
          <!--noindex-->
          <a href="https://jiliburo.com/" class="footer-dev__link" target="_blank" rel="nofollow">Дизайн сайта: Jili
            Buro</a>
          <!--/noindex-->
        </div>
        <div class="footer__copyright">
          Настоящий сайт и размещенные на сайте объекты являются интеллектуальной собственностью ИП Кривинюк Ю.Р. (ИНН
          771380512840) Использование объектов, размещенных на сайте, разрешается исключительно с письменного согласия
          правообладателя в соответствии с Уведомлением об охране исключительных прав.
        </div>
      </div>
    </div>
  </div>
</footer>

<?
$dotenv = Dotenv\Dotenv::createImmutable($_SERVER['DOCUMENT_ROOT'] . '/../');
$dotenv->load();

if (!empty($_ENV['MODE']) && $_ENV['MODE'] === 'dev') {
    echo "<script src='/local/assets/local/bundle-runtime/bundle-runtime.js'></script>";
}
?>
<? if (!empty($pageConfig['deferJs'])): ?>
    <? foreach ($pageConfig['deferJs'] as $path): ?>
    <script src="<?= $path ?>" defer data-skip-moving="true"></script>
    <? endforeach; ?>
<? endif; ?>
<? if (!empty($pageConfig['asyncJs'])): ?>
    <? foreach ($pageConfig['asyncJs'] as $path): ?>
    <script src="<?= $path ?>" async data-skip-moving="true"></script>
    <? endforeach; ?>
<? endif; ?>
</body>
</html>