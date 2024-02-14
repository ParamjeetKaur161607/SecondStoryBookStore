<?php

class QueryBuilder
{

    protected $pdo;

    public function __construct($pdo)
    {

        $this->pdo = $pdo;

    }

    public function selectALL($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }

    public function insert($table, $parameters)
    {
        $sql = sprintf(
            'insert into %s(%s) values(%s)',
            $table,
            implode(', ', array_keys($parameters)),
            ':' . implode(', :', array_keys($parameters))
        );

        try {

            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);

        } catch (PDOException $e) {

            die('Somthing is wrong');

        }
    }

    public function update($table, $parameters, $id, $idValue)
    {
        $data = [];
        foreach ($parameters as $column => $value) {
            $data[] = "$column = :$column";
        }

        $setData = implode(', ', $data);

        $sql = sprintf(
            "update %s set %s where %s=%u", $table, $setData, $id, $idValue
        );

        try {

            $statement = $this->pdo->prepare($sql);
            foreach ($parameters as $key => $value) {
                $statement->bindValue(":$key", $value);
            }
            $statement->execute();

        } catch (PDOException $e) {

            die($e->getMessage());

        }
    }

}