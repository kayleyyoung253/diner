<?php

/*
 * 328/model/validate.php
 * Validate data for the diner app
 */

//return true if food is valid
class Validate
{
    static function validFood($food)
    {
       return trim($food) != "";
    }
    static function validMeal($meal)
    {
        return in_array($meal, DataLayer::getMeals());
    }
}
