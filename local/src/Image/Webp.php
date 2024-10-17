<?php

namespace Zeldom\Bitrix\Image;

use DOMDocument;
use Zeldom\Bitrix\Helpers\Path;
use WebPConvert\Convert\Converters\Stack;
use WebPConvert\WebPConvert;

class Webp
{

    const VALID_EXTENSIONS = ['png', 'jpg', 'jpeg'];
    const ERROR_FILE_TTL = 3600;


    static function init()
    {
        AddEventHandler("main", "OnBeforeEndBufferContent", function () {
            /**
             * @var \CMain $APPLICATION
             */
            global $APPLICATION;

            foreach ($APPLICATION->buffer_content as &$content) {
                $content = self::filterContent($content);
            }
        });
    }


    private static function filterContent(string $content): string
    {
        if (!$content) {
            return $content;
        }

        $doc = new DOMDocument();
        $doc->loadHTML($content);
        $imageTags = $doc->getElementsByTagName('img');

        $converted = [];

        foreach ($imageTags as $tag) {
            $origSrc = $tag->getAttribute('src');

            if (isset($converted[$origSrc])) {
                continue;
            }

            $webpSrc = static::convert($origSrc);

            if ($webpSrc === $origSrc) {
                continue;
            }

            $converted[$origSrc] = $webpSrc;
        }

        if (!$converted) {
            return $content;
        }

        $content = str_replace(array_keys($converted), array_values($converted), $content);

        return $content;
    }


    /**
     * - Конвертирует картинку
     * - Возвращает относительный путь к картинке
     */
    static function convert(string $origSrc): string
    {
        $imgPath = self::getValidImgRelPath($origSrc);

        if (!$imgPath) {
            return $origSrc;
        }

        $imgAbsPath = $_SERVER['DOCUMENT_ROOT'] . $imgPath;

        if (!file_exists($imgAbsPath)) {
            return $origSrc;
        }

        if (file_exists($imgAbsPath . '.webp.error')) {
            if (time() - filemtime($imgAbsPath . '.webp.error') < static::ERROR_FILE_TTL) {
                return $origSrc;
            }
            @unlink($imgAbsPath . '.webp.error');
        }

        if (file_exists($imgAbsPath . '.webp')) {
            return Path::pathToUrl($imgAbsPath . '.webp');
        }

        $options = [
            'png' => [
                'encoding' => 'auto',
                'near-lossless' => 80,
                'quality' => 90,
                'sharp-yuv' => true,
            ],
            'jpeg' => [
                'encoding' => 'auto',
                'quality' => 'auto',
                'max-quality' => 90,
                'default-quality' => 80,
                'sharp-yuv' => true,
            ]
        ];

        try {
            Stack::convert($imgAbsPath, $imgAbsPath . '.webp', $options);
        } catch (\Exception $e) {
            file_put_contents($imgAbsPath . '.webp.error', date('Y-m-d') . "\r\n" . $e->getMessage());
            return $origSrc;
        }

        return Path::pathToUrl($imgAbsPath . '.webp');
    }


    /**
     * - Формирует относительный путь к картинке
     */
    static function getValidImgRelPath(string $src): string
    {
        $host = $_SERVER['HTTP_HOST'];

        if (preg_match("%^https?://{$host}%", $src)) {
            $src = preg_replace("%^https?://{$host}%", '', $src);
        }

        if (preg_match("%^https?://[^/]+%", $src)) {
            return '';
        }

        if (!preg_match("%^/%", $src)) {
            $src = "/{$src}";
        }

        $isValid = false;

        foreach (static::VALID_EXTENSIONS as $ext) {
            if (preg_match("%\.{$ext}$%", $src)) {
                $isValid = true;
                break;
            }
        }

        return $isValid ? $src : '';
    }
}
