<?php

class GetPrice
{
    private $price;

    public function getAllServices()
    {
        return "test All";
    }

    public function getHaircut()
    {
        return "test";
    }



    public function getFiveLastFeedback()
    {
        $cursor = DataBase::getDBConnection();

        $myQuery = "SELECT * FROM `feedback` ORDER BY `id` DESC LIMIT 5";

        //Подготовка сообщения и настрйока переменной для ответа
        $arr = $cursor->prepare($myQuery);
        
        //выполнение запроса
        $arr->execute();
        
        //Разобр SQL-ответа, занос его в массив.
        while($row = $arr->fetch()) {
            $this->arrFeedback[] = $row;
        }
        
        $cursor = null;

        return $this->arrFeedback;
    }

    public function getAllFeedback()
    {
        $cursor = DataBase::getDBConnection();

        $myQuery = "SELECT * FROM `feedback`";

        //Подготовка сообщения и настрйока переменной для ответа
        $arr = $cursor->prepare($myQuery);
        
        //выполнение запроса
        $arr->execute();
        
        //Разобр SQL-ответа, занос его в массив.
        while($row = $arr->fetch()) {
            $this->arrFeedback[] = $row;
        }
        
        $cursor = null;

        return $this->arrFeedback;
    }
}
