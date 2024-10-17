<?php

namespace Zeldom\Bitrix\Helpers;


class Str
{

    /**
     * - Склонение числительных
     * @param int $numeber число
     * @param array $titles массив строк из 3-х элементов:
     *   ['Сидит %d котик', 'Сидят %d котика', 'Сидит %d котиков']
     */
    static function declenNum(int $number, array $titles): string
    {
        $cases = [2, 0, 1, 1, 1, 2];
        $format = $titles[($number % 100 > 4 && $number % 100 < 20) ? 2 : $cases[min($number % 10, 5)]];
        return sprintf($format, $number);
    }


    /**
     * - Обрезает строку до кол-ва символов
     * @param string $str 
     * @param int $softCount сколько слов оставить
     * @param int $hardCount на какое максимальное кол-во слов делать проверку
     * @return string 
     */
    static function cut(string $str, int $softCount, int $hardCount, string $moreStr = ' ...'): string
    {
        $str = trim(strip_tags($str));

        preg_match_all("/([^\s]{3,})/miu", $str, $matches);

        if (count($matches[0]) <= $hardCount) {
            return $str;
        }

        preg_match_all("/([^\s]+)/miu", $str, $matches);

        $newStr = '';
        $countWords = 0;

        foreach ($matches[0] as $word) {
            if ($countWords > $softCount) {
                $newStr .= $moreStr;
                break;
            }
            if (mb_strlen($word) < 3) {
                continue;
            }
            if (!$newStr) {
                $newStr = $word;
            } else {
                $newStr .= ' ' . $word;
            }
            $countWords++;
        }

        return $newStr;
    }


    static function getClassName(string $fullClassName): string
    {
        preg_match("/\\\([^\\\]+)$/", $fullClassName, $mathes);
        return $mathes[1] ?? '';
    }


    static function endsWith(string $string, string $substring): bool
    {
        $length = mb_strlen($substring);
        return (substr_compare($string, $substring, -$length) === 0);
    }


    /**
     * - Формирует ссылку телефона из строки телефона
     * @param string $phone 
     * @return string 
     */
    static function urlPhone(string $phone): string
    {
        $phone = preg_replace("/[^\+\d]+/", '', $phone);
        return 'tel:' . $phone;
    }

    static function urlEmail(string $email): string
    {
        return 'mailto:' . trim($email);
    }


    /**
     * - Заменяет переводы на новую строку html тегом <br>
     * @param string $text 
     * @return string 
     */
    static function newLineToBr(string $text): string
    {
        return nl2br($text);
    }


    static function explodeTrim($sep, $str): array
    {
        $str = explode($sep, $str);
        foreach ($str as &$val) {
            $val = trim($val);
        }
        return array_values(array_filter($str));
    }


    /**
     * - Добавляет 0 вначале если надо
     * @param int $num 
     * @return string 
     */
    static function addZeroToNum(int $num): string
    {
        return sprintf("%02d", $num);
    }


    /**
     * - Получает домен из ссылки
     * @param string $url 
     * @return string 
     */
    static function siteDomain(string $url): string
    {
        preg_replace("/^https?:\/\/([^\/]+).*$/", "$1", $url);
        return $url;
    }


    static function rand(int $length = 20): string
    {
        $characters = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
        $randomString = '';

        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, strlen($characters) - 1)];
        }

        return $randomString;
    }
}
