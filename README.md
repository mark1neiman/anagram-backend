
# PHP + React Developer test assignment

## This is my solution for the assignment test made by UpTime.eu group.

- Quick description:  Create an app which finds anagrams from a list uploaded on a database. 
- Languages: ReactJs + PHP-Laravel. Database MySql, phpmyadmin
- Requirements: React FRONTEND authentication (three premade users), Anagram finder, Wordbase uploader (i used .txt only lists)

Wish me luck, lets go! :relaxed:

Lower is going to be backend part of assignment made by Mark Neiman.




## LARAVEL PHP BACKEND

### How it works?

#### Created several routes to controll processes from frontend to backend. 
- First of all created controllers for: login, register (optional) and upload.
- Created controller for words, where PHP analyze given list of words and finds appropriate one.

API.php


    Route::get('/words/{word}', [WordController::class, 'show']);  
    Route::get('download/{file}', [DownloadsController::class, 'show']);
    Route::post('/upload', [fileUpload::class, 'fileUpload']);
    Route::post('/register', [UserController::class, 'register']);
    Route::post('/login', [UserController::class, 'login']);


After all these routes need to be fetched with frontend to post data.

#### Server paths for test purpose. 
If you want to check coded toute capability you may check these routes:
    
#### Here you can put any word you like, change YOURWORD to any word, if it is in the database you will get back an array with words, if not - empty array.
    
    https://ecommerce.webaza.eu/public/api/words/YOURWORD 

#### Here you can send files to database via larevel index.php page for test purpose

    https://ecommerce.webaza.eu/public/index.php

#### Login and Register can be done using frontend or using programs like Postman or Insomnia to send POST request.

    https://ecommerce.webaza.eu/public/api/register
    https://ecommerce.webaza.eu/public/api/login

Register

    {
	"name":"Musa Pittman",
	"email":"musa@webaza.eu",
	"password":"musa123"
    }

Login 

    {
	"email":"musa@webaza.eu",
	"password":"musa123"
    }


## PS.
- I am realy thankful to take part in the assignment! It was not for me that easy as it may look, i tried do my best and make an CLEAN app. Everything in this task made me think on every character i coded. Thank you for your work also, hope you like it! Have a nice day. :wink: