<?php
class perfilController extends controller {


    public function __construct() {
        parent::__construct();

        if (empty($_SESSION['token'])) {
            header("Location: ".BASE_URL);
        }

        $this->arrayInfo = array(
            'menuActive' => 'home'
        );
        
    }

    public function index() {
        $dados = array(
            'users' => array()
        );

        $users = new users();
        $address = new Address();
        $dados['perfil'] = $users->getId();
        $dados['address'] = $address->getAllAddress();


        $this->loadViewTemplate('perfil', $dados);
    }

    public function edit($id){
        if (!empty($id)) {
            $address = new Address();
            $this->arrayInfo['info'] = $address->getEdit($id);
            $this->arrayInfo['errorItems'] = array();
            if(isset($_SESSION['formError']) && count($_SESSION['formError']) > 0) {
                $this->arrayInfo['errorItems'] = $_SESSION['formError'];
                unset($_SESSION['formError']);
            }
           if (count($this->arrayInfo['info']) > 0) {

                    $this->loadViewTemplate('edit_address', $this->arrayInfo);
            } else {
                header("Location: ".BASE_URL."perfil");
                exit;
            }

        } else {
            header("Location: ".BASE_URL."perfil");
            exit;
        }
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

    public function del($id){
        if (!empty($id)) {
            $address = new Address();
            $address->del($id);
        }
            header("Location: ".BASE_URL."perfil");
            exit;
    }

}