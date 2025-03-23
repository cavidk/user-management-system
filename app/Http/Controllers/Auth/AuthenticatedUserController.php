<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\JsonResponse;
use App\Http\Controllers\Controller;

class AuthenticatedUserController extends Controller
{
    public function show(Request $request): JsonResponse
    {
        return response()->json($request->user());
    }
}
