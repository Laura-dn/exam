<?php
include_once (ROOT . "/models/GetPrice.php");

class ControllerServices
{
    public function actionPrice($service)
    {
        $service = array_shift($service);
        $getPrice = new GetPrice();

        if(!empty($service)) {
            $price = $getPrice->getService($service);
        } else {
            $price = $getPrice->getAllServices();
        }

        include (ROOT . "/view/services/index.php");
        
        return true;
    }
}
