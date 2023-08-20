<?php

use Plugi\Extensions;

Extensions::addBlocks([
    basename(__DIR__) . '-foo-navbar' => __DIR__ . '/blocks/hello-world'
]);

Extensions::addRoutes([
    '/foooobar' => dirname(__FILE__) . '/routes/foobar.php'
]);

Extensions::registerHtmlBlock('<!-- foo -->');
Extensions::registerHtmlBlock('<!-- bar -->', 'body-start');
Extensions::registerHtmlBlock('<!-- baz -->', 'body-end');

Extensions::registerBackend('demo', [
    'title' => 'Demo',
    'include' => __DIR__ . '/admin/demo.php',
    'icon' => '<i class="ph ph-table"></i>',
]);
