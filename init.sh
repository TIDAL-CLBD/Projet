#!/bin/bash
rm -rf smarty
mkdir smarty
cd smarty
mkdir templates
mkdir templates_c
mkdir configs
mkdir cache
chown :www-data -R .
chmod 770 -R .
cd ..
sed -i 's/display_errors = Off/display_errors = On/g' /etc/php/7.4/apache2/php.ini
systemctl restart apache2.service