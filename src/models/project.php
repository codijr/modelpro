<?php
namespace ModelPro\Models;

class Project {
    public $id;
    public $codename;
    public $number;
    public $description;
    public $start_date;
    public $end_date;
    
    public $scope;

    public $links;
    
    public $tags;

    public function __construct ($id, $codename) {
        $this->id = $id;
        $this->codename = $codename;
    }

}