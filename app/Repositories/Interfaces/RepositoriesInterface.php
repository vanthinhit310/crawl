<?php
/**
 * Created by PhpStorm.
 * User: vanth
 * Date: 6/4/2019
 * Time: 10:54 PM
 */

namespace App\Repositories\Interfaces;

interface RepositoriesInterface
{

    public function getAll();

    public function getById($id);

    public function create($attribute);

    public function update($id, array $attribute);

    public function delete($id);
}
