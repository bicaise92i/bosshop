<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerPgaeehk\appProdProjectContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerPgaeehk/appProdProjectContainer.php') {
    touch(__DIR__.'/ContainerPgaeehk.legacy');

    return;
}

if (!\class_exists(appProdProjectContainer::class, false)) {
    \class_alias(\ContainerPgaeehk\appProdProjectContainer::class, appProdProjectContainer::class, false);
}

return new \ContainerPgaeehk\appProdProjectContainer([
    'container.build_hash' => 'Pgaeehk',
    'container.build_id' => '1abf50a9',
    'container.build_time' => 1564655613,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerPgaeehk');
