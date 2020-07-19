# ‫‪People’s‬‬ ‫‪Travel‬‬ ‫‪Sorter‬‬

> [PHP](https://www.php.net/) API for sort travel.


## Using

* [PHP](https://www.php.net/)
* [Composer](https://getcomposer.org/doc/)

### Getting Started
 Below are instructions to kick start AutoMart in your local server.


 **First off, you must have PHP/Composer installed. Install the latest node version [here](https://www.php.net/).**



##### This will be the file and folder structure

    SABAIDEA
    ├── public
        └── index.php 
    ├── src
        ├── Controller 
            ├── SortController.php
    ├── vendor
    ├── .env
    ├── bootstrap.php 
    ├── composer.json
    └── composer.lock                  
<hr/>

# Introduction

There are a number of travel cards available to you from start to finish. There are a number of stops in between. All the cards are arranged irregularly and the starting and ending point of the path is not clear. Each card contains information such as seat number, type of transport seat and flight number or numberIt is a bus. 
Your task is to generate an api that can sort the route and any movement path Let it work well.

### Analytics
* Take the 78A train from Madrid to Barcelona Seat number: 45B 
* Take the airport bus from Barcelona to Girona Airport. No seat ‫‪assignment.‬‬
* From Gerona Airport, fly SK455 to Stockholm, Gate 45B, Seat 3A. Load drop at ticket counter 344.
* Fly from Stockholm, fly from SK22 to JFK in New York at 22B, Seat 7B. We are automatically transferred from your last leg.


### Installation
 
 1. Clone this repository by running this on your terminal: `git clone https://github.com/abolfazlsadri/URL-Shortener.git`
 2. Navigate to the project's directory with: `cd SABA`
 3. Run `composer install` to install dependencies
 4. Run `php -S 127.0.0.1:8000 -t public` to start the server on a local host
 5. GET request to `http://127.0.0.1:8000/sort`

### License

Copyright © 2020, [Abolfazl sadri](https://github.com/abolfazlsadri).
Released under the [Apache License](LICENSE).