<img align="right" width=105 height=48 src="https://user-images.githubusercontent.com/1161809/164568130-eb657c42-995a-4baf-a1f5-aa6a03749787.png" >
<p align="center">
		<img alt="Welcome to RV Hdesk"
			 src="https://readme-typing-svg.herokuapp.com/?lines=Welcome+to+RV+HDESK&center=true&width=550&height=70">
</p>
Sample app for learn Laravel framework.


### :flashlight: Main idea
This application is created in order to learn the basics of the Laravel framework and at the same time solve some practical problem for myself.

The idea behind the app is to keep track of clients and jobs for a self-employed IT professional these days. It is also planned to implement accounting of projects and time spent. It is also a list of services, calculation of payments by clients and so on.

![2022-06-09_142703](https://user-images.githubusercontent.com/1161809/172836433-43ac1bea-6d99-4946-9bb0-191db320d0a1.png)


### Requirements
* PHP 8.1
* SQLite 3
* Laravel Framework 9.10

### :hammer_and_wrench: Installation
* Install [Composer](https://getcomposer.org/) and [Npm](https://nodejs.org/)
* Clone the repository: `git clone https://github.com/kirillz/rv_hdesk.git`
* `cd rv_hdesk`
* `composer install`  - for dependencies
* `npm install` - for node modules
* `npm run dev` - for compile assets by Laravel Mix.
* `cp .env.example .env` - copy or move .env.example to .env
* `php artisan RV:setup` - first run helper.
* `php artisan RV:demo-data` - for demo data.
* `php artisan serve` - integrated server.
* App on: http://127.0.0.1:8000

`php artisan list RV` - To see all commands for RV HDESK  
`php artisan test` - To run tests

### Docker (Lando)
* Install [Lando](https://github.com/lando/lando/releases) 
* `cd rv_hdesk`
* `lando start` - to start all containers
* `lando poweroff` - to stop
* `lando destroy -y` - delete everything

Made with  <img src="https://img.shields.io/badge/SQLite-07405E?style=for-the-badge&logo=sqlite&logoColor=white" >
<img src="https://img.shields.io/badge/Laravel-FF2D20?style=for-the-badge&logo=laravel&logoColor=white" >


## :envelope: Contacts
* ~~ВКонтакте~~
* ~~ФейсБуки~~
* Telegram: [@kirillZ](https://t.me/kirillZ)
* <a href="https://www.patreon.com/kirillz"><img src="/images/badges/Patreon-Badge.svg" alt="Become a patron"></a>
