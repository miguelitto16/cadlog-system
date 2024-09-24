<!-- Método de conexão com banco de dados utilizando método PDO (mais seguro) -->
 
<?php
class Database{
    // Utiliza o padrão Singleton, cujo o objetivo é garantir que apenas uma única instância de uma classe seja criada durante a execução de programa, e que essa instância seja utilizada sempre que necessário.
    private static $instance = null;
 
    // Método público que retorna a conexão com BD
    public static function getConnection(){
        if(!self::$instance){
            $host       = 'localhost';
            $db         = 'sistema_usuarios';
            $user       = 'root';
            $password   = '';
 
            // A conexão usa o drive Mysql (mysql:) e as informações de host e BD
            self::$instance = new PDO("msql:host=$host; dbname=$db", $user, $password);
 
            // Define o modo de erro para execuções, facilitando a depuração e tratamento dos erros
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$instance;
    }
}
?>