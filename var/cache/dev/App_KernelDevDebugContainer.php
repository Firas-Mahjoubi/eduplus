<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container2ljmL7e\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container2ljmL7e/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container2ljmL7e.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container2ljmL7e\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container2ljmL7e\App_KernelDevDebugContainer([
    'container.build_hash' => '2ljmL7e',
    'container.build_id' => '39ea7cfa',
    'container.build_time' => 1732745183,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container2ljmL7e');
