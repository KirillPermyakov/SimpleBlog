Simple Blog Application

1)Установите модуль с помощью composer 
composer require kyrylo-permiakov/simple-blog

2)Подключите модуль в конфигурации проекта config/web.php

'modules' => [
        'blog' => [
            'class' => 'app\modules\Blog\Blog',
        ],
    ]
    
3)Выполните миграции в папке blog/migrations
    
4)Блог доступен по адресу localhost/blog
