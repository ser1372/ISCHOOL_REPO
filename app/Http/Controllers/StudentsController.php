<?php

namespace App\Http\Controllers;

use App\Http\Requests\Public\StudentsRequest;
use App\Services\StudentsServices;
use Illuminate\Http\JsonResponse;
use Telegram\Bot\Exceptions\TelegramSDKException;

class StudentsController extends Controller
{
    private StudentsServices $studentsServices;

    final public function __construct(StudentsServices $studentsServices)
    {
        $this->studentsServices = $studentsServices;
    }

    /**
     * @throws TelegramSDKException
     */
    final public function store(StudentsRequest $request): JsonResponse
    {
        return response()->json([
            'result' => $this->studentsServices->create($request->all()),
        ]);
    }
}
