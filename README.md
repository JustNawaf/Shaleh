# Shaleh
Normal User
```bash
- Can See All Shalehat.
- Add comment and rating to each shaleh.
```
Buss User
```bash
- Can See All Shalehat.
- Add comment and rating to each shaleh.
- Can Add new Shaleh.
- Can see all shalehat he created
- Can edit any shaleh he created.
- Can Delete any Shaleh he created.
```
Admin
```bash
- Can See All Shalehat.
- Add comment and rating to each shaleh.
- Can Add new Shaleh.
- Can edit any shaleh.
- Can Delete any Shaleh.
```
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
