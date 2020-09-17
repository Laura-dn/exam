<?php
include_once (ROOT . "/models/GetFeedback.php");

class ControllerHome
{
    public function actionStart()
    {
        $getFeedback = new GetFeedback();
        $feedback = $getFeedback->getAllFeedback();

        include (ROOT . "/view/homePage/index.php");
        return true;
    }
}
