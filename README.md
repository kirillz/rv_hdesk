<img align="right" src="https://user-images.githubusercontent.com/1161809/164566811-32305752-9625-4f91-a001-1f7fcea895b6.png" >

Sample app for learn Laravel framework.


### Main idea
This application is created in order to learn the basics of the Laravel framework and at the same time solve some practical problem for myself.

The idea behind the app is to keep track of clients and jobs for a self-employed IT professional these days. It is also planned to implement accounting of projects and time spent. It is also a list of services, calculation of payments by clients and so on.


### Installation
* Install [Composer](https://getcomposer.org/) and [Npm](https://nodejs.org/)
* Clone the repository: `git clone https://github.com/kirillz/rv_hdesk.git`
* Install dependencies:  
* `cd rv_hdesk`
* `composer install`  
* `npm install`  
* `npm run dev`
* Create empty file for sqlite `touch /database/database.sqlite`
* Run dev server `php artisan migrate && php artisan serve`
* App on: http://127.0.0.1:8000
