<?php

namespace App\Http\Controllers\Profile;

use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use App\Serivces\Profile\ProfileService;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\JsonResponse;

class ProfileController extends Controller
{
    public function __construct(protected ProfileService $profileService) {}

    public function update(UpdateProfileRequest $request): JsonResponse
    {
        $user = $request->user();
        $validated = $request->validated();

        $this->profileService->updateProfile($user, $validated);

        return response()->json(['message' => 'Profile updated successfully.']);
    }
}
