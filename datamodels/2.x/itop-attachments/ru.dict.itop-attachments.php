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
	'Attachments:TabTitle_Count' => 'Вложения (%1$d)',
	'Attachments:EmptyTabTitle' => 'Вложения',
	'Attachments:FieldsetTitle' => 'Вложения',
	'Attachments:DeleteBtn' => 'Удалить',
	'Attachments:History_File_Added' => 'Вложение %1$s добавлено.',
	'Attachments:History_File_Removed' => 'Вложение %1$s удалено.',
	'Attachments:AddAttachment' => 'Добавить вложение:',
	'Attachments:UploadNotAllowedOnThisSystem' => 'Загрузка файлов НЕ разрешена в этой системе. За подробностями обратитесь к администратору вашего iTop',
	'Attachment:Max_Go' => '(Максимальный размер файла: %1$s ГБ)',
	'Attachment:Max_Mo' => '(Максимальный размер файла: %1$s МБ)',
	'Attachment:Max_Ko' => '(Максимальный размер файла: %1$s кБ)',
	'Attachments:NoAttachment' => 'Нет вложений.',
	'Attachments:PreviewNotAvailable' => 'Предварительный просмотр не доступен для этого типа вложений.',
));
?>
