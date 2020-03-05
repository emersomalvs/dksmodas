<?php
class perfilController extends controller {


    public function __construct() {
        parent::__construct();
        
    }

    public function edit_action($id){
        if (!empty($id)) {
            if (!empty($_POST['nome'])) {
                $address = new Address();

                $nome = $_POST['nome'];
                $cep = $_POST['cep'];
                $rua = $_POST['rua'];
                $numero = $_POST['numero'];
                $uf = $_POST['uf'];
                $cidade = $_POST['cidade'];
                $bairro = $_POST['bairro'];
                $complemento = $_POST['complemento'];

                $address->update($id, $nome, $cep, $rua, $numero, $uf, $cidade, $bairro, $complemento);

                header("Location: ".BASE_URL."perfil");
                exit;
            } else {

                header("Location: ".BASE_URL."perfil/edit/".$id);
                exit;
            }
        } else {
            header("Location: ".BASE_URL."perfil");
            exit;
        }
    }

}