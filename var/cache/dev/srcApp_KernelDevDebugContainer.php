<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerTWYstkQ\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerTWYstkQ/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerTWYstkQ.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerTWYstkQ\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerTWYstkQ\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'TWYstkQ',
    'container.build_id' => '9d949742',
    'container.build_time' => 1561034182,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerTWYstkQ');
