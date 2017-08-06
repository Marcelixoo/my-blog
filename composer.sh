#!/bin/sh 
 
EXPECTED_SIGNATURE=$(wget -q -O - https://composer.github.io/installer.sig)
php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" 
ACTUAL_SIGNATURE=$(php -r "echo hash_file('SHA384', 'composer-setup.php');") 
 
if [ "$EXPECTED_SIGNATURE" != "$ACTUAL_SIGNATURE" ] 
then 
    >&2 echo 'ERROR: Invalid installer signature' 
    rm composer-setup.php 
    exit 1 
fi 
 
php composer-setup.php --quiet 
RESULT=$? 
rm composer-setup.php

sh composer-install.sh


php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');"
php -r "if (hash_file('SHA384', 'composer-setup.php') === '669656bab3166a7aff8a7506b8cb2d1c292f042046c5a994c43155c0be6190fa0355160742ab2e1c88d40d5be660b410') { echo 'Installer verified'; } else { echo 'Installer corrupt'; unlink('composer-setup.php'); } echo PHP_EOL;"

php bin/composer install

1
php bin/composer update