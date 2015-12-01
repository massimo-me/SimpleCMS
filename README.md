SimpleCMS
=======================

##Install

    git clone https://github.com/ChiarilloMassimo/SimpleCMS.git
    composer install
    app/console fos:user:create
    app/console fos:user:promote
    app/console server:run

##Route

- Home [http://127.0.0.1:8000/](http://127.0.0.1:8000/)
- Admin [http://127.0.0.1:8000/admin](http://127.0.0.1:8000/admin)
- SimplePage [http://127.0.0.1:8000/{slug}](http://127.0.0.1:8000/{slug})

##Already configured

- "symfony/symfony": "2.8.*"
- "symfony/assetic-bundle": "~2.3",
- "symfony/swiftmailer-bundle": "~2.3",
- "symfony/monolog-bundle": "~2.4",
- "sensio/distribution-bundle": "~4.0",
- "sensio/framework-extra-bundle": "^3.0.2",
- "incenteev/composer-parameter-handler": "~2.0",
- "doctrine/mongodb-odm": "1.0.*@dev",
- "doctrine/mongodb-odm-bundle": "3.0.*@dev",
- "friendsofsymfony/user-bundle": "~2.0@dev",
- "sonata-project/admin-bundle": "~2.3",
- "sonata-project/doctrine-mongodb-admin-bundle": "~2.3",
- "knplabs/knp-paginator-bundle": "~2.5",
- "stof/doctrine-extensions-bundle": "~1.2",
- "egeloen/ckeditor-bundle": "~3.0"

CoreBundle
=======================

##Document

- Page
- User

##Controller

- HomeController
- PageController
