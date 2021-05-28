<?php

use Bitrix\Main\EventManager;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

$event_manager = EventManager::getInstance();

/*$event_manager->addEventHandlerCompatible('main', 'OnBeforeUserUpdate', [
    '\Rating1C\Damart\User\UserEventHandler',
    'onBeforeUserUpdate',
]);*/

$event_manager->addEventHandlerCompatible('main', 'OnBeforeUserRegister', [
    \Rating1C\Darmart\Users\UserEventHandler::class,
    'onBeforeUserRegister',
]);

$event_manager->addEventHandlerCompatible('main', 'OnAfterUserRegister', [
    \Rating1C\Darmart\Users\UserEventHandler::class,
    'onAfterUserRegister',
]);

$event_manager->addEventHandlerCompatible('rest', 'OnRestServiceBuildDescription', [
    \Rating1C\Darmart\Favorites\FavoriteEventHandler::class,
    'onRestServiceBuildDescription'
]);

$event_manager->addEventHandlerCompatible('iblock', 'OnAfterIBlockElementAdd', [
    \Rating1C\Darmart\Iblock\IblockEventHandler::class,
    'sendOrderReturnNotice'
]);

$event_manager->addEventHandlerCompatible("blog", "OnCommentAdd", [
    \Rating1C\Darmart\Comments\CommentsEventHandler::class,
    'onCommentAdd'
]);


