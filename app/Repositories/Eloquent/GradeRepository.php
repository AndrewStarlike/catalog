<?php
/**
 * Created by PhpStorm.
 * User: AndrewStarlike
 * Date: 21.11.2017
 * Time: 23:44
 */

namespace App\Repositories\Eloquent;

/**
 * Class GradeRepository is the repository of grades
 *
 * @package App\Repositories\Eloquent
 */
class GradeRepository extends Repository
{
    /**
     * Method model returns the path of the model of the grades repository
     *
     * @return string
     */
    function model()
    {
        return 'App\Grade';
    }
}