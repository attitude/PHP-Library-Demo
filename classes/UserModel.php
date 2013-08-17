<?php

use \attitude\DependencyInjection\DependencyContainer as DependencyContainer;

class UserModel extends \attitude\ORM\Model
{
    protected function get__full_name()
    {
        return $this->first_name.' '.$this->last_name;
    }
}
