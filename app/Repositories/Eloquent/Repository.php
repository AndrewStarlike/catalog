<?php
/**
 * Created by PhpStorm.
 * User: AndrewStarlike
 * Date: 14.11.2017
 * Time: 22:32
 */

namespace App\Repositories\Eloquent;

use App\Repositories\Exceptions\RepositoryException;
use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repository copies some methods from the extending model
 *
 * @package App\Repositories\Eloquent
 */
abstract class Repository implements RepositoryInterface
{
    /**
     * @var App
     */
    private $app;

    /**
     * @var Model $model
     */
    protected $model;

    /**
     * Repository constructor creates a model from the class that inherits this
     *
     * @param App $app
     */
    public function __construct(App $app)
    {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * The path and name of the representative model
     *
     * @return string
     */
    abstract function model();

    /**
     * Method all lists all founded rows
     *
     * @param array $columns
     * @return \Illuminate\Support\Collection
     */
    public function all($columns = array('*'))
    {
        return $this->model->get($columns);
    }

    /**
     * Method paginate is the number of items you would like displayed "per page"
     *
     * @param int $perPage
     * @param array  $columns
     * @param string $pageName
     * @param int|null $page
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate($perPage = 15, $columns = array('*'), $pageName, $page)
    {
        return $this->model->paginate($perPage, $columns, $pageName, $page);
    }

    /**
     * Method create creates a new item
     *
     * @param array $data
     * @return int
     */
    public function create(array $data)
    {
        return $this->model->create($data);
    }

    /**
     * Method update modifies an item by id
     *
     * @param array $data
     * @param mixed $id
     * @param string $attribute
     * @return int
     */
    public function update(array $data, $id, $attribute="id")
    {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * Method delete removes an item/a list of items by id/ids
     *
     * @param array|int $ids
     * @return int
     */
    public function delete($ids)
    {
        return $this->model::destroy($ids);
    }

    /**
     * Method find retrieves an item by id
     *
     * @param int $id
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function find($id, $columns = array('*'))
    {
        return $this->model->find($id, $columns);
    }

    /**
     * Method findBy finds an item by a given key
     *
     * @param string $attribute
     * @param mixed $value
     * @param array $columns
     * @return \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection|static[]|static|null
     */
    public function findBy($attribute, $value, $columns = array('*'))
    {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    /**
     * Method makeModel creates a model instance
     * 
     * @return Model
     * @throws RepositoryException
     */
    public function makeModel()
    {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model)
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");

        return $this->model = $model;
    }
}