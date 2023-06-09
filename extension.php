<?php

use PHPageBuilder\Extensions;

Extensions::addBlocks([
    basename(__DIR__) . '-foo-navbar' => __DIR__ . '/blocks/hello-world'
]);

Extensions::registerAsset('/extensions/demo/dist/public.css', 'style', 'header');

Extensions::addRoutes([
    '/foobar' => dirname(__FILE__) . '/routes/foobar.php'
]);

Extensions::registerBackend('demo', [
    'title' => 'Demo',
    'include' => __DIR__ . '/admin/demo.php',
]);
Extensions::registerAsset('/extensions/demo/dist/admin.css', 'style', 'admin-header');
