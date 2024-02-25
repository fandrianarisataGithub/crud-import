# Mon Projet Web-scraper

Ce projet Symfony constitue une base pour un petit CRUD avec une importation de données via des fichiers excel ou csv

## Prérequis
- PHP version 8.1.12
- Composer installé sur votre machine, version 2.6.*

## Installation

1.  Clonez le dépôt sur votre machine locale :
    ```bash
    git clone https://github.com/fandrianarisataGithub/crud-import.git

2.  Accédez au répertoire du projet :
    ```bash
    cd web-scraper

3.  Installez les dépendances avec Composer :
    ```bash
    composer install

4.  Copiez le fichier .env :
    ```bash
    cp .env.dist .env

5.  Mettez à jour le fichier .env avec les informations de votre base de données.

6.  Créez la base de données :
    ```bash
    php bin/console doctrine:database:create

7.  Appliquez les migrations pour créer les tables dans la base de données :
    ```bash
    php bin/console doctrine:migrations:migrate

8.  Lancer le projet: 
    ```bash
    php -S localhost:8000 -t public/

Le projet Symfony pour le web scraping est maintenant prêt à être utilisé. Accédez à http://localhost:8000 dans votre navigateur.
