<?php
class Color extends model {

	public function getList() {
		$array = array();

		$sql = "SELECT * FROM color";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getColorCart($id) {
		$array = array();
		$infocart = $_SESSION['cart'][1];

		$sql = "SELECT * FROM color WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $infocart['cor']);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetch(\PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function getNameById($id) {
		
		$array = array();

		$sql = "
				SELECT * FROM products as p 
				JOIN color_product as cp ON p.id = cp.id_product 
				JOIN color as c ON cp.id_color = c.id
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