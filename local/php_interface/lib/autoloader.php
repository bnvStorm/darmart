<?php

use Bitrix\Main\{
    Loader,
    LoaderException
};

/*try {
    Loader::registerAutoLoadClasses(null,[
        '\Rating1C\Darmart\App' => '/local/php_interface/lib/app.php',
        '\Rating1C\Darmart\Users\UserEventHandler' => '/local/php_interface/lib/users/usereventhandler.php',
        '\Rating1C\Darmart\Users\User' => '/local/php_interface/lib/users/user.php',
        '\Rating1C\Darmart\Subscriptions\Subscribe' => '/local/php_interface/lib/subscriptions/subscribe.php',
        '\Rating1C\Darmart\Favorites\Favorite' => '/local/php_interface/lib/favorites/favorite.php',
        '\Rating1C\Darmart\Favorites\FavoriteEventHandler' => '/local/php_interface/lib/favorites/favoriteeventhandler.php'
    ]);
} catch (LoaderException $e) {
    CEventLog::Add([
        'SEVERITY' => 'ERROR',
        'AUDIT_TYPE_ID' => 'LOADER_ERROR',
        'MODULE_ID' => 'main',
        'DESCRIPTION' => $e->getMessage(),
    ]);
    die();
}*/


/**
 * Регистрируется обработчик для автозагрузки пользовательских классов из пространства имён \Rating1C\Services.
 */

use Bitrix\Main\IO\File;
spl_autoload_register(function (string $class_name) {
    $class_path = explode('\\', $class_name);
    if ('Rating1C' === $class_path[0] && 'Darmart') {
        $file_path = __DIR__;
        foreach (array_slice($class_path, 2) as $step) {
            $file_path .= '/' . strtolower($step);
        }
        $file_path .= '.php';
        if (File::isFileExists($file_path)) {
            require_once $file_path;
        }
    }
});

