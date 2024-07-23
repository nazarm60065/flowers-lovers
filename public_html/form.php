<?php
$pageConfig = [
    'metaTitle' => 'Личный кабинет',
    'title' => 'Личный кабинет',
    'inlineCss' => [
        '/local/assets/local/bundle-common/bundle-common.css',
        '/local/assets/local/bundle-form/bundle-form.css',
        '/local/assets/local/bundle-lk/bundle-lk.css',
    ],
    'deferJs' => [
        '/local/assets/local/bundle-common/bundle-common.js',
        '/local/assets/local/bundle-lk/bundle-lk.js',
        '/local/assets/local/bundle-form/bundle-form.js',
    ],
    'main_class' => 'lk',
    'isMainPage' => false,
    'isCatalogPage' => false,
    'notShowNavChain' => false,
]; ?>
<? include 'include/header.php';
/** @var Mustache_Engine $mustache */
?>
  <div class="container">
    <h1 class="lk__title">Личный кабинет</h1>
  </div>
  <div class="container">
    <div class="form">
      <div class="form-fields">
        <div class="form-group">
          <div class="form-group__title">Телефон или Email *</div>
          <label class="form-label">
            <input type="text" class="form__control" placeholder="">
          </label>
        </div>
        <div class="form-group">
          <div class="form-group__title">Пароль *</div>
          <label class="form-label">
            <input type="password" class="form__control" placeholder="">
          </label>
        </div>
      </div>
      <div class="form-bottom">
        <div class="form-submit-container">
          <button class="button button_filled-pink form__submit" type="submit">Войти</button>
        </div>
        <div class="form-links">
          <a href="#" class="form__link">Восстановить пароль</a>
          <a href="#" class="form__link">Зарегистрироваться</a>
        </div>
      </div>
    </div>
  </div>

<? include 'include/footer.php';

