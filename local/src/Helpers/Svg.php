<?php

namespace Zeldom\Bitrix\Helpers;

use Zeldom\Bitrix\Helpers\Arr;
use Zeldom\Bitrix\Helpers\Image;

class SVG
{
    private static $svgPath = '';

    /**
     * - Подключает svg
     * @param array $args массив аргументов. Ключи:
     *  - [name] название SVG
     *  - [img] отрисовывает SVG как img
     *  - [class] если указан img=true, то добавляет данный класс
     */
    public static function render($args)
    {
        $name = Arr::get($args, 'name', '');
        $img = Arr::get($args, 'img', false);
        $class = Arr::get($args, 'class', false);


        if (empty(self::$svgPath)) {
            self::$svgPath = $_SERVER['DOCUMENT_ROOT'] . "/local/templates/mac/front/dist/assets/svg/";
        }

        self::renderSvg($name, $img, $class);
    }

    private static function renderSvg($name, $img, $class)
    {
        $result = self::getSvg($name, $img, $class);

        echo ($result);
    }

    public static function getSvg($name, $img = false, $class = '')
    {
        $file = self::$svgPath . $name . '.svg';

        if (!file_exists($file)) {
            return;
        }


        if ($img) {
            return Image::render(['src' => $file, 'class' => $class]);
        }

        $file = file_get_contents($file);


        return $file;
    }
}
