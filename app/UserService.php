<?php
namespace App\Services;
use App\User;

class UserService {

    public function register(string $firstname,
                             string $lastname,
                             string $email,
                             string $password) : User {
        $user = new User();
        $user->firstname = $firstname;
        $user->lastname = $lastname;
        $user->email = $email;
        $user->password = bcrypt($password);
        $user->save();

        return $user;
    }
}