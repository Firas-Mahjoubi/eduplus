<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

<<<<<<< HEAD
if (\class_exists(\ContainerGM1kPWL\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerGM1kPWL/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerGM1kPWL.legacy');
=======
if (\class_exists(\ContainerBg3qXMC\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerBg3qXMC/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerBg3qXMC.legacy');
>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
<<<<<<< HEAD
    \class_alias(\ContainerGM1kPWL\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerGM1kPWL\App_KernelDevDebugContainer([
    'container.build_hash' => 'GM1kPWL',
    'container.build_id' => '297bd464',
    'container.build_time' => 1733596154,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerGM1kPWL');
=======
    \class_alias(\ContainerBg3qXMC\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerBg3qXMC\App_KernelDevDebugContainer([
    'container.build_hash' => 'Bg3qXMC',
    'container.build_id' => 'e9ecd08d',
    'container.build_time' => 1733585129,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerBg3qXMC');
>>>>>>> 7b24a4db39587ab85a1972100e28e5aa92097661
