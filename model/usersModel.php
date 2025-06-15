<?php

class usuariosModel {

    protected $id;
    protected $email;
    protected $senha;
    protected $tiposUsuariosId;
    

    public function __construct() {
        
    }

    public function getId() {
        return $this->id;
    }

   

    public function getEmail() {
        return $this->email;
    }

    public function getSenha() {
        return $this->senha;
    }

  
    public function getTiposUsuariosId() {
        return $this->tiposUsuariosId;
    }

    public function setId($id): void {
        $this->id = $id;
    }


    public function setEmail($email): void {
        $this->email = $email;
    }

    public function setSenha($senha): void {
        $this->senha = $senha;
    }

  

    public function setTiposUsuariosId($tiposUsuariosId): void {
        $this->tiposUsuariosId = $tiposUsuariosId;
    }

    //Métodos especialistas
    public function loadAll() {
         require_once 'ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM usuarios';
        $result = $db->Consultar($sql);
        $db->Desconectar();
        return $result;
    }

    public function loadById($id) {
         require_once 'ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM usuarios WHERE id = ' . $id;
        $result = $db->Consultar($sql);
        if ($db->total == 1) {
            foreach ($result as $data) {
                $this->id = $data['id']; //array que vem do bd
                $this->nome = $data['nome']; //array que vem do bd
                $this->email = $data['email']; //array que vem do bd
                $this->senha = $data['senha']; //array que vem do bd
                $this->tiposUsuariosId = $data['tipos_usuarios_id']; //array que vem do bd
            }
        }
        $db->Desconectar();
      }
    
    public function login($email, $senha) {
         require_once 'ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        //SELECT * FROM usuarios where email="" and senha="";
        $sql = 'SELECT * FROM usuarios '
                . 'WHERE email="'.$email.'" and senha="'. $senha.'"';
        $result = $db->Consultar($sql);
        if ($db->total == 1) {
            foreach ($result as $data) {
                $this->id = $data['id']; //array que vem do bd
                $this->email = $data['email']; //array que vem do bd
                $this->senha = $data['senha']; //array que vem do bd       
                $this->tiposUsuariosId = $data['tipos_usuarios_id']; //array que vem do bd
            }
        }
        $db->Desconectar();
        return $db->total;
        
        
        
    }
    
    public function insert() {
        require_once 'ConexaoMysql.php';
        //Criar um objeto de conexão
        $db = new ConexaoMysql();

        //Abrir conexão com banco de dados
        $db->Conectar();

        //Criar consulta
        $sql = 'INSERT INTO usuarios VALUES (null,"'.$this->email.'", "'.$this->senha.'", 1);';
        //Executar método de inserção
        $db->Executar($sql);

        //Desconectar do banco
        $db->Desconectar();

        return $db->total;
    }
    
    
    
}
