<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerU77cJU6\srcApp_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerU77cJU6/srcApp_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerU77cJU6.legacy');

    return;
}

if (!\class_exists(srcApp_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerU77cJU6\srcApp_KernelDevDebugContainer::class, srcApp_KernelDevDebugContainer::class, false);
}

return new \ContainerU77cJU6\srcApp_KernelDevDebugContainer([
    'container.build_hash' => 'U77cJU6',
    'container.build_id' => '10ea5c47',
    'container.build_time' => 1561486352,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerU77cJU6');
