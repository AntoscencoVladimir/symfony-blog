![Symfony 2.8 lts](https://github.com/AntoscencoVladimir/symfony-blog/blob/master/forgit.png)


##Введение


За основу взят и переведён проект разработчика Даррена Риса ([Darren Rees](https://twitter.com/dsyph3r))   [http://tutorial.symblog.co.uk](http://tutorial.symblog.co.uk) :pushpin: 

Демо сайт на основе оригинальной статьи доступен по адресу    [http://symblog.co.uk](http://symblog.co.uk) :pushpin:

Перевод на русский язык - :bust_in_silhouette: [Антощенко Владимир](mailto:antoscenco@gmail.com) | [:link: vk](http://vk.com/devseaavi88) | [:link: facebook](https://www.facebook.com/seamanavi) 

=======================================
##Благодарности

> Спасибо за помощь и рекомендации :bust_in_silhouette: [Player0k](https://github.com/player0k) | [:link: LinkedIn] (https://www.linkedin.com/in/player0k)

А также благодарю:
[@maximkou](https://habrahabr.ru/users/maximkou/) | [@evheniy](https://habrahabr.ru/users/evheniy/) | [@Big_Shark](https://habrahabr.ru/users/Big_Shark/) | [@baltazorbest](https://habrahabr.ru/users/baltazorbest/) | [@Lev_Max](https://habrahabr.ru/users/Lev_Max/)  | [@Rukuki_Ake](https://habrahabr.ru/users/Rukuki_Ake/) | [@tatenen](https://habrahabr.ru/users/tatenen/) | [@VolCh](https://habrahabr.ru/users/VolCh/) | [@Fedot](https://habrahabr.ru/users/Fedot/) | [@Fesor](https://habrahabr.ru/users/Fesor/) | [@SiDz](https://habrahabr.ru/users/SiDz/) 

=======================================
##Ссылки на Habrahabr

+ [Часть 1 — Конфигурация Symfony2 и шаблонов](https://habrahabr.ru/post/301760/) :pushpin:
+ [Часть 2 — Страница с контактной информацией: валидаторы, формы и электронная почта](https://habrahabr.ru/post/302032/) :pushpin:
+ [Часть 3 — Doctrine 2 и Фикстуры данных](https://habrahabr.ru/post/302438/) :pushpin:
+ [Часть 4 — Модель комментариев, Репозиторий и Миграции Doctrine 2](https://habrahabr.ru/post/302602/) :pushpin:

=======================================
##Установка нужной части руководства

###Способ 1
=======================================

:one: Перейдите по [:link: ссылке](https://github.com/AntoscencoVladimir/symfony-blog/releases) и скачайте архив с нужным уроком

:two: Распакуйте

:three: Откройте консоль из папки распакованного архива 

:four: Введите команду  ```composer install```

:five: Во время установки введите параметры вашей базы данных

:six: После установки введите  ```php app/console assets:install web --symlink``` 

:seven: Создайте базу данных, если она еще не была создана ранее, то вызовите следующую команду  ```php app/console doctrine:database:create``` 

:eight: Обновите схему  ```php app/console doctrine:schema:update --force``` 

:nine: Загрузите фикстуры  ```php app/console doctrine:fixtures:load``` ,  на вопрос продолжить ли выполнение команды ответить: ```yes```

:keycap_ten: Запустите сервер командой  ```php app/console server:run``` , если используете IDE PHPStorm смотрите [в первой части руководства](https://habrahabr.ru/post/301760/) как упростить задачу запуска сервера

:one::one: Перейдите по адресу http://localhost:8000/

------------------------------------------------------------------------------------------------------------------

Учтите, чтобы команда ```composer install``` запустилась, необходим установленный [composer](https://getcomposer.org/download/)

Пункты 7, 8, 9 необходимы начиная с 3-ей части руководства

=======================================
###Способ 2
=======================================

Откройте консоль введите 

```git clone --branch Lesson* https://github.com/AntoscencoVladimir/symfony-blog```

где вместо * номер нужной вам части руководства и далее выполните всё начиная с 4 пункта Первого способа

=======================================
###Способ 3
=======================================

:one: Скачайте репозиторий себе на диск командой в консоли 

```git clone https://github.com/AntoscencoVladimir/symfony-blog.git``` (или скачайте и распакуйте архив с репозиторием)

:two: Откройте консоль из папки скаченного репозитория и введите команду ```git checkout tags/Part*```  или ```git tag``` чтоб увидеть весь список доступных тэгов

где вместо * номер нужной вам части руководства и далее выполните всё начиная с 4 пункта Первого способа

------------------------------------------------------------------------------------------------------------------

Если хотите после перехода в нужную часть быть в своей ветке введите
 ```git checkout tags/Part* -b <название_ветки>```