<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 6/4/2019
 * Time: 9:51 AM
 */

namespace App\Repositories\Eloquent;


use App\Page;
use App\Repositories\Abstracts\AbstractEloquentRepository;
use App\Repositories\Interfaces\MainInterface;
use Illuminate\Database\Eloquent\Model;

class CrawlerRepository extends AbstractEloquentRepository implements MainInterface
{

    /**
     * @var Model
     */
    protected $model;

    /**
     * Constructor
     * @param Page $model
     */
    public function __construct(Page $model)
    {
        $this->model = $model;
    }

}
