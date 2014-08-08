<?php

/**
 * Локализация интерфейса Combodo iTop подготовлена сообществом iTop по-русски http://community.itop-itsm.ru.
 *
 * @author   Vladimir Kunin <v.b.kunin@gmail.com>
 * @license   http://opensource.org/licenses/AGPL-3.0
 *
 *
 * Инструкция по установке
 *
 * Процесс установки заключается в замене имеющихся локализационных файлов полученными и последующем запуске процедуры обновления iTop для перекомпиляции кода.
 * 	1. Скопируйте с заменой два полученных файла из "itop-rus/dictionaries" в "путь/до/вашего/itop/dictionaries".
 * 	2. Скопируйте с заменой полученные файлы "itop-rus/datamodels/2.x/название-модуля/ru.dict.название-модуля.php" в "путь/до/вашего/itop/datamodels/2.x/название-модуля".
 *  3. Перейдите по адресу "http://адрес/вашего/itop/setup", при этом файл "путь/до/вашего/itop/conf/production/config-itop.php" должен быть доступен для записи.
 *  4. На второй странице установщика выберите "Upgrade an existing iTop instance" и следуйте дальнейшим инструкциям установщика.
 *
 * Ответы на вопросы по установке и использованию переводов, а также на любые другие вопросы по iTop всегда можно получить на сайте сообщества iTop по-русски http://community.itop-itsm.ru.
 *
 */

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Menu:RequestManagement' => 'Helpdesk',
	'Menu:RequestManagement+' => 'Helpdesk',
	'Menu:RequestManagementProvider' => 'Поставщик техподдержки',
	'Menu:RequestManagementProvider+' => 'Поставщик техподдержки',
	'Menu:UserRequest:Provider' => 'Открытые запросы, отправленные поставщику',
	'Menu:UserRequest:Provider+' => 'Открытые запросы, отправленные поставщику',
	'Menu:UserRequest:Overview' => 'Обзор',
	'Menu:UserRequest:Overview+' => 'Обзор',
	'Menu:NewUserRequest' => 'Создать запрос',
	'Menu:NewUserRequest+' => 'Создать новый запрос на обслуживание',
	'Menu:SearchUserRequests' => 'Найти запрос',
	'Menu:SearchUserRequests+' => 'Поиск запросов на обслуживание',
	'Menu:UserRequest:Shortcuts' => 'Ярлыки',
	'Menu:UserRequest:Shortcuts+' => '',
	'Menu:UserRequest:MyRequests' => 'Назначенные мне запросы',
	'Menu:UserRequest:MyRequests+' => 'Requests assigned to me (as Agent)',
	'Menu:UserRequest:MySupportRequests' => "Созданные мной запросы",
	'Menu:UserRequest:MySupportRequests+' => "My support calls",
	'Menu:UserRequest:EscalatedRequests' => 'Эскалированные запросы',
	'Menu:UserRequest:EscalatedRequests+' => 'Hot requests',
	'Menu:UserRequest:OpenRequests' => 'Открытые запросы',
	'Menu:UserRequest:OpenRequests+' => 'All open requests',
	'UI:WelcomeMenu:MyAssignedCalls' => 'Назначенные мне запросы',
	'UI-RequestManagementOverview-RequestByType-last-14-days' => 'Запросы по типу за 14 дней',
	'UI-RequestManagementOverview-Last-14-days' => 'Количество запросов за 14 дней',
	'UI-RequestManagementOverview-OpenRequestByStatus' => 'Открытые запросы по статусу',
	'UI-RequestManagementOverview-OpenRequestByAgent' => 'Открытые запросы по агенту',
	'UI-RequestManagementOverview-OpenRequestByType' => 'Открытые запросы по типу',
	'UI-RequestManagementOverview-OpenRequestByCustomer' => 'Открытые запросы по заказчику',
	'Class:UserRequest:KnownErrorList' => 'Известные ошибки',
	'Menu:UserRequest:MyWorkOrders' => 'Назначенные мне наряды на работу',
	'Menu:UserRequest:MyWorkOrders+' => 'All work orders assigned to me',
	'Class:Problem:KnownProblemList' => 'Известные проблемы',
));

