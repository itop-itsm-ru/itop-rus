<?php

/**
 * Localized data
 *
 * @author      Vladimir Kunin <v.b.kunin@gmail.com>
 * @link        http://community.itop-itsm.ru  iTop Russian Community
 * @link        https://github.com/itop-itsm-ru/itop-rus
 * @license     http://www.opensource.org/licenses/gpl-3.0.html LGPL
 */

Dict::Add('RU RU', 'Russian', 'Русский', array(
        // Dictionary entries go here
        'Class:MailInboxBase' => 'Почтовый ящик',
        'Class:MailInboxBase+' => 'Источник входящих сообщений электронной почты',

        'Class:MailInboxBase/Attribute:server' => 'Сервер',
        'Class:MailInboxBase/Attribute:server+' => 'Адрес сервера, например, imap.exapmle.com',
        'Class:MailInboxBase/Attribute:mailbox' => 'Папка (для IMAP)',
        'Class:MailInboxBase/Attribute:login' => 'Логин',
        'Class:MailInboxBase/Attribute:password' => 'Пароль',
        'Class:MailInboxBase/Attribute:protocol' => 'Протокол',
        'Class:MailInboxBase/Attribute:protocol/Value:pop3' => 'POP3',
        'Class:MailInboxBase/Attribute:protocol/Value:imap' => 'IMAP',
        'Class:MailInboxBase/Attribute:port' => 'Порт',
        'Class:MailInboxBase/Attribute:active' => 'Включён',
        'Class:MailInboxBase/Attribute:active/Value:yes' => 'Да',
        'Class:MailInboxBase/Attribute:active/Value:no' => 'Нет',

        'MailInbox:MailboxContent' => 'Содержимое ящика',
        'MailInbox:EmptyMailbox' => 'Ящик пуст',
        'MailInbox:Z_DisplayedThereAre_X_Msg_Y_NewInTheMailbox' => '%1$d сообщений показано. Всего %2$d сообщений в ящике (%3$d новых).',
        'MailInbox:Status' => 'Статус',
        'MailInbox:Subject' => 'Тема',
        'MailInbox:From' => 'От',
        'MailInbox:Date' => 'Дата',
        'MailInbox:RelatedTicket' => 'Связанный тикет',
        'MailInbox:ErrorMessage' => 'Ошибка',
        'MailInbox:Status/Processed' => 'Обработано',
        'MailInbox:Status/New' => 'Новое',
        'MailInbox:Status/Error' => 'Ошибка',

        'MailInbox:Login/ServerMustBeUnique' => 'Эта комбинация Логина (%1$s) и Сервера (%2$s) уже используется для другого Почтового ящика.',
        'MailInbox:Login/Server/MailboxMustBeUnique' => 'Эта комбинация Логина (%1$s), Сервера (%2$s) и Папки (%3$s) уже используется для другого Почтового ящика',
        'MailInbox:Display_X_eMailsStartingFrom_Y' => 'Показать %1$s сообщений, начиная с %2$s.',
        'MailInbox:WithSelectedDo' => 'С выбранными сообщениями: ',
        'MailInbox:ResetStatus' => 'Сбросить статус',
        'MailInbox:DeleteMessage' => 'Удалить',
));