# Restful-Api-Dengan-PHP
Restful Api Dengan Php untuk mempermudah transfer data

## Features
Resutful Routing
Basic Auth

## Routes List:

| Method     | URI                               | Action                                                  |
|------------|-----------------------------------|---------------------------------------------------------|
|  POST     | `comments`                        | `App\Http\Controllers\CommentsController@createComment` |
| `GET/HEAD` | `comments`                        | `App\Http\Controllers\CommentsController@getComments`   |
| `GET/HEAD` | `comments/{id}`                   | `App\Http\Controllers\CommentsController@getComment`    |
| `DELETE`   | `comments/{id}`                   | `App\Http\Controllers\CommentsController@deleteComment` |
| `PUT`      | `comments/{id}`                   | `App\Http\Controllers\CommentsController@updateComment` |
