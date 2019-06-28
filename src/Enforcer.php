<?php

namespace Sunxyw\SAuthZ;

use Sunxyw\SAuthZ\Helpers\RoleHelper;

class Enforcer extends \Casbin\Enforcer
{
    use RoleHelper;

    private static $instance = null;

    public function __construct(...$params)
    {
        parent::__construct($params);
        $this->enableAutoSave();
    }

    static public function getInstance()
    {
        if (is_null(self::$instance)) {
            self::$instance = new self();
        }

        return self::$instance;
    }
}