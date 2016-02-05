<?php

/**
 * Created by PhpStorm.
 * User: nekrasov
 * Date: 05.02.16
 * Time: 16:10
 */

namespace SuperCriteria;

abstract class AbstractCriteria
{
    abstract public function validateFormat($data);
}