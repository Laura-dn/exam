<?php

class ControllerContacts
{
    public function actionViewContacts()
    {
        include (ROOT . "/view/contacts/index.php");
        return true;
    }
}
