DEV:

* composer create-project symfony/skeleton accounting

* cd accounting -> git remote add origin https://github.com/wallpageNET/accounting.git
   git push -u origin master

* cd accounting -> composer require server

* cd accounting -> php bin/console server:run

* cd accounting -> composer require maker --dev + composer require annotations
https://symfony.com/doc/current/bundles/SymfonyMakerBundle/index.html

* cd accounting -> composer require doctrine maker

* cd accounting -> .env

DATABASE_URL=mysql://root:@127.0.0.1:3306/accounting

* cd accounting -> php bin/console doctrine:mapping:convert --from-database annotation ./src/Entity
  src/Entity: PHPStorm -> Generate Setter/Getter
  src/Entity: Set Namespace

* cd accounting -> php bin/console make:controller PublicController

* cd accounting ->

Apache:

sudo service apache2 stop
sudo /opt/lampp/lampp start