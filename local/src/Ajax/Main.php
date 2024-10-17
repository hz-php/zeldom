<?php

namespace Zeldom\Bitrix\Ajax;

use CUser;
use Itprofit\Bitrix\Classes\Validator;
use Itprofit\Bitrix\Helpers\Arr;
use Itprofit\Bitrix\Helpers\Path;
use Itprofit\Bitrix\Helpers\Str;
use Itprofit\Bitrix\Loader;
use Itprofit\Bitrix\Traits\Singleton;

abstract class Main
{

    use Singleton;

    protected static $urlBase = '/ajax/';


    static function isAjax(): bool
    {
        return defined('IS_THEME_AJAX');
    }


    static function getUrlBase(): string
    {
        if (LANGUAGE_ID === 'en') {
            return '/' . Path::join('en', static::$urlBase);
        }
        return static::$urlBase;
    }


    /**
     * - Получает ссылку на ajax запрос
     * @param string $action [optional]
     * @param array $getParams [optional]
     * 
     * @return string
     */
    function getUrl($action = '', $getParams = []): string
    {
        if (!method_exists($this, $action)) {
            $name = get_called_class();
            throw new \Error("Method {$action} does not exist in class {$name}");
        }

        $baseUrl = static::getUrlBase();

        $url = Path::join($baseUrl, Str::getClassName(get_called_class()), $action);

        if ($getParams) {
            $url .= '?' . http_build_query($getParams);
        }

        return $url;
    }


    protected function getRequest(string $key, $def = null)
    {
        return Arr::getRequest($key, $def);
    }


    /**
     * - Валидирует запрос
     * - Отдаст ответ и прекратит выполнение скрипта в случае ошибки
     * @param array $sets 
     * @return void 
     */
    protected function validate(array $sets)
    {
        /**
         * @var CUser $USER
         */
        global $USER;

        // только авторизованные пользователь могут выполнять ajax запрос
        if (!empty($sets['protected']) && !$USER->IsAuthorized()) {
            http_response_code(401);
            exit;
        }

        // валидация капчи
        if (!empty($sets['captcha']) && !Validator::validateCaptcha()) {
            $this->theError(['clearInputs' => true, 'msg' => 'serverError'], 403);
        }

        // валидация переданных полей
        if (!empty($sets['validate'])) {
            $res = Validator::validateFields($sets['validate']);
            if (is_array($res)) {
                $this->theError(['fields' => $res], 400);
            }
        }
    }


    protected function theError($res = 'serverError', $code = 500)
    {
        http_response_code($code);
        $res = $this->getResponseArgs($res);
        $res['status'] = 'error';
        $this->theResponse($res);
    }


    protected function theSuccess($res = [], $code = 200)
    {
        http_response_code($code);
        $res = $this->getResponseArgs($res);
        $res['status'] = 'success';
        $this->theResponse($res);
    }

    protected function sendAnswer(string $succesMess, string $errorMess, bool $sendEmail = false)
    {
        if ($sendEmail == true) {
            $args = [
                "data" => [
                    "formMessage" => $succesMess,
                ]
            ];

            $this->theSuccess($args);
        } else {
            $args = [
                "data" => [
                    "formMsg" => $errorMess,
                ]
            ];

            $this->theError($args);
        }
    }

    private function theResponse($res = [])
    {
        header('Content-Type: application/json');
        echo json_encode($res, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
        exit;
    }



    private function getResponseArgs($res = [])
    {
        if (!$res) return [];

        if (!is_array($res)) {
            $msg = $res;
            $res = [];
            $res['msg'] = $msg;
        }

        if (!empty($res['msg'])) {
            $res['msg'] = Loader::getInstance()->getMessage($res['msg']);
        }

        if (!isset($res['data'])) {
            $res['data'] = [];
        }

        return $res;
    }
}
