<?php   
class Postgres {
    private $dbname;
    private $host;
    private $pass;
    private $port;
    private $user;
    private $conexao;

    public function __construct($usuario, $senha, $banco)
    {
        $this->dbname = $banco;
        $this->host = 'localhost';
        $this->user = $usuario;
        $this->pass = $senha;
        $this->port = '5432';
        $this->conexao = null;
    }
    
    public function criaConexao(){

        try{
            $this->conexao = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user, $this->pass);
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conexao->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        
        } catch(PDOException $e){
            echo $e->getMessage();
        }
    }

    public function desconectar(){
        $this->conexao = null;
    }

    /**
     * @return mixed
     */
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * @param mixed $dbname
     */
    public function setDbname($dbname)
    {
        $this->dbname = $dbname;
    }

    /**
     * @return string
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param string $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getPass()
    {
        return $this->pass;
    }

    /**
     * @param mixed $pass
     */
    public function setPass($pass)
    {
        $this->pass = $pass;
    }

    /**
     * @return string
     */
    public function getPort()
    {
        return $this->port;
    }

    /**
     * @param string $port
     */
    public function setPort($port)
    {
        $this->port = $port;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user)
    {
        $this->user = $user;
    }

    /**
     * @return null
     */
    public function getConexao()
    {
        return $this->conexao;
    }

    /**
     * @param null $conexao
     */
    public function setConexao($conexao)
    {
        $this->conexao = $conexao;
    }

}



