<?php
    declare(strict_types=1);

    namespace Stolfam\Table;

    /**
     * Class NullableBoolColumn
     * @package Stolfam\Table
     */
    class NullableBoolColumn extends Column
    {
        /**
         * BoolColumn constructor.
         * @param string $name
         * @param bool   $value
         */
        public function __construct(string $name, ?bool $value = null)
        {
            parent::__construct($name, $value);
        }

        public function getValue(): ?bool
        {
            return parent::getValue();
        }
    }