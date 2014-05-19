## Laravel AWS Project

### This is just a personal test project. Useful as a code reference only.
This is a test project to look into various ways of deploying laravel to Amazon Web Services Elastic Beanstalk service. It is simple, and includes a database with some test data seeded into it via migrations, and seeding, a simple contoller and a view. The point is to fiddle with the .ebextensions directory configs and see what works the best to get a working laravel instance up at AWS. Also interesting to look at is the bootstrap/start.php file which attempts to detect the environment at AWS based on the hostname and a custom environment parameter.

### Configuration
You'll need to add your own local environment file ".env.local.php". See the laravel docs: [Laravel website](http://laravel.com/docs). You'll also need to modify the hostnames in the local environment section of the bootstrap/start.php file.

## Laravel PHP Framework

[![Latest Stable Version](https://poser.pugx.org/laravel/framework/version.png)](https://packagist.org/packages/laravel/framework) [![Total Downloads](https://poser.pugx.org/laravel/framework/d/total.png)](https://packagist.org/packages/laravel/framework) [![Build Status](https://travis-ci.org/laravel/framework.png)](https://travis-ci.org/laravel/framework) [![License](https://poser.pugx.org/laravel/framework/license.png)](https://packagist.org/packages/laravel/framework)

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable, creative experience to be truly fulfilling. Laravel attempts to take the pain out of development by easing common tasks used in the majority of web projects, such as authentication, routing, sessions, and caching.

Laravel aims to make the development process a pleasing one for the developer without sacrificing application functionality. Happy developers make the best code. To this end, we've attempted to combine the very best of what we have seen in other web frameworks, including frameworks implemented in other languages, such as Ruby on Rails, ASP.NET MVC, and Sinatra.

Laravel is accessible, yet powerful, providing powerful tools needed for large, robust applications. A superb inversion of control container, expressive migration system, and tightly integrated unit testing support give you the tools you need to build any application with which you are tasked.

## Official Documentation

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).

### Contributing To Laravel

**All issues and pull requests should be filed on the [laravel/framework](http://github.com/laravel/framework) repository.**

### License

The Laravel framework is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
