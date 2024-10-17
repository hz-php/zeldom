<?php

namespace Zeldom\Bitrix\Helpers;

class Date
{

    private static $prevTimezone = null;


    static function format(string $format, string $date): string
    {
        return self::utcFunc(function () use ($format, $date) {
            $time = is_numeric($date) ? $date : strtotime($date);
            $newDate = date($format, $time);
            return $newDate;
        });
    }
    static function getEnLongMonth(int $monthNum): string
    {
        $monthes = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
        return $monthes[$monthNum - 1];
    }

    static function getRuMonth(int $monthNum): string
    {
        $monthes = ['Янв', 'Февр', 'Марта', 'Апр', 'Мая', 'Июня', 'Июля', 'Авг', 'Сент', 'Окт', 'Ноя', 'Дек'];
        return $monthes[$monthNum - 1];
    }

    static function getNumberRuMonth($month): int
    {
        $monthes = [
            'Января',
            'Февраля',
            'Марта',
            'Апреля',
            'Мая',
            'Июня',
            'Июля',
            'Августа',
            'Сентября',
            'Октября',
            'Ноября',
            'Декабря'
        ];
        foreach ($monthes as $key => $month1) {
            if ($month1 == $month) {
                $number = $key + 1;
                return $number;
            }
        }
        return 2;
    }


    static function getRuLongMonth(int $monthNum): string
    {
        $monthes = [
            'января',
            'февраля',
            'марта',
            'апреля',
            'мая',
            'июня',
            'июля',
            'августа',
            'сентября',
            'октября',
            'ноября',
            'декабря'
        ];
        return $monthes[$monthNum - 1];
    }


    static function ruLongDate(string $date): string
    {
        return self::utcFunc(function () use ($date) {
            $time = strtotime($date);
            $day = date('d', $time);
            $month = self::getRuLongMonth(date('n', $time));
            return "{$day} {$month}";
        });
    }


    static function ruShortDate(string $date): string
    {
        return self::utcFunc(function () use ($date) {
            $time = strtotime($date);
            $day = date('d', $time);
            $month = self::getRuMonth(date('n', $time));
            return "{$day} {$month}";
        });
    }


    static function ruShortDateRange(string $start, string $end): string
    {
        return self::utcFunc(function () use ($start, $end) {
            $endStr = self::ruShortDate($end);
            if (date('m', strtotime($start)) !== date('m', strtotime($end))) {
                $startDay = self::ruShortDate($start);
            } else {
                $startDay = date('d', strtotime($start));
            }
            return $startDay . ' - ' . $endStr;
        });
    }


    /**
     * - Добавляет дни к дате
     * @param string $date
     * @param int $days
     * @param string $format возвращаемый формат даты
     * @return string
     */
    static function addDays(string $date, int $days, string $format = 'Y-m-d'): string
    {
        return self::utcFunc(function () use ($date, $days, $format) {
            return date($format, strtotime($date . ' + ' . $days . ' days'));
        });
    }


    static function getRuDay(string $date): string
    {
        $days = [
            'Воскресенье',
            'Понедельник',
            'Вторник',
            'Среда',
            'Четверг',
            'Пятница',
            'Суббота'
        ];
        return self::utcFunc(function () use ($date, $days) {
            $numDay = date('w', strtotime($date));
            return $days[$numDay];
        });
    }


    static function toTime(string $date): int
    {
        return self::utcFunc(function () use ($date) {
            return strtotime($date);
        });
    }


    /**
     * - Выполнит футнкцию во временной зоне UTC
     * - Вернет результат выполнения перданной функции
     * @param callable $fn
     * @return mixed
     */
    private static function utcFunc(callable $fn)
    {
        self::setUtc();
        $val = call_user_func($fn);
        self::restoreTimezone();
        return $val;
    }

    private static function setUtc()
    {
        if (self::$prevTimezone === null) {
            self::$prevTimezone = date_default_timezone_get();
        }
        date_default_timezone_set('UTC');
    }

    private static function restoreTimezone()
    {
        date_default_timezone_set(self::$prevTimezone);
        self::$prevTimezone = null;
    }

    public static function getYers()
    {
        return [
            '2024',
            '2023'
        ];
    }
}
