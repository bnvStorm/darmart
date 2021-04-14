<?php

namespace Rating1C\Darmart\Users;

use Rating1C\Darmart\App;
use Rating1C\Darmart\Subscriptions\Subscribe;
use Bitrix\Main\Application;
use Bitrix\Main\Diag\Debug;
use Bitrix\Main\Loader;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

class UserEventHandler {

    public static function onBeforeUserUpdate(&$fields)
    {
    }

    public static function onBeforeUserRegister(&$fields)
    {
        if (isset($fields['EMAIL']))
            $fields['LOGIN'] = $fields['EMAIL'];
    }

    public static function onAfterUserRegister($fields)
    {
        Loader::includeModule('subscribe');
        $request = Application::getInstance()->getContext()->getRequest();

        if($request->getPost('SUBSCRIBE') === 'Y'){
            $subscribeEntity = App::getInstance()->subscribe();

            $subscription = new \CSubscription();
            $subFields = [
                'RUB_ID' => $subscribeEntity->newsRubricId,
                'USER_ID' => $fields['USER_ID'],
                'ACTIVE' => 'Y',
                'SEND_CONFIRM' => 'N',
                'EMAIL' => $fields['EMAIL'],
                'FORMAT' => 'html',
                'CONFIRMED' => 'Y'
            ];

            $subscription->Add($subFields);
        }
    }

}
