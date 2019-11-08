# rabbitMq-messengerComponentSymfony
### Usefull commands list for this project

 * $composer require symfony/messenger
 * bin/console messenger:consume -vvv
 
 #### RabitMq installation ubuntu 
 * sudo apt install php-amqp
 * change loaded config file add extension extension=amqp.so

#### Intalling RabitMq
* echo "deb http://www.rabbitmq.com/debian/ testing main"  | sudo tee  /etc/apt/sources.list.d/rabbitmq.list > /dev/null
 * wget https://www.rabbitmq.com/rabbitmq-signing-key-public.asc
  * sudo apt-key add rabbitmq-signing-key-public.asc
  * sudo apt-get update
  * sudo apt-get install rabbitmq-server -y
  * sudo service rabbitmq-server start
  * sudo rabbitmq-plugins enable rabbitmq_management
  * sudo service rabbitmq-server restart 
  
###### Default username / password will be guest / guest and port for will be 15672; for UI follow - http://localhost:15672
  
#####if you want to change the username and password or add new user please follow these
   
   * sudo rabbitmqctl add_user user_name password_for_this_user
   * sudo rabbitmqctl set_user_tags user_name administrator
   * sudo rabbitmqctl set_permissions -p / user_name ".*" ".*" ".*" 
   
##### and to delete guest user please run this command ###
         
 * sudo rabbitmqctl delete_user guest
    
####Rabbit mq server commands

* sudo invoke-rc.d rabbitmq-server start
* sudo invoke-rc.d rabbitmq-server stop
* sudo invoke-rc.d rabbitmq-server status

* rabbitmq-plugins enable rabbitmq_management


Upgrade Symfony from >=4.0 version
Video versions of this section are coming soon





Resources for upgrading info:

patch upgrade https://symfony.com/doc/current/setup/upgrade_patch.html

minor upgrade https://symfony.com/doc/current/setup/upgrade_minor.html

major upgrade https://symfony.com/doc/current/setup/upgrade_major.html





The following guide assumes that you want to upgrade to stable, released  version of Symfony >=4.0 (which is not in development mode). However if you would like to upgrade to some unstable, unreleased Symfony version, follow the content from this link: https://symfony.com/doc/current/setup/unstable_versions.html





To quickly sum up the three resources above:



A. Upgrade Symfony app to patch version, e.g. from 4.1.1 to 4.1.8

run composer update command



or



B. Upgrade Symfony app to minor version, e.g. from 4.2 to 4.3 or to major version, e.g. from 4 to 5



1. Update Symfony dependencies in composer.json file, for example if you want to upgrade from Symfony 4.1 to 4.3:

{

    "require": {

...

        "symfony/cache": "^4.0"

...

}



Next in the extra block of the composer.json file make sure you have:

"extra": {

    "symfony": {

        "allow-contrib": false,

        "require": "4.3.*"

    }

}





Another example, if you want to upgrade from Symfony 4.* to 5 stable,released! version:

{

    "require": {

...

        "symfony/cache": "^5.0"

...

}



Next in the extra block of the composer.json file make sure you have:

"extra": {

    "symfony": {

        "allow-contrib": false,

        "require": "5.0.*"

    }

}



2. Next run the following command:  composer update "symfony/*" --with-all-dependencies



3. Next run:  composer update



4. Read the UPGRADE file from https://github.com/symfony/symfony. For example if you want to upgrade from Symfony 4 to 5 read UPGRADE-5.0.md file. See if something needs to be changed in your application.



5. Make your code deprecation free. To do so, open the profiler tool and click Logs section. See what is deprecated and if necessary resolve it.



6. Run tests (if you have them) and see if there are some deprecation. Resolve them if necessary.

    
    
  
