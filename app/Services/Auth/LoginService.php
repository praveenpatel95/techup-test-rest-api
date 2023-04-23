<?php

namespace App\Services\Auth;

use App\Exceptions\InvalidCredentialsException;
use App\Models\User;
use App\Repository\Auth\UserRepositoryInterface;
use Illuminate\Support\Facades\Hash;

class LoginService
{

    public function __construct(
        protected UserRepositoryInterface $userRepository
    ){}

    /**
     * Attempt Login user
     * @param array $data
     * @return User
     */
    public function login(array $data): User
    {
        $user = $this->userRepository->getByEmail($data['email']);
        if (!$user || !Hash::check($data['password'], $user->password)) {
            throw new InvalidCredentialsException('These credentials do not match our records.');
        }
        return $user->withToken();
    }
}
