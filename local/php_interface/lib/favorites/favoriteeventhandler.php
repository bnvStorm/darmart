<?php

namespace Rating1C\Darmart\Favorites;

use Rating1C\Darmart\App;
use Rating1C\Darmart\Subscriptions\Subscribe;
use Bitrix\Main\Application;
use Bitrix\Main\Diag\Debug;
use Bitrix\Main\Loader;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class FavoriteEventHandler {
    public static function onRestServiceBuildDescription() {
        global $USER;
        return [
            'favorite' => [
                'favorite.add' => [
                    'callback' => [static::class, 'addFavorite'],
                ]
            ]
        ];
    }

    public static function addFavorite($query, $n, \CRestServer $server) {
        global $USER;
        return array('myresponse' => 'ulululu');
    }
}
