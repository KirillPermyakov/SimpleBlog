Simple Blog Application

1)Установите модуль с помощью composer <br>
composer require kyrylo-permiakov/simple-blog

2)Подключите модуль в конфигурации проекта config/web.php

<code>'modules' => [
        'blog' => [
            'class' => 'app\modules\Blog\Blog',
        ],
    ]</code>
    
3)Выполните миграции в папке blog/migrations
    
4)Блог доступен по адресу localhost/blog
