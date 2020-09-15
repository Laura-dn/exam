<?php

class ControllerHome
{
    public function actionStart()
    {
        include (ROOT . "/view/homePage/index.php");
        return true;
    }
}
