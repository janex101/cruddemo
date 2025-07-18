Simplified Laravel Project File Structure

laravel-project/
├── app/
│   ├── Http/
│   │   └── Controllers/
│   │       └── PostController.php
│   └── Models/
│       └── Post.php
│
├── resources/
│   ├── views/
│   │   ├── layouts/
│   │   │   └── app.blade.php
│   │   └── posts/
│   │       ├── index.blade.php
│   │       ├── create.blade.php
│   │       ├── edit.blade.php
│   │       └── show.blade.php
│
├── public/
│   ├── css/
│   │   └── sidebar.css
│   ├── js/
│   │   └── sidebar.js
│
├── routes/
│   └── web.php
│
├── database/
│   └── migrations/
│       └── 202x_xx_xx_create_posts_table.php
│
├── .env
├── composer.json
└── artisan
