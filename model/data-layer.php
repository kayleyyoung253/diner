<?php

/*
 * This file represents the data layer for my diner app
 * 328/diner/model/dataLayer.php
 */
class DataLayer{
    /**
     * @var PDO the database connection object
     *
     */
    private $_dbh;
    function __construct(){

        try{
            //instantiate a PDO database connection object
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
           // echo "Connected to database";
        }
        catch (PDOException $e){
            // if ($_SESSION['user'] instanceof Admin)
            // echo $e->getMessage();
            echo $e->getMessage();
        }
    }
    /**
     * view all orders from the diner
     * @return array THe Diner Orders
     **/
    function getOrders()
    {
        //1.update the query
        $sql = "SELECT * FROM orders";

        //2.prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3.bind the parameters
        //skip this step

        //4.execute the query
        $statement->execute();

        //5.process the results, if needed
         //fetch the data
        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;

    }
    static function getMeals()
    {
        return array('breakfast', 'brunch', 'lunch', 'dinner');
    }

    static function getCondiments()
    {
        return array('ketchup', 'mustard', 'mayo', 'sriracha', 'relish');
    }
    /**
     * save a diner order
     * @param Order $order
     * @return int orderId
     **/
    function saveOrder($order)
    {
        //1.update the query
        $sql = "INSERT INTO orders(food, meal, condiments) VALUES(:food, :meal, :conds)";

        //2.prepare the statement
        $statement = $this->_dbh->prepare($sql);

        //3.bind the parameters
        $statement->bindValue(':food', $order->getFood());
        $statement->bindValue(':meal', $order->getMeal());
        $statement->bindValue(':conds', $order->getCondiments());
        //4.execute the query
        $statement->execute();

        //5.process the results, if needed
        //fetch the data
        $orderId = $this->_dbh->lastInsertId();

        return $orderId;

    }

}

/*
    * INSERT INTO orders(food, meal, condiments)
    */
//require the file that contains my DB configuration
require_once($_SERVER['DOCUMENT_ROOT'].'/../config.php');



