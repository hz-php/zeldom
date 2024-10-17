<?php

namespace Zeldom\Bitrix\MailEvents;

use Bitrix\Main\Mail\Event;

abstract class MailEvent
{

    /**
     * - Отправляет событие
     * @return int
     */
    static function send(array $params)
    {
        /**
         * @var \Main\Entity\AddResult $res
         */
        $res = Event::send($params);
        return $res->isSuccess() ? $res->getId() : 0;
    }
}
