<?php
include_once (ROOT . "/models/GetArticles.php");

class ControllerBlog
{
    public function actionViewArticles()
    {
        $getArticles = new GetArticles();
        $articles = $getArticles->getAllArticles();

        include (ROOT . "/view/blog/index.php");

        return true;
    }
}
