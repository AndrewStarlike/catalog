<?php
/**
 * Created by PhpStorm.
 * User: andrewstrlike
 * Date: 14.11.2017
 * Time: 22:29
 */

namespace App\Repositories\Interfaces;


interface RepositoryInterface
{
    /**
     * @param $columns
     * @return mixed
     */
    public function all($columns);

    /**
     * @param $perPage
     * @param $columns
     * @return mixed
     */
    public function paginate($perPage, $columns);

    /**
     * @param array $data
     * @return mixed
     */
    public function create(array $data);

    /**
     * @param array $data
     * @param $id
     * @param $attribute
     * @return mixed
     */
    public function update(array $data, $id, $attribute);

    /**
     * @param $id
     * @return mixed
     */
    public function delete($id);

    /**
     * @param $id
     * @param $columns
     * @return mixed
     */
    public function find($id, $columns);

    /**
     * @param $attribute
     * @param $value
     * @param $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns);

    /**
     * @return mixed
     */
    public function makeModel();
}