###Honey Hunters
#### Техническое задание для Honey Hunters

#####Задание:
1. Сверстать страницу по макету hhm_test.psd адаптивно, используя bootstrap.
2. Все элементы на странице должны быть рабочими.
3. Запрограммировать форму для отправки информации в БД (структура таблиц
произвольная), без перезагрузки страницы. Форма должна иметь проверку на
правильность заполнения полей
4. По нажатию на кнопку «Записать» данные должны появиться в виде карточек в
специальном блоке, без перезагрузки страницы.
5. Данные в блоке «Выводим комментарии» формируются из БД. Стиль четных и
нечетных карточек отличаются.

#####Требования к технологиям:
1. html
2. css
3. php
4. mysql
5. javascript
6. bootstrap
7. query
8. ajax

#####Выполненное задание проверяется в 3 браузерах:
1. Google
2. FireFox
3. Браузер мобильного устройства

------------
#### Задача выполнена

##### Подключаются из удаленных репозиториев
- Bootstrap 4.0.0 alpha 6
-  jQuery 3.2.1
- Шрифты Roboto и Font Awesome

Для выполнения использовал Bootstrap 4 версии, который (все еще) находится на стадии разработки.
Дополнительно реализовал некоторые детали:
- Очистка полей после успешной отправки
- Защита от постоянных нажатий на submit пользователем, когда сервер еще не успел обработать данные (блокировка кнопки)
- Плавный переход к созданному комментарию после сохранения
- Визуализация валидации полей ввода