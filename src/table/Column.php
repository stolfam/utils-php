<?php
    declare(strict_types=1);

    namespace Stolfam\Table;

    use Stolfam\Interfaces\IColumn;


    /**
     * Class Column
     * @package Stolfam\Env
     */
    abstract class Column implements IColumn
    {
        private string $name;

        /** @var mixed|null */
        private $value;

        /**
         * Column constructor.
         * @param string     $name
         * @param mixed|null $value
         */
        public function __construct(string $name, $value = null)
        {
            $this->name = $name;
            $this->value = $value;
        }

        public function getName(): string
        {
            return $this->name;
        }

        public function getValue()
        {
            return $this->value;
        }
    }