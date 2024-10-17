<?php

namespace Zeldom\Bitrix\Helpers;

class Path
{

    static function join(...$parts): string
    {
        $str = preg_replace("/\/$/", '', $parts[0]);
        $total = count($parts);

        for ($i = 1; $i < $total; $i++) {
            /**
             * @var string $cur
             */
            $cur = $parts[$i];
            $cur = trim($cur);
            if (!$cur) {
                continue;
            }
            $cur = preg_replace("/^\//", '', $cur);
            $cur = preg_replace("/\/$/", '', $cur);
            $str .= '/' . $cur;
        }

        return $str;
    }


    /**
     * - Удаляет часть из пути
     * @param string $path
     * @param string[] $parts 
     * @return string новый путь без закрывающего /
     */
    static function remove(string $path, ...$parts): string
    {
        if (!preg_match("/\/$/", $path)) {
            $path .= '/';
        }
        foreach ($parts as $part) {
            $path = str_replace('/' . $part . '/', '/', $path);
        }
        $path = preg_replace("/\/$/", '', $path);
        return $path;
    }


    /**
     * - Формирует абсолютный путь из ссылки
     * @param string $url 
     * @return string 
     */
    static function urlToPath(string $url): string
    {
        $path = preg_replace("/^https?:\/\/[^\/]+/", '', $url);
        $absPath = self::absPath();
        return self::join($absPath, $path);
    }


    /**
     * - Меняет абсолютнуй путь на относительный
     * @param string $path 
     * @return string 
     */
    static function pathToUrl(string $path): string
    {
        $absPath = self::absPath();
        $path = str_replace($absPath, '', $path);
        if (!preg_match("/^\//", $path)) {
            $path = '/' . $path;
        }
        $path = preg_replace("/\/$/", '', $path);
        return $path;
    }


    /**
     * - Склуеивает относительные пути с абсолютным
     * @param string[] $parts 
     * @return string 
     */
    static function absPath(...$parts): string
    {
        $absPath = $_SERVER['DOCUMENT_ROOT'];
        return self::join($absPath, ...$parts);
    }


    /**
     * - Склеивает абсолютный путь к папке шаблона
     * @param string[] $parts 
     * @return string 
     */
    static function templatePath(...$parts): string
    {
        return self::absPath(constant('SITE_TEMPLATE_PATH') ?? '', ...$parts);
    }


    /**
     * - Склеивает относительный путь к папке шаблона
     * @param string[] $parts 
     * @return string 
     */
    static function templateUrl(...$parts): string
    {
        return self::join(constant('SITE_TEMPLATE_PATH') ?? '', ...$parts);
    }
}
