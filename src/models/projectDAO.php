<?php
namespace ModelPro\Models;

use ModelPro\Models\Project;
use ModelPro\Exceptions\NotFoundException;
use ModelPro\Exceptions\DbException;
use PDO;

/**
 * Data Access Object para a entidade de projeto.
 */
class ProjectDAO extends AbstractDAO {

    public function getClassname()
    {
        return 'ModelPro\Models\Project';
    }

    public function getTableName()
    {
        return 'projects';
    }

    public function getPrimaryKey()
    {
        return 'project_id';
    }

    /** Add o projeto para o BD */
    public function insert ($project) {
        $this->database->beginTransaction();

        $query =   'INSERT INTO projects (`codename`, `code`, `start_date`, `end_date`, `status`, `client_id`, `description`, `scope`, `links`, `tags`) 
                    VALUES (:p1, :p2, :p3, :p4, :p5, :p6, :p7, :p8, :p9, :p10)';
        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':p1', $project->getCodename());
        $stmt->bindParam(':p2', $project->getCode());
        $stmt->bindParam(':p3', $project->getStartDate());
        $stmt->bindParam(':p4', $project->getEndDate());
        $stmt->bindParam(':p5', $project->getStatus());
        $stmt->bindParam(':p6', $project->getClientId());
        $stmt->bindParam(':p7', $project->getDescription());
        $stmt->bindParam(':p8', $project->getScope());
        $stmt->bindParam(':p9', $project->getLinks());
        $stmt->bindParam(':p10', $project->getTags());
        $stmt->execute();

        if ($this->database->commit() == false) {
            $this->database->rollBack();
        }
    }

    /** Update o projeto de id x */
    public function update ($id, $project) {
        $this->database->beginTransaction();
        
        $query =   'UPDATE projects 
                    SET `codename`=:p1, `code`=:p2, `start_date`=:p3, `end_date`=:p4, `status`=:p5, `client_id`=:p6, `description`=:p7, `scope`=:p8, `links`=:p9, `tags`=:p10 
                    WHERE project_id = :id';
        $stmt = $this->database->prepare($query);
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':p1', $project->getCodename());
        $stmt->bindParam(':p2', $project->getCode());
        $stmt->bindParam(':p3', $project->getStartDate());
        $stmt->bindParam(':p4', $project->getEndDate());
        $stmt->bindParam(':p5', $project->getStatus());
        $stmt->bindParam(':p6', $project->getClientId());
        $stmt->bindParam(':p7', $project->getDescription());
        $stmt->bindParam(':p8', $project->getScope());
        $stmt->bindParam(':p9', $project->getLinks());
        $stmt->bindParam(':p10', $project->getTags());
        $stmt->execute();

        if ($this->database->commit() == false) {
            $this->database->rollBack();
        }
    }

    /** Get o cliente do projeto com id x */
    public function getClient($id) {
        $query = 'SELECT * FROM `clients`, `projects` WHERE projects.client_id = clients.client_id AND project_id = ?';
        $stmt = $this->database->prepare($query);
        $stmt->execute([$id]);
        $result = $stmt->fetchObject('ModelPro\Models\Client');
        return $result;
    }

    /** Get a equipe trabalhando no projeto */
    public function getTeam($id) {
        // TODO
    }
}