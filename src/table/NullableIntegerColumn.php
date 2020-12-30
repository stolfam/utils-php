<?php
    declare(strict_types=1);

    namespace Stolfam\Table;

    /**
     * Class IntegerColumn
     * @package Stolfam\Table
     */
    class NullableIntegerColumn extends Column
    {
        /**
         * IntegerColumn constructor.
         * @param string   $name
         * @param int|null $value
         */
        public function __construct(string $name, ?int $value = null)
        {
            parent::__construct($name, $value);
        }

        public function getValue(): ?int
        {
            return parent::getValue();
        }
    }