<?php

namespace Controllers;

class CategoryController {

    // get all categories for manage-categoty view
    public function getAllCategories() {
        $model = new \Models\Category();
        $data = $model->getAllCategories();
        $template = 'manage-category.phtml';
        include_once 'views/layout.phtml';
    }
    
    // show add category view
    public function goAddCategory() {
        $template = 'add-category.phtml';
        include_once 'views/layout.phtml';
    }
    
    // add category in database
    public function addCategory() {
        $model = new \Models\Category();
        $model->addCategory();
    }
    
    // delete an existing category
    public function deleteCategory($id) {
        $model = new \Models\Category();
        $model->deleteCategory($id);
    }
    
    // show update category view with pre-filled info from id
    public function goUpdateCategory($id) {
        $model = new \Models\Category();
        $data = $model->getCategoryById($id);
        $template = 'update-category.phtml';
        include_once 'views/layout.phtml';
    }
    
    // update category in database
    public function updateCategory() {
        $model = new \Models\Category();
        $model->updateCategory();
    }
}
