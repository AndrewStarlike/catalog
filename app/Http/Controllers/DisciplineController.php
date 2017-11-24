<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\DisciplineRepository;
use Illuminate\Http\Request;

/**
 * Class DisciplineController provides CRUD for disciplines
 *
 * @package App\Http\Controllers
 */
class DisciplineController extends Controller
{
    /**
     * Method index lists all disciplines
     *
     * @param DisciplineRepository $disciplineRepository
     * @return \Illuminate\Support\Collection
     */
    public function index(DisciplineRepository $disciplineRepository)
    {
        return $disciplineRepository->all();
    }

    /**
     * Method show lists a single discipline by id
     *
     * @param int $discipline
     * @param DisciplineRepository $disciplineRepository
     * @return mixed|static
     */
    public function show($discipline, DisciplineRepository $disciplineRepository)
    {
        return $disciplineRepository->find($discipline);
    }

    /**
     * Method store creates a discipline
     *
     * @param Request $request
     * @param DisciplineRepository $disciplineRepository
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request, DisciplineRepository $disciplineRepository)
    {
        $discipline = $disciplineRepository->create($request->all());

        return response()->json($discipline, 201);
    }

    /**
     * Method update updates a discipline by id
     *
     * @param Request $request
     * @param $discipline
     * @param DisciplineRepository $disciplineRepository
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(Request $request, $discipline, DisciplineRepository $disciplineRepository)
    {
        $disciplineRepository->update($request->all(), $discipline);

        return response()->json($disciplineRepository, 200);
    }

    /**
     * Method delete deletes a resource by id
     *
     * @param $discipline
     * @param DisciplineRepository $disciplineRepository
     * @return \Illuminate\Http\JsonResponse
     */
    public function delete($discipline, DisciplineRepository $disciplineRepository)
    {
        $disciplineRepository->delete($discipline);

        return response()->json(null, 204);
    }
}
