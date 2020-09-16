<?php

class ControllerNotFound
{
    public function actionPage404()
    {
        include (ROOT . "/view/page404/index.php");
        return true;
    }
}
