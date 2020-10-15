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
        $cursor = DataBase::getDBConnection();
        
        $myQuery = "SELECT * FROM `haircut` WHERE `gender` = 'F'";
        $arrF = $cursor->prepare($myQuery);
        $arrF->execute();

        $myQuery = "SELECT * FROM `haircut` WHERE `gender` = 'M'";
        $arrM = $cursor->prepare($myQuery);
        $arrM->execute();

        while($row = $arrF->fetch()) {
            $this->price[] = $row;
        }

        while($row = $arrM->fetch()) {
            $this->price[] = $row;
        }

        $cursor = null;

        return $this->price;
    }

    public function getColoring()
    {
        $cursor = DataBase::getDBConnection();
        
        $myQuery = "SELECT * FROM `coloring`";
        $arr = $cursor->prepare($myQuery);
        $arr->execute();

        while($row = $arr->fetch()) {
            $this->price[] = $row;
        }

        $cursor = null;

        return $this->price;
    }
}
