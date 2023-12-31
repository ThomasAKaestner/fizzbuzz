# FizzBuzz

Write a program that prints the numbers from 1 to 100. But for multiples of three print Fizz instead of the number and for the multiples of five print Buzz. For numbers which are multiples of both three and five print FizzBuzz.

### Technology
You can write plain-php code or use a framework for this challenge.

Please use PHP 7.1+, strict typing and object oriented programming.

Also provide some Unit-Tests to verify the sample output.

### Summary
This coding challenge shouldn't take more than 2 hours. Please provide us a github/bitbucket link when you're done.

### Sample-Output
```
1
2
Fizz
4
Buzz
Fizz
7
8
Fizz
Buzz
11
Fizz
13
14
FizzBuzz
16
17
Fizz
19
Buzz
... etc up to 100
```

### Solution
I went for the plain PHP solution to show how I would structure the application and how I would solve issues like routing & dependency injection.
The index.php is the entry point of the application. It is responsible for calling the router.php.
The router.php is responsible for calling the correct controller and action and is using the dependency injection container to inject the dependencies.
The dependency injection container is responsible for creating the objects and injecting the dependencies.
The controller is responsible for calling the correct action and returning the response.

How to set up the application:
1. Clone the repository
2. docker-compose up 
3. composer install
4. open: http://localhost:40000
### Requirements
- docker


