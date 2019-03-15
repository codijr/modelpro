<?php
namespace ModelPro\Models;

use ModelPro\Models\Project;
use Bookstore\Exceptions\DbException;
use ModelPro\Exceptions\NotFoundException;
use PDO;

/**
 * Data Access Object para a entidade de projeto.
 */
class ProjectDAO extends AbstractDAO {
    const CLASSNAME = '\ModelPro\Models\Project';

    /** Get um projeto de id x */
    public function get ($id) {
        $query = 'SELECT * FROM projects WHERE project_id = :id';
        $stmt = $this->database->prepare($query);
        $stmt->execute(['id' => $id]);

        $row = $stmt->fetch();

        if (empty($row)) {
            throw new NotFoundException;
        }
        $result = new Project($row['project_id'], $row['codename'], $row['number']);
        $result->description = $row['description'];
        return $result;
    }

    /** Get todos os projetos */
    public function getAll () {
        $query = 'SELECT * FROM projects';
        $stmt = $this->database->prepare($query);
        $stmt->execute();

        $results = $stmt->fetchAll();

        if (empty($results)) {
            throw new NotFoundException;
        }

        return $results;
    }
}