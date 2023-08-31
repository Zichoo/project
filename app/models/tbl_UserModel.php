<?php

class BarangModel {
	
	private $table = 'tbl_user';
	private $db;

	public function __construct()
	{
		$this->db = new Database;
	}

	public function getAllUser()
	{
		$this->db->query("SELECT * FROM " . $this->table );
		return $this->db->resultSet();
	}

	public function getUserById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE id_user=:id_user');
		$this->db->bind('id_user',$id);
		return $this->db->single();
	}

	public function tambahUser($data)
	{
		$query = "INSERT INTO tbl_user (id_user, nama, email, no_hp, password, alamat) VALUES(:id_user, nama, email, no_hp, password, alamat)";
		$this->db->query($query);
		$this->db->bind('id_user', $data['id_user']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('email', $data['email']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('alamat', $data['alamat']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function updateDataUser($data)
	{
		$query = "UPDATE tbl_user SET id_user=:id_user, nama =:nama, email=:email, no_hp=:no_hp, password=:password, alamat=:alamat WHERE id_user=:id_user";
		$this->db->query($query);
		$this->db->bind('id_user', $data['id_user']);
		$this->db->bind('nama', $data['nama']);
		$this->db->bind('email', $data['email']);
        $this->db->bind('no_hp', $data['no_hp']);
        $this->db->bind('password', $data['password']);
        $this->db->bind('alamat', $data['alamat']);
		$this->db->execute();

		return $this->db->rowCount();
	}

	public function deleteUser($id)
	{
		$this->db->query('DELETE FROM ' . $this->table . ' WHERE id_user=:id_user');
		$this->db->bind('id_user',$id);
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