<?php

/**
 * the order class represents a food order for the GRC diner
 * @author: Kayley Young
 * @copyright 2024
 */
class Order
{
    private $_food;
    private $_meal;
    private $_condiments;

    /**
     * default constructor instantiates ana order object
     * @param string $food
     * @param string $meal
     * @param string $condiments
     */
    public function __construct($food="", $meal="", $condiments="")
    {
        $this->_food = $food;
        $this->_meal = $meal;
        $this->_condiments = $condiments;
    }

    /**
     * return the food that was ordered
     * @return string
     */
    public function getFood()
    {
        return $this->_food;
    }

    /**
     * set the food
     * @param string $food
     */
    public function setFood($food): void
    {
        $this->_food = $food;
    }

    /**
     * return the meal
     * @return string
     */
    public function getMeal()
    {
        return $this->_meal;
    }

    /**
     * set the meal
     * @param string $meal
     */
    public function setMeal($meal): void
    {
        $this->_meal = $meal;
    }

    /**
     * return the condiments
     * @return string
     */
    public function getCondiments()
    {
        return $this->_condiments;
    }

    /**
     * set the condiments
     * @param string $condiments
     */
    public function setCondiments($condiments): void
    {
        $this->_condiments = $condiments;
    }


}