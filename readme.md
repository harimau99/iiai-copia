<h1 align="center">Institutional Internal Audit Information System</h1>
<p align="center">
An Audit School Management and Accounting Software
</p>

[![Build Status](https://travis-ci.org/harimau99/iiai-copia/Unifiedtransform.svg?branch=master)](https://travis-ci.org/harimau99/iiai-copia/Unifiedtransform)
[![Linux](https://img.shields.io/travis/harimau99/iiai-copia/Unifiedtransform/master.svg?label=linux)](https://travis-ci.org/harimau99/iiai-copia/Unifiedtransform)
[![Code Climate](https://codeclimate.com/github/harimau99/iiai-copia/Unifiedtransform/badges/gpa.svg)](https://codeclimate.com/github/harimau99/iiai-copia/Unifiedtransform)
[![Latest release](https://img.shields.io/github/release/harimau99/iiai-copia/Unifiedtransform/all.svg)](https://github.com/harimau99/iiai-copia/Unifiedtransform/releases)
[![MadeWithLaravel.com shield](https://madewithlaravel.com/storage/repo-shields/1362-shield.svg)](https://madewithlaravel.com/p/unifiedtransform/shield-link)
[![Join the chat at https://gitter.im/Unifiedtransform](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/Unifiedtransform?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

We like to challenge the quality of what we build to make it better. To do so, we try to make the product intuitive, beautiful, and user friendly. Innovation and hard work help to fulfill these requirements. I believe in order to innovate we need to think differently. A few months ago I discovered there was no open source free school management software that met my quality standards. I happen to know a bit of programming so I decided to make one. I also believe that working with more people can push the standard higher than working alone. So I decided to make it open source and free.


## Framework used

- Laravel 7.X
- Bootstrap 3.3.7

## Server Requirements

- PHP >= 7.2.5
- OpenSSL PHP Extension
- PDO PHP Extension
- Mbstring PHP Extension
- Tokenizer PHP Extension
- XML PHP Extension

## Table of Contents
- [Features](https://github.com/harimau99/iiai-copia#features)
- [Framework used](https://github.com/harimau99/iiai-copia/Unifiedtransform#framework-used)
- [Server Requirements](https://github.com/harimau99/iiai-copia/Unifiedtransform#server-requirements)
- [How to Start (Installation)](https://github.com/harimau99/iiai-copia/Unifiedtransform#how-to-start)
  - [Using Docker Container](https://github.com/harimau99/iiai-copia/Unifiedtransform#using-a-container)
  - [Not using a Container](https://github.com/harimau99/iiai-copia/Unifiedtransform#not-using-a-container)
  - [Video Tutorial](https://github.com/harimau99/iiai-copia/Unifiedtransform#video-tutorial)
- [Optional](https://github.com/harimau99/iiai-copia/Unifiedtransform#optional)
- [Testing](https://github.com/harimau99/iiai-copia/Unifiedtransform#testing)
- [Stripe setup](https://github.com/harimau99/iiai-copia/Unifiedtransform#stripe-setup)
- [Create a school and an admin](https://github.com/harimau99/iiai-copia/Unifiedtransform#create-a-school-and-an-admin)
- [Manage a school](https://github.com/harimau99/iiai-copia/Unifiedtransform#manage-a-school)
- [Basic Steps by Serial](https://github.com/harimau99/iiai-copia/Unifiedtransform#basic-steps-by-serial)
- [Manage Exam (In exam manage page) by Admin](https://github.com/harimau99/iiai-copia/Unifiedtransform#manage-exam-in-exam-manage-page-by-admin)
- [Manage GPA and Grade](https://github.com/harimau99/iiai-copia/Unifiedtransform#manage-gpa-and-grade)
- [Good to know](https://github.com/harimau99/iiai-copia/Unifiedtransform#good-to-know)
- [Screenshots](https://github.com/harimau99/iiai-copia/Unifiedtransform#here-are-some-screenshots)

## Contribute

Institutional Internal Audit Information System is 100% open source and free forever!!

When you contribute to a Github project you agree with this terms of [Github Terms of Service(Contributions Under Repository License)](https://help.github.com/en/articles/github-terms-of-service#6-contributions-under-repository-license).

Since this project is under **GNU General Public License v3.0**, according to Github's Terms of Service all your contributions are also under the same license terms.
Thus you permit the user of this software to use your contribution under the terms of **GNU General Public License v3.0**.


## Testing

- We want testable softwares. Most parts of the software are covered by tests. You also can contribute by writing test case!
- To run Feature and Unit Tests use `./vendor/bin/phpunit`.
- To run Browser Tests copy `.env.dusk.example` to `.env.dusk.local` and set `APP_KEY` with same token to environment variable in your `.env` file and run `php artisan serve --env=dusk.local` for execute the server then run `php artisan dusk`.

## License

GNU General Public License v3.0

## Features

This software has following features:

| Feature | Description |
|---------|-------------|
| Roles  | Master, Admin, Teacher, Student, Librarian, Accountant.|
|| **(You can Impersonate User Roles in Development environment)** See how [Impersonation](https://github.com/harimau99/iiai-copia/pull/118) works. Cool !!|
| Payment |**[Stripe](http://stripe.com/)** is used. See configuration below.|
||Students can pay from their accounts.|
||Student can view payment receipts (history)|
||View Screenshot below|
|Attendance|Take student attendance for each course|
|Mark|Can give marks to students for each course|
|Registration|Register students|
|Notice, Syllabus|Manage uploaded Notices, Syllabus, Routines|
|Library|Manage a library of books.|
||Add new books.|
||Keep track of books.|
|Exam|Manage Semester by Examination|
|Grade|Give Grades based on marks of each course.|
|Accounts|Manage Income, Expense Amounts|
||View Graphs based on year.|
|Messaging|Uses CKEditor 5|
|Export/Import|  Users (Students, Teachers) from/to **Excel**|
||[Laravel Excel](https://github.com/maatwebsite/Laravel-Excel) package is used.|
||**Important:** Single sheet supported in an Excel file. So delete any extra sheet in an Excel file.|
||Following excel column  names supported for both Teachers and Students: `name, email, password, address, about, phone_number, blood_group, nationality, gender`.|
||Other columns:|
||For Teachers: `department`, (`class, section`) if assigned as class teacher.|
||For Students: `class, section, session, version, group, birthday, religion, father_name, father_phone_number, father_national_id, father_occupation, father_designation, father_annual_income, mother_name, mother_phone_number, mother_national_id, mother_occupation, mother_designation, mother_annual_income`|
||For any number(e.g: phone_number) starts with zero, put (') before zero.|
|Supported Languages|English, Spanish|
||To set default Language and Timezone, Edit as following in `config/app.php`:|

    'timezone' => 'Asia/Dhaka',//'UTC',
    'locale' => 'en',//'es-MX' for Spanish

## How to Start
### Using Docker Container:

**Anyone having trouble related to `mysql-client`, PHP 7.3 needs mariadb instead of mysql.** See issue [#192](https://github.com/harimau99/iiai-copia/Unifiedtransform/issues/192)

**[Docker](https://www.docker.com/)** is now supported.

You need to change Docker configuration files according to your need.

- Change following lines in `docker-compose.yml`
    ```yml
    MYSQL_ROOT_PASSWORD: your password
    MYSQL_USER: root
    MYSQL_PASSWORD: your password
    ```

- To run this software in Docker containers run `sudo docker-compose up -d`.
- Then run `sudo docker container ls --all`. Copy **Nginx** Container ID.
- Then run `sudo docker exec -it <container id> bash`
- Run `cp .env.example .env` and change following lines in `.env` file
   ```sh
   DB_HOST=db
   DB_PORT=3306
   DB_DATABASE=school
   DB_USERNAME=root
   DB_PASSWORD=your password
   ```
- Run `composer install`
- Run `php artisan key:generate`
- Run `php artisan migrate:fresh --seed`
- Visit `http://localhost:80`.

### Not using a Container:

Here are some basic steps to start using this application

**Note:** Instruction on cached data for Dashboard is given in **Good to know** segment below.

- Clone the repository

```sh
git clone https://github.com/harimau99/iiai-copia/Unifiedtransform
```

- Copy the contents of the `.env.example` file to create `.env` in the same directory

- Run `composer install` for `developer` environment and run `composer install --optimize-autoloader --no-dev` for `production` environment to install Laravel packages (Remove **Laravel Debugbar**, **Laravel Log viewer** packages from **composer.json** and 

```php
   //Provider
   Barryvdh\Debugbar\ServiceProvider,
   Logviewer Service provider,
   //Alias
   Debugbar' => Barryvdh...
```
 from `config/app.php` before running **`composer install`** in **Production Environment**)

- Generate `APP_KEY` using `php artisan key:generate`

- Edit the database connection configuration in .env file e.g.

```sh
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=iiaiDB
DB_USERNAME=iiaiDB
DB_PASSWORD=sv*HK/[{AKE})2L}
```

> Note that this is just an example, and the values may vary depending on your database environment.

- Set the `APP_ENV` variable in your `.env` file according to your application environment (e.g. local, production) in `.env` file

- Migrate your Database with `php artisan migrate`

- Seed your Database with `php artisan db:seed`

- On localhost, serve your application with `php artisan serve`

## (Optional)

- [Laravel Page Speed Package](https://github.com/renatomarinho/laravel-page-speed) is installed but not activated. If you want to use it to optimize your site automatically which results in a 35%+ optimization. You need to uncomment some lines from `Kernel.php` file and may need to run `php artisan vendor:publish --provider="RenatoMarinho\LaravelPageSpeed\ServiceProvider"`.

   **app/HTTP/Kernel.php**
   ```php
       //\RenatoMarinho\LaravelPageSpeed\Middleware\InlineCss::class,
       //\RenatoMarinho\LaravelPageSpeed\Middleware\ElideAttributes::class,
       //\RenatoMarinho\LaravelPageSpeed\Middleware\InsertDNSPrefetch::class,
       //\RenatoMarinho\LaravelPageSpeed\Middleware\RemoveComments::class,
       //\RenatoMarinho\LaravelPageSpeed\Middleware\TrimUrls::class,
       //\RenatoMarinho\LaravelPageSpeed\Middleware\RemoveQuotes::class,
       //\RenatoMarinho\LaravelPageSpeed\Middleware\CollapseWhitespace::class,
   ```
- To create a `Master`, go to the `database\seeds\UsersTableSeeder.php` and change the `name`, the `email` and the `password` settings to your likings. Leave the other settings (role, active, verified) unchanged!

- [Laravel Passport](https://laravel.com/docs/5.5/passport) package is included to support API. *Key* for Passport should be automatically generated by `php artisan passport:keys` from `post-install-cmd` script in `composer.json` or you have to run this manually and to remove this package just follow these steps

  - Remove it from `composer.json` require dependencies and remove command `@php artisan passport:keys` from `post-install-cmd` script
  - Run `composer update` and `composer dump-autoload`.
  - And all classes that relies on passport must be edited as well. The most common classes are:
  - `app\User.php` model, remove the `HasApiToken` trait.
  - `app\Proiders\AuthServiceProvider`, remove `Passport::routes();` in your boot method.
  - In `config/auth.php`, change your driver option for `api` from `passport` to `api` authentication.

- To create the tables, run `php artisan migrate`.

  - If you don't want to use **Passport** package then remove the **Passport Migrations** in database `migrations` table and run command `artisan migrate:refresh`
- To seed the tables with fake data, use `php artisan db:seed`.
- If you want to run the migration and the seeding together, use `php artisan migrate:refresh --seed`
- You must seed `database\seeds\UsersTableSeeder.php` at least once in order to create the **Master** account (**For Production:** Run the seed in **Development** environment and then switch to **production**). To do so, follow these steps:
  - comment all the seeders except `$this->call(UsersTableSeeder::class);` in `database\seeds\DatabaseSeeder.php`;
  - then comment `factory(App\User::class, 200)->create();` in `UsersTableSeeder.php`.

   So your files will look something like this:

   In `database\seeds\DatabaseSeeder.php`:
   ```php
   ...
   //$this->call(SectionsTableSeeder::class);
   $this->call(UsersTableSeeder::class);
   //$this->call(AttendancesTableSeeder::class);
   ...
   ```
   In `database\seeds\UsersTableSeeder.php`:
   ```php
   ...
   //factory(User::class, 10)->states('admin')->create();
   //factory(User::class, 10)->states('accountant')->create();
   //factory(User::class, 10)->states('librarian')->create();
   //factory(User::class, 30)->states('teacher')->create();
   //factory(User::class, 200)->states('student')->create();
   ```

* Make iiai's a native desktop application by using **[Nativefier](https://github.com/jiahaog/nativefier)**
* [Laravel 5 log viewer](https://github.com/rap2hpoutre/laravel-log-viewer) is used to view Logs using a UI at 'example.com/logs' while in development environment.

## Stripe setup

* Add `STRIPE_KEY` and `STRIPE_SECRET` in `.env` file.
* For Stripe Test uncomment following test `student_can_pay_amount` in `tests\Feature\PaymentModuleTest` after editing `.env`.

   From
   ```php
   //public function student_can_pay_amount(){
      ...
   //}
   ```
   To
   ```php
   public function student_can_pay_amount(){
      ...
   }
   ```

## Create a school and an admin

* Important: only a `master` can create a new school and its admins!
* Login at `example.com/login` using your `Master` account credentials
* Create a new `school`
* Create a new `audit` for the newly created school
* Admin also can take place on audit. Admin is audit and audit is admin.

## Manage a school

* Important: A `master` CANNOT manage a school's data!
* Login as `audit` at `example.com/login`
* Now add data to the school as required.

## Basic Steps by Serial

* Create Classes
* Create Sections
* Create Exam
* Add Students
* Add Teachers
* Add Courses
* Then teacher can take attendance, give marks

## Manage Exam (In exam manage page) by Audit

1. Check Notice published checkbox for an Exam after uploading Exam Notice.
2. Check Result published checkbox for an Exam after all teachers updated their courses' marks.

   * Checking result as published sets the Exam as completed.
3. Exam is set as Active by default while created. You can deactivate the exam by checking related checkbox.

## Manage GPA and Grade

1. Admin adds GPAs for respective mark ranges.
2. For giving marks, Teacher clicks on Submit Grade button and do the following:

   1. Select a GPA by name from dropdown
   2. Configure Class Test, Quiz, ...etc. count, percentage (Optional)
   3. Give marks
   4. To get Grade of students of a course for given marks, Teacher clicks the Get Total Marks button.
      (Usually this is done at the end of the semester)

## Good to know

* Setup your **Mail** configuration in `.env` file if you want to send email. Currently registered users are notified by invitation mail if Mail is configured properly.
* This project uses [Laravel Impersonate](https://github.com/404labfr/laravel-impersonate) in development and staging environments, so you can view the application through another user's eyes, which is useful for testing. See the guide for using [Impersonation](https://github.com/harimau99/iiai-copia/pull/118).
* In `.env`, turn `APP_DEBUG` to `false` for production environment.
* Remove `Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');` from `routes/web.php` while in Production Environment.
* `Cache::remember()` generates cache files. **Removed** ~~To delete expired cache files [LaravelCacheGarbageCollector](https://github.com/jdavidbakr/laravel-cache-garbage-collector) package is used. Run `php artisan cache:gc`.~~
* You can switch to and from maintenance mode by running `php artisan up` and `php artisan down`.
* **Optimizing Route** Loading `php artisan route:cache`
* Dashboard page contents(e.g. Student count, Teacher count, Notice, etc.) are **cached** because these are not frequently changed. If you don't want these to be cached, just remove the cache lines in `index` method in `app\Http\Controller\HomeController.php`like the following example.
So your edit would be something like this:

From:
```php
...
$classes = \Cache::remember('classes-'.$school_id, $minutes, function () use($school_id) {
   return \App\Myclass::where('school_id', $school_id)
                        ->pluck('id')
                        ->toArray();
});
...
```
To:
```php
...
$classes = \App\Myclass::where('school_id', $school_id)
                        ->pluck('id')
                        ->toArray();
...
```

You can do similar for other cache lines.

## Here are some screenshots:

