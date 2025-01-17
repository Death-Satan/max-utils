<?php

declare(strict_types=1);
/**
 * @link     https://github.com/topyao/max-utils
 * @homepage https://github.com/topyao
 */
namespace Max\Utils\Traits;

trait AutoFillProperties
{
    /**
     * 使用数组填充属性.
     */
    protected function fillProperties(array $properties, bool $force = false)
    {
        foreach ($properties as $key => $value) {
            if ($force || property_exists($this, $key)) {
                $this->{$key} = $value;
            }
        }
    }
}
