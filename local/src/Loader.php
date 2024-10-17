<?php

/**
 * - Класс загрузчик для проекта
 */

namespace Zeldom\Bitrix;

use CAgent;
use Zeldom\Bitrix\Helpers\Arr;




class Loader
{

    use Traits\Singleton;

    /**
     * - Массив строк с сообщениями
     * @var array
     */
    private $messages = [];

    /**
     * - Массив переменных для фронта
     * @var array
     */
    private $frontVars = [];


    function setup(): self
    {
        $this->redirectIndexPhp();
        $this->addFrontVar('messages', $this->messages);
        $this->addAgents();
        return $this;
    }


    private function redirectIndexPhp()
    {
        $reg = "%^/index.php.*$%";
        if ($_SERVER['REQUEST_METHOD'] === 'GET' && preg_match($reg, $_SERVER['REQUEST_URI'])) {
            header("HTTP/1.1 301 Moved Permanently");
            header("Location: /");
        }
    }


    private function addAgents()
    {
        //CAgent::AddAgent(MessageOpinionOpenDay::class . '::sendMailOpinion();');
        //CAgent::AddAgent(TimeUpdateProducts::class . '::timeUpdate();');
        //CAgent::AddAgent(InstaAutoApdateToken::class . '::updateToken();');
    }


    function setMessages(array $messages): self
    {
        $this->messages = $messages;
        return $this;
    }


    function addFrontVar(string $key, $value): self
    {
        $this->frontVars[$key] = $value;
        return $this;
    }


    function renderFrontVars()
    {
        echo '<script>';
        echo 'window.backDates = JSON.parse(\'' . json_encode($this->frontVars, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) . '\')';
        echo '</script>';
    }


    /**
     * - Получает текстовое сообщение из массива self::$messages
     * - вернет $key если не найдено
     * @param string $key
     * @param array $replace [optional] массив значений для замены в строке сообщения
     * @return string|string[]
     */
    function getMessage($key, $replace = [])
    {
        $msg = Arr::get($this->messages, $key, $key);

        if (!$replace || is_array($msg)) {
            return $msg;
        }

        foreach ($replace as $i => $str) {
            $n = $i + 1;
            $msg = str_replace("\$$n", $str, $msg);
        }

        return $msg;
    }
}
