<?php
/**
 * Created by PhpStorm.
 * User: nekrasov
 * Date: 05.02.16
 * Time: 16:11
 */

namespace SuperCriteria;


class NumericCriteria extends AbstractCriteria
{
    public function validateFormat($data)
    {
        return is_numeric($data);
    }
}