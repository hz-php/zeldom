<?php

namespace Zeldom\Bitrix\Helpers;

use Zeldom\Bitrix\Helpers\Arr;

class Image
{
    /**
     * - Подключает картинку
     * @param array $args массив аргументов. Ключи:
     *  - [src] путь к картинке
     *  - [class] классы для картинки
     *  - [alt-src] альтернативный путь к картинке если src пуст
     *  - [alt] alt атрибут, по умолчанию image
     *  - [attr] атрибуты для картинки - ключ, значение
     */
    static public function render($args)
    {
        $src = Arr::get($args, 'src', '');
        $class = Arr::get($args, 'class', '');
        $altSrc = Arr::get($args, 'alt-src', '');
        $alt= Arr::get($args, 'alt', 'image');
        $attr = Arr::get($args, 'attr', []);

        self::renderImage($src,  $class,$altSrc, $alt, $attr);
    }

    private static function renderImage($src, $class, $altSrc, $alt,  $attr)
    {
        $srcStr = 'src="';

        if ($src) {
            $srcStr .= $src . '"';
        } else if ($altSrc) {
            $srcStr .= $altSrc . '"';
        } else {
            $srcStr .= '"';
        }

        $altStr = 'alt="' . $alt . '"';

        $classStr = $class ? 'class="' . $class . '"' : '';

        $attrStr = self::getAttrString($attr);
?>
        <img <?= $srcStr; ?> <?= $altStr; ?> <?= $classStr; ?> <?= $attrStr; ?>>
<?php
    }


    private static function getAttrString($attrArg)
    {

        $result = '';

        foreach ($attrArg as $key => $value) {
            if (is_string($value)) {
                $result .=  $key . '="' . $value . '" ';
            }
        }

        return  $result;
    }
}
