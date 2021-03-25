<?php

use Bitrix\Main\{
    Loader,
    LoaderException
};

try {
    Loader::registerAutoLoadClasses(null,[
        '\Rating1C\Damart\User\UserEventHandler' => '/local/php_interface/lib/user/eventhandler.php',
    ]);
} catch (LoaderException $e) {
    CEventLog::Add([
        'SEVERITY' => 'ERROR',
        'AUDIT_TYPE_ID' => 'LOADER_ERROR',
        'MODULE_ID' => 'main',
        'DESCRIPTION' => $e->getMessage(),
    ]);
    die();
}
