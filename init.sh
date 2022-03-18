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
sudo -u pgtidal -H -- psql -d acudb -c "CREATE TABLE \"user\" (
    Nom varchar(30),
    Prenom varchar(30),
    idUT varchar(30),
    Mdp varchar(30),
    DateNaissance varchar(10),
    PRIMARY KEY(idUT)
);"