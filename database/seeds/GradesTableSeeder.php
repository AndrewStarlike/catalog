<?php

use App\Repositories\Eloquent\GradeRepository;
use Illuminate\Database\Seeder;

/**
 * Class GradesTableSeeder fixture
 */
class GradesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @param GradeRepository $gradeRepository
     * @return void
     */
    public function run(GradeRepository $gradeRepository)
    {
        for($i = 0; $i < 50; $i++) {
            $gradeRepository->create(
                [
                    'student_id' => 1,
                    'teacher_id' => 2,
                    'discipline_id' => $i,
                    'grade' => $i
                ]
            );
        }
    }
}
