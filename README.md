# Shaleh
# Setup
First you need to install composer
```bash
composer install
```

 You need to install npm
```bash
npm install
```

  copy .env
```bash
cp .env.example .env
```

  set APP_KEY
```bash
php artisan key:generate
```

 setup database in .env
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

 Migrate Tables
```bash
php artisan migrate
```

 Storage Link
```bash
php artisan storage:link
```

 To run Website you need to set this command
```bash
php artisan serv
```
