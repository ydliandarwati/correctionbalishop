<?php
namespace Models;

class Home extends Database {
    
    // get 3 featured categories to show in homepage    
    public function getSelectedCategories() : array {
        $sql = "SELECT * FROM category LIMIT 3";
        return $this->findAll($sql);
    }
    
    // get all categories
    public function getAllCategories() : array {
        $sql = "SELECT * FROM category";
        return $this->findAll($sql);
    }
    
    // get all items in collection
    public function getAllCollections() : array {
        $sql = "SELECT * FROM collection";
        return $this->findAll($sql);
    }
    
    // search among collection using keyword
    public function searchCollections($keyword) : array {
        $sql = "SELECT * FROM collection WHERE title LIKE ? OR description LIKE ?";
        return $this->findAll($sql, [$keyword, $keyword]);
    }
    
    // get all collection items belong to one category based on Id
    public function getCategoryItems($title) : array {
        $sql = "SELECT * FROM collection WHERE category_name=?";
        return $this->findAll($sql, [$title]);
    }
    

    // search among categories using keyword
    public function searchCategories($keyword) : array {
        $sql = "SELECT * FROM category WHERE title LIKE ?";
        return $this->findAll($sql, [$keyword]);
    }
    
    public function getSearch($keyword) {
        $sql = "SELECT * FROM collection WHERE title LIKE ?";
        return$this->findAll($sql, [$keyword]);
    }
    

}
