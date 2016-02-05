<?php
/**
 * Created by PhpStorm.
 * User: nekrasov
 * Date: 05.02.16
 * Time: 15:56
 */

namespace SuperValidator;

use SuperCriteria\AbstractCriteria;


class SuperValidator extends AbstractValidator
{
    protected $source;
    protected $criteria;
    protected $validationResult;

    public function addSource(array $source)
    {
        $this->source = $source;

        return $this;
    }

    public function addCriteria($field, AbstractCriteria $criteria)
    {
        try {
            if (array_key_exists($field, $this->source)) {
                $this->criteria[$field] = $criteria;
            } else {
                throw new \Exception();
            }
        } catch (\Exception $e) {
            throw $e;
        }

        return $this;
    }
    public function validate()
    {
        foreach ($this->criteria as $filed => $criteria)
        {
            if (!$criteria->validateFormat($this->source[$filed])) {
                $this->validationResult[$filed] = false;
            }
        }

        return empty($this->validationResult);
    }

    public function getErrors()
    {
        return $this->validationResult;
    }
}