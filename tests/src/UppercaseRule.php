<?php

namespace Oshomo\CsvUtils\Tests\src;


use Oshomo\CsvUtils\Contracts\ValidationRuleInterface;

class UppercaseRule implements ValidationRuleInterface
{
    /**
     * @return boolean
     */
    public function isImplicit()
    {
        return true;
    }

    /**
     * @return integer
     */
    public function parameterCount()
    {
        return 0;
    }

    /**
     * @param  mixed $value
     * @param $parameters
     * @return bool
     */
    public function passes($value, $parameters)
    {
        return strtoupper($value) === $value;
    }

    /**
     * @return string
     */
    public function message()
    {
        return "The :attribute value :value must be uppercase.";
    }

    /**
     * @param string $message
     * @param array $parameters
     * @return string
     */
    public function parameterReplacer($message, $parameters)
    {
        return $message;
    }
}
