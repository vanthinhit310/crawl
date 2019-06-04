<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 6/4/2019
 * Time: 11:12 PM
 */

namespace App\Repositories\Eloquent\Abstracts;

use App\Repositories\Interfaces\RepositoriesInterface;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\ModelNotFoundException;

abstract class RepositoriesAbstract implements RepositoriesInterface
{
    protected $model;

    /**
     * BaseRepository constructor.
     *
     * @param Model $model
     */
    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        // TODO: Implement getAll() method.
        return $this->model->all();
    }

    public function getById($id)
    {
        // TODO: Implement getById() method.
        return $this->model->findOrFail($id);
    }

    public function create($attribute)
    {
        // TODO: Implement create() method.
        return $this->model->create($attribute);
    }

    public function update($id, array $attribute)
    {
        // TODO: Implement update() method.
        try {
            $object = $this->model->findOrFail($id);
            if (isset($object)) {
                return $this->model->update($attribute);
            }
        } catch (ModelNotFoundException $e) {
            return $e->getMessage();
        }
    }

    public function delete($id)
    {
        // TODO: Implement delete() method.
        $this->getById($id)->delete();
        return true;
    }
}
