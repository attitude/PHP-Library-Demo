<?php

use \attitude\Implementations\DependencyInjection\DependencyContainer as DependencyContainer;

class UserModel extends \attitude\Abstracts\ORM\Model
{
    protected function get__full_name()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
