# ThinFramework-app

Base application for ThinFramework.


### Related repositories

- [ThinFramework](https://github.com/albhilazo/thin-framework)
- [ThinFramework-app](https://github.com/albhilazo/thin-framework-app)


### Installation

Clone the repository and install with Composer:

```shell
$ composer install
```


### Example paths

The following paths are already configured as examples:

 - `/` or `/home`: Home page.
 - `/action-test`: Path configured with a defined action method.
 - `/students/{student_id}`: Path with a single parameter. Change `{student_id}` with any value.
 - `/students/{student_id}/scores/{score_id}`: Multiple parameters and a defined action method in the same controller.

Any invalid paths will render a "404 Not found" page.


### VirtualHost

```apache
<VirtualHost *:80>
  ServerName thinapp.dev

  DocumentRoot "/var/www/thinapp/public"

  <Directory "/var/www/thinapp/public">
    Options FollowSymLinks MultiViews
    AllowOverride None
    Order allow,deny
    Allow from all
  </Directory>

  ErrorLog "/var/log/apache2/thinapp.dev_error.log"
  ServerSignature Off
  CustomLog "/var/log/apache2/thinapp.dev_access.log" combined

  RewriteEngine On
  RewriteCond %{DOCUMENT_ROOT}%{REQUEST_FILENAME} !-f
  RewriteCond %{DOCUMENT_ROOT}%{REQUEST_FILENAME} !-d
  RewriteRule ^/(.+) /index_dev.php [QSA,L]
</VirtualHost>
```


### DB

```
CREATE DATABASE IF NOT EXISTS thin;
```
