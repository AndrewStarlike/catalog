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
     * Method all
     *
     * @param  array $columns
     * @return \Illuminate\Support\Collection
     */
    public function all($columns);

    /**
     * Method paginate
     *
     * @param  int  $perPage
     * @param  array  $columns
     * @param  string  $pageName
     * @param  int|null  $page
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate($perPage, $columns, $pageName, $page);

    /**
     * Method create
     *
     * @param array $data
     * @return int
     */
    public function create(array $data);

    /**
     * Method update
     *
     * @param array $data
     * @param mixed $id
     * @param string $attribute
     * @return int
     */
    public function update(array $data, $id, $attribute);

    /**
     * Method delete
     *
     * @param  array|int $ids
     * @return int
     */
    public function delete($ids);

    /**
     * Method find
     *
     * @param  int    $id
     * @param  array  $columns
     * @return mixed|static
     */
    public function find($id, $columns);

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns);

    /**
     * Method makeModel
     *
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \App\Repositories\Exceptions\RepositoryException
     */
    public function makeModel();
}