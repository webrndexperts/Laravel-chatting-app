# Build a chat app with Laravel, Pusher and Chatify Laravel Package

Read the full tutorial here:
This application detailed the step by step guide on how to build a modern chat application using Laravel, Chatify Laravel Package and Pusher.


## Technology

This demo uses:
* [Pusher](https://pusher.com/)
* [Laravel](https://laravel.com/)
* [Chatify Laravel Package](https://github.com/munafio/chatify/)


## Running the demo
To run the demo follow these steps:

1. Head to the [Pusher dashboard](https://dashboard.pusher.com/accounts/sign_up/) (you'll need to create a free account if you haven't already)
2. From the dashboard, create a new app called "laravel-chat-app" or use any name you prefer
3. Once created, click the button **Explore**
4. Click **API Keys** on the left-hand-side and note the automatically-generated REST API Key and the application ID as well
5. Download the repository [here](https://github.com/webrndexperts/Laravel-chatting-app/archive/heads/main.zip) or by running `git clone https://github.com/webrndexperts/Laravel-chatting-app.git`
```bash
git clone https://github.com/webrndexperts/Laravel-chatting-app.git
```
6. Run `composer install` to install all the dependencies for the backend (Laravel)
```bash
composer install
```
7. Run `npm install` to install all the dependencies for the frontend (Bootstrap)
```bash
npm install
```
8. Create a `.env` file with the root folder of the project, then copy the content `.env.example` and paste it in the newly created file.
9. Next, locate the following variables within the `.env` file and replace the placeholders with the appropriate credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=YOUR_DB_NAME
DB_USERNAME=YOUR_DB_USERNAME
DB_PASSWORD=YOUR_DB_PASSWORD

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1
```

10. Next, run the following command to generate APP_KEY and create tables for your database:

```bash
php artisan key:generate
```
```bash
php artisan migrate
```

11. Open the project in two separate terminal. From one of the terminals, run `php artisan serve` to start the backend and `npm run dev` from the other to start the frontend application in watch mode.

```bash
php artisan serve
```
```bash
npm run dev
```

12. You can go ahead and register two different users. Once you are done, log in from two different browsers with the credentials of the users created and start a chat session.

## About Author
* 🏠 [RND Experts](https://rndexperts.com/)
* 🚀 [LinkedIn](https://www.linkedin.com/company/rndexperts)
* 📚 [Documentation](https://prodocs.cometchat.com/docs)
* 👾 [GitHub](https://github.com/webrndexperts)



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

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 2000 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

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
