<?php
namespace ModelPro\Controllers;

use ModelPro\Models\ProjectDAO;
use ModelPro\Core\Database;

class DashboardController extends AbstractController{
    public function dashboard () {
        $dao = new ProjectDAO($this->database);
        $projects = $dao->getAll();
        return $this->render('dashboard.twig', ["projects" => $projects]);
    }
}