<?php
require_once "koneksi.php";
class Produk 
{

	public  function get_allproduk()
	{
		global $mysqli;
		$query="SELECT * FROM stock1";
		$data=array();
		$result=$mysqli->query($query);
		while($row=mysqli_fetch_object($result))
		{
			$data[]=$row;
		}
		$response=array(
							'status' => 1,
							'message' =>'Get List Produk Successfully.',
							'data' => $data
						);
		header('Content-Type: application/json');
		echo json_encode($response);
	}

	public function get_produk($id=0)
	{
		global $mysqli;
		$query="SELECT * FROM stock1";
		if($id != 0)
		{
			$query.=" WHERE id=".$id." LIMIT 1";
		}
		$data=array();
		$result=$mysqli->query($query);
		while($row=mysqli_fetch_object($result))
		{
			$data[]=$row;
		}
		$response=array(
							'status' => 1,
							'message' =>'Get Produk Successfully.',
							'data' => $data
						);
		header('Content-Type: application/json');
		echo json_encode($response);
		 
	}

	public function insert_produk()
		{
			global $mysqli;
			$arrcheckpost = array('id' => '', 'product_id' => '', 'nama_produk' => '', 'kota' => '', 'jumlah_stock' => '');
			$hitung = count(array_intersect_key($_POST, $arrcheckpost));
			if($hitung == count($arrcheckpost)){
			
					$result = mysqli_query($mysqli, "INSERT INTO stock1 SET
					id = '$_POST[id]',
					product_id = '$_POST[product_id]',
					nama_produk = '$_POST[nama_produk]',
					kota = '$_POST[kota]',
					jumlah_stock = '$_POST[jumlah_stock]'");
					
					if($result)
					{
						$response=array(
							'status' => 1,
							'message' =>'Produk Added Successfully.'
						);
					}
					else
					{
						$response=array(
							'status' => 0,
							'message' =>'Produk Addition Failed.'
						);
					}
			}else{
				$response=array(
							'status' => 0,
							'message' =>'Parameter Do Not Match'
						);
			}
			header('Content-Type: application/json');
			echo json_encode($response);
		}

	function update_produk($id)
		{
			global $mysqli;
			$arrcheckpost = array('id' => '', 'product_id' => '', 'nama_produk' => '', 'kota' => '', 'jumlah_stock' => '');
			$hitung = count(array_intersect_key($_POST, $arrcheckpost));
			if($hitung == count($arrcheckpost)){
			
		        $result = mysqli_query($mysqli, "UPDATE stock1 SET
		        id = '$_POST[id]',
		        product_id = '$_POST[product_id]',
		        nama_produk = '$_POST[nama_produk]',
		        kota = '$_POST[kota]',
		        jumlah_stock = '$_POST[jumlah_stock]'
		        WHERE id='$id'");
		   
				if($result)
				{
					$response=array(
						'status' => 1,
						'message' =>'Produk Updated Successfully.'
					);
				}
				else
				{
					$response=array(
						'status' => 0,
						'message' =>'Produk Updation Failed.'
					);
				}
			}else{
				$response=array(
							'status' => 0,
							'message' =>'Parameter Do Not Match'
						);
			}
			header('Content-Type: application/json');
			echo json_encode($response);
		}

	function delete_produk($id)
	{
		global $mysqli;
		$query="DELETE FROM stock1 WHERE id=".$id;
		if(mysqli_query($mysqli, $query))
		{
			$response=array(
				'status' => 1,
				'message' =>'Produk Deleted Successfully.'
			);
		}
		else
		{
			$response=array(
				'status' => 0,
				'message' =>'Produk Deletion Failed.'
			);
		}
		header('Content-Type: application/json');
		echo json_encode($response);
	}
}

 ?>