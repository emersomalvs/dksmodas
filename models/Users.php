<?php
class users extends model {


public function getId() {

		if(!empty($_SESSION['token'])) {
			$token = $_SESSION['token'];
			$array = array();
			$sql = "SELECT * FROM users WHERE token = :token";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':token', $token);
			$sql->execute();

			if($sql->rowCount() > 0) {

				$array = $sql->fetch(\PDO::FETCH_ASSOC);
				$_SESSION['id'] = $array['id'];
			}
			return $array;
		}
	}

	


	public function validateLogin($email, $password) {

		$sql = "SELECT id FROM users WHERE email = :email AND password = :password";
		$sql = $this->db->prepare($sql);
		$sql->bindValue(':email', $email);
		$sql->bindValue(':password', md5($password));
		$sql->execute();

		if($sql->rowCount() > 0) {
			$data = $sql->fetch();

			$token = md5(time().rand(0,999).$data['id'].time());

			$sql = "UPDATE users SET token = :token WHERE id = :id";
			$sql = $this->db->prepare($sql);
			$sql->bindValue(':token', $token);
			$sql->bindValue(':id', $data['id']);
			$sql->execute();

			$_SESSION['token'] = $token;
			if($sql->rowCount() > 0) {

				$_SESSION['id'] = $dados['id'];

			}

			return true;
		}

		return false;
	}

}