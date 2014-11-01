SERVER SETUP
- rebuild system image to CentOS (choose CentOS if you wish to install cPanel)

INSTALL vestaCP
- login to server via ssh / putty
- curl -O http://vestacp.com/pub/vst-install.sh
- bash vst-install.sh
- login to vestaCP via 119.9.15.167:8083

INSTALL COMPOSER
- login to server via ssh / putty
- curl -sS https://getcomposer.org/installer | php #download composer
- curl -sS https://getcomposer.org/installer | php -- --install-dir=bin #install composer

INSTALL LARAVEL
- download the latest laravel build (zip)
- connect to ftp
-- hostname: 119.9.15.167
-- username: admin
-- password: Wz4RbEdAqd
- upload zip file outside of public_html
- login to server via ssh / putty
- navigate to the folder where zip file is uploaded
- unzip the file
-- unzip laravel-master.zip
- open directory laravel-master #cd laravel-master
-- run command: composer.phar install #this installs laravel
- move contents of public folder to ../public_html
- edit file public_html/index.php to point to laravel-master
- edit file laravel-master/bootstrap/paths.php to point to public_html
- generate key for laravel
-- php artisan key:generate

INSTALL GIT
- login to server via ssh / putty
- yum install git
- git config --global user.name "testuser"
- git config --global user.email "testuser@example.com"