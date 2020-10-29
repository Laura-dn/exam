<?php

class GetArticles
{
    private $articles;

    public function getAllArticles()
    {
        $links = $this->getLinks();

        foreach($links as $value) {
            $this->articles .= $this->getArticle($value);
        }

        return $this->articles;
    }

    public function getArticle($data)
    {
        $article = '<article class="index_5">
                        <h3>' . $data["name"] . '</h3>
                        <img src="/templates/images/imgBlog/' . $data["image"] . '" class="index_6" alt="Blog image - ' . $data["name"] . '">';
        
        $text = file(ROOT . "/templates/textFiles/" . $data["text"]);

        foreach($text as $value) {
            $article .= '<p class="blogText">' . $value . '</p>';
        }

        return $article . '</article>';
    }

    public function getLinks()
    {
        $cursor = DataBase::getDBConnection();

        $myQuery = "SELECT * FROM `blog`";
        $arr = $cursor->prepare($myQuery);
        $arr->execute();

        while($row = $arr->fetch()) {
            $links[] = $row;
        }

        $cursor = null;

        return $links;
    }
}
