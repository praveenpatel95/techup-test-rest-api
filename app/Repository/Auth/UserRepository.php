<?php

namespace App\Repository\Auth;

use App\Exceptions\BadRequestException;
use App\Models\User;
use Exception;
use Illuminate\Support\Facades\Hash;

class UserRepository implements UserRepositoryInterface
{
    /**
     * Fetch user detail by email
     * @param string $email
     * @return User
     * @throws BadRequestException
     */
    public function getByEmail(string $email): User
    {
        try {
            return User::where('email', $email)->firstOrFail();
        }
        catch (Exception $exception){
            throw new BadRequestException("Invalid email address.");
        }
    }

    /**
     * Create new user
     * @param array $data
     * @return User
     * @throws BadRequestException
     */
    public function create(array $data): User
    {
        try {
            //generate Hash password
            $data['password'] = Hash::make($data['password']);
            return User::create($data);
        }
        catch (Exception $exception){
            throw new BadRequestException($exception->getMessage());
        }
    }
}
