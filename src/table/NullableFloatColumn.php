<?php
    declare(strict_types=1);

    namespace Stolfam\Table;

    /**
     * Class NullableFloatColumn
     * @package Stolfam\Table
     */
    class NullableFloatColumn extends Column
    {
        /**
         * NullableFloatColumn constructor.
         * @param string     $name
         * @param float|null $value
         */
        public function __construct(string $name, ?float $value = null)
        {
            parent::__construct($name, $value);
        }

        public function getValue(): ?float
        {
            return parent::getValue();
        }
    }