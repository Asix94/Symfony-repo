<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSsyp9Ke\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSsyp9Ke/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSsyp9Ke.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSsyp9Ke\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSsyp9Ke\App_KernelDevDebugContainer([
    'container.build_hash' => 'Ssyp9Ke',
    'container.build_id' => '17eafc40',
    'container.build_time' => 1675348023,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSsyp9Ke');
