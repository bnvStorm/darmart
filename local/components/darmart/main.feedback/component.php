<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();

/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

$arResult["PARAMS_HASH"] = md5(serialize($arParams).$this->GetTemplateName());

$arParams["USE_CAPTCHA"] = (($arParams["USE_CAPTCHA"] != "N" && !$USER->IsAuthorized()) ? "Y" : "N");
$arParams["EVENT_NAME"] = trim($arParams["EVENT_NAME"]);
if($arParams["EVENT_NAME"] == '')
    $arParams["EVENT_NAME"] = "FEEDBACK_FORM";
$arParams["EMAIL_TO"] = trim($arParams["EMAIL_TO"]);
if($arParams["EMAIL_TO"] == '')
    $arParams["EMAIL_TO"] = COption::GetOptionString("main", "email_from");
$arParams["OK_TEXT"] = trim($arParams["OK_TEXT"]);
if($arParams["OK_TEXT"] == '')
    $arParams["OK_TEXT"] = GetMessage("MF_OK_MESSAGE");

if($_SERVER["REQUEST_METHOD"] == "POST" && $_POST["submit"] <> '' && (!isset($_POST["PARAMS_HASH"]) || $arResult["PARAMS_HASH"] === $_POST["PARAMS_HASH"]))
{
    $arResult["ERROR_MESSAGE"] = array();
    if(check_bitrix_sessid())
    {
        if(empty($arParams["REQUIRED_FIELDS"]) || !in_array("NONE", $arParams["REQUIRED_FIELDS"]))
        {
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["user_name"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_NAME");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("LASTNAME", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["user_lastname"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_LASTNAME");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["user_phone"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_PHONE");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("NUMBER", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["user_number"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_NUMBER");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME_ORDER", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["user_order"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_NAME_ORDER");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("MODEL", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["user_model"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_MODEL");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("QUANTITY", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["user_quantity"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_QUANTITY");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("DATE", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["user_date"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_DATE");
//            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("UNPACKED", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["user_unpacked"]) <= 1)
//                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_UNPACKED");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("AUTHOR_EMAIL", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["user_email"]) <= 1)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_EMAIL");
            if((empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])) && mb_strlen($_POST["MESSAGE"]) <= 3)
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_REQ_MESSAGE");
        }$rdb_value = $_POST['rdb'];
        if(mb_strlen($_POST["user_email"]) > 1 && !check_email($_POST["user_email"]))
            $arResult["ERROR_MESSAGE"][] = GetMessage("MF_EMAIL_NOT_VALID");
        if($arParams["USE_CAPTCHA"] == "Y")
        {
            $captcha_code = $_POST["captcha_sid"];
            $captcha_word = $_POST["captcha_word"];
            $cpt = new CCaptcha();
            $captchaPass = COption::GetOptionString("main", "captcha_password", "");
            if ($captcha_word <> '' && $captcha_code <> '')
            {
                if (!$cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass))
                    $arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTCHA_WRONG");
            }
            else
                $arResult["ERROR_MESSAGE"][] = GetMessage("MF_CAPTHCA_EMPTY");

        }
        if(empty($arResult["ERROR_MESSAGE"]))
        {
            $arFields = Array(
                "AUTHOR" => $_POST["user_name"],
                "LASTNAME" => $_POST["user_lastname"],
                "PHONE" => $_POST["user_phone"],
                "NUMBER" => $_POST["user_number"],
                "NAME_ORDER" => $_POST["user_order"],
                "MODEL" => $_POST["user_model"],
                "QUANTITY" => $_POST["user_quantity"],
//                "UNPACKED" => $_POST["user_unpacked"],
                "AUTHOR_EMAIL" => $_POST["user_email"],
                "DATE" => $_POST["user_date"],
                "EMAIL_TO" => $arParams["EMAIL_TO"],
                "TEXT" => $_POST["MESSAGE"],
            );
            if(!empty($arParams["EVENT_MESSAGE_ID"]))
            {
                foreach($arParams["EVENT_MESSAGE_ID"] as $v)
                    if(intval($v) > 0)
                        CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields, "N", intval($v));
            }
            else
                CEvent::Send($arParams["EVENT_NAME"], SITE_ID, $arFields);
            $_SESSION["MF_NAME"] = htmlspecialcharsbx($_POST["user_name"]);
            $_SESSION["MF_EMAIL"] = htmlspecialcharsbx($_POST["user_email"]);
            LocalRedirect($APPLICATION->GetCurPageParam("success=".$arResult["PARAMS_HASH"], Array("success")));
        }

        $arResult["MESSAGE"] = htmlspecialcharsbx($_POST["MESSAGE"]);
        $arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_POST["user_name"]);
        $arResult["AUTHOR_EMAIL"] = htmlspecialcharsbx($_POST["user_email"]);
    }
    else
        $arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP");
}
elseif($_REQUEST["success"] == $arResult["PARAMS_HASH"])
{
    $arResult["OK_MESSAGE"] = $arParams["OK_TEXT"];
}

if(empty($arResult["ERROR_MESSAGE"]))
{
    if($USER->IsAuthorized())
    {
        $arResult["AUTHOR_NAME"] = $USER->GetFormattedName(false);
        $arResult["AUTHOR_EMAIL"] = htmlspecialcharsbx($USER->GetEmail());
    }
    else
    {
        if($_SESSION["MF_NAME"] <> '')
            $arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_SESSION["MF_NAME"]);
        if($_SESSION["MF_EMAIL"] <> '')
            $arResult["AUTHOR_EMAIL"] = htmlspecialcharsbx($_SESSION["MF_EMAIL"]);
    }
}

if($arParams["USE_CAPTCHA"] == "Y")
    $arResult["capCode"] =  htmlspecialcharsbx($APPLICATION->CaptchaGetCode());

$this->IncludeComponentTemplate();
