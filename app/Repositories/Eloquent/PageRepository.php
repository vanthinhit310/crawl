<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 6/4/2019
 * Time: 9:51 AM
 */

namespace App\Repositories\Eloquent;

use App\Page;
use App\Repositories\Eloquent\Abstracts\RepositoriesAbstract;
use App\Repositories\Interfaces\Page\PageInterface;
use Illuminate\Database\Eloquent\Model;

class PageRepository extends RepositoriesAbstract implements PageInterface
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
