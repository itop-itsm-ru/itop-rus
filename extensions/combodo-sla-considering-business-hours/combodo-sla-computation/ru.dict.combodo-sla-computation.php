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
// Class: CoverageWindow
//

Dict::Add('RU RU', 'Russian', 'Русский', array(
	'Menu:CoverageWindows' => 'Рабочее время~~',
	'Menu:CoverageWindows+' => 'Все рабочее время~~',
	'Class:CoverageWindow' => 'Рабочее время~~',
	'Class:CoverageWindow+' => '~~',
	'Class:CoverageWindow/Attribute:name' => 'Наименование~~',
	'Class:CoverageWindow/Attribute:name+' => '~~',
	'Class:CoverageWindow/Attribute:description' => 'Описание~~',
	'Class:CoverageWindow/Attribute:description+' => '~~',
	'Class:CoverageWindow/Attribute:friendlyname' => 'Понятное имя~~',
	'Class:CoverageWindow/Attribute:friendlyname+' => '~~',
	'Class:CoverageWindow/Attribute:interval_list' => 'Рабочие часы~~',
	'WorkingHoursInterval:StartTime' => 'Время начала:~~',
	'WorkingHoursInterval:EndTime' => 'Время окончания:~~',
	'WorkingHoursInterval:WholeDay' => 'Весь день:~~',
	'WorkingHoursInterval:RemoveIntervalButton' => 'Удалить интервал~~',
	'WorkingHoursInterval:DlgTitle' => 'Изменение интервала рабочих часов~~',
	'Class:CoverageWindowInterval' => 'Интервал рабочих часов~~',
	'Class:CoverageWindowInterval/Attribute:coverage_window_id' => 'Рабочее время~~',
	'Class:CoverageWindowInterval/Attribute:weekday' => 'День недели~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:sunday' => 'Воскресенье~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:monday' => 'Понедельник~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:tuesday' => 'Вторник~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:wednesday' => 'Среда~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:thursday' => 'Четверг~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:friday' => 'Пятница~~',
	'Class:CoverageWindowInterval/Attribute:weekday/Value:saturday' => 'Суббота~~',
	'Class:CoverageWindowInterval/Attribute:start_time' => 'Время начала~~',
	'Class:CoverageWindowInterval/Attribute:end_time' => 'Время окончания~~',
	
));

Dict::Add('RU RU', 'Russian', 'Русский', array(
	// Dictionary entries go here
	'Menu:Holidays' => 'Праздники~~',
	'Menu:Holidays+' => 'Все праздники~~',
	'Class:Holiday' => 'Праздник~~',
	'Class:Holiday+' => 'Нерабочий день~~',
	'Class:Holiday/Attribute:name' => 'Наименование~~',
	'Class:Holiday/Attribute:date' => 'Дата~~',
	'Class:Holiday/Attribute:calendar_id' => 'Календарь~~',
	'Class:Holiday/Attribute:calendar_id+' => 'Календарь с которым связан праздник (если есть)~~',
	'Coverage:Description' => 'Описание~~',	
	'Coverage:StartTime' => 'Время начала~~',	
	'Coverage:EndTime' => 'Время окончания~~',

));


Dict::Add('RU RU', 'Russian', 'Русский', array(
	// Dictionary entries go here
	'Menu:HolidayCalendars' => 'Календари праздников~~',
	'Menu:HolidayCalendars+' => 'Все календари праздников~~',
	'Class:HolidayCalendar' => 'Календарь праздников~~',
	'Class:HolidayCalendar+' => 'Группа праздников с которой связаны другие объекты~~',
	'Class:HolidayCalendar/Attribute:name' => 'Наименование~~',
	'Class:HolidayCalendar/Attribute:holiday_list' => 'Праздники~~',
));
