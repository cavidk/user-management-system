<?php

namespace App\Serivces\Profile;

use AnourValar\EloquentSerialize\Service;
use App\Models\User;
use App\Repository\ProfileRepository;

class ProfileService extends Service
{
    public function __construct(protected ProfileRepository $repository) {}

    public function updateProfile(User $user, array $data): User
    {
        return $this->repository->update($user, $data);
    }

}
