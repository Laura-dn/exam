<?php
include_once (ROOT . "/models/GetImages.php");

class ControllerGallery
{
    public function actionViewImages()
    {
        $getImages = new GetImages();
        $gallery = $getImages->getAllImages();

        include (ROOT . "/view/gallery/index.php");

        return true;
    }
}
