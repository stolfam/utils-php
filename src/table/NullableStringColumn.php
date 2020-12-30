<?php
    declare(strict_types=1);

    namespace Stolfam\Table;

    /**
     * Class NullableStringColumn
     * @package Stolfam\Table
     */
    class NullableStringColumn extends Column
    {
        /**
         * NullableStringColumn constructor.
         * @param string      $name
         * @param string|null $value
         */
        public function __construct(string $name, ?string $value = null)
        {
            parent::__construct($name, $value);
        }

        public function getValue(): ?string
        {
            return parent::getValue();
        }
    }