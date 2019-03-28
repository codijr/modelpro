<?php
namespace ModelPro\Controllers;

use ModelPro\Core\Database;
use ModelPro\Models\ProjectDAO;
use ModelPro\Models\ClientDAO;
use ModelPro\Exceptions\NotFoundException;
use ModelPro\Models\Project;

/**
 * Controller da página individual do projeto.
 */
class ProjectController extends AbstractController{
    public function get ($id) {
        $dao = new ProjectDAO($this->database);
        try {
            $project = $dao->get($id);
            $client = $dao->getClient($id);
        } catch (\Exception $e) {
            return $this->render('error.twig', ['errorMessage' => "Projeto não encontrado :(. ID: $id"]);
        }
        return $this->render('project.twig', ['project' => $project, 'client' => $client]);
    }

    public function edit ($id) {
        $dao = new ProjectDAO($this->database);
        $daoc = new ClientDAO($this->database);
        try {
            $project = $dao->get($id);
            $clients = $daoc->getAll();
        } catch (\Exception $e) {
            return $this->render('error.twig', ['errorMessage' => "Projeto não encontrado :(. ID: $id"]);
        }
        return $this->render('edit_project.twig', ['project' => $project, 'clients' => $clients]);
    }

    public function update ($id) {
        // Se tentar acessar a página manualmente
        if (!$this->request->isPost()) {
            return $this->render('error.twig', ['errorMessage' => 'Você não deve acessar essa página dessa forma >:(']);
        }

        $params = $this->request->getParams();

        $project = new Project();
        $project->setCodename($params->get('codename'));
        $project->setCode($params->get('code'));
        $project->setStartDate($params->get('start_date'));
        $project->setEndDate($params->get('end_date'));
        $project->setStatus($params->get('status'));
        $project->setClientId($params->get('client_id'));
        $project->setDescription($params->get('description'));
        $project->setScope($params->get('scope'));
        $project->setLinks($params->get('links'));
        $project->setTags($params->get('tags'));

        $dao = new ProjectDAO($this->database);
        try {
            $dao->update($id, $project);
        } catch (Exception $e) {
            return $this->render('error.twig', ['errorMessage' => "Atualização não pode ser executada :(. ID: $id"]);
        }

        return $this->get($id);
    }
}