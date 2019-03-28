<?php
namespace ModelPro\Controllers;

use ModelPro\Models\ProjectDAO;
use ModelPro\Models\ClientDAO;
use ModelPro\Models\Project;

/**
 * Controller da página do dashboard.
 */
class DashboardController extends AbstractController{
    /** Renderiza o dashboard */
    public function dashboard () {
        $dao = new ProjectDAO($this->database);
        $clientDAO = new ClientDAO($this->database);
        
        try {
            $projects = $dao->getAll();
            // Cria um array com o id do cliente como chave e o nome como valor
            // Isso é feito para pegar os nomes dos clientes e mostrar nos cards do dashboard
            $clients = [];
            foreach ($clientDAO->getAll() as $client) {
                $clients[$client->getClientId()] = $client->getName();
            }
        } catch (\Throwable $th) {
            return $this->render('error.twig', ['errorMessage' => 'Erro ao se comunicar com o servidor.']);
        }

        return $this->render('dashboard.twig', ["projects" => $projects, "clients" => $clients]);
    }

    /** Renderiza a página de adicionar projetos */
    public function addProject () {
        $daoc = new ClientDAO($this->database);

        try {
            $clients = $daoc->getAll();
        } catch (\Throwable $th) {
            return $this->render('error.twig', ['errorMessage' => 'Erro ao se comunicar com o servidor.']);
        }

        return $this->render('add_project.twig', ["clients" => $clients]);
    }

    /** Salva projeto novo no BD e renderiza o dashboard */
    public function save () {
        // Se tentar acessar a página manualmente
        if (!$this->request->isPost()) {
            return $this->render('error.twig', ['errorMessage' => 'Você não deve acessar essa página dessa forma >:(']);
        }

        // Pega os parametros da requisição, vindos do form
        $params = $this->request->getParams();

        // Instancia o objeto do projeto
        // PS: Deve existir uma forma mais eficiente de fazer isso
        $project = new Project();
        $project->setCodename($params->get('codename'));
        $project->setCode($params->get('code'));
        $project->setStartDate($params->get('start_date'));
        $project->setEndDate($params->get('end_date'));
        $project->setStatus(0); // Status padrão é 'em endamento'
        $project->setClientId($params->get('client_id'));
        $project->setDescription($params->get('description'));
        $project->setScope($params->get('scope'));
        $project->setLinks($params->get('links'));
        $project->setTags($params->get('tags'));

        $dao = new ProjectDAO($this->database);
        try {
            $dao->insert($project);
        } catch (Exception $e) {
            return $this->render('error.twig', ['errorMessage' => "Não foi possível inserir o projeto :("]);
        }

        return $this->dashboard();
    }
}