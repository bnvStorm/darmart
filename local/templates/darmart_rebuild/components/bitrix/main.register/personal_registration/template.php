<?
/**
 * Bitrix Framework
 * @package bitrix
 * @subpackage main
 * @copyright 2001-2014 Bitrix
 */

/**
 * Bitrix vars
 * @param array $arParams
 * @param array $arResult
 * @param CBitrixComponentTemplate $this
 * @global CUser $USER
 * @global CMain $APPLICATION
 */

use \Bitrix\Main\Localization\Loc;
use \Bitrix\Main\Security\Random;

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
    die();

if ($arResult["SHOW_SMS_FIELD"] == true) {
    CJSCore::Init('phone_auth');
}

?>

<?php if ($USER->IsAuthorized()): ?>
    <div class="card"><?= Loc::getMessage('REGISTERED') ?></div>
<?php else: ?>

<div class="card">

    <h1 class="title-page"><?= Loc::getMessage('PAGE_TITLE') ?></h1>
    <p><?= Loc::getMessage('AUTH_MESS') ?></p>

    <form action="<?= POST_FORM_ACTION_URI ?>" method="post" enctype="multipart/form-data">
        <?php //Проверка, если массив линейный. Это значит что в массиве имеется ошибка с сообщением о уже имеющемся юзере ?>
        <?php if(
                count(array_filter(array_keys($arResult['ERRORS']), 'is_string')) === 0
                && count($arResult['ERRORS']) > 0
        ): ?>
            <div class="alert alert-danger"><i class="fa fa-exclamation-circle"></i>
                <?= $arResult["ERRORS"][0] ?>
            </div>
        <?php endif; ?>

        <?php if ($arResult["BACKURL"] != ''): ?>
            <input type="hidden" name="backurl" value="<?= $arResult["BACKURL"] ?>"/>
        <?php endif; ?>

        <input type="hidden" name="REGISTER[LOGIN]" value="<?= Random::getString(6) ?>">

        <?php foreach ($arResult['SECTIONS'] as $sectionName => $fieldList): ?>
        <div id="<?=$sectionName?>">
            <h2 class="title-page"><?= Loc::getMessage($sectionName . '_TITLE') ?></h2>
            <?php foreach ($fieldList as $field): ?>
            <div class="form-group
                        <?php if($field['REQUIRED']): ?>
                        required
                        <?php endif; ?>
                        ">
                <?php switch ($field['CODE']):

                    case 'PERSONAL_COUNTRY': ?>
                        <label class="control-label"
                               for="input-country"><?= Loc::getMessage('REGISTER_FIELD_PERSONAL_COUNTRY') ?></label>
                        <select name="REGISTER[PERSONAL_COUNTRY]" id="input-country" class="form-control">
                            <option value=""><?= Loc::getMessage('SELECT_CHOOSE') ?></option>
                            <?php foreach ($arResult['AVAILABLE_COUNTRIES'] as $id => $name): ?>
                                <option
                                    <?php if ($id === 83 || $arResult["VALUES"][$field['CODE']] == $id): ?>
                                        selected
                                    <?php endif; ?>
                                        value="<?= $id ?>"><?= $name ?></option>
                            <?php endforeach; ?>
                        </select>
                    <?php break;?>

                    <?php case 'PERSONAL_STATE': ?>
                        <label class="control-label"
                               for="input-zone"><?= Loc::getMessage('REGISTER_FIELD_PERSONAL_STATE') ?></label>
                        <select name="REGISTER[PERSONAL_STATE]" id="input-zone" class="form-control">
                            <option value=""><?= Loc::getMessage('SELECT_CHOOSE') ?></option>
                            <?php foreach ($arResult['AVAILABLE_REGIONS'] as $region): ?>
                                <option
                                        <?php if($arResult["VALUES"][$field['CODE']] == $region['REGION_NAME']): ?>
                                            selected
                                        <?php endif; ?>
                                        value="<?= $region['REGION_NAME'] ?>">
                                    <?= $region['REGION_NAME'] ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    <?php break; ?>

                    <?php default: ?>
                        <label class="control-label" for="input-firstname"><?= Loc::getMessage('REGISTER_FIELD_' . $field['CODE']) ?></label>
                        <input type="text"
                               name="REGISTER[<?= $field['CODE'] ?>]"
                               value="<?= $arResult["VALUES"][$field['CODE']] ?>"
                               placeholder="<?= Loc::getMessage('REGISTER_FIELD_' . $field['CODE']) ?>"
                               id="input-<?= $field['CODE'] ?>"
                               class="form-control">

                    <?php break; ?>

                <?php endswitch; ?>
                <?php if(array_key_exists($field['CODE'], $arResult["ERRORS"])): ?>
                    <div class="text-danger">
                        <?= str_replace('#FIELD_NAME#',
                            Loc::getMessage('REGISTER_FIELD_' . $field['CODE']),
                            $arResult['ERRORS'][$field['CODE']]
                        ); ?>
                    </div>
                <?php endif; ?>
            </div>
            <?php endforeach ; ?>

        </div>
        <?php endforeach; ?>

        <fieldset>
            <h2 class="title-page"><?= Loc::getMessage('PASSWORD_TITLE') ?></h2>
            <div class="form-group required">
                <label class="control-label"
                       for="input-password"><?= Loc::getMessage('REGISTER_FIELD_PASSWORD') ?></label>
                <input type="password"
                       name="REGISTER[PASSWORD]"
                       value=""
                       placeholder="<?= Loc::getMessage('REGISTER_FIELD_PASSWORD') ?>"
                       id="input-password"
                       class="form-control">
                <?php if(array_key_exists('PASSWORD', $arResult["ERRORS"])): ?>
                    <div class="text-danger">
                        <?= str_replace('#FIELD_NAME#',
                            Loc::getMessage('REGISTER_FIELD_PASSWORD'),
                            $arResult['ERRORS']['PASSWORD']
                        ); ?>
                    </div>
                <?php endif; ?>
            </div>
            <div class="form-group required">
                <label class="control-label"
                       for="input-confirm"><?= Loc::getMessage('REGISTER_FIELD_CONFIRM_PASSWORD') ?></label>
                <input type="password"
                       name="REGISTER[CONFIRM_PASSWORD]"
                       value=""
                       placeholder="<?= Loc::getMessage('REGISTER_FIELD_CONFIRM_PASSWORD') ?>"
                       id="input-confirm"
                       class="form-control">
                <?php if(array_key_exists('CONFIRM_PASSWORD', $arResult["ERRORS"])): ?>
                    <div class="text-danger">
                        <?= str_replace('#FIELD_NAME#',
                            Loc::getMessage('REGISTER_FIELD_CONFIRM_PASSWORD'),
                            $arResult['ERRORS']['CONFIRM_PASSWORD']
                        ); ?>
                    </div>
                <?php endif; ?>
            </div>
        </fieldset>
        <fieldset>
            <h2 class="title-page"><?= Loc::getMessage('NEWS_TITLE') ?></h2>
            <div class="form-group">
                <label class="control-label"><?= Loc::getMessage('SUBSCRIBE') ?></label>
                <label class="radio-inline">
                    <input type="radio" name="SUBSCRIBE" value="Y">
                    <?= Loc::getMessage('YES') ?>
                </label>
                <label class="radio-inline">
                    <input type="radio" name="SUBSCRIBE" value="N" checked="checked">
                    <?= Loc::getMessage('NO') ?>
                </label>
            </div>
        </fieldset>

        <div class="buttons-overflow">
            <?php if($arParams['USER_CONSENT'] === 'Y'): ?>
                <?$APPLICATION->IncludeComponent(
                    "bitrix:main.userconsent.request",
                    "personal_reg_consent",
                    Array(
                        "AUTO_SAVE" => "Y",
                        "ID" => $arParams['USER_CONSENT_ID'],
                        "IS_CHECKED" => $arParams['USER_CONSENT_IS_CHECKED'],
                        "IS_LOADED" => $arParams['USER_CONSENT_IS_LOADED']
                    )
                );?>
            <?php endif; ?>
            <input type="submit" name="register_submit_button" value="<?= Loc::getMessage('AUTH_REGISTER') ?>" required
                   class="btn main-btn">
        </div>

    </form>

</div>
<?php endif; ?>
