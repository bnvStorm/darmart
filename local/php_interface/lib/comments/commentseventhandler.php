<?php

namespace Rating1C\Darmart\Comments;

use Rating1C\Darmart\App;
use Rating1C\Darmart\Subscriptions\Subscribe;
use Bitrix\Main\Application;
use Bitrix\Main\Diag\Debug;
use Bitrix\Main\Loader;

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
/** @var array $arParams */
/** @var array $arResult */
class CommentsEventHandler
{
    public function OnCommentAdd($commentId)
    {
        $request = Application::getInstance()->getContext()->getRequest();
        $arrComment = $request->toArray();
        $ELEMENT_ID = $arrComment['ELEMENT_ID'];  // код элемента
        $IBLOCK_ID = $arrComment['IBLOCK_ID'];
        $pervoit = $arrComment['rating'];
        $PROPERTY_CODE_RATING = "rating";  // код свойства
        $PROPERTY_CODE_VOTE_SUM = "vote_sum";  // код свойства
        $PROPERTY_CODE_VOTED = "vote_count";  // код свойства
        $iblockId = \CIBlockElement::GetIBlockByID($ELEMENT_ID);
        $currentRating = 0;
        $currentVoteCount = 0;
        $currentVoteSum = 0;
        $arSelect = Array("ID", "IBLOCK_ID", "PROPERTY_$PROPERTY_CODE_RATING", "PROPERTY_$PROPERTY_CODE_VOTE_SUM", "PROPERTY_$PROPERTY_CODE_VOTED");
        $arFilter = Array("IBLOCK_ID"=>$iblockId, 'ID' => $ELEMENT_ID);
        $item = \CIBlockElement::GetList(
            Array(),
            $arFilter,
            false,
            ['nTopCount' => 1],
            $arSelect
        )->Fetch();
        if ($item) {
            $currentRating = \intval($item["PROPERTY_RATING_VALUE"]);
            $currentVoteCount = \intval($item['PROPERTY_VOTE_COUNT_VALUE']);
            $currentVoteSum = \intval($item['PROPERTY_VOTE_SUM_VALUE']);
        }
        $voted = $currentVoteCount + 1;//количество проголосовавших
        $summVote = $currentVoteSum + $pervoit;//Сумма оценок:
        $rating = $summVote / $voted;//Рейтинг
        \CIBlockElement::SetPropertyValuesEx($ELEMENT_ID, $IBLOCK_ID, [
            $PROPERTY_CODE_RATING => $rating,
            $PROPERTY_CODE_VOTED => $voted,
            $PROPERTY_CODE_VOTE_SUM => $summVote
        ]);
       Debug::dumpToFile($item);
    }

}
