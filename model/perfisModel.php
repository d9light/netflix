<?php
 require_once 'ConexaoMysql.php';
    class perfisModel{             

    //Propriedades
    protected $id;
    protected $nome;
    protected $imagem;
    protected $infantil;
    protected $usuarios_id;
    
    //Métodos acessores e modificadores
    public function getId() {
        return $this->id;
    }

    public function getNome() {
        return $this->nome;
    }

    public function getImagem() {
        return $this->imagem;
    }

    public function getInfantil() {
        return $this->infantil;
    }

    public function getUsuarios_id() {
        return $this->usuarios_id;
    }

    public function setId($id): void {
        $this->id = $id;
    }

    public function setNome($nome): void {
        $this->nome = $nome;
    }

    public function setImagem($imagem): void {
        $this->imagem = $imagem;
    }

    public function setInfantil($infantil): void {
        $this->infantil = $infantil;
    }

    public function setUsuarios_id($usuarios_id): void {
        $this->usuarios_id = $usuarios_id;
    }

    //Método construtor da classe
    public function __construct() {
        
    }
     
    //Métodos especialistas
    public  function loadAll(){
        //require_once './model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM perfis';
        $result = $db->Consultar($sql);
        $db->Desconectar();
        return $result;
    }
    
    public  function loadById($id){
        //require_once './model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'SELECT * FROM perfis WHERE id = '.$id;
        $result = $db->Consultar($sql);
        if($db->total==1){
            foreach ($result as $data) {
                $this->id = $data['id']; //array que vem do bd
                $this->imagem = $data['imagem']; //array que vem do bd
                $this->infantil = $data['infantil']; //array que vem do bd
                $this->nome = $data['nome']; //array que vem do bd
                $this->usuarios_id = $data['usuarios_id']; //array que vem do bd
            }
        }
        $db->Desconectar();
        //retorno o objeto do tipo perfil
        return $this;
    }
    
    public  function delete($id){
        //require_once '../model/ConexaoMysql.php';
        $db = new ConexaoMysql();
        $db->Conectar();
        $sql = 'DELETE FROM perfis WHERE id = '.$id;
        $db->Executar($sql);
        $db->Desconectar();
        return $db->total;
    }
    
 public function insert() {
    $db = new ConexaoMysql();
    $db->Conectar();

    // Cria a consulta SQL sem o campo de imagem como um BLOB
    $sql = 'INSERT INTO perfis (nome, imagem, infantil, usuarios_id) VALUES (?, ?, ?, ?)';
    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bind_param("ssii", $this->nome, $this->imagem, $this->infantil, $this->usuarios_id);
    $stmt->execute();
    
    $db->Desconectar();
    return $stmt->affected_rows;
}

public function update() {
    $db = new ConexaoMysql();
    $db->Conectar();

    // Cria a consulta SQL para atualização sem o campo de imagem como um BLOB
    $sql = 'UPDATE perfis SET nome=?, infantil=?, usuarios_id=? WHERE id=?';
    $stmt = $db->getConnection()->prepare($sql);
    $stmt->bind_param("siii", $this->nome, $this->infantil, $this->usuarios_id, $this->id);
    $stmt->execute();

    $db->Desconectar();
    return $stmt->affected_rows;
}



  public function verificarLimitePerfis($userId) {
        // Lógica para verificar o limite de perfis por usuário
        $db = new ConexaoMysql();
        $db->Conectar();

        $sql = 'SELECT COUNT(*) AS quantidade FROM perfis WHERE usuarios_id = ?';
        $stmt = $db->getConnection()->prepare($sql);
        $stmt->bind_param("i", $userId);
        $stmt->execute();
        $result = $stmt->get_result();
        
        $quantidade = 0;
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $quantidade = $row['quantidade'];
        }

        $db->Desconectar();
        return $quantidade;
    }


}




