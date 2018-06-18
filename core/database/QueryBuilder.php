<?php

class QueryBuilder
{

    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {

        $statement = $this->pdo->prepare("SELECT * FROM {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_CLASS);

    }

    public function insert($table, $parameters)
    {

        $sql = sprintf('INSERT INTO %s(%s) VALUES (%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try{

            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);

        }catch (Exception $e){

            die($e->getMessage());

        }


    }

}