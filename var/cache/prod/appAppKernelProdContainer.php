<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerCVeyJle\appAppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerCVeyJle/appAppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerCVeyJle.legacy');

    return;
}

if (!\class_exists(appAppKernelProdContainer::class, false)) {
    \class_alias(\ContainerCVeyJle\appAppKernelProdContainer::class, appAppKernelProdContainer::class, false);
}

return new \ContainerCVeyJle\appAppKernelProdContainer([
    'container.build_hash' => 'CVeyJle',
    'container.build_id' => 'd1cbc99a',
    'container.build_time' => 1721126067,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerCVeyJle');