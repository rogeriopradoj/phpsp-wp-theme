#! /usr/bin/env bash

cd /tmp
wget -q http://wordpress.org/latest.zip
if [ $? != 0 ]; then
    echo 'Failed to download latest wordpress.'
    exit 2;
fi
unzip latest.zip
mv wordpress /var/www/phpsp-blog
ln -s /vagrant /var/www/phpsp-blog/wp-content/themes/phpsp