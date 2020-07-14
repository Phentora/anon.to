# anon.to
[anon.to](https://anon.to) is an anonymous URL redirector and shortener built using [Laravel](https://laravel.com/).

### Requirement
- [**PHP**](https://php.net) 7.2+ (**7.4** preferred)
- PHP Extensions: openssl, phpredis, json
- Database server: [MySQL](https://www.mysql.com) or [**MariaDB**](https://mariadb.org)
- [Redis](http://redis.io) Server
- [Composer](https://getcomposer.org)
- [Node.js](https://nodejs.org/) with npm or [**yarn**](https://classic.yarnpkg.com/lang/en/)

### Installation
* clone the repository: `git clone https://github.com/bhutanio/anon.to.git anon.to`
* create a database
* create configuration env file `.env` refer to `.env.example`
* install: `composer install --no-dev`
* setup database tables: `php artisan migrate`

### Upgrade from previous version
The latest version of **anon.to** is fully compatible with all previous versions. All you have to do is run the upgrade script.
 ```bash
php artisan anonto:upgrade:db
```
Edit ```.env``` file and rename the following variables:
- from ```API_GOOGLE_RECAPTCHA``` to ```RECAPTCHA_SECRET_KEY```
- from ```API_GOOGLE_RECAPTCHA_CLIENT``` to ```RECAPTCHA_SITE_KEY```
- Refer the new [```.env.example```](https://github.com/bhutanio/anon.to/blob/master/.env.example) file and update accordingly.

### Configuration
#### Setup Admin Account
```bash
php artisan tinker
```
```php
DB::table('users')->where('id', 2)->update(['email'=>'myemail@example.com']);
```
Click on **forgot password** link on the **login page** and reset password for your admin user.

#### Setup Cron Job
https://laravel.com/docs/7.x/scheduling#introduction
```bash
crontab -e -u www-data
```
```bash
* * * * * cd /home/web/anon.to && php artisan schedule:run >> /dev/null 2>&1
```

#### Setup Supervisor
https://laravel.com/docs/7.x/queues#supervisor-configuration
```bash
nano /etc/supervisor/conf.d/anon.conf
```
```bash
[program:anon-queue]
process_name=%(program_name)s_%(process_num)02d
command=php /home/web/anon.to/artisan queue:work --sleep=3 --tries=3
autostart=true
autorestart=true
user=www-data
numprocs=4
redirect_stderr=true
stdout_logfile=/home/web/anon.to/storage/logs/supervisor.log
stopwaitsecs=3600
```

#### Setup Google ReCaptcha *(optional)*
Visit https://www.google.com/recaptcha/admin and register your site

**Select reCAPTCHA v3**

Copy **Site key** and **Secret key**, add them in your .env file

```bash
...
RECAPTCHA_SITE_KEY=
RECAPTCHA_SECRET_KEY=
...
```

### License
anon.to is open source software licensed under the [MIT license](http://opensource.org/licenses/MIT).
