<?php
namespace ModelPro\Controllers;

use ModelPro\Core\Database;
use ModelPro\Models\ProjectDAO;
/**
 * Controller da página individual do projeto.
 */
class ProjectController extends AbstractController{
    public function get ($id) {
        $dao = new ProjectDAO($this->database);

        try {
            $project = $dao->get($id);
        } catch (\Exception $e) {
            return $this->render('error.twig', ['errorMessage' => "Projeto não encontrado :(. ID: $id"]);
        }
        return $this->render('project.twig', ['project' => $project]);
    }
}