<?php

namespace Rating1C\Darmart\Favorites;

use \Bitrix\Main\Loader;
use \Bitrix\Highloadblock\HighloadBlockTable;
use \Bitrix\Main\ORM\Data\DataManager;
use \Bitrix\Main\ORM\Data\AddResult;
use Bitrix\Main\ORM\Data\DeleteResult;

class Favorite
{
    private $instance = null;

    /**
     * Id highloadblock.
     * @var int $highloadBlockId
     */
    private $highloadBlockId = 4;

    public function getInstance(): DataManager
    {
        if (is_null($this->instance)) {
            Loader::includeModule('highloadblock');
            $hlBlock = HighloadBlockTable::getById($this->highloadBlockId)->fetch();
            $hlEntity = HighloadBlockTable::compileEntity($hlBlock);
            $hlClassName = $hlEntity->getDataClass();

            $this->instance = new $hlClassName();
        }

        return $this->instance;
    }

    public function add(array $fields): AddResult
    {
        $favoriteHl = $this->getInstance();
        return $favoriteHl->add($fields);
    }

    public function delete($primary): DeleteResult
    {
        $favoriteHl = $this->getInstance();
        return $favoriteHl->delete($primary);
    }

    public function getProductsIds(int $userId): array
    {
        $output = [];

        $favoriteHl = $this->getInstance();
        $result = $favoriteHl::getList([
            'select' => ['UF_PRODUCT_ID'],
            'filter' => [
                '=UF_USER_ID' => $userId
            ]
        ]);

        while ($row = $result->fetch())
            $output[] = $row['UF_PRODUCT_ID'];

        return $output;
    }


    /**
     * Check if records exists
     * @param $productId
     * @param $userId
     * @return bool
     */
    public function isExists(int $productId, int $userId):bool
    {
        $favoriteHl = $this->getInstance();

        $result = $favoriteHl::getList([
            'select' => ['ID'],
            'filter' => [
                '=UF_USER_ID' => $userId,
                '=UF_PRODUCT_ID' => $productId
            ]
        ]);

        return $result->getSelectedRowsCount() > 0;
    }
}
