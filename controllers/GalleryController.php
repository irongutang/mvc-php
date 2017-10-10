<?php

class GalleryController 
{
    public function actionIndex() 
    {
        $pageTitle = 'Намерение и внешность';

        require_once ROOT.'/views/gallery/index.php';

        return TRUE;
    }
    
    public function actionView($id) {
        
        
        return TRUE;
    }
}