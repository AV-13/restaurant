<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerKQx2N1z\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerKQx2N1z/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerKQx2N1z.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerKQx2N1z\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerKQx2N1z\App_KernelDevDebugContainer([
    'container.build_hash' => 'KQx2N1z',
    'container.build_id' => '2c926641',
    'container.build_time' => 1680252096,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerKQx2N1z');
