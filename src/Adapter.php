<?php

namespace Sunxyw\SAuthZ;

class Adapter extends \CasbinAdapter\Database\Adapter
{
    public $casbinRuleTableName = 'rules';
}