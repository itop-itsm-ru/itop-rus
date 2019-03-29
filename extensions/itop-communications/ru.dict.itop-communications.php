<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */
//
// Class: Communication
//
Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:Communication' => 'Оповещение~~',
	'Class:Communication+' => '~~',
	'Class:Communication/Attribute:ref' => 'ИД~~',
	'Class:Communication/Attribute:ref+' => '~~',
	'Class:Communication/Attribute:start_date' => 'Дата начала~~',
	'Class:Communication/Attribute:start_date+' => '~~',
	'Class:Communication/Attribute:end_date' => 'Дата окончания~~',
	'Class:Communication/Attribute:end_date+' => '~~',
	'Class:Communication/Attribute:status' => 'Статус~~',
	'Class:Communication/Attribute:status+' => '~~',
	'Class:Communication/Attribute:status/Value:ongoing' => 'Активно~~',
	'Class:Communication/Attribute:status/Value:ongoing+' => '~~',
	'Class:Communication/Attribute:status/Value:closed' => 'Закрыто~~',
	'Class:Communication/Attribute:status/Value:closed+' => '~~',
	'Class:Communication/Attribute:org_id' => 'Отправитель~~',
	'Class:Communication/Attribute:org_id+' => '~~',
	'Class:Communication/Attribute:org_name' => 'Наименование отправителя~~',
	'Class:Communication/Attribute:org_name+' => '~~',
	'Class:Communication/Attribute:icon' => 'Значок~~',
	'Class:Communication/Attribute:icon+' => '~~',
	'Class:Communication/Attribute:icon/Value:none' => 'Нет~~',
	'Class:Communication/Attribute:icon/Value:none+' => '~~',
	'Class:Communication/Attribute:icon/Value:information' => 'Информация~~',
	'Class:Communication/Attribute:icon/Value:information+' => '~~',
	'Class:Communication/Attribute:icon/Value:warning' => 'Предупреждение~~',
	'Class:Communication/Attribute:icon/Value:warning+' => '~~',
	'Class:Communication/Attribute:icon/Value:tip' => 'Подсказка~~',
	'Class:Communication/Attribute:icon/Value:tip+' => '~~',
	'Class:Communication/Attribute:icon/Value:scoop' => 'Последние новости~~',
	'Class:Communication/Attribute:icon/Value:scoop+' => '~~',
	'Class:Communication/Attribute:title' => 'Заголовок~~',
	'Class:Communication/Attribute:title+' => '~~',
	'Class:Communication/Attribute:message' => 'Сообщение~~',
	'Class:Communication/Attribute:message+' => '~~',
	'Class:Communication/Stimulus:ev_close' => 'Закрыть это сообщение~~',
	'Class:Communication/Stimulus:ev_close+' => '~~',
	'Class:Communication/Stimulus:ev_reopen' => 'Повторно открыть это сообщение~~',
	'Class:Communication/Stimulus:ev_reopen+' => '~~',
	'Class:Communication/Attribute:organizations_list' => 'Целевые организации~~',
	'Class:Communication/Attribute:organizations_list+' => 'Если организация не выбрана сообщение будет показано всем.~~',
	'Class:Communication/Attribute:org_match_type' => 'Целевые организации...~~',
	'Class:Communication/Attribute:org_match_type+' => '~~',
	'Class:Communication/Attribute:org_match_type/Value:direct' => 'Только выбранным~~',
	'Class:Communication/Attribute:org_match_type/Value:direct+' => '~~',
	'Class:Communication/Attribute:org_match_type/Value:cascade' => 'Всем дочерним организациям~~',
	'Class:Communication/Attribute:org_match_type/Value:cascade+' => '~~',
	'Class:Communication/Error:EndDateMustBeGreaterThanStartDate' => 'Дата завершения должна быть больше даты начала.~~',
));

//
// Class: lnkCommunicationToOrganization
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Class:lnkCommunicationToOrganization' => 'Связь оповещение / Организация~~',
	'Class:lnkCommunicationToOrganization+' => '~~',
	'Class:lnkCommunicationToOrganization/Attribute:org_id' => 'Организация~~',
	'Class:lnkCommunicationToOrganization/Attribute:org_id+' => '~~',
	'Class:lnkCommunicationToOrganization/Attribute:org_name' => 'Наименование организации~~',
	'Class:lnkCommunicationToOrganization/Attribute:org_name+' => '~~',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id' => 'Оповещение~~',
	'Class:lnkCommunicationToOrganization/Attribute:communication_id+' => '~~',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref' => 'ИД оповещения~~',
	'Class:lnkCommunicationToOrganization/Attribute:communication_ref+' => '~~',
));


Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Menu:Communication' => 'Оповещения~~',
	'Menu:Communication+' => 'Все открытые оповещения~~',
	'Portal:Communications' => 'Оповещения~~',
	'Portal:Communication:Previous' => 'Предыдущее~~',
	'Portal:Communication:Next' => 'Следующее~~',
));
