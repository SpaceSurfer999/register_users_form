# register_users_form

Простой шаблон для самостоятельного добавления аккаунтов пользователей в свою базу данных. Функционал минимальный: добавление пользователя, редактирование  аккаунта  и удаление аккаунта пользователя из базы данных.
В разделе, где отображается таблица с пользователями установлен вывод -  10 пользователей на страницу.

Схема проекта(Project scheme):
config.php  
      |
boot.php
      |
start.php(main page)  
      |                    |
|register new user|  |update user data or delete user| 
      |                                |
register.php                 updateprofile.php  
      |                        |               |
signup.php            |update user data|   |delete user|
                               |               |
					              update.php          delete.php
						



++++++++++++++++++++++==================++++++++++++++++++++++

A simple template for adding user accounts to your database on your own. The functionality is minimal: adding a user, editing an account and deleting a user account from the database.
In the section where the table with users is displayed, the output is set to 10 users per page.
