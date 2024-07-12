<?php
$pageConfig = [
    'metaTitle' => 'Статичный раздел',
    'title' => 'Статичный раздел',
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



<? include 'include/footer.php';

