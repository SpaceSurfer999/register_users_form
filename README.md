# register_users_form

Простой шаблон для самостоятельного добавления аккаунтов пользователей в свою базу данных. Функционал минимальный: добавление пользователя, редактирование  аккаунта  и удаление аккаунта пользователя из базы данных.
В разделе, где отображается таблица с пользователями установлен вывод -  10 пользователей на страницу.

Схема проекта(Project scheme):

|register new user| = config.php -> boot.php -> start.php(main page) -> register.php -> signup.php

|update user data or delete user| = config.php -> boot.php -> start.php(main page) -> updateprofile.php -> update.php

|delete user| = config.php -> boot.php -> start.php(main page) -> updateprofile.php -> delete.php

						



++++++++++++++++++++++==================++++++++++++++++++++++

A simple template for adding user accounts to your database on your own. The functionality is minimal: adding a user, editing an account and deleting a user account from the database.
In the section where the table with users is displayed, the output is set to 10 users per page.
