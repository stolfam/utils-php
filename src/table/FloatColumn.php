<?php
    declare(strict_types=1);

    namespace Stolfam\Table;

    /**
     * Class FloatColumn
     * @package Stolfam\Table
     */
    final class FloatColumn extends NullableFloatColumn
    {
        /**
         * FloatColumn constructor.
         * @param string $name
         * @param float  $value
         */
        public function __construct(string $name, float $value)
        {
            parent::__construct($name, $value);
        }

        public function getValue(): float
        {
            return parent::getValue();
        }
    }