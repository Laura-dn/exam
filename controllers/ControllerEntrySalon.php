<?php
include_once (ROOT . "/models/SetBid.php");

class ControllerEntrySalon
{
    public function actionSetBid()
    {
        $setData = new SetBid();
        $entrySalon = $setData->entrySalon();

        include (ROOT . "/view/services/index.php");
        
        return true;
    }
}
