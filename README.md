# Restful-Api-Dengan-PHP
Restful Api Dengan Php untuk mempermudah transfer data

## Features
Resutful Routing
Basic Auth

## Routes List:
### Comments
| Route         | Request Method        | Body Request        | Description               |
------------------------------------------------------------------------------------------

| Route        | Request Method   | Action                                                  |
|--------------|---------------------------
|  /produk     | produk                        | `App\Http\Controllers\CommentsController@createComment` |
|  /index/{id} | `comments`                        | `App\Http\Controllers\CommentsController@getComments`   |
| `GET/HEAD`| `comments/{id}`                   | `App\Http\Controllers\CommentsController@getComment`    |
| `DELETE`  | `comments/{id}`                   | `App\Http\Controllers\CommentsController@deleteComment` |
| `PUT`     | `comments/{id}`                   | `App\Http\Controllers\CommentsController@updateComment` |
