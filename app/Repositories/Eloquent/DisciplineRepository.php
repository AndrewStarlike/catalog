<?php
/**
 * Created by PhpStorm.
 * User: andrewstrlike
 * Date: 14.11.2017
 * Time: 22:56
 */

namespace App\Repositories\Eloquent;

class DisciplineRepository extends Repository {

    /**
     * Specify Model class name
     *
     * @return mixed
     */
    function model()
    {
        return 'App\Discipline';
    }
}