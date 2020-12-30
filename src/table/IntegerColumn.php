<?php
    declare(strict_types=1);

    namespace Stolfam\Table;

    /**
     * Class IntegerColumn
     * @package Stolfam\Table
     */
    final class IntegerColumn extends NullableIntegerColumn
    {
        /**
         * IntegerColumn constructor.
         * @param string $name
         * @param int    $value
         */
        public function __construct(string $name, int $value)
        {
            parent::__construct($name, $value);
        }

        public function getValue(): int
        {
            return parent::getValue();
        }
    }