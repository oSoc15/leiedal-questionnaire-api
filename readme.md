Leiedal plong
=====================================

Determine your energy label through an interactive platform


[View contributors](https://github.com/oSoc15/leiedal-questionnaire-api/graphs/contributors)

---

### Getting up and running
If this is the first time that you use laravel, check out the [getting started guide](http://laravel.com/docs/5.1/installation) from laravel.

1. Clone this repo from `https://github.com/oSoc15/leiedal-plong`
2. Run `composer install` from the root directory of the cloned repository 
3. Change your environment to your credentials
3. Run `php artisan migrate` to create the database tables and relationships
4. Run `php artisan db:seed` to seed the tables

---

### API Routes

#### GET /api/sections

This shows all the sections of the API.
The sections consist of multiple questions.

#### GET /api/sections/id

Gives the specific information of the section.


#### GET /api/questions

This shows all the questions in the API.
A question consist of multiple answers.

#### GET /api/questions/id

Gives the specific information of the section.
The answers bound to this question will also be shown.


#### POST/api/residence

Creates a residence.

parameters:

- city : string
- postalCode : integer
- street : string
- number : integer
- lat : float
- long : float

This returns the instance of residence with all attributes with the provided hashids for identification.

#### POST/api/residence/reply

Post the choosen answer to the question. 

parameters:

- residence (the returned hashids when you created the residence) : string
- question (the id of the current question) : integer
- answer (the id of the choosen answer) : integer
- unknown (has the user choosen the 'Weet ik niet' reply) : boolean
- input (the input from the user, set answer and unknown to null)

Returns the updated residence, the current question and the possible answers.

This project uses the [laravel framework](https://github.com/laravel/framework) and [AngularJS](https://angularjs.org/).
