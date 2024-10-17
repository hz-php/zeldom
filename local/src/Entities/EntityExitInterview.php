<?php

/**
 * - Класс сущности ресторанов
 */

namespace Itprofit\Bitrix\Entities;

use Bitrix\Main\Mail\Event;
use Bitrix\Sale\Exchange\Logger\Exchange;
use CIBlockElement;
use CIBlockSection;
use CModule;
use COption;
use Itprofit\Bitrix\Helpers\Arr;

class EntityExitInterview extends Entity
{

    static function set($data)
    {
        CModule::IncludeModule(
            'iblock'
        );

        $mainCauses = '';

        if ($data['other-causes1']) {
            $mainCauses .= 'Более высокая оплата труда и дополнительные льготы.';
        }
        if ($data['other-causes2']) {
            $mainCauses .= 'Работа в интенсивном темпе.';
        }
        if ($data['other-causes3']) {
            $mainCauses .= 'Требование работать больше часов.';
        }
        if ($data['other-causes4']) {
            $mainCauses .= 'Домогательства или дискриминация на рабочем месте.';
        }
        if ($data['other-causes5']) {
            $mainCauses .= 'Сложные отношения с коллегами.';
        }
        if ($data['other-causes6']) {
            $mainCauses .= 'Ничего из перечисленного.';
        }
        if ($data['other-causes7']) {
            $mainCauses .= 'Отсутствие перспектив повышения в должности.';
        }
        if ($data['other-causes8']) {
            $mainCauses .= 'Неудобное расписание или новый график.';
        }
        if ($data['other-causes9']) {
            $mainCauses .= 'Недостаточное или плохое обучение.';
        }
        if ($data['other-causes10']) {
            $mainCauses .= 'Работа далеко от дома/места учебы.';
        }
        if ($data['other-causes11']) {
            $mainCauses .= 'Сложные отношения с менеджерами.';
        }
        if ($data['other-causes12']) {
            $mainCauses .= 'Плохие условия работы (оборудование, охрана труда).';
        }
        if ($data['other-causes13']) {
            $mainCauses .= 'Личные причины, не связанные с работой в ресторане.';
        }

        $orient = '';
        if ($data['orientation1']) {
            $orient .= "Вы чувствовали, что Вам рады в ресторане.";
        }
        if ($data['orientation2']) {
            $orient .= "Условия оплаты труда и предоставляемые льготы доступно и полно объяснены.";
        }
        if ($data['orientation3']) {
            $orient .= "Условия работы были доступно и полно объяснены.";
        }
        if ($data['orientation4']) {
            $orient .= "Ваши обязанности и задачи были доступно и полно объяснены.";
        }
        if ($data['orientation5']) {
            $orient .= "Проведенное обучение позволяло успешно справляться с рабочими обязанностями.";
        }

        $menegment = '';
        if ($data['managment1']) {
            $menegment .= "В ресторане действует Политика открытых дверей.";
        }
        if ($data['managment2']) {
            $menegment .= "Вы свободно могли обратиться к команде менеджеров, если у Вас был вопрос или проблема.";
        }
        if ($data['managment3']) {
            $menegment .= "Вы легко можете получить всю необходимую информацию от менеджеров.";
        }
        if ($data['managment4']) {
            $menegment .= "Команда менеджеров относилась к Вам с достоинством и уважением.";
        }
        if ($data['managment5']) {
            $menegment .= "Команда менеджеров прислушивалась к Вашим предложениям.";
        }

        $like = '';
        if ($data['like1']) {
            $like .= "Хорошая рабочая среда/атмосфера.";
        }
        if ($data['like2']) {
            $like .= "Возможности карьерного роста.";
        }
        if ($data['like3']) {
            $like .= "Хороший баланс работы и личной жизни.";
        }
        if ($data['like4']) {
            $like .= "Работа в организации, ориентированной на гостей.";
        }
        if ($data['like5']) {
            $like .= "Ваш непосредственный руководитель.";
        }
        if ($data['like6']) {
            $like .= "Обучение и развитие.";
        }
        if ($data['like7']) {
            $like .= "Ваша команда.";
        }
        if ($data['like8']) {
            $like .= "Конкурентные условия оплаты труда.";
        }
        if ($data['like-other']) {
            $like .= $data['like-other'] . '.';
        }

        $experienceFeedback = '';
        if ($data['experience-feedback1']) {
            $experienceFeedback .= "Меня ценили в ресторане.";
        }
        if ($data['experience-feedback2']) {
            $experienceFeedback .= "Я был горд работать в ресторане.";
        }
        if ($data['experience-feedback3']) {
            $experienceFeedback .= "Я буду рекомендовать друзьям и членам семьи ресторан как отличное место работы.";
        }
        if ($data['experience-feedback4']) {
            $experienceFeedback .= "Я не исключаю возможность вернуться в ресторан.";
        }
        if ($data['experience-feedback5']) {
            $experienceFeedback .= "Ничего из вышеперечисленного.";
        }

        if ($data['causes'] == 'on') {
            $data['causes'] = $data['causes-other'];
        }

        $res = CIBlockElement::GetByID($data["id_restoran"]);

        if ($ar_res = $res->GetNext()) {
            $nameRest = $ar_res['NAME'];
        }

        $el = new CIBlockElement;

        if (isset($data['ID'])) {
            $arProperties = [
				//'RESTAURANT' => $data['id_restoran'],
				//'POSITION' => $data['position'],
				//'POSITION_CODE' => $data['position_code'],
				//'EXPIRIENS' => $data['experience'],
                'CAUSES' => $data['causes'],
                'MAIN_CAUSES' => $mainCauses,
                'OTHER_CAUSES' => $data['other-causes'],
                'OTHER_JOB' => $data['other-job'],
                'ORINENTATION' => $orient,
                'LEARNING_IMPROVEMENT' => $data['learning-improvement'],
                'MANAGMENT' => $menegment,
                'MANAGMENT_FEADBACK_1' => $data['managment-feedback-1'],
                'MANAGMENT_FEADBACK_2' => $data['managment-feedback-2'],
                'LIKE' => $like,
                'TEXT_FEEDBACK_FEER' => $data['text-feedback-fair'],
                "EXPERIENCE_FEEDBACK" => $experienceFeedback,
                "TEXT_FEEDBACK_EXTRA" => $data['text-feedback-extra'],
				//"DATE_OF_DISMISSAL" => $data['date_of_dismissal'],
				//"DATE_OF_RECEIPT" => $data['date_of_receipt'],
				//"DATE_ACTIVATION" => $data['date_activation'],
				//"UNIQIE_ID" => $data['unique_id'],
            ];

            $arLoadProductArray = [
                "IBLOCK_ID"      => ITERVIE,
                "PROPERTY_VALUES" => $arProperties,
                "NAME" => $data['name'],
                "ACTIVE" => "Y",
            ];

			$idInterwiew = CIBlockElement::SetPropertyValuesEx($data['ID'],ITERVIE, $arProperties);

            $idInterwiew = $data['ID'];
        } else {
            $arProperties = [
                'RESTAURANT' => $nameRest,
                'POSITION' => $data['position'],
                'POSITION_CODE' => $data['position_code'] ?? '',
                'EXPIRIENS' => $data['experience'],
                'CAUSES' => $data['causes'],
                'MAIN_CAUSES' => $mainCauses,
                'OTHER_CAUSES' => $data['other-causes'],
                'OTHER_JOB' => $data['other-job'],
                'ORINENTATION' => $orient,
                'LEARNING_IMPROVEMENT' => $data['learning-improvement'],
                'MANAGMENT' => $menegment,
                'MANAGMENT_FEADBACK_1' => $data['managment-feedback-1'],
                'MANAGMENT_FEADBACK_2' => $data['managment-feedback-2'],
                'LIKE' => $like,
                'TEXT_FEEDBACK_FEER' => $data['text-feedback-fair'],
                "EXPERIENCE_FEEDBACK" => $experienceFeedback,
                "TEXT_FEEDBACK_EXTRA" => $data['text-feedback-extra'],
                "DATE_OF_DISMISSAL" => $data['date_of_dismissal'],
                "DATE_OF_RECEIPT" => $data['date_of_receipt'],
                "DATE_ACTIVATION" => $data['date_activation'],
                "UNIQIE_ID" => $data['unique_id'],
            ];

            $arLoadProductArray = [
                "IBLOCK_ID"      => ITERVIE,
                "PROPERTY_VALUES" => $arProperties,
                "NAME"           => $data['name'],
                "ACTIVE"         => "Y",
            ];

            $idInterwiew = $el->Add($arLoadProductArray);
        }

        if ($idInterwiew) {
            $email = COption::GetOptionString("main", "email_from");

            $arFields = array(
                "EVENT_NAME" => "ADD_ITERVIEW", // Название почтового события
                "LID" => "s1", // Код сайта
                "C_FIELDS" => array(
                    "EMAIL_TO" => $email, // Адрес получателя
                    'FIO' => $data['name'],
                    'POSITION' => $data['position'],
                    'CITY' => $data['city'],
                    'EXPIRIENCE' => $data['experience'],
                    'CAUSES' => $data['causes'],
                    'MAIN_CAUSES' => $mainCauses,
                    'OTHER_CAUSES' => $data['other-causes'],
                    'OTHER_JOB' => $data['other-job'],
                    'ORINENTATION' => $orient,
                    'LEARNING_IMPROVEMENT' => $data['learning-improvement'],
                    'MANAGMENT' => $menegment,
                    'MANAGMENT_FEADBACK_1' => $data['managment-feedback-1'],
                    'MANAGMENT_FEADBACK_2' => $data['managment-feedback-2'],
                    'LIKE' => $like,
                    'TEXT_FEEDBACK_FEER' => $data['text-feedback-fair'],
                    "EXPERIENCE_FEEDBACK" => $experienceFeedback,
                    "TEXT_FEEDBACK_EXTRA" => $data['text-feedback-extra'],
                )
            );

            // Отправляем письмо
            Event::send($arFields);

            $applications = self::getAllApplications(['ID' => $idInterwiew]);

            if ($applications) {
                return $applications[0];
            }
        }

        return null;
    }

