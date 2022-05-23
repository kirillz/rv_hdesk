<img align="right" width=105 height=48 src="https://user-images.githubusercontent.com/1161809/164568130-eb657c42-995a-4baf-a1f5-aa6a03749787.png" >

Sample app for learn Laravel framework.


### :flashlight: Main idea
This application is created in order to learn the basics of the Laravel framework and at the same time solve some practical problem for myself.

The idea behind the app is to keep track of clients and jobs for a self-employed IT professional these days. It is also planned to implement accounting of projects and time spent. It is also a list of services, calculation of payments by clients and so on.



### Requirements
* PHP 8.1
* SQLite 3
* Laravel Framework 9.10

### :hammer_and_wrench: Installation
* Install [Composer](https://getcomposer.org/) and [Npm](https://nodejs.org/)
* Clone the repository: `git clone https://github.com/kirillz/rv_hdesk.git`
* Install dependencies:  
* `cd rv_hdesk`
* `composer install`  - for dependencies
* `npm install` - for node modules
* `npm run dev` - for compile assets by Laravel Mix.
* `cp .env.example .env` - copy or move .env.example to .env
* `php artisan RV:setup` - first run helper.
* `php artisan RV:demo-data` - for demo data.
* `php artisan serve` - integrated server.
* App on: http://127.0.0.1:8000
### Docker
* `docker-compose build` to build image
* `docker-compose up -d` to start image
* `docker exec -it project_app sh` to enter the docker command promt
* `chmod 777 -R storage bootstrap/cache` to run it inside docker container to give permissions to write logs
* run installation process in ***Installation*** section
* `docker-compose up -d` then go to this link: 
http://127.0.0.1:8888/

To see all commands for setup RV HDESK just type `php artisan list RV`
To run tests: `php artisan test`



Made with  <img src="https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white" >
<img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" >


## :envelope: Contacts
* ~~ВКонтакте~~
* ~~ФейсБуки~~
* Telegram: [@kirillZ](https://t.me/kirillZ)
