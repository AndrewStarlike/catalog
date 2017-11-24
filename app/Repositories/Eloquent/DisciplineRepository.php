<?php
/**
 * Created by PhpStorm.
 * User: AndrewStarlike
 * Date: 14.11.2017
 * Time: 22:56
 */

namespace App\Repositories\Eloquent;

/**
 * Class DisciplineRepository is the repository of disciplines
 *
 * @package App\Repositories\Eloquent
 */
class DisciplineRepository extends Repository {

    /**
     * Method model returns the path of the model of the disciplines repository
     *
     * @return string
     */
    function model()
    {
        return 'App\Discipline';
    }
}