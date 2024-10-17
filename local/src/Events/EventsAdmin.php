<?php

namespace Itprofit\Bitrix\Events;


class EventsAdmin extends Event
{

    protected function __construct()
    {
        AddEventHandler("main", "OnBuildGlobalMenu", function (&$adminMenu, &$moduleMenu) {
            $this->modifyAdminMenu($adminMenu, $moduleMenu);
        });
    }


    private function modifyAdminMenu(&$adminMenu, &$moduleMenu)
    {
        $adminMenu[] = [
            "global_menu_custom" => [
                "menu_id" => "custom",
                "page_icon" => "icon",
                "index_icon" => "icon",
                "text" => "Интеграция",
                "title" => "Интеграция",
                "sort" => 1000,
                "items_id" => "global_menu_custom",
                "help_section" => "custom",
                "items" => []
            ],
        ];


        $moduleMenu[] = [
            "parent_menu" => "global_menu_custom",
            "icon" => "icon",
            "page_icon" => "icon",
            "sort" => "100",
            "menu_id" => 'invite2',
            "text" => "Импорт товаров",
            "title" => "Обновить данные",
            "more_url" => ['/bitrix/admin/add_elements.php'],
            "url" => "/bitrix/admin/import_elements.php",
        ];
        $moduleMenu[] = [
            "parent_menu" => "global_menu_custom",
            "icon" => "icon",
            "page_icon" => "icon",
            "sort" => "100",
            "menu_id" => 'invite2',
            "text" => "Время обновление товаров",
            "title" => "Обновить данные",
            "more_url" => ['/bitrix/admin/add_elements.php'],
            "url" => "/bitrix/admin/time_update_products.php",
        ];

        $moduleMenu[] = [
            "parent_menu" => "global_menu_custom",
            "icon" => "icon",
            "page_icon" => "icon",
            "sort" => "1001",
            "menu_id" => 'invite',
            "text" => "Скачать excel exit_interview",
            "title" => "Обновить данные",
            "more_url" => ['/bitrix/admin/add_elements.php'],
            "url" => "/bitrix/admin/exit_interview.php",
        ];

    }
}
