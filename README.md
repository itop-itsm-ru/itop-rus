iTop по-русски
==============

Русский перевод интерфейса для [Combodo iTop Service Desk](www.combodo.com/itop) версий 2.x.

### Инструкция по установке

Процесс установки заключается в замене имеющихся локализационных файлов полученными и последующем запуске процедуры обновления iTop для перекомпиляции кода.

Порядок действий следующий:

1. Скачайте [последнюю версию переводов](https://github.com/vbkunin/itop-rus/archive/master.zip) и распакуйте содержимое полученного архива itop-rus-master.zip на диск.
2. Скопируйте с заменой два полученных файла из `itop-rus/dictionaries` в `путь/до/вашего/itop/dictionaries`.
3. Скопируйте с заменой полученные файлы `itop-rus/datamodels/2.x/название-модуля/ru.dict.название-модуля.php` в `путь/до/вашего/itop/datamodels/2.x/название-модуля`.
4. Скопируйте файлы из `itop-rus/extensions/название-доп-модуля` в `путь/до/вашего/itop/extensions/название-доп-модуля`, если вы используете дополнительные модули от Combodo.
5. Перейдите по адресу `http://адрес/вашего/itop/setup`, при этом конфигурационный файл `путь/до/вашего/itop/conf/production/config-itop.php` должен быть доступен для записи.
6. На второй странице установщика выберите **Upgrade an existing iTop instance** и следуйте дальнейшим инструкциям установщика.

Ответы на вопросы по установке и использованию переводов, а также на любые другие вопросы по iTop всегда можно получить на [сайте сообщества iTop по-русски](http://community.itop-itsm.ru).

### Патчи переводов нового портала (для iTop 2.3.1)

Некоторые элементы нового портала автоматически не переводятся из-за ошибок в коде (Service, Sous-Service и д.р.). В ближайших версиях iTop это исправят, а пока вы можете применить нижеследующие исправления сами.

itop/datamodels/2.x/itop-tickets/datamodel.itop-tickets.xml
```
1055 -  <title>Service</title>
1055 +  <title>Class:Service</title>
...
1069 -   <title>Sous-Service</title>
1069 +   <title>Class:ServiceSubcategory</title>
```

/itop-knownerror-mgmt/datamodel.itop-knownerror-mgmt.xml
```
625: -  <title>Catégories</title>
625: +  <title>Class:FAQCategory</title>
...
633: -  <title>FAQs</title>
633: +  <title>Class:FAQ</title>
```

itop/datamodels/2.x/itop-portal-base/portal/src/views/bricks/user-profile/layout.html.twig
```
46: -   <h3 class="panel-title">{{ 'Photo'|dict_s }}</h3>
46: +   <h3 class="panel-title">{{ 'Brick:Portal:UserProfile:Photo:Title'|dict_s }}</h3>
```

itop/datamodels/2.x/itop-portal-base/portal/src/views/bricks/browse/mode_tree.html.twig
```
28: -   <label>Filtrer :<input type="search" class="form-control input-sm" id="brick_search_field" placeholder="" aria-controls="brick_main_table" value="{{ sSearchValue }}"></label>
28: +   <label>{{ 'Portal:Datatables:Language:Search'|dict_s }}<input type="search" class="form-control input-sm" id="brick_search_field" placeholder="принтер, сеть и т.п." aria-controls="brick_main_table" value="{{ sSearchValue }}"></label>
```

Те, кому лень править файлы руками, могут перенести все содержимое _patches_ в папку с файлами iTop (актуально только для версии 2.3.1!).

**После изменений не забудьте обновить код через процедуру обновления iTop или Toolkit!**


### Ссылки
 - [Обсуждение локализации интерфейса](http://community.itop-itsm.ru/t/lokalizacziya-interfejsa/25)
 - [Официальный сайт Combodo iTop](http://www.combodo.com/itop)
 - [Cайт сообщества iTop по-русски](http://community.itop-itsm.ru)
