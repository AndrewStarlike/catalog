<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Grade is the grades model
 *
 * @package App
 */
class Grade extends Model
{
    protected $fillable = ['student_id', 'teacher_id', 'discipline_id', 'grade'];
}
