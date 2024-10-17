<?php

/**
 * - Входная точка для ajax запросов
 * - В htaccess файле необходимо настроить перезапись в данный файл
 *   RewriteRule ^ajax/([^/]+)/([^/]+)/?$ /local/php_interface/ajax.php?_class=$1&_method=$2 [L,QSA]
 */

use Bitrix\Main\Loader;

require $_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php";

if (empty($_REQUEST['_class']) || empty($_REQUEST['_method'])) {
    http_response_code(404);
    exit;
}

define('IS_THEME_AJAX', true);

$className = ucfirst($_REQUEST['_class']);
$method = $_REQUEST['_method'];

$fullClass = '\\Zeldom\\Bitrix\\Bitrix\\Ajax\\' . $className;

$ajax = $fullClass::getInstance();

if (!method_exists($ajax, $method)) {
    http_response_code(404);
    exit;
}

Loader::includeModule('iblock');

$ajax->$method();

exit;
