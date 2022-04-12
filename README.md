# :earth_asia: Restful-Api-Dengan-PHP
Restful Api Dengan Php untuk mempermudah transfer data

## :two_hearts: Features
Resutful Routing
Basic Auth

### EndPoint:
```html
| Route         | Request Method      | Body Request    | Description               |
=====================================================================================
| /index        | GET                 | -               | Get all Produk data       |
|               |                     |                 |                           |
| /index/{id}   | GET                 | -               | Get a Single produk data  |
|               |                     |                 |                           |
| /index        | POST                | id              | Insert new produk record  |
|               |                     | product_id      | into database             |
|               |                     | nama_produk     |                           |
|               |                     | kota            |                           |
|               |                     | jumlah_stock    |                           |
|               |                     |                 |                           |
| /index/{id}   |   POST              | id              | Update produk record into |
|               |                     | product_id      | Database                  |
|               |                     | nama_produk     |                           |
|               |                     | kota            |                           |
|               |                     | jumlah_stock    |                           |
|               |                     |                 |                           |
| /index/{id}   |   DELETE            | -               | Delete particular Produk  |
|               |                     |                 | record from database      |
```
