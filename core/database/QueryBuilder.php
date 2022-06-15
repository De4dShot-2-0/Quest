<?php

class QueryBuilder
{
    protected $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    public function selectAll($table)
    {
        $statement = $this->pdo->prepare("select * from {$table}");

        $statement->execute();
    
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function insert($table, $parameters)
    {   
        //возвращает отформатированную строку
        $sql = sprintf(
            'insert into %s (%s) values(%s)',
            $table,
            implode(', ', array_keys($parameters)), // Объединяет элементы массива в строку
            ':' . implode(', :', array_keys($parameters))
        );

        try {
            $statement = $this->pdo->prepare($sql);

            $statement->execute($parameters);
        } catch(Exception $e) {
            die('Whoops, something went wrong...');
        }
    }

    public function getElement($id, $table)
    {
        $statement = $this->pdo->prepare("select * from {$table} where id={$id}");
        $statement->execute();
        
        return $statement->fetchAll(PDO::FETCH_CLASS);
    }

    public function update($id, $table, array $data)
    {
        $set = array_map(fn($key, $value) => "`{$key}` = '{$value}'", array_keys($data), $data);
        $set = implode(", ", $set);
        $statement = $this->pdo->prepare("UPDATE {$table} SET {$set} WHERE id={$id}");
        $statement->execute();
    }

    public function delete($id, $table)
    {
        $statement = $this->pdo->prepare("DELETE FROM {$table} WHERE id={$id}");
        $statement->execute();
    }
}