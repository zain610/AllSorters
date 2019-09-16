<?php

namespace App\Model\Entity;

/**
 * Helper class. Currently this is a collection of functions which are commonly used throughout the system.
 */
class Role
{

    // Instead of using numbers such as 0, or 3 throughout our code, we give them meaningful names, and then reference
    // them like "$user->role = Role::STAFF".
    const VISITOR = 0;
    const GUEST = 1;
    const REGISTERED = 2;
    const STAFF = 3;

    public static function isAdmin($roleId)
    {
        return $roleId == Role::STAFF;
    }

    public static function isUser($roleId)
    {
        return $roleId == Role::REGISTERED || Role::isAdmin($roleId);
    }
}
