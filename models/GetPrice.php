<?php

class GetPrice
{
    private $price;
    private $table = "services";

    public function getAllServices()
    {
        $cursor = DataBase::getDBConnection();

        $myQuery = "SELECT * FROM `$this->table`";
        $arrF = $cursor->prepare($myQuery);
        $arrF->execute();

        while($row = $arrF->fetch()) {
            $this->price[] = $row;
        }

        $cursor = null;

        return $this->price;
    }

    public function getService($service)
    {
        $cursor = DataBase::getDBConnection();

        $myQuery = "SELECT * FROM `$this->table` WHERE `service` = '$service'";
        $arrF = $cursor->prepare($myQuery);
        $arrF->execute();

        while($row = $arrF->fetch()) {
            $this->price[] = $row;
        }

        $cursor = null;

        return $this->price;
    }
}
