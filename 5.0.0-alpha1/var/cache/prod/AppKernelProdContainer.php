<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerMOMedhB\AppKernelProdContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerMOMedhB/AppKernelProdContainer.php') {
    touch(__DIR__.'/ContainerMOMedhB.legacy');

    return;
}

if (!\class_exists(AppKernelProdContainer::class, false)) {
    \class_alias(\ContainerMOMedhB\AppKernelProdContainer::class, AppKernelProdContainer::class, false);
}

return new \ContainerMOMedhB\AppKernelProdContainer([
    'container.build_hash' => 'MOMedhB',
    'container.build_id' => '1f5b1848',
    'container.build_time' => 1688488264,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerMOMedhB');
