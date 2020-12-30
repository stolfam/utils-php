<?php
    declare(strict_types=1);

    namespace Stolfam\Table;

    /**
     * Class StringColumn
     * @package Stolfam\Table
     */
    final class StringColumn extends NullableStringColumn
    {
        /**
         * StringColumn constructor.
         * @param string $name
         * @param string $value
         */
        public function __construct(string $name, string $value)
        {
            parent::__construct($name, $value);
        }

        public function getValue(): string
        {
            return parent::getValue();
        }
    }