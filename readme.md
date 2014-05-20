## Laravel AWS Project

### This is just a test project. Useful as a code reference only.
This is a test project to look into various ways of deploying laravel to Amazon Web Services Elastic Beanstalk service. It is based on a very simple Laravel 4 instance. The Laravel instance includes DB migrations, a database with some test data seeded, an example model, contoller and view for "widgets", and session data configured to store in the DB. The point of this project is to fiddle with the .ebextensions directory configs and see what works the best to get a working laravel instance running up at AWS. Also interesting to look at is the bootstrap/start.php file which attempts to detect the environment at AWS based on the hostname and a custom environment parameter.

In a production environment, you'd want to move the encryption key and stuff out of the repository. But for reference, it's left in here.

When using this repo as a code reference, it is assumed you already have an AWS account, and have the [Elastic Beanstalk Command Line Tools](http://aws.amazon.com/code/6752709412171743) installed on your development machine.

### Configuration
I'm still experimenting with the cleanest way to initialize the AWS environment using the EB Tools. You will need to experiment with EB tools to cleanly initialize an environment in AWS.

If you use this code as a base, you'll need to add your own local environment file ".env.local.php". See the laravel docs: [Laravel website](http://laravel.com/docs). You'll also need to modify the hostnames in the local environment section of the bootstrap/start.php file. In this project code, these are determined by an included file ".local-include.php" which is not included in the repo. You can create this file in the root of your laravel project and assign appropriate values for your local machine hostnames to the variables: $localHostName1, $localHostName2 etc. as required in bootstrap/start.php. Or, just keep it simple and use the normal method for setting up your local Laravel environment: [Laravel Environments](http://laravel.com/docs/configuration) and place the hostnames directly in bootstrap/start.php.

### References
[Laravel website](http://laravel.com/docs)

[Elastic Beanstalk Documentation](https://aws.amazon.com/documentation/elasticbeanstalk/)

[.ebextensions setup gist](https://gist.github.com/rmclain/6195165)

[Laravel 4 + Elastic Beanstalk, Darren Nolan](http://darrennolan.com/2013/02/02/php-aws-elastic-beanstalk-rds-laravel-4-with-migrations-on-updates/)

