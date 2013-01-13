<?php 
class Produk{
	var $host;
	var $user;
	var $pass;
	var $dbnm;
	var $db;
	
	function __construct($host,$user,$pass,$dbnm){
		$this->host = $host;
		$this->user = $user;
		$this->pass = $pass;
		$this->dbnm = $dbnm;
	}
	
	function _connect(){
		$this->db = mysql_connect($this->host,$this->user,$this->pass);
		mysql_select_db($this->dbnm,$this->db);
	}
	
	function simpan_produk($data){
		$this->_connect();
		$sql = "
		INSERT INTO produk VALUES
		(
		'',
		'".$data['id_koperasi']."',
		'".$data['nama_produk']."',
		'".$data['harga_produk']."',
		'".$data['kategori_produk']."',
		'".$data['status_produk']."',
		'".$data['deskripsi_produk']."',
		'".$data['produk']."'
		)
		";
		
		$result = mysql_query($sql);
		return $result;
	}
}
?>