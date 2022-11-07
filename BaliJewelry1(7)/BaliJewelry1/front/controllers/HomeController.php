<?php

namespace Controllers;

class HomeController{

    // go to home
    public function goHome() {
        $model = new \Models\Home();
        $cat = $model->getSelectedCategories();
        $col = $model->getAllCollections();
        $template = 'home.phtml';
        include_once 'views/layout.phtml';
    }
    
    // show all categories
    public function displayCategories() {
        $model = new \Models\Home();
        $cat = $model->getAllCategories();
        $template = 'categories.phtml';
        include_once 'views/layout.phtml';
    }
    
    // show all collections in a category using title
    public function showCategoryItems() {
        $model = new \Models\Home();
        $title = $_GET['title'];
        $col = $model->getCategoryItems($title);
        $template = 'collections.phtml';
        include_once 'views/layout.phtml';
    }
    
    // show all collections from all categories
    public function displayCollections() {
        $model = new \Models\Home();
        $col = $model->getAllCollections();
        $template = 'collections.phtml';
        include_once 'views/layout.phtml';
    }
    
            
    public function getAjaxSearch() {
        // Récupérer ce que JS nous a envoyé
        $content = file_get_contents("php://input");
        $data = json_decode($content, true);
        $search = "%".$data['textToFind']."%";
            
        $model= new \Models\Home();
        $col = $model->getSearch($search);
            
        $cnt = count($col);
        // inclure le template qui va générer la partie html qui doit afficher l'article
        include 'views/searchAjax.phtml';
    }
    
    // go to contact page
    public function goContact() {
        $template = 'contact.html';
        include_once 'views/layout.phtml';
    }
    
    
}
