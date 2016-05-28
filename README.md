#**Создание блога на Symfony 2.8 lts**


##Введение


За основу взят и переведён проект разработчика Даррена Риса [http://tutorial.symblog.co.uk](http://tutorial.symblog.co.uk) :pushpin: 

Демо сайт на основе оригинальной статьи доступен по адресу [http://symblog.co.uk](http://symblog.co.uk) :pushpin:

Перевод на русский язык - :bust_in_silhouette: [Антощенко Владимир](mailto:antoscenco@gmail.com)

[:arrow_lower_right: vk](http://vk.com/devseaavi88) 

[:arrow_lower_right: facebook](https://www.facebook.com/seamanavi) 

=======================================
##Благодарности

> Спасибо за помощь и рекомендации :bust_in_silhouette: [Player0k](https://github.com/player0k)

А также благодарю
> [@maximkou](https://habrahabr.ru/users/maximkou/), [@evheniy](https://habrahabr.ru/users/evheniy/), [@Big_Shark](https://habrahabr.ru/users/Big_Shark/), [@baltazorbest](https://habrahabr.ru/users/baltazorbest/)


=======================================
##Ссылки на Habrahabr

+ [Часть 1 — Конфигурация Symfony2 и шаблонов](https://habrahabr.ru/post/301760/) :pushpin:
+ [Часть 2 — Страница с контактной информацией: валидаторы, формы и электронная почта](https://habrahabr.ru/post/302032/) :pushpin:

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

:seven: Запустите сервер командой  ```php app/console server:run``` , если используете IDE PHPStorm смотрите [в первой части руководства](https://habrahabr.ru/post/301760/) как упростить задачу запуска сервера

:eight: Перейдите по адресу http://localhost:8000/

=======================================
###Способ 2

Откройте консоль введите 

```git clone --branch Lesson* https://github.com/AntoscencoVladimir/symfony-blog```

где вместо * номер нужной вам части руководства и далее выполните всё начиная с [:four: пункта Первого способа :arrow_up:](#Способ-1)

=======================================
###Способ 3

:one: Скачайте репозиторий себе на диск командой в консоли ```git clone https://github.com/AntoscencoVladimir/symfony-blog.git``` (или скачайте и распакуйе архив с репозиторием)

:two: Откройте консоль из папки скаченного репозитория и введите команду ```git checkout tags/Part*```

где вместо * номер нужной вам части руководства и далее выполните всё начиная с [:four: пункта Первого способа :arrow_up:](#Способ-1)

------------------------------------------------------------------------------------------------------------------

(если хотите после перехода в нужную часть быть в своей ветке введите git checkout tags/Part* -b <название_ветки>)