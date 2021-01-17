<?php


namespace balePhp\Types;


abstract class ArrayOfUser
{
    public static function create($data)
    {
        $arrayOfUsers = [];
        foreach ($data as $user) {
            $arrayOfUsers[] = User::create($user);
        }

        return $arrayOfUsers;
    }
}