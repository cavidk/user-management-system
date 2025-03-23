<?php

namespace App\Repository;

use App\Models\User;

class ProfileRepository
{
    public function update(User $user, array $data): User
    {
        if (isset($data['password'])) {
            $data['password'] = bcrypt($data['password']);
        }

        $user->update($data);

        return $user;
    }
}
