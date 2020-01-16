<?php

namespace App\Core\Database;

use PDO;
use PDOException;

class QueryBuilder
{
    protected $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();

        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    protected function getInsertQueryString($table, $params)
    {
        return sprintf(
            "insert into {$table} (%s) values (%s)",
            implode(', ', array_keys($params)),
            ':' . implode(
                ', :',
                array_keys($params)
            )
        );
    }

    public function insert($table, $params)
    {
        try {
            $statement = $this->pdo->prepare($this->getInsertQueryString($table, $params));
            $statement->execute($params);
        } catch (PDOException $e) {
            die('Whoops, Something went wrong');
        }
    }
}
