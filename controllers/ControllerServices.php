<?php
// include_once (ROOT . "/models/GetPrice.php");

class ControllerServices
{
    public function actionPrice($service)
    {
        $modelMeth = "get" . ucfirst(array_shift($service));

        include (ROOT . "/view/services/index.php");
        return true;
    }
}
