<?php

use Bitrix\Main\{Application, IO\File};

if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

if (!function_exists('requireLibFile')) {
    function requireIfExists(string $file_path): void
    {
        $file_path = Application::getDocumentRoot() . '/local/php_interface/lib/' . $file_path;
        if (File::isFileExists($file_path)) {
            require_once($file_path);
        }
    }
}

requireIfExists('autoloader.php');
requireIfExists('events.php');
