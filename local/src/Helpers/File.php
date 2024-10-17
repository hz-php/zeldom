<?php

namespace Zeldom\Bitrix\Helpers;

class File
{
    static function isVideo(string $url): bool
    {
        $file = $_SERVER['DOCUMENT_ROOT'] . $url;
        // Проверяем, существует ли файл
        if (file_exists($file)) {
            // Создаем новое объект FileInfo
            $finfo = finfo_open(FILEINFO_MIME_TYPE);

            // Получаем MIME-тип файла
            $mimeType = finfo_file($finfo, $file);

            // Закрываем объект FileInfo
            finfo_close($finfo);

            // Проверяем, является ли MIME-тип видео
            if (strpos($mimeType, 'video/') === 0) {
                return true;
            } else {
                return false;
            }
        }
    }
}
