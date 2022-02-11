#!bin/bash
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
