#**Создание блога на Symfony 2.8.1 lts**

##Введение


За основу взят и переведён проект разработчика Даррена Риса [http://tutorial.symblog.co.uk](http://tutorial.symblog.co.uk) :pushpin: 

Демо сайт на основе оригинальной статьи доступен по адресу [http://symblog.co.uk](http://symblog.co.uk) :pushpin:

Перевод на русский язык - :bust_in_silhouette: [Антощенко Владимир](mailto:antoscenco@gmail.com)

[:arrow_lower_right: vk](http://vk.com/devseaavi88) 

[:arrow_lower_right: facebook](https://www.facebook.com/seamanavi) 

=======================================
##Ссылки на Habrahabr

1. [Часть 1 — Конфигурация Symfony2 и шаблонов](https://habrahabr.ru/post/301760/) :pushpin:

=======================================
##Установка 

1.Скопируйте репозиторий

2.Переименуйте файл 'app/config/parameters.yml.dist' в 'app/config/parameters.yml'

3.Укажите ваши параметры для базы даных и т.д.

4.Запустите команду в консоли 'composer install' для установки необходимых зависимостей, учтите для этого вам необходим установленный Composer для Windows скачать можно по [ссылке](https://getcomposer.org/doc/00-intro.md#installation-windows) :pushpin:

5.Установите assets с помощью команды 'php app/console assets:install web' 


Если у вас уже скопирован репозиторий то обновите зависимости командами 

$ composer install

и очистите кэш

$ php app/console cache:clear

=======================================
##Перемещение по коммитам (Урокам)

1. Скопируйте репозиторий

2. Откройте консоль, переместитесь в папку с проектом и введите комманду git checkout SHA  (значение SHA нужно скопировать из коммита в который вы хотите переместиться)

3. Список коммитов доступен по [ссылке](https://github.com/AntoscencoVladimir/symfony-blog/commits/master) 

4. Далее выполните необходимые пункты из раздела Установка

=======================================