// Dictionnay conventions
// Class:<class_name>
// Class:<class_name>+
// Class:<class_name>/Attribute:<attribute_code>
// Class:<class_name>/Attribute:<attribute_code>+
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>
// Class:<class_name>/Attribute:<attribute_code>/Value:<value>+
// Class:<class_name>/Stimulus:<stimulus_code>
// Class:<class_name>/Stimulus:<stimulus_code>+

//
// Class: UserRequest
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:UserRequest' => 'Запрос',
	'Class:UserRequest+' => '',
	'Class:UserRequest/Attribute:status' => 'Статус',
	'Class:UserRequest/Attribute:status+' => '',
	'Class:UserRequest/Attribute:status/Value:new' => 'Новый',
	'Class:UserRequest/Attribute:status/Value:new+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_tto' => 'Эскалация TTO',
	'Class:UserRequest/Attribute:status/Value:escalated_tto+' => '',
	'Class:UserRequest/Attribute:status/Value:assigned' => 'Назначен',
	'Class:UserRequest/Attribute:status/Value:assigned+' => '',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr' => 'Эскалация TTR',
	'Class:UserRequest/Attribute:status/Value:escalated_ttr+' => '',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval' => 'Ожидание утверждения',
	'Class:UserRequest/Attribute:status/Value:waiting_for_approval+' => '',
	'Class:UserRequest/Attribute:status/Value:approved' => 'Утвержден',
	'Class:UserRequest/Attribute:status/Value:approved+' => '',
	'Class:UserRequest/Attribute:status/Value:rejected' => 'Отклонен',
	'Class:UserRequest/Attribute:status/Value:rejected+' => '',
	'Class:UserRequest/Attribute:status/Value:pending' => 'В ожидании',
	'Class:UserRequest/Attribute:status/Value:pending+' => '',
	'Class:UserRequest/Attribute:status/Value:resolved' => 'Решенный',
	'Class:UserRequest/Attribute:status/Value:resolved+' => '',
	'Class:UserRequest/Attribute:status/Value:closed' => 'Закрыт',
	'Class:UserRequest/Attribute:status/Value:closed+' => '',
	'Class:UserRequest/Attribute:request_type' => 'Тип запроса',
	'Class:UserRequest/Attribute:request_type+' => '',
	'Class:UserRequest/Attribute:request_type/Value:incident' => 'Инцидент',
	'Class:UserRequest/Attribute:request_type/Value:incident+' => 'Incident',
	'Class:UserRequest/Attribute:request_type/Value:service_request' => 'Запрос на обслуживание',
	'Class:UserRequest/Attribute:request_type/Value:service_request+' => 'Service request',
	'Class:UserRequest/Attribute:impact' => 'Влияние',
	'Class:UserRequest/Attribute:impact+' => '',
	'Class:UserRequest/Attribute:impact/Value:1' => 'Департамент',
	'Class:UserRequest/Attribute:impact/Value:1+' => '',
	'Class:UserRequest/Attribute:impact/Value:2' => 'Служба',
	'Class:UserRequest/Attribute:impact/Value:2+' => '',
	'Class:UserRequest/Attribute:impact/Value:3' => 'Персона',
	'Class:UserRequest/Attribute:impact/Value:3+' => '',
	'Class:UserRequest/Attribute:priority' => 'Приоритет',
	'Class:UserRequest/Attribute:priority+' => '',
	'Class:UserRequest/Attribute:priority/Value:1' => 'Критический',
	'Class:UserRequest/Attribute:priority/Value:1+' => 'critical',
	'Class:UserRequest/Attribute:priority/Value:2' => 'Высокий',
	'Class:UserRequest/Attribute:priority/Value:2+' => 'high',
	'Class:UserRequest/Attribute:priority/Value:3' => 'Средний',
	'Class:UserRequest/Attribute:priority/Value:3+' => 'medium',
	'Class:UserRequest/Attribute:priority/Value:4' => 'Низкий',
	'Class:UserRequest/Attribute:priority/Value:4+' => 'low',
	'Class:UserRequest/Attribute:urgency' => 'Срочность',
	'Class:UserRequest/Attribute:urgency+' => '',
	'Class:UserRequest/Attribute:urgency/Value:1' => 'Критическая',
	'Class:UserRequest/Attribute:urgency/Value:1+' => 'critical',
	'Class:UserRequest/Attribute:urgency/Value:2' => 'Высокая',
	'Class:UserRequest/Attribute:urgency/Value:2+' => 'high',
	'Class:UserRequest/Attribute:urgency/Value:3' => 'Средняя',
	'Class:UserRequest/Attribute:urgency/Value:3+' => 'medium',
	'Class:UserRequest/Attribute:urgency/Value:4' => 'Низкая',
	'Class:UserRequest/Attribute:urgency/Value:4+' => 'low',
	'Class:UserRequest/Attribute:origin' => 'Источник',
	'Class:UserRequest/Attribute:origin+' => '',
	'Class:UserRequest/Attribute:origin/Value:mail' => 'Почта',
	'Class:UserRequest/Attribute:origin/Value:mail+' => 'mail',
	'Class:UserRequest/Attribute:origin/Value:monitoring' => 'Мониторинг',
	'Class:UserRequest/Attribute:origin/Value:monitoring+' => 'monitoring',
	'Class:UserRequest/Attribute:origin/Value:phone' => 'Телефон',
	'Class:UserRequest/Attribute:origin/Value:phone+' => 'phone',
	'Class:UserRequest/Attribute:origin/Value:portal' => 'Портал',
	'Class:UserRequest/Attribute:origin/Value:portal+' => 'portal',
	'Class:UserRequest/Attribute:approver_id' => 'Утверждающий',
	'Class:UserRequest/Attribute:approver_id+' => '',
	'Class:UserRequest/Attribute:approver_email' => 'Email утверждающего',
	'Class:UserRequest/Attribute:approver_email+' => '',
	'Class:UserRequest/Attribute:service_id' => 'Услуга',
	'Class:UserRequest/Attribute:service_id+' => '',
	'Class:UserRequest/Attribute:service_name' => 'Услуга',
	'Class:UserRequest/Attribute:service_name+' => '',
	'Class:UserRequest/Attribute:servicesubcategory_id' => 'Подкатегория',
	'Class:UserRequest/Attribute:servicesubcategory_id+' => 'Подкатегория услуги',
	'Class:UserRequest/Attribute:servicesubcategory_name' => 'Подкатегория услуги',
	'Class:UserRequest/Attribute:servicesubcategory_name+' => '',
	'Class:UserRequest/Attribute:escalation_flag' => '«Хот»-флаг',
	'Class:UserRequest/Attribute:escalation_flag+' => '',
	'Class:UserRequest/Attribute:escalation_flag/Value:no' => 'Нет',
	'Class:UserRequest/Attribute:escalation_flag/Value:no+' => 'No',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes' => 'Да',
	'Class:UserRequest/Attribute:escalation_flag/Value:yes+' => 'Yes',
	'Class:UserRequest/Attribute:escalation_reason' => 'Причина «Хот»-флага',
	'Class:UserRequest/Attribute:escalation_reason+' => '',
	'Class:UserRequest/Attribute:assignment_date' => 'Назначение',
	'Class:UserRequest/Attribute:assignment_date+' => '',
	'Class:UserRequest/Attribute:resolution_date' => 'Решение',
	'Class:UserRequest/Attribute:resolution_date+' => '',
	'Class:UserRequest/Attribute:last_pending_date' => 'В ожидании',
	'Class:UserRequest/Attribute:last_pending_date+' => '',
	'Class:UserRequest/Attribute:cumulatedpending' => 'Накопленное ожидание',
	'Class:UserRequest/Attribute:cumulatedpending+' => '',
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => '',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => '',
	'Class:UserRequest/Attribute:tto_escalation_deadline' => 'Срок TTO',
	'Class:UserRequest/Attribute:tto_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_tto_passed' => 'SLA TTO пропущено',
	'Class:UserRequest/Attribute:sla_tto_passed+' => '',
	'Class:UserRequest/Attribute:sla_tto_over' => 'SLA TTO превышено',
	'Class:UserRequest/Attribute:sla_tto_over+' => '',
	'Class:UserRequest/Attribute:ttr_escalation_deadline' => 'Срок TTR',
	'Class:UserRequest/Attribute:ttr_escalation_deadline+' => '',
	'Class:UserRequest/Attribute:sla_ttr_passed' => 'SLA TTR пропущено',
	'Class:UserRequest/Attribute:sla_ttr_passed+' => '',
	'Class:UserRequest/Attribute:sla_ttr_over' => 'SLA TTR превышено',
	'Class:UserRequest/Attribute:sla_ttr_over+' => '',
	'Class:UserRequest/Attribute:time_spent' => 'Время на решение',
	'Class:UserRequest/Attribute:time_spent+' => '',
	'Class:UserRequest/Attribute:resolution_code' => 'Код решения',
	'Class:UserRequest/Attribute:resolution_code+' => '',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance' => 'Помощь',
	'Class:UserRequest/Attribute:resolution_code/Value:assistance+' => 'assistance',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed' => 'Исправление ошибки',
	'Class:UserRequest/Attribute:resolution_code/Value:bug fixed+' => 'bug fixed',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair' => 'Ремонт оборудования',
	'Class:UserRequest/Attribute:resolution_code/Value:hardware repair+' => 'hardware repair',
	'Class:UserRequest/Attribute:resolution_code/Value:other' => 'Другое',
	'Class:UserRequest/Attribute:resolution_code/Value:other+' => 'other',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch' => 'Патч ПО',
	'Class:UserRequest/Attribute:resolution_code/Value:software patch+' => 'software patch',
	'Class:UserRequest/Attribute:resolution_code/Value:system update' => 'Обновление системы',
	'Class:UserRequest/Attribute:resolution_code/Value:system update+' => 'system update',
	'Class:UserRequest/Attribute:resolution_code/Value:training' => 'Обучение',
	'Class:UserRequest/Attribute:resolution_code/Value:training+' => 'training',
	'Class:UserRequest/Attribute:solution' => 'Описание решения',
	'Class:UserRequest/Attribute:solution+' => '',
	'Class:UserRequest/Attribute:pending_reason' => 'Причина ожидания',
	'Class:UserRequest/Attribute:pending_reason+' => '',
	'Class:UserRequest/Attribute:parent_request_id' => 'Родительский запрос',
	'Class:UserRequest/Attribute:parent_request_id+' => '',
	'Class:UserRequest/Attribute:parent_request_ref' => 'Ссылка на родительский запрос',
	'Class:UserRequest/Attribute:parent_request_ref+' => '',
	'Class:UserRequest/Attribute:parent_problem_id' => 'Родительская проблема',
	'Class:UserRequest/Attribute:parent_problem_id+' => '',
	'Class:UserRequest/Attribute:parent_problem_ref' => 'Ссылка на родительскую проблему',
	'Class:UserRequest/Attribute:parent_problem_ref+' => '',
	'Class:UserRequest/Attribute:parent_change_id' => 'Родительское изменение',
	'Class:UserRequest/Attribute:parent_change_id+' => '',
	'Class:UserRequest/Attribute:parent_change_ref' => 'Ссылка на родительское изменение',
	'Class:UserRequest/Attribute:parent_change_ref+' => '',
	'Class:UserRequest/Attribute:related_request_list' => 'Дочерние запросы',
	'Class:UserRequest/Attribute:related_request_list+' => 'Дочерние запросы',
	'Class:UserRequest/Attribute:public_log' => 'Общий журнал',
	'Class:UserRequest/Attribute:public_log+' => 'Информация в общем журнале доступна для пользователей портала',
	'Class:UserRequest/Attribute:user_satisfaction' => 'Удовлетворенность пользователя',
	'Class:UserRequest/Attribute:user_satisfaction+' => '',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1' => 'Очень доволен',
	'Class:UserRequest/Attribute:user_satisfaction/Value:1+' => 'Very satisfied',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2' => 'Вполне доволен',
	'Class:UserRequest/Attribute:user_satisfaction/Value:2+' => 'Fairly statisfied',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3' => 'Скорее недоволен',
	'Class:UserRequest/Attribute:user_satisfaction/Value:3+' => 'Rather Dissatified',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4' => 'Очень недоволен',
	'Class:UserRequest/Attribute:user_satisfaction/Value:4+' => 'Very Dissatisfied',
	'Class:UserRequest/Attribute:user_comment' => 'Комментарий пользователя',
	'Class:UserRequest/Attribute:user_comment+' => '',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname' => 'Родительский запрос',
	'Class:UserRequest/Attribute:parent_request_id_friendlyname+' => '',
	'Class:UserRequest/Stimulus:ev_assign' => 'Назначить',
	'Class:UserRequest/Stimulus:ev_assign+' => '',
	'Class:UserRequest/Stimulus:ev_reassign' => 'Переназначить',
	'Class:UserRequest/Stimulus:ev_reassign+' => '',
	'Class:UserRequest/Stimulus:ev_approve' => 'Утвердить',
	'Class:UserRequest/Stimulus:ev_approve+' => '',
	'Class:UserRequest/Stimulus:ev_reject' => 'Отклонить',
	'Class:UserRequest/Stimulus:ev_reject+' => '',
	'Class:UserRequest/Stimulus:ev_pending' => 'В ожидание',
	'Class:UserRequest/Stimulus:ev_pending+' => '',
	'Class:UserRequest/Stimulus:ev_timeout' => 'Таймаут',
	'Class:UserRequest/Stimulus:ev_timeout+' => '',
	'Class:UserRequest/Stimulus:ev_autoresolve' => 'Автоматическое решение',
	'Class:UserRequest/Stimulus:ev_autoresolve+' => '',
	'Class:UserRequest/Stimulus:ev_autoclose' => 'Автоматическое закрытие',
	'Class:UserRequest/Stimulus:ev_autoclose+' => '',
	'Class:UserRequest/Stimulus:ev_resolve' => 'Отметить как решенный',
	'Class:UserRequest/Stimulus:ev_resolve+' => '',
	'Class:UserRequest/Stimulus:ev_close' => 'Закрыть',
	'Class:UserRequest/Stimulus:ev_close+' => '',
	'Class:UserRequest/Stimulus:ev_reopen' => 'Вновь открыть',
	'Class:UserRequest/Stimulus:ev_reopen+' => '',
	'Class:UserRequest/Stimulus:ev_wait_for_approval' => 'Ждать утверждения',
	'Class:UserRequest/Stimulus:ev_wait_for_approval+' => '',
	'Class:UserRequest/Error:CannotAssignParentRequestIdToSelf' => 'Cannot assign the Parent request to the request itself',
));


Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Portal:TitleDetailsFor_Request' => 'Детали запроса',
	'Portal:ButtonUpdate' => 'Обновить',
	'Portal:ButtonClose' => 'Закрыть',
	'Portal:ButtonReopen' => 'Открыть вновь',
	'Portal:ShowServices' => 'Каталог услуг',
	'Portal:SelectRequestType' => 'Выберите тип запроса',
	'Portal:SelectServiceElementFrom_Service' => 'Выберите элемент услуги для %1$s',
	'Portal:SelectRequestTemplate' => 'Выберите шаблон для %1$s',
	'Portal:ListServices' => 'Список услуг',
	'Portal:TitleDetailsFor_Service' => 'Детали услуги',
	'Portal:Button:CreateRequestFromService' => 'Создать запрос по услуге',
	'Portal:ListOpenRequests' => 'Открытые запросы',
'Portal:UserRequest:MoreInfo' => 'Дополнительная информация',
	'Portal:Details-Service-Element' => 'Элементы услуги',
	'Portal:NoClosedTicket' => 'Нет закрытых запросов',
	'Portal:NoService' => '',
	'Portal:ListOpenProblems' => 'Открытые проблемы',
	'Portal:ShowProblem' => 'Проблемы',
	'Portal:ShowFaqs' => 'FAQ',
	'Portal:NoOpenProblem' => 'Нет открытых проблем',
	'Portal:SelectLanguage' => "Изменить язык",
	'Portal:LanguageChangedTo_Lang' => 'Язык изменен на',
	'Portal:ChooseYourFavoriteLanguage' => 'Выберите язык',
));

?>
