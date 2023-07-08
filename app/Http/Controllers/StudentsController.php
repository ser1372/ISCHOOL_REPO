<?php

namespace App\Http\Controllers;

use App\Repositories\StudentsRepository;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class StudentsController extends Controller
{
    private mixed $studentsRepository;

    public function __construct()
    {
        $this->studentsRepository = app(StudentsRepository::class);
    }

    protected function returnResponse(array $data): JsonResponse
    {
        return response()->json($data);
    }

    public function create(Request $request): JsonResponse
    {
        return $this->returnResponse([
            'success' => true,
            'result' => $this->studentsRepository->create($request->all()),
        ]);
    }
}