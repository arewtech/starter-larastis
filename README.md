# Starter Code Dashboard Template Larastis

[Stisla](https://github.com/stisla/stisla) is a Free Bootstrap Admin Template which will help you to speed up your project and design your own dashboard UI.

## Features

- Authentication
- Password reset
- Email verification (inactive)
- Update profile

## Dashboard

Preview Dashboard

![larastis](/public/preview/dashboard.png)

Preview Update Profile

![larastis](/public/preview/update-profile.png)

### satset

```bash
git clone https://github.com/JfeStudio/starter-larastis.git 'project'
cd project
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

## Authors

Stisla is created by [Nauval](https://github.com/nauvalazhar).
