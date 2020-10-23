<?php
include_once (ROOT . "/models/GetFeedback.php");

class ControllerFeedback
{
    public function actionAllFeedback()
    {
        $getFeedback = new GetFeedback();
        $feedback = $getFeedback->getAllFeedback();

        include (ROOT . "/view/feedback/index.php");

        return true;
    }
}
