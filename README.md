# Командный проект по курсу "Битрикс-разработчик с нуля"

* [Цели проекта](#цели-проекта)
* [Чеклист готовности к работе над проектом](#Чеклист-готовности-к-работе-над-проектом)
* [Описание проекта](#Описание-проекта)
* [Сроки реализации проекта](#Сроки-реализации-проекта)
* [Инструкция к выполнению](#Инструкция-к-выполнению)
    * [1 этап](#1-этап)
    * [2 этап](#2-этап)
* [Правила сдачи проекта](#Правила-сдачи-проекта)
* [Критерии оценки](#критерии-оценки)



## Цели проекта

Цель командного проекта - разработка информационного сайта на CMS Битрикс.  

Вам предстоит:
- Настроить управление сайтом через административный раздел
- Самостоятельно разработать и настроить два шаблона сайта (для главной и внутренней страницы)
- Самостоятельно разработать и настроить динамические разделы "Меню", "Отзывы", "Мероприятия"
- Создать две статические страницы: О нас и Контакты
- Разработать шаблоны компонентов для главной страницы

В результате выполнения командного проекта вы:
- получите практический опыт работы в команде
- прокачаете навыки коммуникации и умение выполнять задачи в срок
- закрепите навыки работы с GitHub
- потренируете навык проверки кода и совместной разработки

Командная работа над проектом позволит отточить hard- и soft skills и повысит вашу конкурентоспособность на рынке.


## Чеклист готовности к работе над проектом

- [x] Изучили "Инструкцию по выполнению командного проекта" и "Правила работы в команде" в личном кабинете
- [x] Знаете, кто с вами в команде
- [x] Познакомились с игроками команды и определились, каким способом будете общаться (переписка в любом мессенджере, видеозвонки)
- [x] Договорились, кто будет размещать общий репозиторий проекта и отправлять его на проверку

У вас должен быть установлено:
- [x] Веб-сервер Apache соответствующий требованиям bitrix_server_test.php
- [x] MySQL 5.6 и выше
- [x] PHP 7.4
- [x] 1С-Битрикс: Управление сайтом (БУС) 
- [x] Редактор кода, с которым работаете
- [x] GIT и создан аккаунт на Github.

Если все этапы чеклиста пройдены, то можете смело приступать к работе над проектом. Успехов в работе!

## Описание проекта
Вам нужно разработать сайт ресторана "Морская кухня".
Сайт содержит 3 динамических раздела, по одному для каждого участника проекта.
Также каждому такому разделу соответствует компонент на главной странице со своим шаблоном. Участник, который делает раздел, готовит и шаблон компонента для главной страницы.
Каждый из участников проекта самостоятельно устанавливает сайт, создаёт полностью структуру сайта и один инфоблок для "своего" раздела.
На главной странице вы устанавливаете свой компонент и готовите свой шаблон.

Когда индивидуальная часть работы будет выполнена, каждый участник сливает в общий репозиторий:
* Свой раздел
* Файлы для xml и csv импорта данных в свой инфоблок
* шаблон для комплексного компонента раздела (содержит шаблон для списка и детальной страницы)
* шаблон для простого компонента для главной страницы

Остальные участники:
* забирают его эти данные 
* делают импорт данных в инфоблоки
* делают git merge своей главной страницы со страницами остальных участников, 
* забирают к себе компоненты для шаблонов main и inner, 
* а также динамические разделы других участников.


### Структура сайта:
- index.php — главная страница
— /catalog/ — раздел Меню
— /reviews/ — раздел Отзывы
— /events/ — раздел Мероприятия
— /search/ — раздел Поиска (стандартный)
— /about/index.php — страница О ресторане в разделе О нас
— /about/contact.php — страница Контакты в разделе О нас

### Задачи проекта:
* Установите 1С-Битрикс: Управление сайтом, редакция Стандарт, любое решение
* Удалите лишние и создайте необходимые инфоблоки Меню, Отзывы, Мероприятия
* Создайте структуру сайта, удалите лишние разделы и страницы
* Интегрируйте шаблоны сайта.

#### 1. Установите 1С-Битрикс: Управление сайтом, редакция Стандарт, любое решение
— Зарегистрируйте демо-ключ
— Установите обновления системы
— Выполните проверку системы
— Настройте резервное копирование публичной части сайта раз в сутки
— Создайте пользователей для всех участников группы, а также для проверяющего

#### 2. Создайте необходимые инфоблоки: Меню, Отзывы, Мероприятия
— Установите к ним права доступа, 
— добавьте нужные свойства,
— настройте ЧПУ по символьным кодам для элементов и разделов,
— настройте формы создания/редактирования элементов, 
— укажите подходящие подписи для элементов и разделов.

#### 3. В публичной части сайта
— Создайте необходимые типы меню, лишние удалите
— Создайте структуру сайта, добавляя страницы и разделы в соответствующие типы меню
— Удалите лишние разделы и страницы
- Разместите компоненты на главной странице и в разделах
— На главной странице должно быть по одному компоненту для вывода элементов из каждого раздела (см. файл index.html в вёрстке)
— В каждом разделе должен выводиться список элементов и детальная страница элемента. Шаблоны компонентов должны соответствовать предоставленной вёрстке. Верстку для списка элементов возьмите в файле index.html соответствующего раздела, для детальной странице используйте страницы с названием *_detail.html из папки раздела
— Создайте раздел и страницы /about/index.php и /about/contact.php, добавьте эти ссылки в выпадающее вертикальное меню

#### 4. Создайте два шаблона сайта:
— main, подключите его для главной страницы
— inner, подключите его для всех остальных страниц
— разместите компоненты в шапке и подвале
— интегрируйте вёрстку в шаблоны компонентов меню и поиска

Архив с вёрсткой находится в материалах к Курсовому проекту.

## Сроки реализации проекта

Работа над проектом рассчитана на 14 дней для команды из трех человек. Всего: 20 часов (2 недели по 2 часа)

Для планирования своего времени рекомендуется опираться на роадмап. 
Придерживайтесь следующего деления проекта на этапы и задачи участников:

### Роадмап
|Этапы|Кол-во дней|Задачи|
|-----|------|----------|
|1, 2 этапы|1 день|Создание репозитория для проекта, предоставление доступа участникам, распределение задач|
|3 этап|3 дня|Разработка разделов|
|4 этап|3 дня|Взаимопроверка, устранение ошибок|
|Сдача проекта|3 дня|Отправка, анализ обратной связи от проверяющего преподавателя|
|Доработка по результатам* (при необходимости)||2 дня|Доработка проекта по итогам обратной связи от проверяющего|
|Повторная сдача проекта* (при необходимости)|3 дня|Отправка, обратная связь от проверяющего преподавателя|


## Инструкция к выполнению

### 1 этап. Создание общего репозитория  

- Один из участников создаёт у себя репозиторий и размещает в него содержимое этого репозитория (не через `Fork`)

- Для предоставления доступа остальным участникам необходимо зайти в `Settings` репозитория проекта, найти раздел `Collaborators`, кликнуть по кнопке `Add people`, добавить ник напарников и выбрать роль `Admin`.

### 2 этап. Распределение задач

Распределите задачи между участниками в соответствии с таблицей.


|Задачи|Участник A|Участник B|Участник C|
|Создает раздел|“Новости"|"Статьи"|“Документы”|
|Проверяет и исправляет ошибки|"Статьи", “Документы”|“Новости", “Документы”|"Статьи", “Новости”|

Отведите три ветки - `News`,`Articles`, `Doc` для проведения код ревью.


## Правила сдачи проекта

- Разработаны разделы  “Документы”, "Статьи", “Новости”
- Все ветки слиты в `main`
- ....
- В личном кабинете в поле "Ссылка на решение" отправлена ссылка на готовый сайт, указан логин и пароль для администратора сайта
- ВАЖНО! Перед отправкой в поле “Отправить на проверку эксперту” проставлена галочка


## Критерии оценки проекта

В командном проекте будет оцениваться:



**Зачет ставится троим студентам при выполнении всех требований командного проекта**



