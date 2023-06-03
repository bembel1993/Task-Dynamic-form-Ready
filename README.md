# TD Komplect
____
### Used technologies
#### Language - PHP / JavaScript
#### Framework - Laravel
#### Librarys - JQuery, Bootstrap
#### DB - MySQL
____
Чтобы запустить проект необходимо выполнить следующие шаги:

1. Установите PHP и Composer. 
2. Установите зависимости: перейдите в каталог проекта и выполните команду `composer install`, чтобы установить все зависимости, необходимые для проекта.
3. Создайте базу данных: Создайте новую базу данных на компьютере и настройте параметры базы данных в файле `.env`.
4. Перенесите базу данных. Запустите команду `php artisan migrate`, чтобы перенести схему базы данных.
5. Запустите приложение: запустите команду `php artisan serve`. Приложение будет доступно по адресу 'http://127.0.0.1:8000`.
____
### Using App 
1) При запуске приложения отображается страница с зарегестрированными в БД пользователями, в верху располагаются кнопки сохранения пользователя, создания анкеты/формы, и просмотр всех созданных анкет/форм.
![Start page of Application](https://github.com/bembel1993/imgForDiplom/blob/main/1php.png)
____
2) При нажатии на кнопку создать форму, система перенаправляет на страницу с конструктором формы, на которой указаны поля - Название формы, название поля, его тип, атрибут (для определения выпадающего списка); под полями находятся три кнопки - добавить(зеленая) поле, удалить(красная) поле, сохранить(голубая) созданную форму. Все поля сохраняются в базе данных и связанны ключом с таблицей Формы. 
![Start page of Application](https://github.com/bembel1993/imgForDiplom/blob/main/2php.png)
____
3) После нажатия на кнопку сохранить, система перенаправляет на страницу с созданной формой, где можно осуществить ввод данных, для регистрации новой персоны и добавления его в БД.
![Start page of Application](https://github.com/bembel1993/imgForDiplom/blob/main/3php.png)
____
4) При нажатии на главной странице кнопки "ПОСМОТРЕТЬ ВСЕ ФОРМЫ", система перенаправляет на страницу с выгруженными из БД всеми анкетами. Каждая акета имеет в левом верхнем углу кнопку PLAY, которая перенаправляет на соответствующую форму, по ID, с последующей регистрацией пользователя.
![Start page of Application](https://github.com/bembel1993/imgForDiplom/blob/main/4php.png)
5) При нажатии на главной странице на кнопку "СОЗДАТЬ ПОЛЬЗОВАТЕЛЯ", система перенаправляет на страницу со стандартной формой для регистрации.
![Start page of Application](https://github.com/bembel1993/imgForDiplom/blob/main/5php.png)


<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

### Premium Partners

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[Many](https://www.many.co.uk)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel/)**
- **[OP.GG](https://op.gg)**
- **[WebReinvent](https://webreinvent.com/?utm_source=laravel&utm_medium=github&utm_campaign=patreon-sponsors)**
- **[Lendio](https://lendio.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
