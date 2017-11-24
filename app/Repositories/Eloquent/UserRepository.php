<?php
/**
 * Created by PhpStorm.
 * User: AndrewStarlike
 * Date: 21.11.2017
 * Time: 23:05
 */

namespace App\Repositories\Eloquent;

/**
 * Class UserRepository is the repository of users
 *
 * @package App\Repositories\Eloquent
 */
class UserRepository extends Repository
{
    /**
     * Method model returns the path of the model of the users repository
     *
     * @return string
     */
    function model()
    {
        return 'App\User';
    }
}