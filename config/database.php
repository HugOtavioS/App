<?php
namespace Config;

use PDO;
use PDOException;
use Config\env;
use Config\Database\Interfaces\DatabaseOperationInterface;

/** Manipular e Lidar com o banco de dados */
class database {
    private $env;
    private $pdo;
    private static array $operations = [];

    public function __construct(env $env) {

        $this->env = $env;
        $this->env = $this->env->getenvDB();

    }

    protected function connect(): PDO|null {

        $dsn = 'mysql:dbname=' . $this->env['DB_NAME'] . ';host=' . $this->env['DB_HOST'];
        $username = $this->env['DB_USER'];
        $password = $this->env['DB_PASS'];

        try {
            $this->pdo = new PDO($dsn, $username, $password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            return $this->pdo;
        } catch (PDOException $e) {
            echo 'Connection failed: ' . $e->getMessage();
            
            return null;
        }

    }

    public static function registerOperation(string $name, DatabaseOperationInterface $operation): void {

        self::$operations[$name] = $operation;

    }

    public function __call ($name, $args) {

        if (isset(self::$operations[$name])) {

            return self::$operations[$name]->execute(...$args);

        }

        throw new \BadMethodCallException("Operação '$name' não encontrada.");

    }
}