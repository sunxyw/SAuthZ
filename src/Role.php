<?php

namespace Sunxyw\SAuthZ;

class Role
{
    protected $enforcer;
    public $name = '';

    public function __construct(Enforcer $enforcer)
    {
        return $this->enforcer = $enforcer;
    }

    public function addPermission($object, $permission)
    {
        return $this->enforcer->addPolicy($this->name, $object, $permission);
    }

    public function hasPermission($object, $permission)
    {
        return $this->enforcer->hasPolicy($this->name, $object, $permission);
    }

    public function removePermission($object, $permission)
    {
        return $this->enforcer->removePolicy($this->name, $object, $permission);
    }

    public function getPermissions()
    {
        return $this->enforcer->getPolicy();
    }

    public function assignTo($user_id)
    {
        return $this->enforcer->addRoleForUser($user_id, $this->name);
    }
}