<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerSVN6r5A\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerSVN6r5A/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerSVN6r5A.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerSVN6r5A\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerSVN6r5A\App_KernelDevDebugContainer([
    'container.build_hash' => 'SVN6r5A',
    'container.build_id' => '639ce694',
    'container.build_time' => 1733345073,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerSVN6r5A');
