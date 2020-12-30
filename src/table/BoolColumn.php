<?php
    declare(strict_types=1);

    namespace Stolfam\Table;

    /**
     * Class BoolColumn
     * @package Stolfam\Table
     */
    final class BoolColumn extends NullableBoolColumn
    {
        /**
         * BoolColumn constructor.
         * @param string $name
         * @param bool   $value
         */
        public function __construct(string $name, bool $value)
        {
            parent::__construct($name, $value);
        }

        public function getValue(): bool
        {
            return parent::getValue();
        }
    }