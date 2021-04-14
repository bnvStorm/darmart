<?php
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Request;
use Bitrix\Main\Context;
use Rating1C\Darmart\App;
use Bitrix\Main\Web\HttpClient;

global $USER;

$response = [
    'success' => false,
    'error_text' => '',
    //'error_dev_text' => ''
];

header('Content-Type: application/json');

if(!$USER->IsAuthorized())
{
    $response['error_text'] = 'Необходимо войти в <a href="/personal/">Личный кабинет</a> или <a href="/personal/">создать учетную запись</a>, чтобы добавить товар в свои <a href="/personal/favorites/">закладки</a>! ';
    echo json_encode($response);
    return;
}

$request = Context::getCurrent()->getRequest();

$favorite = App::getInstance()->favorite();

$action = $request->get('action');
$product_id = $request->get('product_id');
$user_id = $USER->GetID();

$client = new HttpClient();
$client->setHeader('Content-Type', 'application/json', true);

switch ($action) {
    case 'add': {

        if($favorite->isExists($product_id, $user_id)){
            $response['error_text'] = 'Товар уже добавлен в избранное!';
            break;
        }

        $result = $favorite->add([
            'UF_PRODUCT_ID' => $product_id,
            'UF_USER_ID' => $user_id
        ]);

        if($result->isSuccess()){
            $response['success'] = true;
            $response['message'] = 'Вы успешно добавили товар в избранное!';
        } else {
            $response['error_text'] = 'Не удалось добавить товар в изранное!';
        }
        break;
    }
    case 'delete': {
        if(!$favorite->isExists($product_id, $user_id)){
            $response['error_text'] = 'Товар не был добавлен в избранное!';
            break;
        }

        $recordId = $favorite->getInstance()::getList([
            'select' => ['ID'],
            'filter' => [
                '=UF_USER_ID' => $user_id,
                '=UF_PRODUCT_ID' => $product_id
                ]
        ])->fetch()['ID'];

        $result = $favorite->delete($recordId);

        if($result->isSuccess()){
            $response['success'] = true;
            $response['message'] = 'Вы удалили товар из избранных!';
        } else {
            $response['error_text'] = 'Не удалось удалить товар из избранных!';
        }
    }
}


echo json_encode($response);

