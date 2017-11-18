<?php
/**
 * Created by PhpStorm.
 * User: andrewstrlike
 * Date: 14.11.2017
 * Time: 22:32
 */

namespace App\Repositories\Eloquent;

use App\Repositories\Exceptions\RepositoryException;
use App\Repositories\Interfaces\RepositoryInterface;
use Illuminate\Container\Container as App;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Repository
 */
abstract class Repository implements RepositoryInterface {

    /**
     * @var App
     */
    private $app;

    /**
     * @var Model $model
     */
    protected $model;

    /**
     * @param App $app
     * @throws RepositoryException
     */
    public function __construct(App $app) {
        $this->app = $app;
        $this->makeModel();
    }

    /**
     * Specify Model class name
     *
     * @return string
     */
    abstract function model();

    /**
     * Method all
     *
     * @param  array  $columns
     * @return \Illuminate\Support\Collection
     */
    public function all($columns = array('*')) {
        return $this->model->get($columns);
    }

    /**
     * Method paginate
     *
     * @param  int  $perPage
     * @param  array  $columns
     * @param  string  $pageName
     * @param  int|null  $page
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    public function paginate($perPage = 15, $columns = array('*'), $pageName, $page) {
        return $this->model->paginate($perPage, $columns, $pageName, $page);
    }

    /**
     * Method create
     *
     * @param array $data
     * @return int
     */
    public function create(array $data) {
        return $this->model->create($data);
    }

    /**
     * Method update
     *
     * @param array $data
     * @param mixed $id
     * @param string $attribute
     * @return int
     */
    public function update(array $data, $id, $attribute="id") {
        return $this->model->where($attribute, '=', $id)->update($data);
    }

    /**
     * Method delete
     *
     * @param  array|int $ids
     * @return int
     */
    public function delete($ids) {
        return $this->model->destroy($ids);
    }

    /**
     * Method find
     *
     * @param  int    $id
     * @param  array  $columns
     * @return mixed|static
     */
    public function find($id, $columns = array('*')) {
        return $this->model->find($id, $columns);
    }

    /**
     * @param $attribute
     * @param $value
     * @param array $columns
     * @return mixed
     */
    public function findBy($attribute, $value, $columns = array('*')) {
        return $this->model->where($attribute, '=', $value)->first($columns);
    }

    /**
     * Method makeModel
     * 
     * @return Model
     * @throws RepositoryException
     */
    public function makeModel() {
        $model = $this->app->make($this->model());

        if (!$model instanceof Model)
            throw new RepositoryException("Class {$this->model()} must be an instance of Illuminate\\Database\\Eloquent\\Model");

        return $this->model = $model;
    }
}