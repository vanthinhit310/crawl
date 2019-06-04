<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 6/4/2019
 * Time: 9:52 AM
 */

namespace App\Repositories\Abstracts;


use stdClass;

abstract class AbstractEloquentRepository
{

    /**
     * Return all record
     *
     * @return void
     */
    public function all()
    {
        $this->model->all();
    }

    /**
     * Find an entity by id
     *
     * @param int $id
     * @return Illuminate\Database\Eloquent\Model
     */
    public function getById($id)
    {
        return $this->model->find($id);
    }

    /**
     * Get Results by Page
     *
     * @param int $page
     * @param int $limit
     * @param array $with
     * @return StdClass Object with $items and $totalItems for pagination
     */
    public function getByPage($page = 1, $limit = 10, $with = array())
    {
        $result             = new StdClass;
        $result->page       = $page;
        $result->limit      = $limit;
        $result->totalItems = 0;
        $result->items      = array();

        $query = $this->make($with);

        $model = $query->skip($limit * ($page - 1))
            ->take($limit)
            ->get();

        $result->totalItems = $this->model->count();
        $result->items      = $model->all();

        return $result;
    }


}
