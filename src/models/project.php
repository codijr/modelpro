<?php
namespace ModelPro\Models;

/**
 * Modelo de projeto.
 */
class Project {
    public $project_id;
    public $codename;
    public $number;
    public $description;
    public $start_date;
    public $end_date;
    
    public $scope;

    public $links;
    
    public $tags;

    public function __construct ($id, $codename, $number) {
        $this->id = $id;
        $this->codename = $codename;
        $this->number = $number;
    }

}