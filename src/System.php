<?php

/**
 * 
 */

namespace App;

/**
 * All methods of system should be defined here
 */
trait System
{

    /**
     * Create new object
     * 
     * @param string $className
     * @param array $params
     * @return mixed
     */
    public function createObject(string $className, array $params = [])
    {
        return new $className(...$params);
    }

}
