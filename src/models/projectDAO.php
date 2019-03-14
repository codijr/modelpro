<?php
namespace ModelPro\Models;

use ModelPro\Models\Project;
use Bookstore\Exceptions\DbException;
use ModelPro\Exceptions\NotFoundException;
use PDO;

class ProjectDAO extends AbstractModel {
    const CLASSNAME = '\ModelPro\Models\Project';

    public function get ($projectId) {
        $query = 'SELECT * FROM projects WHERE project_id = :id';
        $stmt = $this->database->prepare($query);
        $stmt->execute(['id' => $projectId]);

        $row = $stmt->fetch();

        if (empty($row)) {
            throw new NotFoundException;
        }

        return new Project($row['project_id'], $row['codename']);
    }

    public function getAll () {
        $query = 'SELECT * FROM projects';
        $stmt = $this->database->prepare($query);
        $stmt->execute();

        if (empty($row)) {
            throw new NotFoundException;
        }
        $results = $stmt->fetchAll(PDO::FETCH_CLASS, self::CLASSNAME);
        return $results;
    }
}