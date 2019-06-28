<?php

namespace Sunxyw\SAuthZ\Helpers;

use Sunxyw\SAuthZ\Enforcer;

trait UserHelper
{
    public function hasPermission($object, $permission)
    {
        $enforcer = Enforcer::getInstance();
        return $enforcer->enforce($this->id, $object, $permission);
    }
}