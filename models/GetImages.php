<?php

class GetImages
{
    private $gallery;

    public function getAllImages()
    {
        $filter = array(".", "..");
        $dir = ROOT . "/templates/images/img";
        $arr = array_values(array_diff(scandir($dir), $filter));

        foreach($arr as $value) {
            $this->gallery .= '<a href="/templates/images/img/' . $value . '" data-fancybox="images" data-caption="Наши работы" class="index_2">
                               <img src="/templates/images/img/' . $value . '" class="index_12"></a>';
        }

        return $this->gallery;
    }
}
