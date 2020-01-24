<?php


namespace App\Repositories;

use App\User;

class UserRepo extends ResourceRepository
{
    public function __construct(User $user)
    {
        $this->model = $user;
    }

}