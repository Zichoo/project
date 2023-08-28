<?php

class BarangModel {
	
	private $table = 'tbl_barang';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllBarang()
	{
		$this->db->query("SELECT * FROM " . $this->table );
		return $this->db->resultSet();
	}

	public function getBarangById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_barang=:id_barang');
		$this->db->bind('id_barang',$id);
		return $this->db->single();
	}

	public function tambahBarang($data)
	{
		$query = "INSERT INTO tbl_barang (id_barang, nama_barang, harga_barang) VALUES(:id_barang, :nama_barang, :harga_barang)";
		$this->db->query($query);
		$this->db->bind('id_barang', $data['id_barang']);
		$this->db->bind('nama_barang', $data['nama_barang']);
		$this->db->bind('harga_barang', $data['harga_barang']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataBarang($data)
	{
		$query = "UPDATE tbl_barang SET id_barang=:id_barang, nama_barang=:nama_barang, harga_barang=:harga_barang WHERE id_barang=:id_barang";
		$this->db->query($query);
		$this->db->bind('id_barang', $data['id_barang']);
		$this->db->bind('nama_barang', $data['nama_barang']);
		$this->db->bind('harga_barang', $data['harga_barang']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteBarang($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_barang=:id_barang');
		$this->db->bind('id_barang',$id);
		$this->db->execute();

		return $this->db->rowCount();
	}

	// public function cariBarang()
	// {
	// 	$key = $_POST['key'];
	// 	$this->db->query("SELECT * FROM " . $this->table . " WHERE judul LIKE :key");
	// 	$this->db->bind('key',"%$key%");
	// 	return $this->db->resultSet();
	// }
}