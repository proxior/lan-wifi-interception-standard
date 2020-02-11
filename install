#!/bin/bash

mkdir /var/www/proxior
chmod -R 777 /var/www/proxior
cd /var/www/proxior/ && git clone https://github.com/proxior/lan-wifi-interception.git 
cd /var/www/proxior/lan-wifi-interception
unzip /var/www/proxior/lan-wifi-interception/ngrok/ngrok.zip
rm -f /var/www/proxior/lan-wifi-interception/ngrok/ngrok.zip
cd /var/www/proxior/lan-wifi-interception
mv  /var/www/proxior/lan-wifi-interception/* /var/www/proxior/
rm -r /var/www/proxior/lan-wifi-interception
chmod -R 777 /var/www/proxior
mkcert -install
chmod -R 777 /etc/apache2/sites-available/
mv /var/www/proxior/apache2/default-ssl.conf /etc/apache2/sites-available/
rm -r /var/www/proxior/apache2
chmod -R 777 /etc/apache2/sites-available
chmod -R 777 /etc/apache2/sites-available/default-ssl.conf
a2ensite default-ssl.conf
/etc/init.d/apache2 restart
tput setaf 2; echo "Proxior successfully installed"
