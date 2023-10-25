<img src="https://github.com/Eyeless-With-Glasses/NickQuill/blob/main/public/prev/preview.png?raw=true" width="1500" alt="Laravel Logo">

Меня зовут Олег, это мой первый проект. Написал я его на PHP 8.1,
blade.php и Framework Laravel 10 version. 
Основная цель этого проекта генерировать ник пользователю в зависимости от выбранных им параметров. 
Ник добавляется в БД если вы нажали скопировать. 
    
Принцип работы Gpt(ChatGpt): Достает заранее сгенерированный ник из БД по выбранным параметрам(язык и пол).<br>
Принцип работы Gen: Генерирует ник с помощью моей реализации (GenerateService.php).

## Запуск проекта

Запустит миграции и заполнит БД.
```
php artisan migrate --seed
```
