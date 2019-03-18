<?php
namespace ModelPro\Models;

use ModelPro\Models\Project;
use ModelPro\Exceptions\NotFoundException;

/**
 * Data Access Object para a entidade de projeto.
 */
class ProjectDAO extends AbstractDAO {
    const CLASSNAME = '\ModelPro\Models\Project';

    /** Get um project de id x */
    public function get ($id) {
        $query = 'SELECT * FROM projects WHERE project_id = :id';
        $stmt = $this->database->prepare($query);
        $stmt->execute(['id' => $id]);

        $stmt->setFetchMode(PDO::FETCH_CLASS, CLASSNAME);
        $result = $stmt->fetch();

        if (empty($result)) {
            throw new NotFoundException;
        }

        return $result;
    }

    /** Get todos os projects */
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

    /** Add um project */
    public function add (Project $project) {
        $query = 'INSERT INTO projects (codename, code) VALUES (:1, :2)';
        try {
            $stmt = $this->database->prepare($query);
            $stmt->execute([
                '1' => $project->getCodename(),
                '2' => $project->getCode()
            ]);
        } catch (\Exception $e) {
            throw new DbException;
        }
    }

    /** Update um project de id x */
    public function update ($id, Project $project) {
        $this->database->beginTransaction();
        $query = 'UPDATE projects SET (codename=:1, code=:2) WHERE project_id = :id';
        try {
            $stmt = $this->database->prepare($query);
            $stmt->execute([
                'id' => $id,
                '1' => $project->getCodename(),
                '2' => $project->getCode()
            ]);
            $this->database->commit();
        } catch (\Exception $e) {
            $this->database->rollBack();
            throw new DbException;
        }
    }

    /** Delete um project de id x */
    public function del ($id) {
        $this->database->beginTransaction();
        $query = 'DELETE FROM projects VALUES project_id = :id';
        try {
            $stmt = $this->database->prepare($query);
            $stmt->execute(['id' => $id]);
            $this->database->commit();
        } catch (\Exception $e) {
            $this->database->rollBack();
            throw new DbException;
        }
    }
}