<?php
/** @var array $pageConfig */

$mustache = new Mustache_Engine(array(
    'loader' => new Mustache_Loader_FilesystemLoader($_SERVER['DOCUMENT_ROOT'] . '/local/assets/mustache/'),
));
?>

</main>

<footer class="footer">
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