    static function getAllApplications(array $filter): array
    {
        $arFilter = $filter;

        $arFilter['IBLOCK_ID'] = ITERVIE;

        $arSelect = [
            'NAME',
            'ID',
            'DATE_CREATE',
            'PROPERTY_RESTAURANT',
            'PROPERTY_CAUSES',
            'PROPERTY_POSITION',
            'PROPERTY_POSITION_CODE',
            'PROPERTY_DATE_OF_DISMISSAL',
            'PROPERTY_DATE_OF_RECEIPT',
            'PROPERTY_DATE_ACTIVATION',
            'PROPERTY_MAIN_CAUSES',
            'PROPERTY_ORINENTATION',
            'PROPERTY_MANAGMENT',
            'PROPERTY_LIKE',
            'PROPERTY_OTHER_CAUSES',
            'PROPERTY_LEARNING_IMPROVEMENT',
            'PROPERTY_MANAGMENT_FEADBACK_1',
            'PROPERTY_UNIQIE_ID',
            'PROPERTY_OTHER_JOB',
            'PROPERTY_MANAGMENT_FEADBACK_2',
        ];

        $res = CIBlockElement::GetList(['SORT' => 'ASC'], $arFilter, false, [], $arSelect);

        $applications = [];

        while ($ar_result = $res->GetNext()) {
            $applications[] = $ar_result;
        }

        return $applications ?? [];
    }
}
