<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 6/4/2019
 * Time: 11:12 PM
 */

namespace App\Repositories\Eloquent\Abstracts;
use Illuminate\Database\Eloquent\Model;

use App\Repositories\Interfaces\RepositoriesInterface;

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
    public function all()
    {
        // TODO: Implement all() method.
        return $this->model->all();
    }
}
