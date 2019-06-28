<?php

namespace Sunxyw\SAuthZ\Helpers;

use Sunxyw\SAuthZ\Role;

trait RoleHelper
{
    public function createRole($name)
    {
        $role = new Role($this->getInstance());
        $role->name = $name;

        return $role;
    }
}