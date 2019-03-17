<?php
namespace ModelPro\Controllers;

use ModelPro\Models\ProjectDAO;
use ModelPro\Core\Database;

/**
 * Controller da página do dashboard.
 */
class DashboardController extends AbstractController{
    public function dashboard () {
        $dao = new ProjectDAO($this->database);
        $projects = $dao->getAll();
        return $this->render('dashboard.twig', ["projects" => $projects]);
    }
}