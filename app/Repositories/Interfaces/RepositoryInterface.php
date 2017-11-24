<?php
/**
 * Created by PhpStorm.
 * User: AndrewStarlike
 * Date: 14.11.2017
 * Time: 22:29
 */

namespace App\Repositories\Interfaces;

/**
 * Interface RepositoryInterface is used by repositories too support CRUD operations
 *
 * @package App\Repositories\Interfaces
 */
interface RepositoryInterface
{
    /**
     * Method all lists all founded rows
     *
     * @param array $columns
     * @return \Illuminate\Support\Collection
     */
    public function all($columns);

    /**
     * Method paginate is the number of items you would like displayed "per page"
     *
     * @param int $perPage
     * @param array  $columns
     * @param string $pageName
     * @param int|null $page
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate($perPage, $columns, $pageName, $page);

    /**
     * Method create creates a new item
     *
     * @param array $data
     * @return int
     */
    public function create(array $data);

    /**
     * Method update modifies an item by id
     *
     * @param array $data
     * @param mixed $id
     * @param string $attribute
     * @return int
     */
    public function update(array $data, $id, $attribute);

    /**
     * Method delete removes an item/a list of items by id/ids
     *
     * @param array|int $ids
     * @return int
     */
    public function delete($ids);

    /**
     * Method find retrieves an item by id
     *
     * @param int $id
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function find($id, $columns);

    /**
     * Method findBy finds an item by a given key
     *
     * @param string $attribute
     * @param mixed $value
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function findBy($attribute, $value, $columns);

    /**
     * Method makeModel creates a model instance
     *
     * @return \Illuminate\Database\Eloquent\Model
     * @throws \App\Repositories\Exceptions\RepositoryException
     */
    public function makeModel();
}