<?php
class Address extends model {

	public function getAddress() {
		$array = array();

		$sql = "SELECT * FROM address";
		$sql = $this->db->query($sql);

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll();
		}

		return $array;
	}

	public function getAllAddress() {

		$array = array();

		$sql = "
				SELECT * FROM users as u 
				JOIN user_address as ua ON u.id = ua.id_user 
				JOIN address as a ON ua.id_address = a.id
				WHERE u.id = :id
				";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':id', $_SESSION['id']);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql->fetchAll(\PDO::FETCH_ASSOC);
		}
		return $array;


	}


	public function getEdit($id) {
		$array = array();

		$sql = "SELECT * FROM address WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();

		if($sql->rowCount() > 0) {
			$array = $sql = $sql->fetch(\PDO::FETCH_ASSOC);
		}

		return $array;
	}

	public function update($id, $nome, $cep, $rua, $numero, $uf, $cidade, $bairro, $complemento) {

		$sql = "UPDATE address SET nome = :nome, cep = :cep, rua = :rua, numero = :numero, complemento = :complemento, bairro = :bairro, uf = :uf, cidade = :cidade WHERE id = :id";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":nome", $nome);
		$sql->bindValue(":cep", $cep);
		$sql->bindValue(":rua", $rua);
		$sql->bindValue(":numero", $numero);
		$sql->bindValue(":complemento", $complemento);
		$sql->bindValue(":bairro", $bairro);
		$sql->bindValue(":uf", $uf);
		$sql->bindValue(":cidade", $cidade);
		$sql->bindValue(":id", $id);
		$sql->execute();
	}

	public function del($id){
        
		$sql = "
				DELETE FROM address WHERE id = :id;
				DELETE FROM user_address WHERE id_address = :id
				";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(":id", $id);
		$sql->execute();
    }

}