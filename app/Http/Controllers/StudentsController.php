<?php

namespace App\Http\Controllers;

use App\Http\Requests\Public\StudentsRequest;
use App\Repositories\StudentsRepository;
use Illuminate\Http\JsonResponse;

class StudentsController extends Controller
{
    private mixed $studentsRepository;

    public function __construct()
    {
        $this->studentsRepository = app(StudentsRepository::class);
    }

    public function create(StudentsRequest $request): JsonResponse
    {
        return response()->json([
            'success' => true,
            'result' => $this->studentsRepository->create($request->all()),
        ]);
    }
}
