<?php

use Bitrix\Main\EventManager;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$event_manager = EventManager::getInstance();

/*$event_manager->addEventHandlerCompatible('main', 'OnBeforeUserUpdate', [
    '\Rating1C\Damart\User\UserEventHandler',
    'onBeforeUserUpdate',
]);*/
