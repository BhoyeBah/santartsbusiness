<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\Container6Hi53im\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/Container6Hi53im/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/Container6Hi53im.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\Container6Hi53im\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \Container6Hi53im\App_KernelDevDebugContainer([
    'container.build_hash' => '6Hi53im',
    'container.build_id' => '38647b5c',
    'container.build_time' => 1715020606,
    'container.runtime_mode' => \in_array(\PHP_SAPI, ['cli', 'phpdbg', 'embed'], true) ? 'web=0' : 'web=1',
], __DIR__.\DIRECTORY_SEPARATOR.'Container6Hi53im');
