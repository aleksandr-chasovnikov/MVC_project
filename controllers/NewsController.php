<?php

class NewsController
{
    
    public function actionIndex()
    {
        echo "NewsController actionIndex";
        return true;
    }
    
    public function actionView($category, $id)
    {
        echo '<br>'.$category;
        echo '<br>'.$id;
        
        return true;
    }
}