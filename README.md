# Restful-Api-Dengan-PHP
Restful Api Dengan Php untuk mempermudah transfer data

## Features
Resutful Routing
Basic Auth

### EndPoint:
```html
| Route         | Request Method        | Body Request        | Description               |
==========================================================================================
| /index        |   GET                 |     -               |   Get all Produk data
|               |                       |                     |
| /index/{id}   |   GET                 |     -               |   Get a Single produk data
|---------------|
| /index        |   POST                |   id                |   Insert new produk record 
                                                                  into database
                                            product_id        | 
                                            nama_produk
                                            kota
                                            jumlah_stock
| /index/{id}   |   POST                |   id
                                            product_id
                                            nama_produk
                                            kota
                                            jumlah_stock
| /index/{id}   |   DELETE              |     -

```
