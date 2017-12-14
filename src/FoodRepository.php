<?php
namespace Itb;

class FoodRepository
{
    private $connection = [];
    
    public function __construct()
    {
       $db = new Database();
       $this->conenction = $db->getConnection();
    }

    public function dropTableFood()
    {
        $sql = 'DROP TABLE IF EXISTS food';
        $this->connection->exec($sql);
    }

    public function createTableFood()
    {
       $sql = 'CREATE TABLE IF NOT EXISTS food(id integer not null primary key auto-increment, id int, food text)';
       $this->connection->exec($sql);
    }

    public function deleteAllFromFood()
    {
        $sql = 'DELETE * FROM Food';
        $this->connection->exec($sql);
    }

    public function insertIntoFood($id, $food)
    {
        $sql = 'INSERT INTO Food(id, food) VALUES(:id, :food)';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':food', $food);
        $stmt->execute();
    }

    public function getAllFromFood()
    {
        $sql = 'SELECT * FROM Food';
        $stmt = $this->connection->prepare($sql);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Itb\\Food');
        $food = $stmt->fetchAll();
        return $food;
    }

    public function getOneFromFood($id)
    {
        $sql = 'SELECT * FROM Food WHERE id = id';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        $stmt->setFetchMode(\PDO::FETCH_CLASS, 'Itb\\Food');
        $food = $stmt->fetch();
        return $food;
    }

    public function deleteOneFromFood($id)
    {
        $sql = 'DELETE FROM Food WHERE id = :id';
        $stmt = $this->connection->prepare($sql);
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}