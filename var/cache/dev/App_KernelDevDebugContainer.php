<?php

// This file has been auto-generated by the Symfony Dependency Injection Component for internal use.

if (\class_exists(\ContainerVmznmah\App_KernelDevDebugContainer::class, false)) {
    // no-op
} elseif (!include __DIR__.'/ContainerVmznmah/App_KernelDevDebugContainer.php') {
    touch(__DIR__.'/ContainerVmznmah.legacy');

    return;
}

if (!\class_exists(App_KernelDevDebugContainer::class, false)) {
    \class_alias(\ContainerVmznmah\App_KernelDevDebugContainer::class, App_KernelDevDebugContainer::class, false);
}

return new \ContainerVmznmah\App_KernelDevDebugContainer([
    'container.build_hash' => 'Vmznmah',
    'container.build_id' => 'b62a08cb',
    'container.build_time' => 1678113223,
], __DIR__.\DIRECTORY_SEPARATOR.'ContainerVmznmah');
