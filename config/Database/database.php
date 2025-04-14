<?php
namespace Config\Database;

use Config\Database\Interfaces\DatabaseErrorInterface;
use PDO;
use PDOException;
use Config\env;
use Config\Database\Interfaces\DatabaseOperationInterface;

/** 
 * A classe registra e executa diversas operações definidas,
 * bem como a conexão com o banco de dados
 */
class Database {

    private static $env;
    private $pdo;
    
    public function __construct() {

        self::$env = new env;
        self::$env = self::$env->getenvDB();

    }
    
    protected function connect(): PDO|null {
        $dsn = 'mysql:dbname=' . self::$env['DB_NAME'] . ';host=' . self::$env['DB_HOST'];
        $username = self::$env['DB_USER'];
        $password = self::$env['DB_PASS'];

        try {

            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->pdo;

        } catch (PDOException $e) {

            // self::$databaseError->error('Connection failed: ' . $e->getMessage());
            throw new PDOException($e->getMessage());

        }

    }

    public function select (array $columns, string $table, ?string $where = null, ?string $order = null): array {

        $stmt = $this->connect();
        $columns = implode(", ", $columns);
        $sql = "SELECT $columns FROM $table";

        if ($where !== null) {
            $sql .= " WHERE $where";
        }

        if ($order !== null) {
            $sql .= " ORDER BY $order";
        }

        $stmt = $this->pdo->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }

    public function insert (array $data, string $table, ?string $where = null): bool {

        $stmt = $this->connect();
        $columns = implode(", ", array_keys($data));
        $values = implode(", ", array_values($data));

        $sql = "INSERT INTO $table ($columns) VALUES ($values)";

        if ($where !== null) {
            $sql .= " WHERE $where";
        }

        $stmt = $this->pdo->prepare($sql);
        $result = $stmt->execute();
        
        return $result;

    }

    // private static $env;
    // private $pdo;
    // private static DatabaseErrorInterface $databaseError;
    // private static array $operations = [];

    // public function __construct(env $env, DatabaseErrorInterface $databaseError) {

    //     self::$env = $env;
    //     self::$env = self::$env->getenvDB();
    //     self::$databaseError = $databaseError;

    // }

    // protected function connect(): PDO|null {
    //     $dsn = 'mysql:dbname=' . self::$env['DB_NAME'] . ';host=' . self::$env['DB_HOST'];
    //     $username = self::$env['DB_USER'];
    //     $password = self::$env['DB_PASS'];

    //     try {

    //         $this->pdo = new PDO($dsn, $username, $password);
    //         $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    //         return $this->pdo;

    //     } catch (PDOException $e) {

    //         self::$databaseError->error('Connection failed: ' . $e->getMessage());
            
    //         return null;

    //     }

    // }

    // public static function registerOperation(string $name, DatabaseOperationInterface $operation): void {

    //     self::$operations[$name] = $operation;

    // }

    // public function __call ($name, $args) {

    //     if (isset(self::$operations[$name])) {

    //         return self::$operations[$name]->execute(...$args);

    //     }

    //     throw new \BadMethodCallException("Operação '$name' não encontrada.");

    // }
    
}