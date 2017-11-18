<?php

namespace App\Http\Controllers;

use App\Repositories\Eloquent\DisciplineRepository;
use Illuminate\Http\Request;

class DisciplineController extends Controller
{
    public function index(DisciplineRepository $disciplineRepository)
    {
        return $disciplineRepository->all();
    }

    public function show($discipline, DisciplineRepository $disciplineRepository)
    {
        return $disciplineRepository->find($discipline);
    }

    public function store(Request $request, DisciplineRepository $disciplineRepository)
    {
        $discipline = $disciplineRepository->create($request->all());

        return response()->json($discipline, 201);
    }

    public function update(Request $request, $discipline, DisciplineRepository $disciplineRepository)
    {
        $disciplineRepository->update($request->all(), $discipline);

        return response()->json($disciplineRepository, 200);
    }

    public function delete($discipline, DisciplineRepository $disciplineRepository)
    {
        $disciplineRepository->delete($discipline);

        return response()->json(null, 204);
    }
}
