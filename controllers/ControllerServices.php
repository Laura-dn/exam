<?php
include_once (ROOT . "/models/GetPrice.php");

class ControllerServices
{
    public function actionPrice($service)
    {
        $getPrice = new GetPrice();

        if(!empty($service)) {
            $modelMeth = "get" . ucfirst($service[0]);
            $price = $getPrice->$modelMeth();
        } else {
            $price = $getPrice->getAllServices();
        }

        include (ROOT . "/view/services/index.php");
        
        return true;
    }
}
