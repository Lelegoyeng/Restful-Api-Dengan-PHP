<?php
require_once "method.php";
$valid_username= 'produk';
$valid_password = '2022';
if (isset($_SERVER['PHP_AUTH_USER']) && $_SERVER['PHP_AUTH_USER']==$valid_username &&  $_SERVER['PHP_AUTH_PW']==$valid_password) {
	// the user is authenticated and handle the rest api call here
	
$prod = new Produk();
$request_method=$_SERVER["REQUEST_METHOD"];
switch ($request_method) {
	case 'GET':
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				$prod->get_produk($id);
			}
			else
			{
				$prod->get_allproduk();
			}
			break;
	case 'POST':
			if(!empty($_GET["id"]))
			{
				$id=intval($_GET["id"]);
				$prod->update_produk($id);
			}
			else
			{
				$prod->insert_produk();
			}		
			break; 
	case 'DELETE':
		    $id=intval($_GET["id"]);
            $prod->delete_produk($id);
            break;
	default:
		// Invalid Request Method
			header("HTTP/1.0 405 Method Not Allowed");
			break;
		break;
}




?>
