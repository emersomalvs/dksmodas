<?php
class Size extends model {

	public function getSize() {
		$array = array();

		$sql = "SELECT * FROM size";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getSizeCart($id) {
		$array = array();
		$infocart = $_SESSION['cart'][1];

		$sql = "SELECT * FROM size WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $infocart['size']);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch(\PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function getNameById($id) {
		
		$array = array();

		$sql = "
				SELECT s.nome, s.id FROM products as p 
				JOIN size_product as cp ON p.id = cp.id_product 
				JOIN size as s ON cp.id_size = s.id
				WHERE p.id = :id
				";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}
		return $array;

	}

}