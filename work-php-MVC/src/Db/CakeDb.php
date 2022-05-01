<?php

namespace Cakes\Db;
use Cakes\DBConnection;
use PDO;
class CakeDb
{
    private $connection;
    public function __construct(){
        $this->connection = DBConnection::getInstance()->getConnection();
    }
    public function getCakes(){
        $sql = "SELECT id, name_cake, dicription, price, image_path FROM tb_cakes;";
        $statement = $this->connection->prepare($sql);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public function getCakeByName($name){
        $sql = "SELECT id, name_cake FROM tb_cakes WHERE name_cake = ?;";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$name]);
        return $statement->fetch(PDO::FETCH_ASSOC);
    }
    public function addNewCake($name, $image, $price){
        $price *= 1;
        $sql = "INSERT INTO tb_cakes(name_cake, price, image_path) VALUE (:name_param, :price_param, :image_param);";
        $params = [
            'name_param' => $name,
            'price_param' => $price,
            'image_param' => $image
        ];
        $statement = $this->connection->prepare($sql);
        return $statement->execute($params);
    }
    public function deleteCake($id){
        $sql = "DELETE FROM tb_cakes WHERE id = ?;";
        $statement = $this->connection->prepare($sql);
        return $statement->execute([$id]);
    }
    public function getCakesByPrice($price1, $price2){
        $sql = "SELECT id, name_cake, price FROM tb_cakes WHERE price > ? AND price < ?;";
        $statement = $this->connection->prepare($sql);
        $statement->execute([$price1, $price2]);
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
}