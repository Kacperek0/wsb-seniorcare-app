# [Visit Seniorcare Webside!](http://app.teamseniorcare.com/)

## Why Seniorcare

Seniorcare is an app built for academic purposes as part of Computer Science studies at WSB Poznań.

## Seniorcare Idea

Seniorcare is a simple application to provide help to your elderly neighbours. Application is using ticketing system where as senior you can ask for any help. Application includes also separate request for shopping where you can select products from the list and after that transfer your shopping list into help request ticket. As helper you can leave the comments in open tickets and close opened requests.

## Use case diagram

![use case diagram](https://wsb-seniorcare-app.s3.eu-west-1.amazonaws.com/UML+use+case+(1).png)

# Technical Description

## Infra

Seniorcare is a cloud based app using Amazon Web Services and it's features. Application is being deployed automatically using Github Actions. Overview is presented on the chart below.

![infra](https://wsb-seniorcare-app.s3.eu-west-1.amazonaws.com/Seniorcare+app+infra.png)

## Backend

Backend is build with [Laravel Framework](https://laravel.com/) following the MVC (Model-View-Controller) principals.

Examples:
*Ticket*

[M](https://github.com/Kacperek0/wsb-seniorcare-app/blob/master/app/Models/Ticket.php) -> [V](https://github.com/Kacperek0/wsb-seniorcare-app/blob/feature/readme/resources/views/tickets/index.blade.php) -> [C](https://github.com/Kacperek0/wsb-seniorcare-app/blob/feature/readme/app/Http/Controllers/Ticketing/TicketsController.php)

*User Login*

[M](https://github.com/Kacperek0/wsb-seniorcare-app/blob/feature/readme/app/Models/User.php) -> [V](https://github.com/Kacperek0/wsb-seniorcare-app/blob/feature/readme/resources/views/auth/login.blade.php) -> [C](https://github.com/Kacperek0/wsb-seniorcare-app/blob/feature/readme/app/Http/Controllers/Auth/LoginController.php)
## Frontend

## Database tables
All Database tables are created and managed from code.

![db_tables](https://wsb-seniorcare-app.s3.eu-west-1.amazonaws.com/Screen+Shot+2022-01-05+at+23.09.32.png)

## Contributors

- [Mikołaj Kostrzewa](https://github.com/kostek-os) - Frontend + Backend
- [Paweł Skorzybót](https://github.com/PawelSkorzybot) - Frontend
- [Kacper Szczepanek](https://github.com/Kacperek0) - Backend + Infra

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
