# anon.to
[anon.to](https://anon.to) is an anonymous URL redirector and shortener built using [Laravel](https://laravel.com/).

### Requirement
- [**PHP**](https://php.net) 7.2+ (**7.4** preferred)
- PHP Extensions: openssl, phpredis
- Database server: [MySQL](https://www.mysql.com) or [**MariaDB**](https://mariadb.org)
- [Redis](http://redis.io) Server
- [Composer](https://getcomposer.org)
- [Node.js](https://nodejs.org/) with npm

### Installation
* clone the repository: `git clone https://github.com/bhutanio/anon.to.git anon.to`
* create a database
* create configuration env file `.env` refer to `.env.example`
* install: `composer install --no-dev`
* setup database tables: `php artisan migrate`

### Upgrade from previous version
latest version of **anon.to** is fully compatible with all previous versions. All you have to do is run the migration.
 ```bash
php artisan migrate
```

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
```bash
crontab -e -u www-data
```
```bash
* * * * * cd /home/web/anon.to && php artisan schedule:run >> /dev/null 2>&1
```

#### Setup Supervisor
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
numprocs=2
```

### License
anon.to is open source software licensed under the [MIT license](http://opensource.org/licenses/MIT).
